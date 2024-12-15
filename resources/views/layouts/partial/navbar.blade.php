<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col text-center">
                <nav class="header__menu mobile-menu">
                    <ul class="d-flex justify-content-center list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('katalog') }}">Katalog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        @auth
                            <li><a href="{{ route('pesananku') }}">Pesananku</a></li>
                            @if (Auth::user()->role == 'admin') 
                                <li><a href="{{ route('admin') }}">Dashboard</a></li>
                            @endif
                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                        @guest
                            <li><a href="{{ route('login-page') }}">Login</a></li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->
