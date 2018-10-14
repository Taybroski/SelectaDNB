<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <div class="container">
        <nav class="border-box my-md-0 p-0">
            <ul class="row list-unstyled m-0 nav-fill">
                <a class="p-2 text-dark" href="{{ url('/') }}"><li class="list-item">Home</li></a>
                <a class="p-2 text-dark" href="{{ url('/products') }}"><li class="list-item">Shop</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Live Stream</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Blog</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">About</li></a>
                <a class="p-2 text-dark" href="{{ url('#') }}"><li class="list-item">Sale</li></a>
                @guest
                    <a class="p-2 text-dark" href="{{ route('login') }}"><li class="list-item">Account</li></a>
                @else
                    <a class="p-2 text-dark" href="{{ url('/home') }}"><li class="list-item">Account</li></a>
                    <a class="p-2 text-dark" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><li class="list-item">Logout</li></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
        </nav>
    </div>
</div>