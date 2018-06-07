
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Form Advanced Elements | Remark Admin Template</title>
    
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/flag-icon-css/flag-icon.css')}}">
   
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="{{asset('global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="{{asset('global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{asset('global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="{{asset('assets/images/logo.png')}}" title="Remark">
          <span class="navbar-brand-text hidden-xs-down">Caluculate Tax </span>
        </div>
 
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="{{asset('global/portraits/5.jpg')}}" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
           
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
      </div>
    </nav>   
    <div class="site-menubar">
        <div class="site-menubar-body">
            <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                <li class="site-menu-category">General</li>
                <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                                <div class="site-menu-badge">
                                    <span class="badge badge-pill badge-success">3</span>
                                </div>
                        </a>
                    <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../index.html">
                        <span class="site-menu-title">Dashboard v1</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../dashboard/v2.html">
                        <span class="site-menu-title">Dashboard v2</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../dashboard/ecommerce.html">
                        <span class="site-menu-title">Ecommerce</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../dashboard/analytics.html">
                        <span class="site-menu-title">Analytics</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../dashboard/team.html">
                        <span class="site-menu-title">Team</span>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Layouts</span>
                                    <span class="site-menu-arrow"></span>
                        </a>
                    <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/menu-collapsed.html">
                        <span class="site-menu-title">Menu Collapsed</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/menu-collapsed-alt.html">
                        <span class="site-menu-title">Menu Collapsed Alt</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/menu-expended.html">
                        <span class="site-menu-title">Menu Expended</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/grids.html">
                        <span class="site-menu-title">Grid Scaffolding</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/layout-grid.html">
                        <span class="site-menu-title">Layout Grid</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/headers.html">
                        <span class="site-menu-title">Different Headers</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/panel-transition.html">
                        <span class="site-menu-title">Panel Transition</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/boxed.html">
                        <span class="site-menu-title">Boxed Layout</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/two-columns.html">
                        <span class="site-menu-title">Two Columns</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/menubar-flipped.html">
                        <span class="site-menu-title">Menubar Flipped</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/menubar-native-scrolling.html">
                        <span class="site-menu-title">Menubar Native Scrolling</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/bordered-header.html">
                        <span class="site-menu-title">Bordered Header</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                        <span class="site-menu-title">Page Aside</span>
                        <div class="site-menu-label">
                            <span class="badge badge-danger badge-round mr-25">new</span>
                        </div>
                        <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../layouts/aside-left-static.html">
                            <span class="site-menu-title">Left Static</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../layouts/aside-right-static.html">
                            <span class="site-menu-title">Right Static</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../layouts/aside-left-fixed.html">
                            <span class="site-menu-title">Left Fixed</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../layouts/aside-right-fixed.html">
                            <span class="site-menu-title">Right Fixed</span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </li>
                <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                            <span class="site-menu-title">Pages</span>
                                    <span class="site-menu-arrow"></span>
                        </a>
                    <ul class="site-menu-sub">
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                        <span class="site-menu-title">Errors</span>
                        <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/error-400.html">
                            <span class="site-menu-title">400 Bad Request</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/error-403.html">
                            <span class="site-menu-title">403 Forbidden</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/error-404.html">
                            <span class="site-menu-title">404 Not Found</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/error-500.html">
                            <span class="site-menu-title">500 Internal Server Error</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/error-503.html">
                            <span class="site-menu-title">503 Service Unavailable</span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/faq.html">
                        <span class="site-menu-title">FAQ</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/gallery.html">
                        <span class="site-menu-title">Gallery</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/gallery-grid.html">
                        <span class="site-menu-title">Gallery Grid</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/search-result.html">
                        <span class="site-menu-title">Search Result</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                        <span class="site-menu-title">Maps</span>
                        <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/map-google.html">
                            <span class="site-menu-title">Google Maps</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/map-vector.html">
                            <span class="site-menu-title">Vector Maps</span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/maintenance.html">
                        <span class="site-menu-title">Maintenance</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/forgot-password.html">
                        <span class="site-menu-title">Forgot Password</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/lockscreen.html">
                        <span class="site-menu-title">Lockscreen</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/login.html">
                        <span class="site-menu-title">Login</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/register.html">
                        <span class="site-menu-title">Register</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/login-v2.html">
                        <span class="site-menu-title">Login V2</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/register-v2.html">
                        <span class="site-menu-title">Register V2</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/login-v3.html">
                        <span class="site-menu-title">Login V3</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/register-v3.html">
                        <span class="site-menu-title">Register V3</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/user.html">
                        <span class="site-menu-title">User List</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/invoice.html">
                        <span class="site-menu-title">Invoice</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/blank.html">
                        <span class="site-menu-title">Blank Page</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                        <span class="site-menu-title">Email</span>
                        <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/email-articles.html">
                            <span class="site-menu-title">Articles</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/email-welcome.html">
                            <span class="site-menu-title">Welcome</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/email-post.html">
                            <span class="site-menu-title">Post</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/email-thumbnail.html">
                            <span class="site-menu-title">Thumbnail</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../pages/email-news.html">
                            <span class="site-menu-title">News</span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/code-editor.html">
                        <span class="site-menu-title">Code Editor</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/profile.html">
                        <span class="site-menu-title">Profile</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/profile-v2.html">
                        <span class="site-menu-title">Profile V2</span>
                        <div class="site-menu-label">
                            <span class="badge badge-info badge-round">new</span>
                        </div>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/profile-v3.html">
                        <span class="site-menu-title">Profile V3</span>
                        <div class="site-menu-label">
                            <span class="badge badge-info badge-round">new</span>
                        </div>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/site-map.html">
                        <span class="site-menu-title">Sitemap</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/project.html">
                        <span class="site-menu-title">Project</span>
                        <div class="site-menu-label">
                            <span class="badge badge-info badge-round">new</span>
                        </div>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="site-menu-category">Elements</li>
                
                
                </ul>
                <div class="site-menubar-section">
                <h5>
                    Milestone
                    <span class="float-right">30%</span>
                </h5>
                <div class="progress progress-xs">
                    <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                </div>
                <h5>
                    Release
                    <span class="float-right">60%</span>
                </h5>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
                </div>
                </div>      </div>
            </div>
        </div>

    </div>    

    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Apply for Tax Invoice</h1>
       
      </div>

      <div class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="tax/create">
                                {{ csrf_field() }}
                            
                                <div class="form-group">
                                    <label for="income" class="col-md-4 control-label">Basic Income</label>

                                    <div class="col-md-6">
                                        <input id="income" type="number" class="form-control"  name="income" required>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('transport') ? ' has-error' : '' }}">
                                    <label for="transport" class="col-md-4 control-label">Transport Allowance</label>
        
                                    <div class="col-md-6">
                                        <input id="transport" type="number" class="form-control"  name="transport">
                                        @if ($errors->has('transport'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('transport') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group{{ $errors->has('housing') ? ' has-error' : '' }}">
                                    <label for="housing" class="col-md-4 control-label">Housing Allowance</label>
        
                                    <div class="col-md-6">
                                        <input id="housing" type="number" class="form-control"  name="housing">
                                        @if ($errors->has('housing'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('housing') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group{{ $errors->has('utility') ? ' has-error' : '' }}">
                                    <label for="utility" class="col-md-4 control-label">Utility Allowance</label>
        
                                    <div class="col-md-6">
                                        <input id="utility" type="number" class="form-control"  name="utility">
                                        @if ($errors->has('utility'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('utility') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group{{ $errors->has('entertainment') ? ' has-error' : '' }}">
                                    <label for="entertainment" class="col-md-4 control-label">Entertainment Allowance</label>
        
                                    <div class="col-md-6">
                                        <input id="entertainment" type="number" class="form-control"  name="entertainment">
                                        @if ($errors->has('entertainment'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('entertainment') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                @if(Auth::user()->marital_status == "married")
                                <div class="form-group{{ $errors->has('children_num') ? ' has-error' : '' }}">
                                    <label for="children_num" class="col-md-4 control-label">No of Children</label>
        
                                    <div class="col-md-6">
                                        <input id="children_num" type="number" class="form-control"   name="children_num">
                                        @if ($errors->has('children_num'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('children_num') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="children" class="col-md-4 control-label">Children Allowance</label>
        
                                    <div class="col-md-6">
                                        <input id="children" type="number" class="form-control" name="children">
                                    </div>
                                </div>
                                @endif
                                <div class="form-group{{ $errors->has('dependant_num') ? ' has-error' : '' }}">
                                    <label for="dependant_num" class="col-md-4 control-label">No of Dependant(s)</label>
        
                                    <div class="col-md-6">
                                        <input id="dependant_num" type="number" class="form-control" name="dependant_num">
                                        @if ($errors->has('dependant_num'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('dependant_num') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="dependant" class="col-md-4 control-label">Dependant(s) Allowance</label>
        
                                    <div class="col-md-6">
                                        <input id="dependant" type="number" class="form-control" name="dependant">
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Apply
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 </div>
      <div class="site-footer-right">
        Built with <i class="red-600 wb wb-heart"></i> by Victor Alagwu
      </div>
    </footer>
    <!-- Core  -->
    <script src="{{asset('global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('global/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
    
    <!-- Plugins -->
    <script src="{{asset('global/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('global/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('global/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
       
       
    <!-- Scripts -->
    <script src="{{asset('global/js/Component.js')}}"></script>
    <script src="{{asset('global/js/Plugin.js')}}"></script>
    <script src="{{asset('global/js/Base.js')}}"></script>
    <script src="{{asset('global/js/Config.js')}}"></script>
    
    <script src="{{asset('assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('assets/js/Section/GridMenu.js')}}"></script>
    <script src="{{asset('assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/menu.js')}}"></script>
    
    <script src="{{asset('global/js/config/colors.js')}}"></script>
    <script src="{{asset('assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', "{{asset('assets')}}")</script>
    
    <!-- Page -->
    <script src="{{asset('assets/js/Site.js')}}"></script>
    <script src="{{asset('global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('global/js/Plugin/switchery.js')}}"></script>

        <script src="{{asset('global/js/Plugin/asspinner.js')}}"></script>
    
    
        <script src="{{asset('assets/examples/js/forms/advanced.js')}}"></script>
  </body>
</html>