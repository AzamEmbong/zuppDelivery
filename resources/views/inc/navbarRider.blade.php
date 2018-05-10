<style>
    .navbar {
        font-weight: bold;
    }
    .nav-item {
        font-weight: bold;
    }
    .btn-link {
  position: relative;
}

.badge-notify {
  background: red;
  position: absolute !important;
  top: -15px; /* adjust as required*/
  right: 5px; /* adjust as required*/
}
    
</style>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#B82121 !important">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home1') }}">
                <div class="col-md-12">
                    <div class="row">
                {{ config('app.name', 'zuppDelivery') }}
            </div>
            
            <div class="row" style="margin-left:60px;margin-top: -9px;">
                <small>Rider</small>
            </div>
            
            </div>
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
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
    
                    <ul class="nav navbar-nav navbar-center">
                        <li>
                          <button class="btn btn-lg btn-link">
                            <span class="glyphicon glyphicon-envelope"></span>
                            <span class="badge badge-notify">3</span>
                          </button>
                        </li>
                      </ul>
        <div class="container">
                        <li class="nav-item dropdown" >
                            <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profile">Profile</a>
                                <a class="dropdown-item" href="/approval">Approval</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                
                                <form id="logout-form" action="{{ 'App\rider' == Auth::getProvider()->getModel() ? route('rider.logout') : route('logout') }}" method="POST" style="display: none;">
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