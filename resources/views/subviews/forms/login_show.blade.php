
<div class="modal" id="ModalFormShow">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-circle"></i></span>
                    <input type="text" id="name_show" class="form-control" placeholder="Login for ..." disabled>
                </div>
                <br>

				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" id="username_show" class="form-control" placeholder="Username" disabled>
				</div>
				<br>

				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" id="password_show" class="form-control" placeholder="Password" disabled>
					<span class="input-group-addon"><a href="#" id="btn-pass-show_show" class="text-muted showpass" onclick="showpass('_show')"><i class="fa fa-eye"></i></a></span>
				</div>
				<br>

				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-sticky-note"></i></span>
					<textarea id="comment_show" class="form-control" rows="3" placeholder="Notes ..." disabled></textarea>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
