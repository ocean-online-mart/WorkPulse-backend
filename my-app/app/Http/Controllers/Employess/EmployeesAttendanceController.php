<?php

namespace App\Http\Controllers\employees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\BreakRecord;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EmployeesAttendanceController extends Controller
{
    public function calender(){
        return view('calender');
    }

    public function profilePage(){
        return view('profile-setting');
    }

    
}
