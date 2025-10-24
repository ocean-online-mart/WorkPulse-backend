<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BreakRecord extends Model
{
    use HasFactory;

    protected $fillable = ['attendance_id', 'type', 'break_in', 'break_out', 'duration_minutes'];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

    // Method to end break and calculate duration
    public function endBreak()
    {
        $this->break_out = now();
        $this->duration_minutes = Carbon::parse($this->break_out)->diffInMinutes(Carbon::parse($this->break_in));
        $this->save();
        $this->attendance->calculateMetrics(); // Update attendance metrics
    }
}