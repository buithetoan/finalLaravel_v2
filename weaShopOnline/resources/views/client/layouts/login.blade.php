 <!-- Modal HTML -->
 <div id="myModal_lg" class="modal fade">
 	<div class="modal-dialog modal-login">
 		<div class="modal-content">
 			<div class="modal-header">
 				<div class="avatar">
 					<img src="https://img.icons8.com/plasticine/100/000000/commercial-development-management.png"/ alt="Avatar">
 				</div>				
 				<h4 class="modal-title">Member Login</h4>	
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 			</div>
 			<div class="modal-body">
 				<form method="POST" action="{{ route('client.login') }}">
 					@csrf
 					<div class="form-group">
 						<input id="email" placeholder="Enter email" type="" class="form_custom form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

 						@error('email')
 						<span class="invalid-feedback" role="alert">
 							<strong>{{ $message }}</strong>
 						</span>
 						@enderror
 					</div>
 					<div class="form-group">
 						<input id="password" placeholder="Password" type="password" class="form_custom form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

 						@error('password')
 						<span class="invalid-feedback" role="alert">
 							<strong>{{ $message }}</strong>
 						</span>
 						@enderror
 					</div>        
 					<div class="form-group">
 						<button type="submit" class="btn btn-primary submit_button btn-lg btn-block login-btn">
 							{{ __('Login') }}
 						</button>
 					</div>
 				</form>
 				<div class="err-login text-center">
 					@if(Session::has('error'))
 					{{ Session::get('error') }}
 					@endif
 				</div>
 			</div>
 			<div class="modal-footer">
 				<a href="#">Forgot Password?</a>
 			</div>
 		</div>
 	</div>
 </div>     

