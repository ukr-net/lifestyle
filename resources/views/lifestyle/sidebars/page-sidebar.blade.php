<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Recent Posts</h3>
    </div>
    <div class="panel-body">
        <ul class="posts-list margin-top-10">
            @foreach($posts as $post)
                <li>
                    <div class="recent-post">
                        <a href="">
                            <img class="pull-left" src="{{asset(env('THEME'))}}/assets/img/{{$post->thumb_img}}" alt="thumb1">
                        </a>
                        <a href="{{route('blogSingle', ['alias' => $post->alias])}}" class="posts-list-title">{{$post->title}}</a>
                        <br>
                        <span class="recent-post-date">
                            {{$post->created_at->format('D d, Y')}}
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">About</h3>
    </div>
    <div class="panel-body">
        Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
    </div>
</div>