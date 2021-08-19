<!-- ======== Start Footer ======== -->
<footer class="footer">
    <div class="container text-center">
        <img src="{{ asset('saas/img/logo-white.png') }}" alt="">
        <p>© 2019 CreatyDev. All rights reserved.</p>
    </div>
</footer>
<!-- ======== End Footer ======== -->

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('saas/img/logo.png') }}" width="160" alt="logo"></a>
                        <div>@include('layouts.partials.alerts._alerts')</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body" id="result">
                        <div class="container register">
                                <div class="row">
                                    <div class="col-md-3 register-left">
                                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                                        <h3>Welcome</h3>
                                        <p>You are 30 seconds away from earning your own money!</p>
                                        <input type="submit" name="" value="Get started"/><br/>
                                        {{-- <a href="/#price" class="btn btn-primary"></a> --}}
                                    </div>
                                    <div class="col-md-9 register-right">
                                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <h3 class="register-heading">Welcome Back!</h3>
                                                <div class="row register-form">
                                                    <div class="col-md-6 offset-sm-3">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            {{ csrf_field() }}
                                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <div class="input-group">
                                                                
                                                                <input id="email-1" placeholder="Email *" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                                                value="{{ old('email') }}" required autofocus>
                                                                @if ($errors->has('email'))
                                                                <div class="invalid-feedback">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                            <div class="input-group">
                                                                <input id="password-1" type="password" placeholder="Password *" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                                name="password" required>
                                                                @if ($errors->has('password'))
                                                                <div class="invalid-feedback">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                                            <input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for=" customCheckLogin">
                                                                <span>Remember me</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary">
                                                                Login
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <h3  class="register-heading">Let's Get You Signed Up</h3>
                                                <form method="POST" action="{{ route('register') }}">
                                                        {{ csrf_field() }}
                                                <div class="row register-form">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input id="first_name" type="text" placeholder="First name *"
                                                            class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                                            name="first_name" value="{{ old('first_name') }}" required autofocus>
                                                            @if ($errors->has('first_name'))
                                                                <div class="invalid-feedback">
                                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="last_name" type="text" placeholder="Last name *"
                                                            class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                                            name="last_name" value="{{ old('last_name') }}" required autofocus>
                    
                                                            @if ($errors->has('last_name'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('last_name') }}</strong>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="username" type="text" placeholder="Username *"
                                                            class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                            name="username" value="{{ old('username') }}" required autofocus>
                    
                                                            @if ($errors->has('username'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('username') }}</strong>
                                                            </div>
                                                            @endif
                                                        </div>           
                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input id="email" type="email" placeholder="Email"
                                                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                            name="email" value="{{ old('email') }}" required>
                    
                                                            @if ($errors->has('email'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="password" type="password" placeholder="Password *"
                                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                            name="password" required>
                    
                                                            @if ($errors->has('password'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="password-confirm" type="password" placeholder="Confirm Password *"
                                                            class="form-control" name="password_confirmation" required>
                                                        </div>
                                                        <div class="form-group">
                                                                <input
                                                                class="custom-control-input {{ $errors->has('terms') ? ' is-invalid' : '' }}"
                                                                id="customCheckRegister" name="terms" type="checkbox">
                                                            <label class="custom-control-label" for="customCheckRegister">
                                                                @if ($errors->has('terms'))
                                                                <div class="invalid-feedback">
                                                                    <strong>{{ $errors->first('terms') }}</strong>
                                                                </div>
                                                                @endif
                                                                <span>I accept the <a href="#" target="_blank">terms of service</a>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <input type="submit" class="btnRegister"  value="Create account"/>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                </div>
            </div>
        </div>
    </div>