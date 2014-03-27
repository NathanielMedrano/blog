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
	<h3>New Posting!</h3>
	<hr>
	
	</div>

	<div class="col-sm-8 contact-form">
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class' => 'col-xs-6 col-md-6')) }}
			<div class="row">
					<!-- {{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label'))}} -->
				<div class="col-xs-6 col-md-6 form-group">
					{{Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'title'))}}
					{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}

				</div>
			</div>
			<!-- {{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label'))}} -->
		<div>
			{{Form::text('body', null, array('class' => 'form-control', 'placeholder' => 'body'))}}
			{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12 col-md-12 form-group">
				<button class="btn btn-primary pull-right" type="submit">Submit</button>
			</div>
		</div>	
			{{ Form::close() }}
	</div>

	


	</div>
    
    @stop