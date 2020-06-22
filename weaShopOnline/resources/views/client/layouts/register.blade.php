 <!-- Modal HTML -->
<div id="myModal_rg" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="https://img.icons8.com/plasticine/100/000000/commercial-development-management.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Register</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="email" placeholder="Email" required="required">	
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="confirmpassword" placeholder="Confirmpassword" required="required">	
					</div>  
					<div class="form-group">
						<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
					</div>      
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>     


