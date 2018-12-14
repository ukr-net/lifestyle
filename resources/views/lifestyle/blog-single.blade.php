@extends('lifestyle.layouts.site')

@section('content')
@if(isset($post))
<div class="container background-white">
    <div class="row margin-vert-30">
        <!-- Main Column -->
        <div class="col-md-9">
            <div class="blog-post">
                <div class="blog-item-header">
                    <h2>{{$post->title}}</h2>
                </div>
                <div class="blog-post-details">
                    <!-- Author Name -->
                    <div class="blog-post-details-item blog-post-details-item-left user-icon">
                        <i class="fa fa-user color-gray-light"></i>
                        <a href="{{route('blogList', ['author' => $post->user->name])}}">{{$post->user->name}}</a>
                    </div>
                    <!-- End Author Name -->
                    <!-- Date -->
                    <div class="blog-post-details-item blog-post-details-item-left">
                        <i class="fa fa-calendar color-gray-light"></i>
                        <a href="{{route('blogList', ['date' => $post->created_at->format('Y-m-d')])}}">
                            {{$post->created_at->format('D d, Y')}}
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
                        <i class="fa fa-comments color-gray-light"></i>
                        {{$post->comments->count()}} {{str_plural('Comment', $post->comments->count())}}
                    </div>
                    <!-- End # of Comments -->
                </div>
                <div class="blog-item">
                    <div class="clearfix"></div>
                    <div class="blog-post-body row margin-top-15">
                        <div class="col-md-5">
                            <img class="margin-bottom-20" src="{{asset(env('THEME'))}}/assets/img/{{$post->image}}" alt="image1">
                        </div>
                        <div class="col-md-7">
                            <p>{{$post->short_description}}</p>
                        </div>
                        <div class="col-md-12">
                            {!!$post->text!!}
                        </div>
                    </div>
                    <div class="blog-item-footer">
                        <!-- Comments -->
                        <div class="blog-recent-comments panel panel-default margin-bottom-30">
                            <div class="panel-heading">
                                <h3>Comments</h3>
                            </div>
                            <ul class="list-group">
                                @foreach($post->comments as $comment)
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>{{$comment->name}}</h4>
                                                <p>{{$comment->text}}</p>
                                                <span class="date">
                                                    <i class="fa fa-clock-o color-gray-light"></i>
                                                    {{$comment->created_at->format('D d, Y')}}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <!-- Comment Form -->
                                <li class="list-group-item">
                                    <div class="blog-comment-form">
                                        <div class="row margin-top-20">
                                            <div class="col-md-12">
                                                <div class="pull-left">
                                                    <h3>Leave a Comment</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row margin-top-20">
                                            <div class="col-md-12">
                                                <form id="commentform" method="POST" action="{{route('addComment')}}">
                                                    @csrf
                                                    <label>Name</label>
                                                    <div class="row margin-bottom-20">
                                                        <div class="col-md-7 col-md-offset-0">
                                                            <input 
                                                            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" 
                                                            type="text" 
                                                            name="name" 
                                                            value="{{old('name', '')}}" 
                                                            required>
                                                        </div>
                                                    </div>
                                                    <label>Email
                                                        <span>*</span>
                                                    </label>
                                                    <div class="row margin-bottom-20">
                                                        <div class="col-md-7 col-md-offset-0">
                                                            <input 
                                                            class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" 
                                                            type="text" 
                                                            name="email" 
                                                            value="{{old('email', '')}}" required>
                                                        </div>
                                                    </div>
                                                    <label>Message</label>
                                                    <div class="row margin-bottom-20">
                                                        <div class="col-md-11 col-md-offset-0 {{$errors->has('text') ? 'is-invalid' : ''}}">
                                                            <textarea 
                                                            class="form-control" 
                                                            rows="8" 
                                                            name="text" 
                                                            required>{{old('text', '')}}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        <button class="btn btn-primary" type="submit">Send Message</button>
                                                    </p>
                                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                                    <input type="hidden" name="alias" value="{{$post->alias}}">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Comment Form -->
                            </ul>
                        </div>
                        <!-- End Comments -->
                    </div>
                </div>
            </div>
            <!-- End Blog Post -->
        </div>
        <!-- End Main Column -->
        <!-- Side Column -->
        <div class="col-md-3">
            @if(isset($sidebar))
                {!!$sidebar!!}
            @endif
        </div>
    </div>
</div>
@endif
@endsection