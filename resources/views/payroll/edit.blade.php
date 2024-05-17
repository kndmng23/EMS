@extends('layouts.master')

@section('title', 'Payroll History')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Payroll History</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('content')
<form method="post" action="{{route('payroll.update' , ['payroll' => $payroll])}}"> 
  @csrf
  @method('put')
<div class="form theme-form">
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Employee ID</label>
      <input class="form-control" id="exampleFormControlInput1" name="employee_no" value="{{$payroll->employee_no}}"  type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Pay Date</label>
      <input class="form-control" id="exampleFormControlInput1" name="pay_date" value="{{$payroll->pay_date}}"type="date"  data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Salary</label>
      <input class="form-control" id="exampleFormControlInput1" name="salary" value="{{$payroll->salary}}" type="text"    data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Benefits</label>
      <input class="form-control" id="exampleFormControlInput1" name="benefits" type="text" value="{{$payroll->benefits}}" data-bs-original-title="" title="">
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