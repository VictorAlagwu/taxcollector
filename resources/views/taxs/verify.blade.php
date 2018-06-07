
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Tax Invoice </title>
    
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
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
        
        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        
        .rtl table {
            text-align: right;
        }
        
        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
        </style>
  </head>
  <body class="animsition page-invoice">
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
          <span class="navbar-brand-text hidden-xs-down"> Invoice</span>
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
           
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
                role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
              <div class="dropdown-menu" role="menu">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-md-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/panel-structure.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5>Media
                        <span class="badge badge-pill badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{asset('global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{asset('global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{asset('global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{asset('global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{asset('global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{asset('global/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="mb-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                        role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                              aria-expanded="false" aria-controls="siteMegaCollapseOne">
                              Collapsible Group Item #1
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                            role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque accusamus
                              clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseTwo">
                              Collapsible Group Item #2
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                            role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur mortis
                              animus adoptionem, bello statuat expediunt naturales.
                            </div>
                          </div>
                        </div>
    
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseThree">
                              Collapsible Group Item #3
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                            role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
         
        </div>
        <!-- End Navbar Collapse -->
    
       
      </div>
    </nav>    <div class="site-menubar">
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
              <li class="site-menu-item has-sub active open">
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
                  <li class="site-menu-item active">
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
        </div>
        </div>
      </div>
    
     
    </div>    
    <div class="site-gridmenu">
      <div>
        <div>
          <ul>
            <li>
              <a href="../apps/mailbox/mailbox.html">
                <i class="icon wb-envelope"></i>
                <span>Mailbox</span>
              </a>
            </li>
            <li>
              <a href="../apps/calendar/calendar.html">
                <i class="icon wb-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="../apps/contacts/contacts.html">
                <i class="icon wb-user"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="../apps/media/overview.html">
                <i class="icon wb-camera"></i>
                <span>Media</span>
              </a>
            </li>
            <li>
              <a href="../apps/documents/categories.html">
                <i class="icon wb-order"></i>
                <span>Documents</span>
              </a>
            </li>
            <li>
              <a href="../apps/projects/projects.html">
                <i class="icon wb-image"></i>
                <span>Project</span>
              </a>
            </li>
            <li>
              <a href="../apps/forum/forum.html">
                <i class="icon wb-chat-group"></i>
                <span>Forum</span>
              </a>
            </li>
            <li>
              <a href="../index.html">
                <i class="icon wb-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Tax Dashboard</h1>
      </div>

      <div class="page-content">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body container-fluid">
            <div class="page-invoice-table table-responsive">
                <div class="invoice-box">   
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="title">
                                            <h3>Invoice</h3>
                                        </td>
                                        
                                        <td>
                                            Invoice #: 123<br>
                                            Created: January 1, 2015<br>
                                            Due: February 1, 2015
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <tr class="information">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td>
                                            TaxCollector MGT<br>
                                        </td>
                                        
                                        <td>
                                           <strong>Name:</strong> {{$transaction->user->name .' '. $transaction->user->lastname}}<br>
                                           <strong>Email:</strong> {{$transaction->user->email}}<br>
                                           <strong>Occupation:</strong> {{$transaction->user->occupation->name}}<br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <tr class="heading">
                            <td>
                                Gross Pay
                            </td>
                            <td>
                                Amount
                            </td>
                        </tr>
                        
                        <tr class="details">
                            <td>
                                Basic Income
                            </td>
                            <td>
                                ₦{{number_format($transaction->income).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                Housing Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->housing).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                Transport Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->transport).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                Utility Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->utility).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="details">
                            <td>
                                Entertainment Allowance
                            </td>
                            <td>
                                ₦{{number_format($transaction->entertainment).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="details">
                            <td>
                                Children Allowance ({{$transaction->children_num}})
                            </td>
                            <td>
                                ₦{{number_format($transaction->children).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="details">
                            <td>
                                Dependant Allowance ({{$transaction->dependant_num}})
                            </td>
                            <td>
                                ₦{{number_format($transaction->dependant).'.00'}}
                            </td>
                        </tr>
            
                        <tr class="heading">
                            <td>
                               
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->grosspay).'.00'}}
                            </td>
                        </tr>
                        <tr class="details">
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr class="heading">
                            <td>
                               Untaxable Income(Freepay)
                            </td>
                            
                            <td>
                                Amount
                            </td>
                        </tr>
                        <tr class="item">
                            <td>
                               Consolidated Reliefs
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->pers).'.00'}}
                            </td>
                        </tr>
                        <tr class="item">
                            <td>
                                Pension (8% of Basic Income,Housing and Transport Allowance)
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->pension).'.00'}}
                            </td>
                        </tr>
                        
                        <tr class="item">
                            <td>
                               NHF (2.5% of Basic Income)
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->nhf).'.00'}}
                            </td>
                        </tr>

                        <tr class="heading">
                            <td>
                               
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->freepay).'.00'}}
                            </td>
                        </tr>
                        <tr class="item last">
                            <td>
                                Taxable Income (Gross Income - Free Pay)
                            </td>
                            
                            <td>
                                ₦{{number_format($transaction->taxable).'.00'}}
                            </td>
                        </tr>
                        
                        <tr class="total">
                            <td></td>
                            
                            <td>
                               Tax (Monthly): ₦{{number_format($transaction->taxable/$transaction->user->occupation->taxrate)}}.00
                            </td>
                        </tr>
                    </table>
                    <hr>
              
                          <div class="text-right">
                            <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
                              <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                                to payment</span>
                            </button>
                            <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                              onclick="javascript:window.print();">
                              <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
                            </button>
                          </div>
                </div>
            </div>

            
          </div>
        </div>
        <!-- End Panel -->
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 </div>
      <div class="site-footer-right">
        Victor Alagwu
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
    <script>Config.set('assets', "{{asset('assets')}}";</script>
    
    <!-- Page -->
    <script src="{{asset('assets/js/Site.js')}}"></script>
    <script src="{{asset('global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('global/js/Plugin/switchery.js')}}"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
