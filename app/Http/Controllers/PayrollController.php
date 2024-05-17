<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function index(){
        $payrolls = Payroll::paginate(10);
        return view('payroll.index', ['payrolls' => $payrolls]);
    } 

    public function create(){
        return view('payroll.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'employee_id'=> 'required',
            'pay_start'=> 'required',
            'pay_end'=> 'required',
            'earning'=> 'required',
            'deductions'=> 'required',
            'net_pay'=> 'required',
            'payment_method'=> 'required',
            'payroll_date'=> 'required'
        ]);

        $newPayroll = Payroll::create($data);
        return redirect(route('payroll.index'));

    }

    public function edit(Payroll $payroll){
        return view('payroll.edit' , ['payroll' => $payroll]);
    }
    
    public function update(Payroll $payroll, Request $request){
        $data = $request->validate([
            'employee_id'=> 'required',
            'pay_start'=> 'required',
            'pay_end'=> 'required',
            'earning'=> 'required',
            'deductions'=> 'required',
            'net_pay'=> 'required',
            'payment_method'=> 'required',
            'payroll_date'=> 'required' 
        ]);

        $payroll->update($data);

        return redirect(route('payroll.index'))->with('success' , 'Edited Successfully');
    }

    public function destroy(Payroll $payroll){
        $payroll->delete();

        return redirect(route('payroll.index'))->with('success', 'Deleted Successfully');
    }

    public function show(){
        return redirect('payroll.show');
    }
}