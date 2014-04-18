<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></img>NatsTech</title>

     <!-- Latest compiled and minified CSS -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/blog_css.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    @yield('sty')
   
</head>


<body id='img'>

	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	     <a class="navbar-brand" href="{{{ action('HomeController@showHome') }}}">Nats Tech Blog</a>
	    </div>
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
	        <li><a href="{{{ action('HomeController@showBlog') }}}">Blog</a></li>
	        <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
	        <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
          @if (Auth::check())
          <li><a href="{{{ action('HomeController@showNewBlog') }}}">New Blog Posting</a></li>
          <li><a href="{{{ action('HomeController@logout') }}}">Logout ({{{ Auth::user()->email}}})</a></li>
          @else
          <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
          @endif
	      </ul>
	    </div><!--/.nav-collapse -->
	  </div>
	</div>


<div class="head">
  
  @section('image')
  <div >
  	<img id='pic' src="/img/natspic.jpg">
  </div>
  @show
  
  <div class="text-center">
    <h1>Nat's Tech Blog</h1>
    <p class="lead">Just semi-intelligent ramblings of a beginner dev…</p>
  </div>
  
</div><!-- /.container -->

  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
    @yield('content')
    @yield('btm-script')

  <footer>
    <p>©NatsTechBlog 
    <a href="https://github.com/NathanielMedrano"> <i class="fa fa-github"></i></a>
      <a href="http://www.linkedin.com/in/nathanielmedrano/"> <i class="fa fa-linkedin"></i> </a>
      <a href="http://instagram.com/natmed91"> <i class="fa fa-instagram"></i></a>
      <a href="https://twitter.com/ndmedrano"> <i class="fa fa-twitter"></i></a>
    </p>
  </footer  
  </body>
</html>