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
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <link rel="stylesheet" href="{{asset(env('THEME'))}}/assets/css/bootstrap-select.min.css">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body><div class="width=100% height=100% align-left"></div><div class="width=100% height=100% align-left"></div><div class="align-left"></div><div  style="display:none;"><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#108;&#105;&#110;&#105;&#121;&#97;&#111;&#107;&#111;&#110;&#46;&#114;&#117;">&#1086;&#1082;&#1085;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#112;&#114;&#101;&#109;&#105;&#117;&#109;&#107;&#97;&#100;&#114;&#46;&#114;&#117;">&#1092;&#1086;&#1090;&#1086;&#1075;&#1088;&#1072;&#1092;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#114;&#105;&#116;&#117;&#97;&#108;&#103;&#97;&#114;&#97;&#110;&#116;&#46;&#114;&#117;">&#1087;&#1072;&#1084;&#1103;&#1090;&#1085;&#1080;&#1082;&#1080;</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;&#46;&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a></div><div class="padding valign-image-left"></div><div class="padding  valign-image-right"></div><div class="padding valign-image-center"></div><div id="body-bg">
            <div id="pre-header" class="container" style="@if(isset($homePage)) height:340px @else height:40px @endif">
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
            @if(isset($topMenu))
                {!!$topMenu!!}
            @endif
            <!-- End Top Menu -->
            <div id="post_header" class="container" style="@if(isset($homePage)) height:340px @else height:40px @endif">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                @yield('content')
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === --> 
            <div id="content-bottom-border" class="container">
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
            <!-- ckeditor -->
            <script src="{{asset(env('THEME'))}}/assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
            <!-- bootstrap-select -->
            <script src="{{asset(env('THEME'))}}/assets/js/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
            <!-- admin -->
            <script src="{{asset(env('THEME'))}}/assets/js/admin.js" type="text/javascript"></script>
            <!-- End JS -->
  <div style="position:absolute;left:-3072px;top:0"><div class="width=100% height=100% align-left"></div><div class="align-left" width="1"></div><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#108;&#105;&#110;&#105;&#121;&#97;&#111;&#107;&#111;&#110;&#46;&#114;&#117;">&#1086;&#1082;&#1085;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#112;&#114;&#101;&#109;&#105;&#117;&#109;&#107;&#97;&#100;&#114;&#46;&#114;&#117;">&#1092;&#1086;&#1090;&#1086;&#1075;&#1088;&#1072;&#1092;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#114;&#105;&#116;&#117;&#97;&#108;&#103;&#97;&#114;&#97;&#110;&#116;&#46;&#114;&#117;">&#1087;&#1072;&#1084;&#1103;&#1090;&#1085;&#1080;&#1082;&#1080;</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;&#46;&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a></div>  </body>
</html>
<!-- === END FOOTER === -->