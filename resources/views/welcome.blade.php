<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tax Collector</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <header id="home">
            <div class="header-top-area">
                <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    <!-- START LOGO -->
                    <div class="logo"> <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a> </div>
                    <!-- END LOGO -->
                    </div>
                    <div class="col-md-9">
                    <!-- START MAIN MENU -->
                    <nav class="navbar navbar-default ">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                       
                        <!-- Logo -->
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" href="{{ route('home') }}">Enter Dashboard</a></li>
                                    <li>
                                        <a style="color:black;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    <!-- END MAIN MENU -->
                    </div>
                </div>
                </div>
            </div>
            <!-- Start Slider Area -->
            <div class="video-area">
                <div class="full-section dark-section" id="main-section">
                    <div id="youtube-video-section">
                    </div><!-- youtube-video-section -->
    
                    <div class="full-section-container">
    
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
    
                                    <h1 class="wow fadeInUp" data-wow-offset="-50">Pay Your Tax</h1>
    
                                    <h6 class="wow fadeInUp ln-sp" 
                                        style="background-color: #00ff977a;
                                               border-radius: 5px;
                                               border: 4px solid #00bfff70;
                                               color: #000000c4;"
                                        data-wow-offset="-50" data-wow-delay="0.15s">With the new integrated payment system, all you need to do, is just to generate your invoice and pay</h6>
    
                                    <br>
    
                                    <a class="btn-slider wow fadeInUp" data-wow-offset="-50" href="{{url('tax')}}" data-wow-delay="0.3s">Pay Now</a>
    
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->
    
                    </div><!-- full-section-container -->
                    <footer class="fixed-bottom">
                        <div class="container">
                            <p>&copy; Copyright 
                                <script type="text/javascript">
                                    var d=new Date();
                                    document.write(d.getFullYear());
                                </script> 
                                TaxCollector.
                            </p>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- End Slider Area -->
        </header>
        

        

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
