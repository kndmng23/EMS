@extends('layouts.master')

@section('title', 'Payroll History')

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
    <li class="breadcrumb-item active">Default</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Payroll History</h3>
    </div>
<div class="card-body">    
<div class="table-responsive">
<table class="table text-center">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Employee ID</th>
<th scope="col">Pay Start Period</th>
<th scope="col">Pay End Period</th>
<th scope="col">Earning</th>    
<th scope="col">Deductions</th>
<th scope="col">Net Pay</th>
<th scope="col">Payment Method</th>
<th scope="col">Payroll Date</th>
<th scope="col">View</th>
</tr>
</thead>
@foreach($payrolls as $payroll)
<tbody>
    <tr>
        <td>{{$loop->iteration + ($payrolls->currentPage() - 1) * $payrolls->perPage()}}</td>
        <td>{{$payroll->employee_id}}</td>
        <td>{{$payroll->pay_start}}</td>
        <td>{{$payroll->pay_end}}</td>
        <td>{{$payroll->earning}}</td>
        <td>{{$payroll->deductions}}</td>
        <td>{{$payroll->net_pay}}</td>
        <td>{{$payroll->payment_method}}</td>
        <td>{{$payroll->payroll_date}}</td>
        <td>
            <a href="{{route('payroll.show', ['payroll' => $payroll])}}" class="btn">View</a>
        </td>

            <!--a href="{{route('payroll.edit', ['payroll' => $payroll])}}" class="btn btn-secondary">Edit<a>
            <form method="post" action="{{route('payroll.destroy', ['payroll' => $payroll])}}"><br>
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form>
        </td-->
    </tr>
</tbody>
@endforeach
</table>
</table>
    <div class="center mt-4 p-2" >
        {{$payrolls->links()}}
                <style>
                    .center {
                    margin: auto;
                    width: 0%;}
                </style>
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
<!--a href="{{route('payroll.create')}}" class="btn btn-primary" style="float:right">Add Employee<a-->
@endsection

@section('script')
@endsection
