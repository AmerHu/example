@extends('layouts.master')
@section('registration')
    <div class="panel panel-default">
        <h2>Sign In</h2>
        <br/>
        <form method="post" action="/login">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-check">
                <button type="submit" class="btn btn-primary">Sign In</button>
                <br/>
            </div>
            @include('layouts.errors')
        </form>
        <a href="/register" type="button" class="btn btn-primary">Register</a>
     </div>
@endsection