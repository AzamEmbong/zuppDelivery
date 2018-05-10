<style>
    .navbar {
        font-weight: bold;
    }
    .nav-item {
        font-weight: bold;
    }
    
</style>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#219e83 !important">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'zuppDelivery') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                {{-- <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Home </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                </ul> --}}

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                  
                        <li><a class="nav-link" href="{{ route('rider.login') }}">{{ __('Rider Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>

    

        
                </ul>
            </div>
        </div>
    </nav>