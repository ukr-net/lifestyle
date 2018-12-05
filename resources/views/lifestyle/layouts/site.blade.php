<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>{{config('settings.title')}}</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="{{ (isset($meta_desc)) ? $meta_desc : '' }}" />
        <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : '' }}" />
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{asset(env('THEME'))}}/assets/css/bootstrap.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset(env('THEME'))}}/assets/css/animate.css">
        <link rel="stylesheet" href="{{asset(env('THEME'))}}/assets/css/font-awesome.css">
        <link rel="stylesheet" href="{{asset(env('THEME'))}}/assets/css/nexus.css">
        <link rel="stylesheet" href="{{asset(env('THEME'))}}/assets/css/responsive.css">
        <link rel="stylesheet" href="{{asset(env('THEME'))}}/assets/css/custom.css">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body><div class="width=100% height=100% align-left"></div><div class="width=100% height=100% align-left"></div><div class="align-left"></div><div  style="display:none;"><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#108;&#105;&#110;&#105;&#121;&#97;&#111;&#107;&#111;&#110;&#46;&#114;&#117;">&#1086;&#1082;&#1085;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#112;&#114;&#101;&#109;&#105;&#117;&#109;&#107;&#97;&#100;&#114;&#46;&#114;&#117;">&#1092;&#1086;&#1090;&#1086;&#1075;&#1088;&#1072;&#1092;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#114;&#105;&#116;&#117;&#97;&#108;&#103;&#97;&#114;&#97;&#110;&#116;&#46;&#114;&#117;">&#1087;&#1072;&#1084;&#1103;&#1090;&#1085;&#1080;&#1082;&#1080;</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;&#46;&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a></div><div class="padding valign-image-left"></div><div class="padding  valign-image-right"></div><div class="padding valign-image-center"></div><div id="body-bg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="#" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="#" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="#" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
            <div id="pre-header" class="container" style="height:340px">
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="{{asset('lifestyle')}}/assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.html" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <span class="fa-gears">Features</span>
                                    <ul>
                                        <li class="parent">
                                            <span>Typography</span>
                                            <ul>
                                                <li>
                                                    <a href="features-typo-basic.html">Basic Typography</a>
                                                </li>
                                                <li>
                                                    <a href="features-typo-blockquotes.html">Blockquotes</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent">
                                            <span>Components</span>
                                            <ul>
                                                <li>
                                                    <a href="features-labels.html">Labels</a>
                                                </li>
                                                <li>
                                                    <a href="features-progress-bars.html">Progress Bars</a>
                                                </li>
                                                <li>
                                                    <a href="features-panels.html">Panels</a>
                                                </li>
                                                <li>
                                                    <a href="features-pagination.html">Pagination</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent">
                                            <span>Icons</span>
                                            <ul>
                                                <li>
                                                    <a href="features-icons.html">Icons General</a>
                                                </li>
                                                <li>
                                                    <a href="features-icons-social.html">Social Icons</a>
                                                </li>
                                                <li>
                                                    <a href="features-icons-font-awesome.html">Font Awesome</a>
                                                </li>
                                                <li>
                                                    <a href="features-icons-glyphicons.html">Glyphicons</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="features-testimonials.html">Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="features-accordions-tabs.html">Accordions & Tabs</a>
                                        </li>
                                        <li>
                                            <a href="features-buttons.html">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="features-carousels.html">Carousels</a>
                                        </li>
                                        <li>
                                            <a href="features-grid.html">Grid System</a>
                                        </li>
                                        <li>
                                            <a href="features-animate-on-scroll.html">Animate On Scroll</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fa-copy">Pages</span>
                                    <ul>
                                        <li>
                                            <a href="pages-about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="pages-services.html">Services</a>
                                        </li>
                                        <li>
                                            <a href="pages-faq.html">F.A.Q.</a>
                                        </li>
                                        <li>
                                            <a href="pages-about-me.html">About Me</a>
                                        </li>
                                        <li>
                                            <a href="pages-full-width.html">Full Width</a>
                                        </li>
                                        <li>
                                            <a href="pages-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="pages-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="pages-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-sign-up.html">Sign-Up</a>
                                        </li>
                                        <li>
                                            <a href="pages-404.html">404 Error Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fa-th">Portfolio</span>
                                    <ul>
                                        <li>
                                            <a href="portfolio-2-column.html">2 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-3-column.html">3 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-4-column.html">4 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-6-column.html">6 Column</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fa-font">Blog</span>
                                    <ul>
                                        <li>
                                            <a href="blog-list.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">Blog Single Item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html" class="fa-comment">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <div id="post_header" class="container" style="height:340px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            @yield('content')
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(212)888-77-88
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@joomla51.com">info@joomla51.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.joomla51.com">www.joomla51.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <div class="col-md-1"></div>
                        <!-- Disclaimer -->
                        <div class="col-md-3 margin-bottom-20 padding-vert-30 text-center">
                            <h3 class="color-gray margin-bottom-10">Join our Newsletter</h3>
                            <p>
                                Sign up for our newsletter for all the
                                <br>latest news and information
                            </p>
                            <input type="email">
                            <br>
                            <button class="btn btn-primary btn-lg margin-top-20" type="button">Subscribe</button>
                        </div>
                        <!-- End Disclaimer -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- JS -->
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="{{asset(env('THEME'))}}/assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="{{asset(env('THEME'))}}/assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
  <div style="position:absolute;left:-3072px;top:0"><div class="width=100% height=100% align-left"></div><div class="align-left" width="1"></div><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#108;&#105;&#110;&#105;&#121;&#97;&#111;&#107;&#111;&#110;&#46;&#114;&#117;">&#1086;&#1082;&#1085;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#112;&#114;&#101;&#109;&#105;&#117;&#109;&#107;&#97;&#100;&#114;&#46;&#114;&#117;">&#1092;&#1086;&#1090;&#1086;&#1075;&#1088;&#1072;&#1092;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#114;&#105;&#116;&#117;&#97;&#108;&#103;&#97;&#114;&#97;&#110;&#116;&#46;&#114;&#117;">&#1087;&#1072;&#1084;&#1103;&#1090;&#1085;&#1080;&#1082;&#1080;</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;&#46;&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a></div>  </body>
</html>
<!-- === END FOOTER === -->