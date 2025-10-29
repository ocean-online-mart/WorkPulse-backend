<?php
namespace App\Http\Controllers\Employess;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\BreakRecord;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{    
    public function calender(){
        return view('calender');
    }

    public function profilePage(){
        return view('profile-setting');
    }

   public function punchOut(Request $request)
    {
       $userId = Auth::id();
        $punchOut = Carbon::now();
        $today = Carbon::today();

        // Find today's open attendance record
        $attendance = Attendance::where('user_id', $userId)
            ->whereDate('punch_in', $today)
            ->whereNull('punch_out')
            ->first();

        if ($attendance) {
            $expectedPunchOut = Carbon::today()->setTime(18, 0); // 6:00 PM IST
            $earlyLeaveHours = 0.0;
            $overtimeHours = 0.0;

            if ($punchOut->lessThan($expectedPunchOut)) {
                $earlyLeaveHours = $expectedPunchOut->diffInHours($punchOut, true);
            } elseif ($punchOut->greaterThan($expectedPunchOut)) {
                $overtimeHours = $punchOut->diffInHours($expectedPunchOut, true);
            }

            // Update attendance record
            $attendance->update([
                'punch_out' => $punchOut,
                'production_minutes' => $earlyLeaveHours, 
                'overtime_hours' => $overtimeHours
            ]);

            \Log::info('Punch-out successful', [
                'user_id' => $userId,
                'punch_out' => $punchOut->toDateTimeString(),
                'early_leave_hours' => $earlyLeaveHours,
                'overtime_hours' => $overtimeHours
            ]);
        } else {
            \Log::info('No open punch-in record found for user ' . $userId . ' on ' . $today->toDateString());
        }

        // Log the user out
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function getAttendanceSummary(): JsonResponse
    {
        $userId = Auth::id();
        $today = Carbon::today();

        $attendance = Attendance::where('user_id', $userId)
            ->whereDate('punch_in', $today)
            ->first();

        if (!$attendance) {
            return response()->json(['message' => 'No attendance record for today'], 404); 
        }

        return response()->json([
            'punch_in' => $attendance->punch_in ? $attendance->punch_in->format('H:i') : 'N/A',
            'punch_out' => $attendance->punch_out ? $attendance->punch_out->format('H:i') : 'N/A',
            'late_hours' => number_format($attendance->late_hours, 2),
            'early_leave_hours' => number_format($attendance->production_minutes, 2),
            'overtime_hours' => number_format($attendance->overtime_hours, 2),
            'status' => $attendance->status,
            'work_mode' => $attendance->work_mode,
            'is_late' => $attendance->late_hours > 0 ? 'Yes' : 'No',
            'is_early_leave' => $attendance->production_minutes > 0 ? 'Yes' : 'No'
        ]);
    }

   
}