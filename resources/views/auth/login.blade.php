@extends('layouts.login')

@section('form')
        
         <div class="row justify-content-center h-100 align-items-center">
          
                <div class="col-md-6">
    
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                            
                             <img class=".logo-abbr" style=" vertical-align: middle;border-style: none;width: 500; margin: auto;
                                display: block;margin-left: auto;width: 17.1875rem;margin: auto;border-radius: 50%;background-color: #fff;"
                                 src="{{asset('template/images/bcs.png')}}" alt="">

                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Connectez-vous à votre compte</h4>
                                    <form method="POST" action="{{route('login') }}">
                                     @csrf
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                    
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Mot de passe</strong></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!--<div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Souvenez-vous de ma préférence</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="{{url('template/page-forgot-password.html')}}">mot de passe oublier?</a>
                                            </div>
                                        </div>-->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">S'IDENTIFIER</button>
                                              
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                      
               <div class="card-body">
                    <form method="POST" action="{{route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

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

                </div>
    </div>
</div>-->
@endsection
