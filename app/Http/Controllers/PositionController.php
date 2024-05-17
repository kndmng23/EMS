<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function index(){
        $positions = Position::all();
        return view('position.index', ['positions' => $positions]);
    }

    public function create(){
        return view('position.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'department_id' => 'required',
            'responsibilities' => 'required',
            'requirements' => 'required',
        ]);

        $newPosition = Position::create($data);
        return redirect(route('position.index'));

    }

    public function edit(Position $position){
        return view('position.edit' , ['position' => $position]);
    }

    public function update(Position $position, Request $request){
        $data = $request->validate([
            'department_id' => 'required',
            'responsibilities' => 'required',
            'requirements' => 'required',
        ]);

        $position->update($data);

        return redirect(route('position.index'))->with('success' , 'Edited Successfully');
    }

    public function destroy(Position $position){
        $position->delete();

        return redirect(route('position.index'))->with('success', 'Deleted Successfully');
    }
}