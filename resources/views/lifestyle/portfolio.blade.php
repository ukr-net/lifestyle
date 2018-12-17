@extends('lifestyle.layouts.site')

@section('content')
<div class="container background-white">
    <div class="row margin-vert-30">
        <div class="col-md-12">
            <h2>Portfolio</h2>
            <!-- Filter Buttons -->
            <div class="portfolio-filter-container margin-top-20">
                <ul class="portfolio-filter">
                    <li class="portfolio-filter-label label label-primary">
                        filter by:
                    </li>
                    <li>
                        <a href="#" class="portfolio-selected btn btn-default" data-filter="*">All</a>
                    </li>
                    @if(isset($filters))
                        @foreach($filters as $filter)
                        <li>
                            <a href="#" class="btn btn-default" data-filter=".{{$filter->alias}}">{{$filter->name}}</a>
                        </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <!-- End Filter Buttons -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 portfolio-group no-padding">
            @if(isset($portfolios))
                @foreach($portfolios as $portfolio)
                    <div class="col-md-6 portfolio-item margin-bottom-40 @foreach($portfolio->filters as $filter) {{$filter->alias}} @endforeach">
                        <div>
                            <figure>
                                <img src="{{asset(env('THEME'))}}/assets/img/{{$portfolio->image}}" alt="image1">
                                <figcaption>
                                    <h3 class="margin-top-20">{{$portfolio->title}}</h3>
                                    <span>{{$portfolio->description}}</span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                @endforeach
            @endif
            <!-- Portfolio Item -->
        </div>
    </div>
</div>
@endsection