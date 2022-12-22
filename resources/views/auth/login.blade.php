@extends('layouts.app')

@section('content')

<div class="firstContainer" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="logo">
               <img src="{{ asset('imges/logo.png') }}" alt="Lo"> 
            </div>
            <div class="h51">
            <h4>Login to your Account</h4>            
             </div>
             <div class="h52">
                <h5>Welcome Back, we hope you're <br /><span>having a great day.</span></h5>            
                 </div>
            <div class="card card1">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">

                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn1">
                                    {{ __('Login') }}
                                </button>
                                <button type="submit" class="btn btn-primary btn2 mt-2">
                                    {{ __('Google') }}
                                </button>

                              
                                
                            </div>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link jj" href="{{ route('register') }}">
                                {{ __('Dont have an account Sign Up?') }}
                            </a>
                        @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
