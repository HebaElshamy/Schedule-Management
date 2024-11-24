<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with(['teacher', 'subject', 'timeSlot'])->get();

        return response()->json($schedules);
    }

    public function saveBulk(Request $request)
    {
        $validated = $request->validate([
            'schedules' => 'required|array',
            'schedules.*.teacher_id' => 'required|exists:teachers,id',
            'schedules.*.subject_id' => 'required|exists:subjects,id',
            'schedules.*.day' => 'required|string',
            'schedules.*.time_slot_id' => 'required|exists:time_slots,id',
        ]);

        // حفظ كل البيانات
        foreach ($validated['schedules'] as $schedule) {
            \App\Models\Schedule::updateOrCreate(
                [
                    'time_slot_id' => $schedule['time_slot_id'],
                    'day' => $schedule['day'],
                ],
                [
                    'teacher_id' => $schedule['teacher_id'],
                    'subject_id' => $schedule['subject_id'],
                ]
            );
        }

        return response()->json(['message' => 'Schedules saved successfully!'], 200);
    }

    public function remove(Request $request)
{
    $data = $request->validate([
        'teacher_id' => 'required|integer',
        'day' => 'required|string',
        'time_slot_id' => 'required|integer',
    ]);

    $schedule = Schedule::where('teacher_id', $data['teacher_id'])
                        ->where('day', $data['day'])
                        ->where('time_slot_id', $data['time_slot_id'])
                        ->first();

    if ($schedule) {
        $schedule->delete();
        return response()->json(['message' => 'Schedule removed successfully'], 200);
    } else {
        return response()->json(['message' => 'Schedule not found'], 404);
    }
}



}

