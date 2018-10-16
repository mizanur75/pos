<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>POS System</title>
<link href="{{asset('pos/css/reset.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('pos/css/typography.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('pos/css/styles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('pos/css/form.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('pos/css/gradient.css')}}" rel="stylesheet" type="text/css">

<!-- Jquery -->
<script src="{{asset('pos/js/jquery-1.7.1.min.js')}}"></script>
<script type="text/javascript">
$(function(){
    $(window).resize(function(){
        $('.login_container').css({
            position:'absolute',
            left: ($(window).width() - $('.login_container').outerWidth())/2,
            top: ($(window).height() - $('.login_container').outerHeight())/2
        });
    });
    // To initially run the function:
    $(window).resize();
});
</script>
</head>
<body id="theme-default" class="full_block">
<div id="login_page">
    <div class="login_container">
        <div class="login_header blue_lgel">
            <ul class="login_branding">
                <li>
                <div class="logo_small">
                    <img src="{{asset('pos/images/logo-bingo.png')}}" width="99" height="35" alt="bingo">
                </div>
                <span style="color: darkblue;">A Complete Solution for Point of Sale</span>
                </li>
                <li class="right go_to"><a href="#" title="Go to Main Site" class="home">Go To Main Site</a></li>
            </ul>
        </div>
        <div class="block_container blue_d">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="block_form">
                    <ul>
                        <li class="login_user">
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li class="login_pass">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </li>
                    </ul>
                    <input class="login_btn blue_lgel" name="" value="Login" type="submit">
                </div>
                <ul class="login_opt_link">
                    <li><a href="{{ route('password.request') }}">Forgot Password?</a></li>
                    <li class="remember_me right">
                    <input name="" class="rem_me" type="checkbox" value="checked">
                    Remember Me</li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>