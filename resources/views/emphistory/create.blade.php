@extends('layouts.master')

@section('title', 'Employment History')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Employment History</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<form method="post" action="{{route('emphistory.store')}}">
  @csrf
  @method('post')
<form class="needs-validation" novalidate="">
  <div class="row g-3">
   <div class="col-md-4">
    <label class="form-label" for="validationCustom01">Employee ID</label>
    <input class="form-control" id="validationCustom01" name="employee_no" type="text"  required="" data-bs-original-title="" title="">
   </div>
   <div class="col-md-4">
    <label class="form-label" for="validationCustom03">Date Started</label>
    <input class="form-control" id="validationCustom03" name="start_date" type="date"  required="" data-bs-original-title="" title="">
   </div>
   <div class="col-md-4">
    <label class="form-label" for="validationCustom04">Date Ends</label>
    <input class="form-control" id="validationCustom04" name="end_date" type="date"  required="" data-bs-original-title="" title="">
   </div>
</div>
 <div class="mb-3">
  <div class="form-check">
   <div class="invalid-feedback">You must agree before submitting.</div>
  </div>
 </div>
 <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button>
</form>
</form>
@endsection

@section('script')
@endsection