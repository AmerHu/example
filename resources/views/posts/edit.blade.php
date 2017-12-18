@extends ('layouts.master')

@section ('content')
    <img src="/img/{{$post->img}}"  class="img-responsive" style="max-width: 250px"/>
    <form method="post" action="/posts/{{$post->id}}/edit" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="form-group">

            <label>title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" required>
            @include('layouts.errors')
        </div>

        <div class="form-group">
            <label>body</label>
            <input type="text" class="form-control" name="body" id="body" value="{{$post->body}}" required>
            @include('layouts.errors')
        </div>
        <div class="form-group">
            <input type="file" name="img" id="img" value="{{$post->img}}">
            <input type="hidden" value="{{csrf_token()}}">
        </div>
        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection