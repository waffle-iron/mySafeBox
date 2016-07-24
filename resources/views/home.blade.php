@extends('layouts.main')

@section('title', 'Home')

@section('styles')
	@parent
	<!-- Add new styles here -->
@endsection

@section('bodyClass', 'skin-red sidebar-mini')

@section('content')
	<!-- Add the main page content here -->
	<div class="content-wrapper">
		<div class="content-header">
		</div>

		<div class="content">
			<div class="row">
				<div class="col-md-12" style="text-align: center;  margin-top:10%;" >
					<img src="{{asset('/img/logo/logo.svg')}}" width="20%" alt="https://www.iconfinder.com/Ikonografia" />
					<h1>my<strong>Safebox</strong></h1>
					<p class="lead"> Save yours passwords, secret codes, licences and more </p>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@parent
	<!-- Add new scripts here -->
@endsection
