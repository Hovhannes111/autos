<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/')}}">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="home"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item" id="about"><a href="{{url('/about')}}" class="nav-link">About</a></li>
                <li class="nav-item" id="services"><a href="{{url('/services')}}" class="nav-link">Services</a></li>
                <li class="nav-item" id="pricing"><a href="{{url('/pricing')}}" class="nav-link">Pricing</a></li>
                <li class="nav-item" id="cars"><a href="{{url('/cars')}}" class="nav-link">Cars</a></li>
                <li class="nav-item" id="blog"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item" id="contact"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                @auth
                    <li class="nav-item" id="myCabinet"><a href="{{url('/my_cabinet')}}" class="nav-link">My Cabinet</a></li>

                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

            </ul>
        </div>
    </div>
</nav>
