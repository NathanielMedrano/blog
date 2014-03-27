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
    <h1>List Posts</h1>

    @foreach ($posts as $post)
    <p>
    	<a href="{{{ action('PostsController@show' , $post->id) }}} ">{{{ $post->title }}}</a>
    	<p>{{{$post->body}}}</p>
    	<p>{{{$post->created_at }}}</p>
    </p>
@endforeach
	<p>'Hello this is a test'</p>
@stop