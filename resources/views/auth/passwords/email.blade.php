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
                    <span>A Complete Solution for Point of Sale</span>
                    </li>
                    <li class="right go_to"><a href="#" title="Go to Main Site" class="home">Go To Main Site</a></li>
                </ul>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="forgot_pass">
                    <h3 class="blue_d">Forgot Password</h3>
                    <ul>
                        <li class="user_email">
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </li>
                    </ul>
                </div>
                <input class="forgot_btn blue_lgel" name="" value="Send Password Reset Link" type="submit">
            </form>
        </div>
    </div>
</body>
</html>
