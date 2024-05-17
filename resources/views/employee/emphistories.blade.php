@extends('layouts.master')

@section('title', 'Employment History')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')    
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Employment History</li>
@endsection
@section('content')
<div class="card">
 <div class="card-header">
    <h4>Employment History</h4>
<div class="card-body">    
<div class="table-responsive text-center">
<table class="table">
<thead>
<tr>
    <th scope="col">#</th>
    <th scope="col">Employee ID</th>
    <th scope="col">Employee Name</th>
    <th scope="col">Date Hired</th>
</tr>
</thead>
@foreach($employees as $employee)
<tbody>
    <tr>
        <td>{{$loop->iteration + ($employees->currentPage() - 1) * $employees->perPage()}}</td>
        <td>{{$employee->employee_id}}</td>
        <td>{{$employee->first_name}} {{$employee->last_name}}</td>
        <td>{{$employee->created_at}}</td>
    </tr>
@endforeach
</tbody>
</table>
<div class="center mt-4 p-2" >
                    {{$employees->links()}}
                    <style>
                    .center {
                      margin: auto;
                      width: 0%;}
                    </style>
                    </div>
</div>
</div>
</div>
</div>
<style>
    .search-container {
  display: flex;
  justify-content:right;
  margin-top: 0px;
}

.search-container input[type=text] {
  padding: 10px;
  width: 300px;
  border: 1px solid #ccc;
  border-radius: 5px 0 0 5px;
  outline: none;
}

.search-container button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: 1px solid #007bff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  outline: none;
}

.search-container button:hover {
  background-color: #0056b3;
}
</style>
@endsection

@section('script')
@endsection