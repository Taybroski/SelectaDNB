<div class="card">
	<div class="card-header text-center">Selecta DNB</div>
	<div class="card-body minh-40">
		<ul class="list-group list-unstyled text-dark">
			<a href="{{ url('/admin/products') }}"><li class="sidebar-item mt-0"><i class="fas fa-table pr-2"></i>All Products</li></a>
			<a href="{{ url('/products/create') }}"><li class="sidebar-item"><i class="fas fa-plus-square pr-2"></i>New Product</li></a>
			<a href="#"><li class="sidebar-item"><i class="fas fa-database pr-2"></i>Orders</li></a>
			<a href="#"><li class="sidebar-item"><i class="fas fa-users pr-2"></i>Users</li></a>
			<a href="#"><li class="sidebar-item"><i class="fas fa-envelope pr-2"></i>Queries</li></a>
			<a href="#"><li class="sidebar-item"><i class="fab fa-blogger-b pr-2"></i>Blog</li></a>
		</ul>
	</div>
	<div class="card-footer text-left">
		@if (Auth::check())
			<a href="{{ route('logout') }}" 
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				<i class="fas fa-arrow-alt-circle-left pr-2"></i> Logout</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
		@endif
	</div>
</div>