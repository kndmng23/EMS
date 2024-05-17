<?php

namespace App\Http\Controllers\Api;
use App\Models\Employee;
use App\Models\User;
use App\Notifications\EmployeeNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

use function Ramsey\Uuid\v1;

class EmployeeController extends Controller
{
    public function index(){
     
        $response = Http::get('https://ias.workfoliohumanresource.com/employee_info_api');

        $employees=json_decode($response->body());
        foreach($employees as $e)
        {
        $user = User::all();
        $employee = new Employee();
            $employee->employee_id=$e->employee_id;
            $employee->last_name=$e->last_name;
            $employee->first_name=$e->first_name;
            $employee->middle_name=$e->middle_name;
            $employee->date_of_birth=$e->date_of_birth;
            $employee->age=$e->age;
            $employee->gender=$e->gender;
            $employee->email=$e->email;
            $employee->contact_no=$e->contact_no;
            $employee->address=$e->address;
            $employee->department=$e->department;
            $employee->civil_status=$e->civil_status;
            $employee->work_status=$e->work_status;
            $employee->work_type=$e->work_type;
            $employee->position=$e->position;
            $employee->created_at=$e->created_at;
            $employee->save();
            
            Notification::send($user, new EmployeeNotification($e->employee_id));

        }
        return redirect()->back()->with('message','Data fetched from external api saved to database');
        
    }
    
}