@extends('layouts.main_blank')

<!-- Add a subtitle page -->
@section('title', 'Login')

@section('styles')
	@parent
	<!-- Add new styles here -->
	<style type="text/css">
		.login-box-body {
			box-shadow: 0 0 20px 0 rgba(255, 255, 255, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.login-page {
			background-color: #222d32;
		}
	</style>
@endsection

@section('bodyClass', 'hold-transition login-page')

@section('content')
<div class="login-box">
	<div class="login-logo" style="color: white;">
		my<b>Safebox</b>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>

		<form method="POST" action="{{ url('/login') }}">
			{{ csrf_field() }}

			<div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-feedback' }}">
				<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>

			<div class="form-group {{ $errors->has('password') ? 'has-error' : 'has-feedback' }}">
				<input type="password" class="form-control" placeholder="Password" name="password" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
			
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox" name="remember"> Remember Me
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-danger btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		<a href="{{ url('/password/reset') }}">I forgot my password</a><br>
		<a href="{{ url('/register') }}" class="text-center">Register a new user</a>

	</div>
	<!-- /.login-box-body -->
</div>
@endsection

@section('scripts')
	@parent
	<!-- Add new scripts here -->
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
@endsection
