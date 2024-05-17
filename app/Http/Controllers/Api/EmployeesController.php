<?php

namespace App\Http\Controllers\Api;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        $employee = Employee::all();

        $data = [
            'status'=>200,
            'employee'=>$employee
        ];

        return response()->json($data,200);

    }
}
