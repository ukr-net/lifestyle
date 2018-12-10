@extends('lifestyle.layouts.site')

@section('content')
@if(isset($feature))
<div class="container background-white">
    <div class="row margin-vert-40">
        <!-- Begin Sidebar Menu -->
        <div class="col-md-3">
            @if(isset($sidebarMenu))
                {!!$sidebarMenu!!}
            @endif
        </div>
        <!-- End Sidebar Menu -->
        <div class="col-md-9">
            <h2 class="margin-bottom-30">{{$feature->title}}</h2>
            {!!$feature->text!!}
        </div>
    </div>
</div>
@endif
@endsection