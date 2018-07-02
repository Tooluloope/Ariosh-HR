<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Database Management @yield('title', 'Home')</title>
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
    <link rel="stylesheet" type="text/css" media="screen" href="/css/css/mdb.min.css" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="{{('css/Chosen-Plugin/dist/css/component-chosen.css')}}"/>
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">

  
    


    <!-- Custom styles for this template -->
    <link href="/css/custom/sticky-footer.css" rel="stylesheet">
    @yield('styles')  
</head>
<body class= 'mb-0 ml-0 mr-0 mt-0'>
<div class="h-30" style="background: #F4F5F7">
    <img class="mb-4 ml-5" src="/images/uploadedwebclientlogo.jpg" alt="" width="130" height="72">
</div>
    <nav style="background-color: rgba(0, 0, 0, 0.8) !important; color: white !important;" class="navbar navbar-expand-lg navbar-dark bg-light">
        <div style=" color: white !important;" class="collapse navbar-collapse marg" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active ml-5">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="#">My Info</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="#">Employees</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="over">Overview</a>
            </li>
        </ul>
        <form style="float:right;" class="form-inline my-2 my-lg-0 form-display">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </nav>
    <!-- Contents Here -->
     @yield('content')
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script type="text/javascript" src="/js/custom/home.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script>

<!-- Other scripts -->
@yield('page_scripts')

</body>
</html>