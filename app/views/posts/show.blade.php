@extends('layouts.master')


$section('sty')

<style type="text/css">
.text-center {

	display: none;

	}

</style>

	@section('image')
	@stop

@section('content')
    <h1>{{{ $post->title }}}</h1>

    <p>
    	{{{ $post->body }}}
    </p>

 @stop
