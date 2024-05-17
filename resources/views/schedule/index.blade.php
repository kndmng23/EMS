@extends('layouts.master')

@section('title', 'Time And Scheduling Record')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Time And Scheduling Record</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Index</li>
@endsection
@section('content')
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Employee ID</th>
<th scope="col">Date</th>
<th scope="col">In Time</th>
<th scope="col">Out Time</th>
<th scope="col">Attendance Status</th>
<th scope="col">Total Hours</th>
</tr>
</thead>
@foreach($schedules as $schedule)
<tbody>
    <tr>
        <td>{{$schedule->employee_id}}</td>
        <td>{{$schedule->attendance_date}}</td>
        <td>{{$schedule->in_time}}</td>
        <td>{{$schedule->out_time}}</td>
        <td>{{$schedule->attendance_status}}</td>
        <td>{{$schedule->total_hours}}</td>
        <td>
            <!--a href="{{route('schedule.edit', ['schedule' => $schedule])}}" class="btn btn-secondary">Edit<a>
            <form method="post" action="{{route('schedule.destroy', ['schedule' => $schedule])}}"><br>
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
<!--a href="{{route('schedule.create')}}" class="btn btn-primary" style="float:right">Add<a-->

@endsection

@section('script')
@endsection