<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4 mb-3 bg-white border-bottom box-shadow">
	<div class="container">
		<nav class="border-box my-md-0 p-0">
			<ul class="row list-unstyled m-0 nav-fill pl-5 pr-5">
				
				<a class="p-2 text-dark" href="{{ url('/') }}"><li class="list-item">Home</li></a>
				<a class="p-2 text-dark" href="{{ url('/products') }}"><li class="list-item">Shop</li></a>
				<a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Live</li></a>
				<a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Blog</li></a>
				<a class="p-2 text-dark" href="{{ url('/about') }}"><li class="list-item">About</li></a>
				<a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Sale</li></a>
				{{-- <li class="list-item">
					<a href="https://twitter.com/sbootstrap">
					<i class="fab fa-twitter"></i>
					</a>
				</li> --}}

				@if (!Auth::check())
					<a class="p-2 text-dark" href="{{ route('login') }}"><li class="list-item">Log In</li></a>
				@endif

				@if (Auth::check() && Auth::user()->role != 'customer')

					<div class="dropdown p-2">
						<a class="text-dark" data-toggle="dropdown" href="#">
							<li class="list-item">Account <i class="fas fa-caret-down pl-1 p-0"></i></li>
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item"><a href="{{ url('/admin') }}">Admin</a></li>
							<li class="dropdown-item"><a href="{{ url('/home') }}">Home</a></li>
							<li class="dropdown-item"><a href="{{ url('/products/create') }}">Upload</a></li>
							<li class="dropdown-item font-weight-bold"><a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">Logout
									<i class="fas fa-sign-out-alt pl-2"></i></a>
							</li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</ul>
					</div>

				@elseif (Auth::check() && Auth::user()->role == 'customer')
					
					<div class="dropdown p-2">
						<a class="text-dark" data-toggle="dropdown" href="#">
							<li class="list-item">Account <i class="fas fa-caret-down pl-1 p-0"></i></li>
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item"><a href="{{ url('/home') }}">Home</a></li>
							<li class="dropdown-item font-weight-bold"><a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">Logout
									<i class="fas fa-sign-out-alt pl-2"></i></a>
							</li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</ul>
					</div>

				@endif
			</ul>
		</nav>
	</div>
</div>