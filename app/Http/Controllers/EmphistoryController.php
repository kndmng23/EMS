<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Emphistory;

class EmphistoryController extends Controller
{
    public function index(){
        $emphistories = Emphistory::all();
        return view('emphistory.index',['emphistories' => $emphistories]);
    }

    public function create(){
        return view('emphistory.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'employee_id' => 'required',
            'job_title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $newEmphistory = Emphistory::create($data);
        return redirect(route('emphistory.index'));
    }

    public function edit(Emphistory $emphistory){
        return view('emphistory.edit' , ['emphistory' => $emphistory]);
    }

    public function update(Emphistory $emphistory, Request $request){
        $data = $request->validate([
            'employee_id' => 'required',
            'job_title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $emphistory->update($data);

        return redirect(route('emphistory.index'))->with('success' , 'Edited Successfully'); 
    }

    public function destroy(Emphistory $emphistory){
        $emphistory->delete();

        return redirect(route('emphistory.index'))->with('success' , 'Delete Successfully'); 
    }
}