@extends('layouts.master')

@section('title', 'Payroll History View')

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
<form method="post" action="{{route('payroll.show' , ['payroll' => $payroll])}}"> 
<div class="card">
    <div class="card-header">
        <h3>Payroll History</h3>
    </div>
<div class="card-body">    
<div class="table-responsive">
<table class="table">
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

@endsection

@section('script')
@endsection
