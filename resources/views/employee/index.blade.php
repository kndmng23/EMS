@extends('layouts.master')

@section('title', 'Employee Records')

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
    <li class="breadcrumb-item active">Employee Records</li>
@endsection
@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4>Employee Records</h4>
        <form class="search-container" type="get" action="{{url('/search')}}">
  <input type="text" placeholder="Search..." name="query">
  <button type="submit">Search</button>
</form>
          <a href="http://127.0.0.1:8000/api/employee" class="btn btn-primary">Fetch Employee Records<a>       

        <div class="card-body"> 
          @if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
                <div class="table-responsive text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact No.</th>   
                                <th scope="col">Position</th>
                                <th scope="col">Department</th>
                                <th scope="col">Work Status</th>
                                <th scope="col">Work Type</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                      @foreach($employees as $employee)
                        <tbody>
                            <tr>
                                <td>{{$loop->iteration + ($employees->currentPage() - 1) * $employees->perPage()}}</td>
                                <td>{{$employee->employee_id}}</td>
                                <td>{{$employee->first_name}} {{$employee->last_name}}</td>                           
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->contact_no}}</td>
                                <td>{{$employee->position}}</td>
                                <td>{{$employee->department}}</td>
                                <td>{{$employee->work_status}}</td>       
                                <td>{{$employee->work_type}}</td> 
                                <td> 
                                <a href="{{route('employee.show', ['employee' => $employee])}}"class="btn btn-primary btn-xs fa fa-eye"><a>         
                                 <!--form method="post" action="{{route('employee.destroy', ['employee' => $employee])}}"><br>
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete"/>
                                </form-->
                                </td> 
                            </tr>
                        </tbody>
                      @endforeach
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

