@extends('layouts.master')

@section('title', 'Employee Profiles')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  
@endsection

@section('breadcrumb-items')

    <li class="breadcrumb-item">Employee</li>
    <li class="breadcrumb-item active">Profile</li>
@endsection
@section('content')
<div class="card">
 <div class="card-header">
<h4>Employee {{$employee->id}}'s Profile</h4>
</div>

<div class="card-body">
<div style="font-size:18px">Avatar</div>
<br>

<style>
.dot {
  height: 125px;
  width: 125px;
  background-color: #bbb;
  border-radius: 100%;
  display: inline-block;
}
</style>

<div style="text-align:left">
  <span class="dot"></span>
</div>
<br>

<div style="font-size:18px">Profile</div>
<br>

<div class="grid row gx-6" >
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Last Name</label>
      <input class="form-control" id="validationCustom02" name="last_name" type="text" value="{{$employee->last_name}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">First Name</label>
      <input class="form-control" id="validationCustom02" name="first_name" type="text" value="{{$employee->first_name}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>  
</div>
<br>

<div class="grid row gx-6">
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Middle Name</label>
      <input class="form-control" id="validationCustom02" name="middle_name" type="text" value="{{$employee->middle_name}}"  data-bs-original-title="" title="" ReadOnly>
    </div>
  </div>
<br>
<hr>

<!--========================================================== CONTACT INFORMATION ===========================================================================-->
<div style="font-size:18px">Contact Information</div><br>
  <div class="grid row gx-6">
    <div class="col-md-4">
      <label class="form-label" for="validationCustom02">Email</label>
        <input class="form-control" id="validationCustom02" name="email" type="email" value="{{$employee->email}}" required="" data-bs-original-title="" title="" ReadOnly>
    </div>
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Contact No.</label>
      <input class="form-control" id="validationCustom02" name="contact_no" type="text" value="{{$employee->contact_no}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
</div>
<br>
<hr>

<!--========================================================== ADDITIONAL INFORMATION ===========================================================================-->

<div style="font-size:18px">Additional Information</div><br>
  <div class="grid row gx-6">
    <div class="col-md-8">
      <label class="form-label" for="validationCustom02">Address</label>
        <input class="form-control" id="validationCustom02" name="address" type="text" value="{{$employee->address}}" required="" data-bs-original-title="" title="" ReadOnly>
    </div>
</div>
<br>
<div class="grid row gx-6">
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Date of Birth</label>
      <input class="form-control" id="validationCustom02" name="date_of_birth" type="date" value="{{$employee->date_of_birth}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Age</label>
      <input class="form-control" id="validationCustom02" name="age" type="text" value="{{$employee->age}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
</div>
<br>

<div class="grid row gx-6">
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Sex</label>
      <input class="form-control" id="validationCustom02" name="gender" type="text"value="{{$employee->gender}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Civil Status</label>
      <input class="form-control" id="validationCustom02" name="civil_status" type="text" value="{{$employee->civil_status}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
</div>
<br>
  
<div class="grid row gx-6">
    <div class="col-md-4">
      <label class="form-label" for="validationCustom02">Position</label>
        <input class="form-control" id="validationCustom02" name="position" type="text" value="{{$employee->position}}"" required="" data-bs-original-title="" title="" ReadOnly>
    </div>
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Department</label>
      <input class="form-control" id="validationCustom02" name="department" type="text" value="{{$employee->department}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
</div>
<br>

<div class="grid row gx-6">
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Work Status</label>
      <input class="form-control" id="validationCustom02" name="work_status" type="text " value="{{$employee->work_status}}" required="" data-bs-original-title="" title="" ReadOnly>
    </div>
  <div class="col-md-4">
    <label class="form-label" for="validationCustom02">Work Type</label>
    <input class="form-control" id="validationCustom02" name="work_type" type="text" value="{{$employee->work_type}}" required="" data-bs-original-title="" title="" ReadOnly>
  </div>
</div>
<!--button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button-->
</div> 
</div>
</form>
</div>
<br>
@endsection

@section('script')
@endsection