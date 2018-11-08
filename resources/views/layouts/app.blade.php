<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en" style="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kedai Ku</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminpro-custon-icon.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/meanmenu.min.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- datapicker CSS
       ============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/datapicker/datepicker3.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
    <!-- modals CSS
       ============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/modals.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/normalize.css') }}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/charts.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="materialdesign">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Header top area start-->
<div class="wrapper-pro">
    <div class="left-sidebar-pro" style="height: 0%;">
        <nav id="sidebar" class="">
            <div class="sidebar-header" style="background: #1f2e86">
                <a href="{{ url('/') }}"><img src="{{ asset('admin/img/Kedaiku.png')}}" style="width: 90px; height: 90px;">
                </a>
                <h3 style="color: #ffffff;">Kedai Ku</h3>
                <strong style="color: #ffffff;">KKu</strong>
            </div>
            <div class="left-custom-menu-adp-wrap">
                <ul class="nav navbar-nav left-sidebar-menu-pro">
                    <li class="nav-item">
                        <a href="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <span class="mini-dn"><h4>Master</h4></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/master/bahan/')}}" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="fa big-icon fa-home"></i>
                            <span class="mini-dn"> Bahan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/master/produk') }}" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="fa big-icon fa-th-large"></i>
                            <span class="mini-dn"> Produk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/master/Kas/')}}" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <img src="{{ asset('admin/img/purse.png') }}" class="big-icon" width="15px" height="15px"></img>
                            <span class="mini-dn"> Kas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <span class="mini-dn"><h4>Transaksi</h4></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/transaksi/pembelian') }}" target="_blank" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="fa big-icon fa-truck"></i>
                            <span class="mini-dn"> Pembelian</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/transaksi/penjualan') }}" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="fa big-icon fa-shopping-cart"></i>
                            <span class="mini-dn"> Penjualan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <img src="{{ asset('admin/img/income.png') }}" class="big-icon" width="15px" height="15px"></img>
                            <span class="mini-dn"> Pemasukan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <img src="{{ asset('admin/img/hand-money.png') }}" class="big-icon"
                                 style="transform: scaleX(-1); width: 15px; height: 15px;"></img>
                            <span class="mini-dn"> Pengeluaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/transaksi/mutasi kas') }}" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <img src="{{ asset('admin/img/mutation.jpg') }}" class="big-icon" width="15px" height="15px"></img>
                            <span class="mini-dn"> Mutasi Kas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="true" class="nav-link dropdown-toggle">
                            <img src="{{ asset('admin/img/repot-head.png') }}" class="big-icon" width="15px" height="15px"></img>
                            <span class="mini-dn">Laporan</span>
                            <span class="indicator-right-menu mini-dn">
                                <i class="fa indicator-mn fa-angle-right"></i>
                            </span>
                        </a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="{{ url('/laporan/laba rugi') }}" class="dropdown-item">
                                <img src="{{ asset('admin/img/report.png') }}" class="big-icon" width="15px" height="15px"></img>
                                Laba Rugi
                            </a>
                            <a href="{{ url('/laporan/grafik') }}" class="dropdown-item">
                                <img src="{{ asset('admin/img/chart.jpg') }}" class="big-icon" width="15px" height="15px"></img>
                                Grafik
                            </a>\
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Header top area start-->
    <div class="content-inner-all">
        <div class="header-top-area">
            <div class="fixed-header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="admin-logo logo-wrap-pro">
                                <a href="#"><img src="{{ asset('admin/img/logo/log.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                            <div class="header-top-menu tabl-d-n">
                                <ul class="nav navbar-nav mai-top-nav" style="margin-left: -10%;">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">{{ ucwords(request()->segment(2)) }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                            <div class="header-right-info">
                                @if (request()->is('/'))
                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                    <li class="nav-item nav-setting-open">
                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                            <i class="fa fa-tasks"></i>
                                        </a>
                                        <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                            <ul class="nav nav-tabs custon-set-tab">
                                                <li class="active"><a data-toggle="tab" href="#Notes" aria-expanded="true">Notes</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div id="Notes" class="tab-pane fade active in">
                                                    <div class="notes-area-wrap">
                                                        <div class="note-heading-indicate">
                                                            <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                            <p>You have 10 new message.</p>
                                                        </div>
                                                        <div class="notes-list-area notes-menu-scrollbar mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_3" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside" tabindex="0" style="max-height: 315px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img src=">
                                                                                        <img src="{{ asset('admin/img/notification/5.jpg') }}" alt="" class="mCS_img_loaded">
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical" style="display: none;">
                                                                <div class="mCSB_draggerContainer">
                                                                    <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; display: block; height: 103px; max-height: 265px;">
                                                                        <div class="mCSB_dragger_bar" style="line-height: 30px;">

                                                                        </div>
                                                                    </div>
                                                                    <div class="mCSB_draggerRail">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @elseif (request()->is('master/*'))
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item nav-setting-open">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span data-toggle="modal" data-target="#search-modal">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                @else
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item nav-setting-open">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <img src="{{ asset('admin/img/xls.svg') }}" width="34" height="34" />
                                                {{--<i class="fa fa-file-excel-o"></i>--}}
                                            </a>
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <img src="{{ asset('admin/img/csv.png') }}" width="30" height="30" />
                                                {{--<i class="fa fa-cs"></i>--}}
                                            </a>
                                        </li>

                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header top area end-->
        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown" style="display: block;">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="dashboard.html">Dashboard v.1</a>
                                            </li>
                                            <li><a href="dashboard-2.html">Dashboard v.2</a>
                                            </li>
                                            <li><a href="analytics.html">Analytics</a>
                                            </li>
                                            <li><a href="widgets.html">Widgets</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="inbox.html">Inbox</a>
                                            </li>
                                            <li><a href="view-mail.html">View Mail</a>
                                            </li>
                                            <li><a href="compose-mail.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="others" class="collapse dropdown-header-top">
                                            <li><a href="profile.html">Profile</a>
                                            </li>
                                            <li><a href="contact-client.html">Contact Client</a>
                                            </li>
                                            <li><a href="contact-client-v.1.html">Contact Client v.1</a>
                                            </li>
                                            <li><a href="project-list.html">Project List</a>
                                            </li>
                                            <li><a href="project-details.html">Project Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Google Map</a>
                                            </li>
                                            <li><a href="data-maps.html">Data Maps</a>
                                            </li>
                                            <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                            </li>
                                            <li><a href="x-editable.html">X-Editable</a>
                                            </li>
                                            <li><a href="code-editor.html">Code Editor</a>
                                            </li>
                                            <li><a href="tree-view.html">Tree View</a>
                                            </li>
                                            <li><a href="preloader.html">Preloader</a>
                                            </li>
                                            <li><a href="images-cropper.html">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="bar-charts.html">Bar Charts</a>
                                            </li>
                                            <li><a href="line-charts.html">Line Charts</a>
                                            </li>
                                            <li><a href="area-charts.html">Area Charts</a>
                                            </li>
                                            <li><a href="rounded-chart.html">Rounded Charts</a>
                                            </li>
                                            <li><a href="c3.html">C3 Charts</a>
                                            </li>
                                            <li><a href="sparkline.html">Sparkline Charts</a>
                                            </li>
                                            <li><a href="peity.html">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a>
                                            </li>
                                            <li><a href="register.html">Register</a>
                                            </li>
                                            <li><a href="captcha.html">Captcha</a>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                            <li><a href="contact.html">Contacts</a>
                                            </li>
                                            <li><a href="review.html">Review</a>
                                            </li>
                                            <li><a href="order.html">Order</a>
                                            </li>
                                            <li><a href="comment.html">Comment</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 des-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcome-heading">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
        <!-- Charts Start-->
        <div class="charts-area mg-b-15">
            <div class="container-fluid">
            </div>
        </div>
        <!-- Charts End-->
    </div>
</div>
<!-- jquery
    ============================================ -->
<script src="{{ asset('admin/js/vendor/jquery-1.11.3.min.js') }}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{ asset('admin/js/jquery.meanmenu.js') }}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{ asset('admin/js/jquery.sticky.js') }}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{ asset('admin/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{ asset('admin/js/jquery.scrollUp.min.js') }}"></script>
<!-- datapicker JS
		============================================ -->
<script src="{{ asset('admin/js/datapicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/js/datapicker/datepicker-active.js') }}"></script>

<!-- modal JS
		============================================ -->
<script src="{{ asset('admin/js/modal-active.js') }}"></script>
<!-- Charts JS
    ============================================ -->
<script src="{{ asset('admin/js/charts/Chart.js') }}"></script>
<script src="{{ asset('admin/js/charts/line-chart.js') }}"></script>
<!-- main JS
    ============================================ -->
<script src="{{ asset('admin/js/main.js') }}"></script>


</body>

</html>