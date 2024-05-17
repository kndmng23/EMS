@extends('layouts.master')

@section('title', 'Default')

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
@endsection

@section('content')
<div class="card">
<div class="card-header">
 <h4>Dashboard</h4>
 </div>
<div class="card-body">
<div class="container-fluid">
	<div class="row widget-grid">
	  <div class="col-md-12 box-col-6">
		<div class="card profile-box">
		  <div class="card-body">
			<div class="media">
			  <div class="media-body"> 
				<div class="greeting-user">
				  <h4 class="f-w-600">Welcome, Admin!</h4>
				</div>
			  </div>			  
			</div>
		  <div class="cartoon"><img class="img-fluid" src="{{ asset('assets/images/dashboard/cartoon.svg') }}" alt="vector women with leptop"></div>
		  <div class="whatsnew-btn"><a class="btn btn-outline-white">Whats New !</a></div>
		</div>
	  </div>
	</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4">
	<a href="{{route ('employee.index')}}"></a>
			  <div class="card widget-1">
				<div class="card-body"> 
				  <div class="widget-content">
					<div class="widget-round primary">
					  <div class="bg-round">
						<svg class="svg-fill">
						  <use href="{{ asset('assets/svg/icon-sprite.svg#customers') }}"> </use>
						</svg>
						<svg class="half-circle svg-fill">
						  <use href="{{ asset('assets/svg/icon-sprite.svg#halfcircle') }}"></use>
						</svg>
					  </div>
					</div>
						<div> 
					  <h4>{{$totalEmployees}}</h4>
					  <span class="f-light">Total No. of Employees</span>
					</div>
				  </div>
</div>
</div>
</div>
</div>

</div>
@endsection

@section('script')
@endsection
