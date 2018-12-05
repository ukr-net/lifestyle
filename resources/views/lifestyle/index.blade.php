@extends('lifestyle.layouts.site')

@section('content')
    <div class="container no-padding">
        <div class="row">
            <!-- Carousel Slideshow -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                </ol>
                <div class="clearfix"></div>
                <!-- End Carousel Indicators -->
                <!-- Carousel Images -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset(env('THEME'))}}/assets/img/slideshow/slide1.jpg">
                    </div>
                    <div class="item">
                        <img src="{{asset(env('THEME'))}}/assets/img/slideshow/slide2.jpg">
                    </div>
                    <div class="item">
                        <img src="{{asset(env('THEME'))}}/assets/img/slideshow/slide3.jpg">
                    </div>
                    <div class="item">
                        <img src="{{asset(env('THEME'))}}/assets/img/slideshow/slide4.jpg">
                    </div>
                </div>
                <!-- End Carousel Images -->
                <!-- Carousel Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- End Carousel Controls -->
            </div>
            <!-- End Carousel Slideshow -->
        </div>
    </div>
    <div class="container background-gray-lighter">
        <div class="row margin-vert-40">
            <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-clock-o fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                    <p>WORKING HOURS</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-tachometer fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                    <p>WORKING HOURS</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <i class="fa-users fa-5x color-primary"></i>
                </div>
                <div class="col-md-8">
                    <h2 class="margin-top-5 margin-bottom-0">3,474.5</h2>
                    <p>WORKING HOURS</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Main Text -->
            <div class="col-md-12">
                <h2 class="text-center">Welcome to LifeStyle</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                    lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p class="text-center">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                    augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur eget nisl
                    a risus.</p>
            </div>
            <!-- End Main Text -->
        </div>
    </div>
    <div class="container background-gray-lighter">
        <div class="row padding-vert-20">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!-- Portfolio -->
                <ul class="portfolio-group">
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image1" src="{{asset(env('THEME'))}}/assets/img/frontpage/image1.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image2" src="{{asset(env('THEME'))}}/assets/img/frontpage/image2.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image3" src="{{asset(env('THEME'))}}/assets/img/frontpage/image3.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image4" src="{{asset(env('THEME'))}}/assets/img/frontpage/image4.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInLeft">
                                <img alt="image5" src="{{asset(env('THEME'))}}/assets/img/frontpage/image5.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                    <!-- Portfolio Item -->
                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                        <a href="#">
                            <figure class="animate fadeInRight">
                                <img alt="image6" src="{{asset(env('THEME'))}}/assets/img/frontpage/image6.jpg">
                                <figcaption>
                                    <h3>Placerat facer possim</h3>
                                    <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- //Portfolio Item// -->
                </ul>
                <!-- End Portfolio -->
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
@endsection