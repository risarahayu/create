@extends('layouts.app_grid')

@section('head')
<style>
    body{
        background: #BD1A8D;
    }
    .btn-background{
        background: #BD1A8D;
        color:white;
       
    }
    .btn-background:hover{
        background: #A11A79;
        color:white;

    }
    .btn-line{
        border-color:#BD1A8D;
        color:#BD1A8D;
       
    }
    .btn-line:hover{
        background: #A11A79;
        color:white;

    }
    label{
        text-align:left;
    }
</style>
@endsection
@section('col-1')

    <img src="{{asset('storage/logo/MP_Logo AW Official-03 1.svg')}}" alt="" class="img-fluid">

@endsection

@section('col-2')



<!-- <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12"> -->
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-background">
                                    {{ __('Login') }}
                                </button>

                               
                                
                                @if (Route::has('register'))
                                    
                                     
                                     <a class="btn btn-line" href="{{ route('register') }}">
                                            {{ __('Register') }}
                                    </a>
                                     
                                      @endif
                                     
                                
                                

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <!-- </div>
    </div>
</div> -->

@endsection
