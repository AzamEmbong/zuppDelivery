<style>
    .navbar {
        font-weight: bold;
    }
    .nav-item {
        font-weight: bold;
    }
    
</style>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#ce9201 !important" >
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
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
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        {{-- <li><a class="nav-link" href="{{url('/register')}}<">{{ __('Register') }}</a></li> --}}
                    @else
    

        <div class="container">
                        <li class="nav-item dropdown" >
                            <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item" href="/report">Report/Feedback</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                           
                            {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        /profile
                                    </a> --}}
    
                                    <form id="profile" action="/profile" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              
                            
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>