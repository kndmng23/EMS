<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::all();
        return view('schedule.index', ['schedules' => $schedules]);
    }

    public function create(){
        return view('schedule.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'employee_id' => 'required',
            'attendance_date' => 'required',
            'in_time' => 'required',
            'out_time' => 'required',
            'attendance_status' => 'required', 
            'total_hours' => 'required' 
        ]);

        $newSchedule = Schedule::create($data);
        return redirect(route('schedule.index'));
    }

    public function edit(Schedule $schedule){
        return view('schedule.edit', ['schedule' => $schedule]);
    }

    public function update(Schedule $schedule, Request $request){
        $data = $request->validate([
            'employee_id' => 'required',
            'attendance_date' => 'required',
            'in_time' => 'required',
            'out_time' => 'required',
            'attendance_status' => 'required', 
            'total_hours' => 'required' 
        ]);

        $schedule->update($data);

        return redirect(route('schedule.index'))->with('success', 'Edited Successfully');
    }

    public function destroy(Schedule $schedule){
        $schedule->delete();

        return redirect(route('schedule.index'))->with('success', 'Deleted Successfully');
    }
}   

