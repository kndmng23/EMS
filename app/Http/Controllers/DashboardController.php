<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class DashboardController extends Controller
{
     public function dashboard(){
        $totalEmployees = Employee::count();
        return view('dashboard', compact('totalEmployees'));
    }
}
