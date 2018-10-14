<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <div class="container align-middle">
        <div class="row">
            <h5 class="my-0 mr-md-auto font-weight-normal">SelectaDNB</h5>
            <nav class="my-2 my-md-0 mr-md-3">
            @guest
                <a class="p-2 text-dark" href="{{ url('/') }}">Home</a>
                <a class="p-2 text-dark" href="{{ route('login') }}">Login</a>
                <a class="p-2 text-dark" href="{{ route('register') }}">Register</a>
            @else

            @endguest
            </nav>
            <a class="btn btn-outline-primary" href="#">Sign up</a>
        </div>
    </div>
</div>

    @guest
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</nav>