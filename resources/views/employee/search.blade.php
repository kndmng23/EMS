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
<div class="card">
    <div class="card-header">
        <h4>Employee Records</h4>
        <form class="search-container" type="get" action="{{url('/search')}}">
  <input type="text" placeholder="Search..." value="{{ isset ($search) ? $search : '' }}" name="query">
  <button type="submit">Search</button>
</form>
        <div class="card-body">        
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
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->employee_no}}</td>
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
                </div>
        </div>
</div>
</div>

<style>
    .search-container {
  display: flex;
  justify-content: right;
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

