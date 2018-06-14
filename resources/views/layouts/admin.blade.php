<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.less')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/scss/style.css')}}">
    <link href="{{asset('assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">TaxCollector</a>
                <a class="navbar-brand hidden" href="./">TC</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('home')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Invoices</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Tax Invoices</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-file-word-o"></i><a href="{{url('admin/taxs')}}">View all Invoices</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Tax History</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{url('tax/all')}}">View Tax History</a></li>
                        </ul>
                    </li>
            
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                            {{-- <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar"> --}}
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                  

                </div>
            </div>
        </header><!-- /header -->
            <!-- Header-->
     
        <div class="content mt-3">
            @yield('content')
        </div>
    </div>
<!-- /#right-panel -->
    <!-- Right Panel -->

    <script src="{{asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>


    <script src="{{asset('assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/widgets.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    
</body>
</html>
