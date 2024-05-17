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
    <li class="breadcrumb-item active">Index</li>
@endsection
@section('content')
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Position</th>
<th scope="col">Responsibilities</th>
<th scope="col">Requirements</th>
</tr>
</thead>
@foreach($positions as $position)
<tbody>
    <tr>
        <td>{{$position->department_id}}</td>
        <td>{{$position->responsibilities}}</td>
        <td>{{$position->requirements}}</td>
        <td>
        <!--a href="{{route('position.edit', ['position' => $position])}}" class="btn btn-secondary">Edit<a>
            <form method="post" action="{{route('position.destroy', ['position' =>    $position])}}"><br>
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
<a href="{{route('position.create')}}" class="btn btn-primary" style="float:right">Add<a>
@endsection

@section('script')
@endsection


        