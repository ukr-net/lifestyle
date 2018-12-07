@if($sliderItems)
<div id="carousel-example" class="carousel slide" data-ride="carousel">
    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
        @for ($i = 0; $i < $sliderItems->count(); $i++)
            <li data-target="#carousel-example" data-slide-to="{{$i}}" @if($i == 0) class="active" @endif></li>
        @endfor
    </ol>
    <div class="clearfix"></div>
    <!-- End Carousel Indicators -->
    <!-- Carousel Images -->
    <div class="carousel-inner">
        @foreach($sliderItems as $item)
            @if($loop->index == 0)
            <div class="item active">
            @else
            <div class="item">
            @endif
                <img src="{{asset(env('THEME'))}}/assets/img/{{$item->image}}">
            </div>
        @endforeach
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
@endif