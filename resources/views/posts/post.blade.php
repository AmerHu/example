<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">
            {{$post->title}}
        </a></h2>
    <img src="img/{{$post->img}}"  class="img-responsive" style="max-width: 250px"/>
    <p>{{$post->body}}</p>

    <p class="blog-post-meta"> by : {{$post->user->name}} On :{{$post->created_at}}</p>
    @foreach($post->comments as $comment)
        <li class="list-group-item">
            <p>by : {{ $comment->user->name }} >> <strong>{{$comment->body}}</strong></p>
        </li>
    @endforeach
</div>
<div class="blog-post">
    @if(Auth::check())
        @if(Auth::user()->id === $post->user_id)
            <button type="button" class="btn-primary btn delete" value="{{$post->id}}"
            >Delete Posts
            </button>
            <a href="posts/{{ $post->id }}/edit" type="button" class="btn-primary btn">Edit Posts</a>
        @endif
    @endif
</div>