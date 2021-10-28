<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard @yield("title")</title>
    <meta name="description"
        content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicon.png">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/icon180.png" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">
    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="{{ asset('assets') }}/js/vendor/modernizr.min.js"></script>
</head>

<body>
    <div id="page-wrapper">
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

            @include("inc.sidebar")
            <!-- Main Container -->
            <div id="main-container">

                <header class="navbar navbar-default">
                    <ul class="nav navbar-nav-custom">
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('assets') }}/img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                <li class="divider"></li>
                                <li>
                                    <a href="page_ready_user_profile.html">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                        Profile
                                    </a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="#modal-user-settings" data-toggle="modal">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                        Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    @yield('content')
                </div>
                <!-- END Page Content -->


            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="{{ asset('assets') }}/js/vendor/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/app.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="{{ asset('assets') }}/js/helpers/gmaps.min.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('assets') }}/js/pages/index.js"></script>

</body>

</html>
