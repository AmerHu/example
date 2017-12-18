@extends ('layouts.master')

@section ('content')

    <form method="post" action="/posts"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>title</label>
            <input type="text" name="title" class="form-control" id="title">
            @include('layouts.errors')
        </div>

        <div class="form-group">
            <label>body</label>
            <input type="text" class="form-control" name="body" id="body">
            @include('layouts.errors')
        </div>
        <div class="form-group">
            <input type="file" name="img" id="img">
            <input type="hidden" value="{{ csrf_token() }}">
        </div>
        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection

