@extends('lifestyle.layouts.site')

@section('content')
    <div class="container no-padding">
        <div class="row">
            <!-- Carousel Slideshow -->
            @if(isset($slideShow))
                {!!$slideShow!!}
            @endif
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
                    @if(isset($portfolio))
                        @foreach ($portfolio as $item)
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-6 col-xs-12 padding-20">
                                <a href="#">
                                    <figure class="animate fadeInLeft">
                                        <img alt="image1" src="{{asset(env('THEME'))}}/assets/img/{{$item->image}}">
                                        <figcaption>
                                            <h3>{{$item->title}}</h3>
                                            <span>{{$item->description}}</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                        @endforeach
                    @endif
                </ul>
                <!-- End Portfolio -->
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
@endsection