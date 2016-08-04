@extends('layouts.main')

@section('title', 'Logins')
@section('bodyClass', 'skin-red fixed sidebar-mini')
@section('login_menu', 'active')

@section('styles')
	@parent
	<!-- Add new styles here -->
	<!-- DataTables -->
	<link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/mySafebox.css')}}">

	<link href="http://codegena.com/assets/css/image-preview-for-link.css" rel="stylesheet">

@endsection

@section('content')
	<!-- Add the main page content here -->
	<div class="content-wrapper">

		<div class="content-header">
			<div id="progress-bar-container" class="hidden">
				<span class="text-muted">Decrypting data...</span>
				<div class="progress progress-sm active">
	                <div id="progress-bar" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
	        	</div>
			</div>
		</div>

		<div class="content">

			@include('layouts.alerts')

			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Logins</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="tableData" class="table table-bordered table-striped table-align-vertical">
								<thead>
								<tr>
									<th>Login</th>
									<th>Username</th>
									<th>Options</th>
								</tr>
								</thead>
								<tbody>
									@foreach( $logins as $login )
									<tr>
										<td>{{$login->name}}</td>
										<td>{{$login->username}}</td>
										<td>
											<a class="btn btn-app btn-options" data-toggle="modal" data-target="#passwordModal" onclick="updateTarget({{$login->id}}, showData)"> <i class="fa fa-eye"></i> </a>
											<a class="btn btn-app btn-options" data-toggle="modal" data-target="#passwordModal" onclick="updateTarget({{$login->id}}, updateForm)"> <i class="fa fa-edit"></i> </a>
											<a class="btn btn-app btn-options" data-toggle="modal" data-target="#deleteModal" onclick="updateModalDelete({{$login->id}}, '{{$login->name}}')"> <i class="fa fa-remove"></i> </a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="text-align:right;">
			<button class="fab" data-toggle="modal" data-target="#ModalForm" onclick="cleanForm()"> + </button>
		</div>
		@include('subviews.forms.login')
		@include('subviews.forms.login_show')
		@include('subviews.forms.delete_modal')
		@include('subviews.forms.password_modal')
	</div>
	<div id="ajax-error">

	</div>
@endsection

@section('scripts')
	@parent
	<!-- Add new scripts here -->
	<!-- DataTables -->
	<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/pass.js')}}"></script>
	<script type="text/javascript">
		$(function () {
			$("#tableData").DataTable();
		});

		function updateModalDelete( id, login ) {
			$("#delete_title")[0].innerHTML = "Delete login";
			$("#delete_content")[0].innerHTML = "Delete the login for <strong>" + login + "</strong>";
			$('#delete_link')[0].href = "{{url('/logins/delete')}}/" + id;
		}

		function updateForm( data ) {
			$("#login-form")[0].action = "{{url('/logins/update')}}" + "/" +data.id;
			$("#name")[0].value = data.name;
			$("#username")[0].value = data.username;
			$("#password")[0].value = data.password;
			$("#comment")[0].value = data.comment;

			progressBarAnimation( function(){
				$('#ModalForm').modal('show')
			});
		}

		function showData( data ) {
			$("#name_show")[0].value = data.name;
			$("#username_show")[0].value = data.username;
			$("#password_show")[0].value = data.password;
			$("#comment_show")[0].value = data.comment;

			progressBarAnimation( function(){
				$('#ModalFormShow').modal('show')
			});
		}

		function cleanForm() {
			$("#login-form")[0].action = "{{url('/logins')}}";
			$("#name")[0].value = "";
			$("#username")[0].value = "";
			$("#password")[0].value = "";
			$("#comment")[0].value = "";
		}

	</script>
@endsection
