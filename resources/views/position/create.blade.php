@extends('layouts.master')

@section('title', 'Job Description And Position')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Job Description And Position</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
<form method="post" action="{{route('position.store')}}"> 
  @csrf
  @method('post')
<div class="form theme-form">
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Position</label>
      <input class="form-control" id="exampleFormControlInput1" name="department_id" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Responsibilities</label>
      <input class="form-control" id="exampleFormControlInput1" name="responsibilities" type="text" data-bs-original-title="" title="">
    </div>
   </div>
  </div>
 </div>
 <div class="card-body p-0">
  <div class="row">
   <div class="col">
    <div class="mb-3">
      <label class="form-label" for="exampleFormControlInput1">Requirements</label>
      <input class="form-control" id="exampleFormControlInput1" name="requirements" type="text" data-bs-original-title="" title="">
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