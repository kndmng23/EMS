@extends('layouts.master')

@section('title', 'Employee Profiles')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Employee Profiles</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
<form method="post" action="{{route('employee.store')}}">
  @csrf
  @method('post')
<div class="row g-3">
  <div class="col-md-3">
    <label class="form-label" for="validationCustom02">Employee No.</label>
    <input class="form-control" id="validationCustom02" name="employee_id" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-3">
    <label class="form-label" for="validationCustom02">Last Name:</label>
    <input class="form-control" id="validationCustom02" name="last_name" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-3">
    <label class="form-label" for="validationCustom02">First Name:</label>
    <input class="form-control" id="validationCustom02" name="first_name" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-3">
    <label class="form-label" for="validationCustom02">Middle Name:</label>
    <input class="form-control" id="validationCustom02" name="middle_name" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
</div>

<div class="row g-4">
  <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Date of Birth:</label>
    <input class="form-control" id="validationCustom02" name="date_of_birth" type="date" value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-1">
    <label class="form-label" for="validationCustom02">Age:</label>
    <input class="form-control" id="validationCustom02" name="age" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-1">
    <label class="form-label" for="validationCustom02">Gender:</label>
    <input class="form-control" id="validationCustom02" name="gender" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
   <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Civil Status:</label>
    <input class="form-control" id="validationCustom02" name="civil_status" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
</div>

<div class="row g-2">
  <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Email:</label>
    <input class="form-control" id="validationCustom02" name="email" type="email" value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Contact No.:</label>
    <input class="form-control" id="validationCustom02" name="contact_no" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
</div>

<div class="col-md-9">
    <label class="form-label" for="validationCustom02">Address:</label>
    <input class="form-control" id="validationCustom02" name="address" type="text" value="" required="" data-bs-original-title="" title="">
</div>

<div class="row g-2">
  <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Position:</label>
    <input class="form-control" id="validationCustom02" name="position" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Department:</label>
    <input class="form-control" id="validationCustom02" name="department" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
</div>

<div class="row g-2">
  <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Work Status:</label>
    <input class="form-control" id="validationCustom02" name="work_status" type="text " value="" required="" data-bs-original-title="" title="">
  </div>
  <div class="col-md-2">
    <label class="form-label" for="validationCustom02">Work Type:</label>
    <input class="form-control" id="validationCustom02" name="work_type" type="text" value="" required="" data-bs-original-title="" title="">
  </div>
</div>
<button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button>

</div> 

</div>


</form>


@endsection 

@section('script')
@endsection

