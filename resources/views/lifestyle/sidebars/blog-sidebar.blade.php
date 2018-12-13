<!-- Blog Tags -->
<div class="blog-tags">
    <h3>Tags</h3>
    <ul class="blog-tags">
        <li>
            @foreach($tags as $tag)
                <a href="{{route('blogList',['tag'=>$tag->alias])}}" class="blog-tag">{{$tag->name}}</a>
            @endforeach
        </li>
    </ul>
</div>
<!-- End Blog Tags -->
<!-- Recent Posts -->
<div class="recent-posts">
    @if(isset($posts))
        <h3>Recent Posts</h3>
        <ul class="posts-list margin-top-10">
            @foreach($posts as $post)
                <li>
                    <div class="recent-post">
                        <a href="{{route('blogSingle', ['alias' => $post->alias])}}">
                            <img class="pull-left" src="{{asset(env('THEME'))}}/assets/img/{{$post->thumb_img}}" alt="thumb1">
                        </a>
                        <a href="{{route('blogSingle', ['alias' => $post->alias])}}" class="posts-list-title">{{$post->title}}</a>
                        <br>
                        <span class="recent-post-date">
                            {{\DateTime::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('D d, Y')}}
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
<!-- End Recent Posts -->