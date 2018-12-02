<!DOCTYPE html>
<html>
<head>
  @include('partials._head')  
</head>
<body>
  
  @include('partials._nav')
  <div class="container">
 		@include('partials._messages')

 		{{-- Auth::check() ? 'Logged In' : 'Logged Out' --}}
    	
    	@yield('content') 
  </div>

  <hr />
  @include('partials._javascript')
  @yield('scripts')
  @include('partials._footer')

</body>
</html>