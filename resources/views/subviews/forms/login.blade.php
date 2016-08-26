<form id="login-form" action="{{url('/logins')}}" method="post">
	<div class="modal" id="ModalForm">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add Login</h4>
				</div>
				<div class="modal-body">
					<h4>Enter your data</h4>
					{{ csrf_field() }}
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-circle"></i></span>
						<input type="text" name="name" id="name" class="form-control" placeholder="Login for ..." required>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
						<span class="input-group-addon"><a href="#" id="btn-pass-show" class="text-muted showpass" onclick="showpass('')"><i class="fa fa-eye"></i></a></span>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-sticky-note"></i></span>
						<textarea name="comment" id="comment" class="form-control" rows="3" placeholder="Notes ..."></textarea>
					</div>
					<br/>
					<h4>Enter your password to encryt your data</h4>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input type="password" name="account_password" id="account_password" class="form-control" placeholder="Password" required>
					</div>
					<p class="text-aqua"> Your data is encrypted using your mySafebox password so if you forget it your data will be lost </p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
</form>
