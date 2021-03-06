<!DOCTYPE html>
<head>
    <!-- templatemo 418 form pack -->
    <!--
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack
    -->
    <title>Register</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{asset("css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/bootstrap-theme.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/bootstrap-social.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/templatemo_style.css") }}" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-image-1">
<div class="container">
    <div class="col-md-12">
        <form class="form-horizontal templatemo-login-form-2" role="form" action="{{ route('register') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <h1>Register</h1>
                </div>
            </div>
            @if(Session::has('alert'))
                <div class="alert-success row">{{ Session::get('alert') }}</div>
            @endif
            <div class="row">
                <div class="templatemo-one-signin col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="username" class="control-label">Username</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-user"></i>
                                <input type="text" name="name" class="form-control" id="username"
                                       value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="username" class="control-label">Email</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="password" class="control-label" >Password</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" id="password"
                                       value="{{ old('password') }}"name="password">
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="password" class="control-label">Re-type Password</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" value="REGISTER" class="btn btn-warning">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="{{route('login.index')}}" class="text-center">Already an account?</a>
                        </div>
                    </div>
                </div>
                <div class="templatemo-other-signin col-md-6">
                    <label class="margin-bottom-15">
                        One-click sign in using other services. Credit goes to <a rel="nofollow" href="http://lipis.github.io/bootstrap-social/">Bootstrap Social</a> for social sign in buttons.
                    </label>
                    <a class="btn btn-block btn-social btn-facebook margin-bottom-15"
                    href="{{route('redirect','facebook')}}">
                        <i class="fa fa-facebook"></i> Sign in with Facebook
                    </a>
                    <a class="btn btn-block btn-social btn-google-plus"
                    href="{{route('redirect','google')}}">
                        <i class="fa fa-google-plus"></i> Sign in with Google
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
