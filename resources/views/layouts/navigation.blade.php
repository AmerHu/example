<div class="col-sm-3 col-sm-offset-1 blog-sidebar">


    @if(Auth::check())
        <a type="button" class="btn btn-primary btn-block" href="/posts/create">Crete Post</a>
    @endif

        <a type="button" class="btn btn-primary btn-block" href="/forms/create">Crete Forms</a>
<hr/>

    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach($archives as $stats)
                <li>
                    <a href="/?month={{ $stats['month']}}&year={{$stats['year'] }}">
                        {{ $stats['month'].' '. $stats['year']}}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
    @if(count($tags))
        <div class="sidebar-module">
            <h4>Tags</h4>
            <ul class="list-unstyled">
                @foreach($tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="sidebar-module">
        <h4>Users</h4>
        <ol class="list-unstyled">
            @foreach($users as $user)
                <li>
                    {{ $user->name }}
                </li>
            @endforeach
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->

