<!--default bootstrap navbar -->
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Laravel Blog</a>
      </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/')? 'active':'' }}"><a href="/">Home</a></li>
            <li class="{{ Request::is('blog')? 'active':'' }}"><a href="/blog">Blog</a></li>
            <li class="{{ Request::is('about')? 'active':'' }}"><a href="/about">About</a></li>
            <li class="{{ Request::is('contact')? 'active':'' }}"><a href="/contact">Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello {{ Auth::user()->name }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('tags.index') }}">Tags</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
              </ul>
            </li>
            @else
                <a href="{{ route('login') }}" class="btn btn-default btn-top-spacing">Login</a>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
