<!-- Password Modal -->
<div class="modal modal-default" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
				<h4 class="modal-title">Enter your password to decryt your data</h4>
			</div>
			<div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" id="check_password" class="form-control" placeholder="Password" required>
                    <input type="hidden" id="id">
                    <input type="hidden" id="url" value="{{url('/logins/show')}}">
                </div>
                <br/>
                <p class="text-aqua"> Your data is encrypted using your mySafebox password so if you forget it your data will be lost </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
				<a href="#" id="check_password_link" class="btn btn-primary" data-dismiss="modal" onclick="checkPassword( updateForm )"> Confirm </a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- End password Modal -->
