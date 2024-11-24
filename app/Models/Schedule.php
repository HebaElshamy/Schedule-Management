<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\TimeSlot;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'subject_id', 'day', 'time_slot_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class);
    }



}
