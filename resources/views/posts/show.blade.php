@extends ('layouts.master')

@section ('content')
    <h2 class="blog-post-title">
        {{$post->title}}
    </h2>
    <p>{{$post->body}}</p>
    <p class="blog-post-meta">{{$post->created_at}}</p>
    <div class="comment">
        <div class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <p>by : {{ $comment->user->name }} --  <strong>{{$comment->body}}</strong></p>
                </li>
            @endforeach
        </div>
    </div>
    <hr/>
    <div>
        <form method="post" action="/posts/{{$post->id}}/comments">
            {{ csrf_field() }}
            <div class="form-group">
                    <textarea name="body" id="body" cols="60" rows="2" class="form-control"
                              placeholder="Comment place"></textarea>
                @include('layouts.errors')
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Add comment</button>
            </div>
        </form>
    </div>
@endsection