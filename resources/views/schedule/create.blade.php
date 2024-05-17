@extends('layouts.master')

@section('title', 'Time And Scheduling Record')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Time And Scheduling Record</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
<form method="post" action="{{route('schedule.store')}}"> 
  @csrf
  @method('post')
<div class="form theme-form">
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Employee ID</label>
      <input class="form-control" id="exampleFormControlInput1" name="employee_id" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Date</label>
      <input class="form-control" id="exampleFormControlInput1" name="attendance_date" type="date" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">In Time</label>
      <input class="form-control" id="exampleFormControlInput1" name="in_time" type="time" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Out Time</label>
      <input class="form-control" id="exampleFormControlInput1" name="out_time" type="time"  data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
</div>
<div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Attendance Status</label>
      <input class="form-control" id="exampleFormControlInput1" name="attendance_status" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Total Hours</label>
      <input class="form-control" id="exampleFormControlInput1" name="total_hours" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
<button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button>
</form>

@endsection

@section('script')
@endsection