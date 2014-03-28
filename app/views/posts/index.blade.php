@extends('layouts.master')

$section('sty')

<style type="text/css">
	.row {
		margin-top: 8%;

	}
</style>



@section('content')

    @foreach ($posts as $post)
<div class="row">
    <p>
    	<h2><a href="{{{ action('PostsController@show' , $post->id) }}} ">{{{ $post->title }}}</a></h2>
    	<p>{{{ Str::words($post->body, 10) }}}</p>
    	<!-- <p>Updated: {{{$post->updated_at }}}</p> -->
         {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}
    </p>
</div>


@endforeach
    
{{ $posts->links() }}

@stop