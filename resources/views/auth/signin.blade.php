<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Database Management @yield('title', 'Sign In')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/ariosh_fav.ico">

    <!-- Font Awesome CSS -->
    <link href="/fonts/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{('css/css/bootstrap.css')}}" />

    <!-- Custom styles for this template -->
    <link href="/css/custom/sticky-footer.css" rel="stylesheet">
    <link href="/css/custom/signin.css" rel="stylesheet">


  
</head>
<body class="text-center mb-0 pt-0 pb-0">
    <div style="width: 100%; height: 100%;" class="black">
        <div style="width:100%;" class="row ml-0 mr-0 style" >
            <div class="col-lg-4 col-md-3"></div>
            <div class="col-lg-4 col-md-6 text-center back style-1" style="padding-bottom: 50px;"> 
                <form class="form-signin mb-0 ml-auto mr-auto">
                        <img class="mb-4" src="/images/uploadedwebclientlogo.jpg" alt="" width="130" height="72">
                        <h1 class="h3 mb-3 font-weight-normal text-left">Sign in</h1>
                        <label for="inputEmail" class="sr-only"> <i class="far fa-envelope"></i>
                            Email address</label>
                        <input type="email" id="inputEmail" class="form-control mb-4 form" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control mb-0 form" placeholder="Password" required>
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="#" style="font-size: 11px; display: inline;">forgot password?</a>
                            </div>
                            <div class="col-sm-8">
                                <a href="/signup" class="text-right" style="font-size: 11px; display: inline;">Don't have an account? <strong>SIGN UP</strong></a>
                            </div>
                        </div>
                        
                        <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        
                </form>
            </div>
            <div class="col-lg-4 col-md-3"></div>
            </div>
    </div>
   
    
  </body>
</html>



