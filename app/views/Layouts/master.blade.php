<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NatsTech - Home</title>

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/blog_css.css">

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
	     <a class="navbar-brand" href="home">Nats Tech Blog</a>
	    </div>
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="home">Home</a></li>
	        <li><a href="blog">Blog</a></li>
	        <li><a href="http://blog.dev/portfolio">Portfolio</a></li>
	        <li><a href="resume">Resum&eacute;</a></li>
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
    @yield('content')
  </body>
</html>