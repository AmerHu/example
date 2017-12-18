@extends('layouts.master')
@section('registration')
    <h2>register</h2>
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="/register">
            {{ csrf_field() }}
            <div class="form-group ">
                <label for="name" class="control-label">Name</label>
                <div>
                    <input id="name" type="text" class="form-control"
                           name="name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">E-Mail Address</label>
                <div>
                    <input type="email" class="form-control" name="email" required>
                    @if ($errors->has('email'))
                        <span class="help-block alert-danger">
                            <strong>{{ $errors->first('email')}}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <div class="control-label">
                    <input id="password" type="password" class="form-control"
                           name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="password-confirmation" class="control-label">
                    Password Confirmation
                </label>
                <div>
                    <input id="password-confirmation" type="password" class="form-control"
                           name="password_confirmation" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                        register
                    </button>
                </div>
            </div>
        </form>
        <a href="/login" type="button" class="btn btn-primary">Already User</a>
    </div>
@endsection