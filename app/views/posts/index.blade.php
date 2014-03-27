@extends('layouts.master')

$section('sty')

<style type="text/css">
	.row {
		
	}
</style>



@section('content')

    @foreach ($posts as $post)
<div class="row">
    <p>
    	<a href="{{{ action('PostsController@show' , $post->id) }}} ">{{{ $post->title }}}</a>
    	<p>{{{$post->body}}}</p>
    	<p>{{{$post->created_at }}}</p>
    </p>
</div>
@endforeach
	
@stop