<!DOCTYPE html>
<html lang="en-us" id="extr-page">
<head>
    <meta charset="utf-8">
    <title> GYAPOM </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- #CSS Links -->
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/font-awesome.min.css">

    <!-- GYAPOM Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/smartadmin-skins.min.css">

    <!-- GYAPOM RTL Support is under construction
         This RTL CSS will be released in version 1.5
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

    <!-- We recommend you use "your_style.css" to override GYAPOM
         specific styles this will also ensure you retrain your customization with each GYAPOM update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/demo.min.css">

    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- #APP SCREEN / ICONS -->
    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="/img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/splash/touch-icon-ipad-retina.png">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

</head>

<body class="animated fadeInDown">

<header id="header">

    <div id="logo-group">
        <span id="logo"> <img src="/img/logo.png" alt="GYAPOM"> </span>
    </div>

    <span id="extr-page-header-space"> <span class="hidden-mobile">Need an account?</span> <a href="register.html" class="btn btn-danger">Create account</a> </span>

</header>

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div id="content" class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
                <h1 class="txt-color-red login-header-big">GYAPOM</h1>
                <div class="hero">

                    <div class="pull-left login-desc-box-l">
                        <h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of GYAPOM, everywhere you go!</h4>
                        <div class="login-app-icons">
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>
                        </div>
                    </div>

                    <img src="/img/demo/iphoneview.png" class="pull-right display-image" alt="" style="width:210px">

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h5 class="about-heading">About GYAPOM - Are you up to date?</h5>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h5 class="about-heading">Not just your average template!</h5>
                        <p>
                            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">
                    <!-- {{ Confide::makeSignupForm()->render(); }} -->
 					<form method="POST" action="{{{ URL::to('users') }}}"  id="login-form" class="smart-form client-form" accept-charset="UTF-8">
 					    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                                        <!-- <form action="/users" id="login-form" class="smart-form client-form"> -->
                        <header>
                            Sign Up
                        </header>

                        <fieldset>
						   
                            <section>
                                <label class="label">Username</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal">
                                    </i> Please enter username</b></label>
                            </section>
						   
                            <section>
                                <label class="label">E-mail</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-envelope-o txt-color-teal">
                                    </i> Please enter email address</b></label>
                            </section>

                            <section>
                                <label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal">
                                    </i> Enter your password</b> </label>
                            </section>
						   
                            <section>
                                <label class="label">Password Confirmation</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
 					               <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal">
                                    </i> {{{ Lang::get('confide::confide.password_confirmation') }}}</b> </label>
                   
                            </section>
						   
 				           @if (Session::get('error'))
 				               <div class="alert alert-error alert-danger">
 				                   @if (is_array(Session::get('error')))
 				                       {{ head(Session::get('error')) }}
 				                   @endif
 				               </div>
 				           @endif

 				           @if (Session::get('notice'))
 				               <div class="alert">{{ Session::get('notice') }}</div>
 				           @endif

                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                {{{ Lang::get('confide::confide.signup.submit') }}}
                            </button>
                        </footer>
                    </form>

                </div>

                <h5 class="text-center"> - Or sign in using -</h5>

                <ul class="list-inline text-center">
                    <li>
                        <a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</div>

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script src="/js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');} </script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script> if (!window.jQuery.ui) { document.write('<script src="/js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="/js/bootstrap/bootstrap.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="/js/app.min.js"></script>

<script type="text/javascript">
    runAllForms();

    $(function() {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>

</body>
</html>