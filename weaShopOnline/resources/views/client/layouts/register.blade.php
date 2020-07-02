 <!-- Modal HTML -->
 <div id="myModal_rg" class="modal fade bs-example-modal-lg" aria-labelledby="myLargeModalLabel">
 	<div class="modal-dialog modal-login modal-lg">
 		<div class="modal-content">
 			<div class="modal-header">
 				<div class="avatar">
 					<img src="https://img.icons8.com/plasticine/100/000000/commercial-development-management.png" alt="Avatar">
 				</div>				
 				<h4 class="modal-title">Member Register</h4>	
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 			</div>
 			<div class="modal-body">
 				<form method="POST" action="{{ route('client.register') }}">
 					@csrf
 					<div class="row">
 						<div class="col-md-6">
 							<div class="form-group">
 								<input id="name" type="text" placeholder="User Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

 								@error('name')
 								<span class="invalid-feedback" role="alert">
 									<strong>{{ $message }}</strong>
 								</span>
 								@enderror
 							</div>

 							<div class="form-group">
 								<input id="email" type="" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

 								@error('email')
 								<span class="invalid-feedback" role="alert">
 									<strong>{{ $message }}</strong>
 								</span>
 								@enderror
 							</div>

 							<div class="form-group">
 								<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

 								@error('password')
 								<span class="invalid-feedback" role="alert">
 									<strong>{{ $message }}</strong>
 								</span>
 								@enderror
 							</div>

 							<div class="form-group">
 								<input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
 								@error('password')
 								<span class="invalid-feedback" role="alert">
 									<strong>{{ $message }}</strong>
 								</span>
 								@enderror
 							</div>
 						</div>
 						<div class="col-md-6">
 							<div class="form-group">
 								<input id="full_name" type="text" placeholder="Full Name" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" autocomplete="full_name" autofocus>

 								@error('full_name')
 								<span class="invalid-feedback" role="alert">
 									<strong>{{ $message }}</strong>
 								</span>
 								@enderror
 							</div>
 							<div class="form-group">
 								<input id="address" type="text" placeholder="Address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>

 								@error('address')
 								<span class="invalid-feedback" role="alert">
 									<strong>{{ $message }}</strong>
 								</span>
 								@enderror
 							</div>
 							<div class="form-group">
 								<input id="phone_no" type="text" placeholder="Phone No" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" onKeyPress = "return isNumberKey(event)" value="{{ old('phone_no') }}" autocomplete="phone_no" autofocus>

 								@error('phone_no')
 								<span class="invalid-feedback" role="alert">
 									<strong>{{ $message }}</strong>
 								</span>
 								@enderror
 							</div>
 							<div class="form-group">
 								<label class="form-check-label"><input type="checkbox" required="required" checked="checked"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
 							</div>    
 						</div>
 					</div>
 					<div class="form-group">
 						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">
 							{{ __('Register') }}
 						</button>
 					</div>					
 				</form>
 			</div>
 		</div>
 	</div>
 </div>     
<script language='javascript'>
 function isNumberKey(evt)
 {
 	var charCode = (evt.which) ? evt.which : event.keyCode
 	if (charCode > 31 && (charCode < 48 || charCode > 57))
 		return false;
 		return true;
 }
 </script>
