   @extends('layouts.app')
   <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('imges/logo.png') }}" alt="Lo"> 
                    Invoices
                </a>
                <a class="home" href="{{ url('/') }}">
                   Home
                </a>
                <a class="home" href="{{ url('/') }}">
                    Estimate
                 </a>
                 <a class="home" href="{{ url('/') }}">
                    Client
                 </a>
                 <a class="home" href="{{ url('/') }}">
                    Items
                 </a>
                 <a class="home" href="{{ url('/') }}">
                    Settings
                 </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="home">
                                <a id="navbarDropdown" style="font-size: 12px" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li>
                                    <a class="home" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            </li>
                            <li class="home">
                                <button class="btn btn-primary donate" style="background-color: white;color:black;border-color:white;">Donate</button>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>