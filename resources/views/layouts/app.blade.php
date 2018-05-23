<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts -->
      

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    
 <link rel="stylesheet" href="{{asset('css/bootstraptest.css')}}"> 
 <script type="text/javascript" src="js/jquery-2.2.4.test.js"></script>
 <script type="text/javascript" src="js/bootstrap.test.js"></script>
 

{{-- 
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>   --}}
      
    <script type="text/javascript" src="js/jquery.printPage.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
    body {
    /* The image used */
    background-image: url("/1.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>
        @include('inc.navbar')
        <br>
        <div class='container'>
            @include('inc.message')
            @if(session()->has('notif'))
                <div class="row">
                    <div class="col-md-12">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Notification</strong>{{ session()->get('notif')}}
                    </div>
                    </div>
                </div>
            @endif
            @yield ('content')
            {{-- <p style="position:sticky; bottom:10%; align:right" class="btn btn-xs btn-danger">Hello world!!!!!!</p> --}}
        </div>

    </body>


</html>
