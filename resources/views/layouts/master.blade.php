@include('layouts.header')

<div class="container">
    <div class="blog-header">
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">


            @if($flash = session('message'))
                <div class="alert alert-success" role="alert">
                    {{$flash}}
                </div>
            @endif
            @if(auth()->check()===true)
                @yield('content')
            @endif
            @if(auth()->check()===false)
                @yield('registration')
            @endif
        </div>
        @include('layouts.navigation')
    </div>
@include('layouts.footer')
