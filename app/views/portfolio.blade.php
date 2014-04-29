@extends('layouts.master')
		
		@section('sty')
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/magister.css">
	<style type="text/css">
	
	#pic {

	visibility: hidden;

	}

	.text-center {

	display: none;

	}

	#head {

		padding-top: 7%;

	}


	</style>

	@section('image')
	@stop

    @section('content')

    <div id='head'>
	    <h1>Nathaniel Medrano</h1>
	    <p class="lead">Portfolio</p>
  	</div>

    <section class="section" id="themes">
	<div class="container">
	
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">
				<div class="thumbnail">
					<img src="/img/red.jpg">
					<div class="caption">
						<h3>getitred.com</h3>
						<p>Geo-Caching Site and App that gives you "warmer" and "colder" hints as you search.</p>
						<p><a href="https://github.com/Hot-N-Seek/capstone" class="btn btn-primary" role="button">Code</a> <a href="http://getitred.com/" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="/img/limon.jpg">
					<div class="caption">
						<h3>kiethlimon.me</h3>
						<p>Current Project for a local San Antonio artist. Laravel project that will be a blog and gallery.</p>
						<p><a href="https://github.com/NathanielMedrano/limon.dev" class="btn btn-primary" role="button">Code</a> <a href="#" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-2">
				<div class="thumbnail">
					<img src="/img/xs.jpg">
					<div class="caption">
						<h3>xs.dev</h3>
						<p>Website for construction company Tech Stars INC.</p>
						<p><a href="https://github.com/NathanielMedrano/xs.dev" class="btn btn-primary" role="button">Code</a> <a href="#" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="/img/nat.jpg">
					<div class="caption">
						<h3>Whack-A-Plumber!</h3>
						<p>JavaScript Game</p>
						<p><a href="https://github.com/NathanielMedrano/codeup.dev/blob/master/public/whack.html" class="btn btn-primary" role="button">Code</a> 
						   <a href="" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

    @stop