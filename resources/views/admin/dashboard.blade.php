@extends('admin.layout.master')
@section('title','dashboard')

@section('content')

<section class="content-header">
  <h1>Dashboard</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="info-box">
	            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Users</span>
	              <span class="info-box-number">
	              	0
	              </span>
	            </div>
	        </div>
	    </div>
	</div>
</section>

@endsection()