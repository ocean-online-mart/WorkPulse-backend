<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Attendance;
use Carbon\Carbon;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */ 
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();
        $today = Carbon::today();
        $punchIn = Carbon::now();
        $userid = $user->id;
       
        $lateHours = $this->calculateLateHours($punchIn);
       
        $existing = Attendance::where('user_id', $user->id)
            ->whereNull('punch_out')
            ->whereDate('punch_in', $today)
            ->first();

        if (!$existing) {
            Attendance::create([
                'user_id' => $user->id,
                'punch_in' => $punchIn,
                'status' => 'present',
                'late_hours' => $lateHours,
                'work_mode' => 'office',
                'date' => $today
            ]);
        }

        
      return redirect()->intended(route('dashboard', absolute: false))
        ->with('punch_in', $punchIn->format('h:i A'));
    
    }


    protected function calculateLateHours(Carbon $punchIn): float
    {
        $expectedPunchIn = Carbon::today()->setTime(9, 0); // 9:00 AM
        $gracePeriodEnd = Carbon::today()->setTime(9, 15); // 9:15 AM

        
        if ($punchIn->greaterThan($gracePeriodEnd)) {
            return $punchIn->diffInHours($expectedPunchIn, true);
        }

        return 0.0;
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
