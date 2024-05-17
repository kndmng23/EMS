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
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
<form method="post" action="{{route('payroll.store')}}"> 
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
      <label class="form-label" for="exampleFormControlInput1">Pay Start Period</label>
      <input class="form-control" id="exampleFormControlInput1" name="pay_start"type="date" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Pay End Period</label>
      <input class="form-control" id="exampleFormControlInput1" name="pay_end" type="date" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Earning</label>
      <input class="form-control" id="exampleFormControlInput1" name="earning" type="text"  data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
</div>
<div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Deductions</label>
      <input class="form-control" id="exampleFormControlInput1" name="deductions" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Net Pay</label>
      <input class="form-control" id="exampleFormControlInput1" name="net_pay" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Payment Method</label>
      <input class="form-control" id="exampleFormControlInput1" name="payment_method" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Payroll Date</label>
      <input class="form-control" id="exampleFormControlInput1" name="payroll_date" type="date" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
<button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button>
</form>

@endsection

@section('script')
@endsection