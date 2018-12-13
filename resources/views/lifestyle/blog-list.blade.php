@extends('lifestyle.layouts.site')

@section('content')
<div class="container background-white">
    <div class="row margin-vert-30">
        <!-- Main Column -->
        <div class="col-md-9">
            @if(isset($posts))
                @foreach($posts as $post)
                    <!-- Blog Post -->
                    <div class="blog-post padding-bottom-20">
                        <!-- Blog Item Header -->
                        <div class="blog-item-header">
                            <!-- Title -->
                            <h2>
                                <a href="{{route('blogSingle', ['alias' => $post->alias])}}">{{$post->title}}</a>
                            </h2>
                            <div class="clearfix"></div>
                            <!-- End Title -->
                        </div>
                        <!-- End Blog Item Header -->
                        <!-- Blog Item Details -->
                        <div class="blog-post-details">
                            <!-- Author Name -->
                            <div class="blog-post-details-item blog-post-details-item-left">
                                <i class="fa fa-user color-gray-light"></i>
                                <a href="{{route('blogList', ['author' => $post->user->name])}}">{{$post->user->name}}</a>
                            </div>
                            <!-- End Author Name -->
                            <!-- Date -->
                            <div class="blog-post-details-item blog-post-details-item-left">
                                <i class="fa fa-calendar color-gray-light"></i>
                                <a href="{{route('blogList', ['date' => \DateTime::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('Y-m-d')])}}">
                                    {{\DateTime::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('D d, Y')}}
                                </a>
                            </div>
                            <!-- End Date -->
                            <!-- Tags -->
                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                <i class="fa fa-tag color-gray-light"></i>
                                @foreach($post->tags as $tag)
                                    <a href="{{route('blogList',['tag'=>$tag->alias])}}">{{$tag->name}}</a>
                                @endforeach
                            </div>
                            <!-- End Tags -->
                            <!-- # of Comments -->
                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                <a href="{{route('blogSingle', ['alias' => $post->alias])}}">
                                    <i class="fa fa-comments color-gray-light"></i>
                                    {{$post->comments_count}} {{str_plural('Comment', $post->comments_count)}}
                                </a>
                            </div>
                            <!-- End # of Comments -->
                        </div>
                        <!-- End Blog Item Details -->
                        <!-- Blog Item Body -->
                        <div class="blog">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="{{asset(env('THEME'))}}/assets/img/{{$post->image}}" alt="thumb1">
                                </div>
                                <div class="col-md-7">
                                    <p>{{$post->short_description}}</p>
                                    <!-- Read More -->
                                    <a href="{{route('blogSingle', ['alias' => $post->alias])}}" class="btn btn-primary">
                                        Read More
                                        <i class="icon-chevron-right readmore-icon"></i>
                                    </a>
                                    <!-- End Read More -->
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Item Body -->
                    </div>
                    <!-- End Blog Item -->
                @endforeach
            @endif

            
            <!-- Pagination -->
                {{$posts->links()}}
            <!-- End Pagination -->
        </div>
        <!-- End Main Column -->
        <!-- Side Column -->
        <div class="col-md-3">
            @if(isset($sidebar))
                {!!$sidebar!!}
            @endif
        </div>
        <!-- End Side Column -->
    </div>
</div>
@endsection