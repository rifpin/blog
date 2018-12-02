@extends('main')

@section('title','| Homepage')
@section('stylesheets')
  <link rel="stylesheets" type="text/css" href="styles.css">
@endsection

@section('content')      
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
              <h1>Welcome to My Blog</h1>
              <p class="lead">Thank you so much for visiting. This my test website built with   laravel. Please read my latest post.</p>
              <p><a class="btn btn-primary btn-lg" role="button">Popular post</a></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          
        @foreach($posts as $post)

          <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr(strip_tags($post->body),0,300) }}{{ strlen(strip_tags($post->body)) > 300 ? "...":""}}</p>
            <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-primary">Read more</a>
          </div>
          <hr />
        @endforeach
        
        </div>

        <div class="col-md-3 col-md-offset-1">
          <h3>Sidebar</h3>
        </div>
      
      </div>
@endsection

@section('scripts')
  <script>
    //confirm('Load some js script');
  </script>
@endsection
    

    