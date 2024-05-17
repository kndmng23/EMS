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
    <li class="breadcrumb-item active">Edit</li>
@endsection
@section('content')
<form method="post" action="{{route('schedule.update' , ['schedule' => $schedule])}}"> 
  @csrf
  @method('put')
<div class="form theme-form">
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Employee ID</label>
      <input class="form-control" id="exampleFormControlInput1" name="employee_id" value="{{$schedule->employee_id}}"  type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Date</label>
      <input class="form-control" id="exampleFormControlInput1" name="date" value="{{$schedule->date}}" type="date" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1"></label>
      <input class="form-control" id="exampleFormControlInput1" name="start_time" value="{{$schedule->start_time}}" type="time" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Benefits</label>
      <input class="form-control" id="exampleFormControlInput1" name="end_time" value="{{$schedule->end_time}}" type="time"  data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
</div>
<button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button>
</form>

@endsection

@section('script')
@endsection