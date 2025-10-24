<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'punch_in', 'punch_out', 'status', 'late_minutes', 'overtime_minutes',
        'production_minutes', 'work_mode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function breaks()
    {
        return $this->hasMany(BreakRecord::class, 'attendance_id');
    }

    public function calculateMetrics()
    {
        $officeStart = Carbon::createFromTime(9, 0, 0);
        $officeEnd = Carbon::createFromTime(18, 0, 0); // 6pm

        // Late
        $punchInTime = Carbon::parse($this->punch_in)->time();
        $this->late_minutes = $punchInTime->gt($officeStart) ? $punchInTime->diffInMinutes($officeStart) : 0;

        // Overtime
        $this->overtime_minutes = 0;
        if ($this->punch_out) {
            $punchOutTime = Carbon::parse($this->punch_out)->time();
            $this->overtime_minutes = $punchOutTime->gt($officeEnd) ? $punchOutTime->diffInMinutes($officeEnd) : 0;
        }

        // Production hours
        $totalWorked = $this->punch_out
            ? Carbon::parse($this->punch_out)->diffInMinutes(Carbon::parse($this->punch_in))
            : 0;
        $totalBreaks = $this->breaks()->sum('duration_minutes');
        $this->production_minutes = max(0, $totalWorked - $totalBreaks);

        // Status
        $this->status = $this->punch_in && $this->punch_out ? 'present' : 'absent';

        $this->save();
    }
}