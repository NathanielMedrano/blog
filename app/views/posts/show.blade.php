@extends('layouts.master')


$section('sty')

<style type="text/css">
.text-center {

	display: none;

	}

#head {
		margin-top: 8%;

	}
</style>

	@section('image')
	@stop

@section('content')
    <h1 class='head'>{{{ $post->title }}}</h1>

    <p class='head'>
    	{{{ $post->body }}}
    </p>
<a href="#" id='btnDeletePost' class='head'>Delete</a>
	<a href="{{{ action('PostsController@edit', $post->id ) }}}" class='btn head'>Edit</a>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
	{{ Form::close() }}

    @stop

    @section('btm-script')
	<script type="text/javascript">

	$('#btnDeletePost').on('click', function (e) {
		e.preventDefault();
		if (confirm('Are you sure you want to delete this post?')) {
			$('#formDeletePost').submit();
		}
	});

</script>

	@stop
