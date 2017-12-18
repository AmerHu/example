<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->


    <link rel="stylesheet" href="/css/blog.css" rel="stylesheet">

    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="blog-masthead">
    <div class="container">
        <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="/">Home</a>
                <a class="blog-nav-item" href="/forms">Forms</a>
                <a class="blog-nav-item" href="#">Press</a>
                <a class="blog-nav-item" href="#">New hires</a>


                    @if(Auth::check())
                      <a  class="blog-nav-item pull-right" href="#">{{ Auth::user()->name }}</a>
                    <a class="blog-nav-item pull-right" href="/logout">Logout</a>

                    @endif
                    @if(Auth::check()===false)
                        <a class="blog-nav-item" href="/register">Register</a>
                       <a class="blog-nav-item" href="/login">Login</a>
                    @endif
            </nav>
        </header>
    </div>
</div>