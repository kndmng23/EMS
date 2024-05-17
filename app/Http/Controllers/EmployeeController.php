<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::paginate(10);
        return view('employee.index', ['employees' => $employees]);
    }

    public function create(){
        return view('employee.create');
    }
 
    public function search(Request $request){

        $search = $_GET['query'];
        $employees = Employee::where('employee_id','like',"%$search%")
        ->orwhere('last_name','like',"%$search%")
        ->orwhere('first_name','like',"%$search%") 
        ->orwhere('email','like',"%$search%") 
        ->orwhere('contact_no','like',"%$search%") 
        ->orwhere('position','like',"%$search%") 
        ->orwhere('department','like',"%$search%") 
        ->orwhere('work_status','like',"%$search%") 
        ->orwhere('work_type','like',"%$search%")->get();

        return view('employee.search',compact('employees','search'));
    }

    public function store (Request $request){
        $data = $request->validate([
        'employee_id'=>'required',       
        'last_name'=>'required',
        'first_name'=>'required',  
        'middle_name'=>'nullable',  
        'date_of_birth'=>'required',  
        'age'=>'required',  
        'gender'=>'required',  
        'civil_status'=>'required',  
        'email'=>'required',  
        'contact_no'=>'required',  
        'address'=>'required',  
        'position'=>'required',  
        'department'=>'required',  
        'work_status'=>'required',  
        'work_type'=>'required'
        ]);

        $newEmployee = Employee::create($data);
        return redirect(route('employee.index'));
        
    }

    public function edit(Employee $employee){
        return view('employee.edit' , ['employee' => $employee]);
    }

    public function show(Employee $employee){
        return view('employee.show' , ['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request){
        $data = $request->validate([
        'employee_id'=>'required',        
        'last_name'=>'required',
        'first_name'=>'required',  
        'middle_name'=>'nullable',  
        'date_of_birth'=>'required',  
        'age'=>'required',  
        'gender'=>'required',  
        'civil_status'=>'required',  
        'email'=>'required',  
        'contact_no'=>'required',  
        'address'=>'required',  
        'position'=>'required',  
        'department'=>'required',  
        'work_status'=>'required',  
        'work_type'=>'required'
        ]);

        $employee->update($data);

        return redirect(route('employee.index'))->with('success' , 'Edited Successfully');
    }

    public function destroy(Employee $employee){
        $employee->delete();

        return redirect(route('employee.index'))->with('success', 'Deleted Successfully');
    }

    public function emphistories(){
        
         $employees = Employee::paginate(10);
        return view('employee.emphistories', ['employees' => $employees]);
    }
}