<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\BreakRecord;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
   public function punchOut(Request $request)
    {
        $attendance = Auth::user()->todaysAttendance();

        if ($attendance) {
            // Check for open breaks
            if ($attendance->breaks()->whereNull('break_out')->exists()) {
                return redirect()->back()->with('error', 'End all breaks before punching out.');
            }
            $attendance->punch_out = now();
            $attendance->calculateMetrics();
            return redirect()->back()->with('success', 'Punched out!');
        }

        return redirect()->back()->with('error', 'No active punch-in found.');
    }
}