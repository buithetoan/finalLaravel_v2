<nav class="topbar">
	<!-- Search Form -->
	<form class="search_form">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search">
			<div class="input-group-append" style="margin-left: 8px;">
				<button class="btn bg-color-green" type="button">Search</button>
			</div>
		</div>
	</form>
	<!-- Admin Icon -->
	<div class="admin_profile">
		@if(Route::has('login'))
		<a class="nav-link dropdown-toggle" href="#">{{ Auth::user()->name }}</a>
		<div class="logout_button">
			<a class="dropdown-item" href="{{ route('logout') }}"
			onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
			{{ __('Logout') }}
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
	</div>
	@endif
</div>
</nav>