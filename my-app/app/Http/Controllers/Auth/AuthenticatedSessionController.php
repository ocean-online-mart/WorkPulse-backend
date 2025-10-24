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
        $existing = Attendance::where('user_id', $user->id)
            ->whereNull('punch_out')
            ->whereDate('punch_in', $today)
            ->first();

        if (!$existing) {
            Attendance::create([
                'user_id' => $user->id,
                'punch_in' => now(),
                'status' => 'present',
                'late_minutes' => $this->calculateLateMinutes(now()),
                'work_mode' => 'office', 
            ]);
        }

        
        return redirect()->intended(route('dashboard', absolute: false));
    }


    protected function calculateLateMinutes($punchInTime)
    {
        $officeStart = Carbon::createFromTime(9, 0, 0);
        $punchIn = Carbon::parse($punchInTime);

        return $punchIn->gt($officeStart)
            ? $officeStart->diffInMinutes($punchIn)
            : 0;
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
