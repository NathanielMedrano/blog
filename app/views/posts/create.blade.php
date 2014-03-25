@extends('layouts.master')

	@section('sty')
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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

	#font {

		font-size: 15px;

	}

	.col-md-4 {

		/*position: relative;*/

	}

	</style>

    @section('content')

    <div class="container">
	<div class="row">
	<div class="col-sm-4">
	<h3>Drop me a line!</h3>
	<hr>
	<address>
	<strong>Email:</strong> <a href="mailto:#"> name@domain.com</a><br><br>
	<strong>Phone:</strong> (555)123-4567
	</address>
	</div>
	    
	<div class="col-sm-8 contact-form">
	<form id="contact" method="post" class="form" role="form" action="{{{ action('PostsController@store') }}}" >
	<div class="row">
	<div class="col-xs-6 col-md-6 form-group">
	<input class="form-control" id="title" name="title" placeholder="title" type="text" value="{{{ Input::old('title')}}}" required autofocus />
	</div>
	</div>
	<textarea class="form-control" id="body" name="body" placeholder="Message" rows="5">
		{{{ Input::old('body')}}}
	</textarea>
	<br />
	<div class="row">
	<div class="col-xs-12 col-md-12 form-group">
	<button class="btn btn-primary pull-right" type="submit">Submit</button>
	</form>
	</div>
	</div>
    
    @stop

