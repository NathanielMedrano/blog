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
					<img src="assets/screenshots/sshot1.jpg" alt="">
					<div class="caption">
						<h3>legendarylinens.com</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Code</a> <a href="#" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="assets/screenshots/sshot4.jpg" alt="">
					<div class="caption">
						<h3>kiethlimon.me</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Code</a> <a href="#" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-2">
				<div class="thumbnail">
					<img src="assets/screenshots/sshot5.jpg" alt="">
					<div class="caption">
						<h3>home-builder.com</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Code</a> <a href="#" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="assets/screenshots/sshot3.jpg" alt="">
					<div class="caption">
						<h3>Bar Hopper</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
						<p><a href="#" class="btn btn-primary" role="button">Code</a> <a href="#" class="btn btn-default" role="button">Site</a></p>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

    @stop