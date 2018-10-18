<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <div class="container">
        <nav class="border-box my-md-0 p-0">
            <ul class="row list-unstyled m-0 nav-fill pl-5 pr-5">
                <a class="p-2 text-dark" href="{{ url('/') }}"><li class="list-item">Home</li></a>
                <a class="p-2 text-dark" href="{{ url('/products') }}"><li class="list-item">Shop</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Live Stream</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Blog</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">About</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Sale</li></a>
                <a class="p-2 text-dark" href="{{ url('/products/create') }}"><li class="list-item">Upload</li></a>
                {{-- <li class="list-item">
                    <a href="https://twitter.com/sbootstrap">
                    <i class="fab fa-twitter"></i>
                    </a>
                </li> --}}

                @if (!Auth::check())
                    <a class="p-2 text-dark" href="{{ route('login') }}"><li class="list-item">Account</li></a>
                @endif
                @if (Auth::check() && Auth::user()->role != 'customer')
                    <div class="dropdown">
                        <div class="row">
                            <a class="dropdown-toggle p-2 text-dark" data-toggle="dropdown" href="#"><li class="list-item">Account <b class="caret"></b></li></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/admin') }}">Admin</a></li>
                                <li><a href="{{ url('/home') }}">Home</a></li>
                            </ul>
                        </div>
                    </div>
                @elseif (Auth::check() && Auth::user()->role == 'customer')
                    <a class="p-2 text-dark" href="{{ url('/home') }}"><li class="list-item">Account</li></a>
                @endif

                @if (Auth::check())
                    <a class="p-2 text-dark" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><li class="list-item">Logout</li></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            </ul>
        </nav>
    </div>
</div>