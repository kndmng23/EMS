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
    <li class="breadcrumb-item active">Employment History</li>
@endsection
@section('content')
<div class="card">
 <div class="card-header">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
    <th scope="col">Employee ID</th>
    <th scope="col">Employee Name</th>
    <th scope="col">Date Hired</th>
</tr>
</thead>
@foreach($emphistories as $emphistory)
<tbody>
    <tr>
        <td>{{$emphistory->employee_id}}</td>
        <td>{{$emphistory->employee_id}}</td>
        <td>{{$emphistory->employee_id}}</td>
        <!--td>
            <a href="{{route('emphistory.edit', ['emphistory' => $emphistory])}}" class="btn btn-secondary">Edit<a>
            <form method="post" action="{{route('emphistory.destroy', ['emphistory' => $emphistory])}}"><br>
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form>
        </td-->
    </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
<a href="{{route('emphistory.create')}}" class="btn btn-primary" style="float:right">Add<a>
@endsection

@section('script')
@endsection