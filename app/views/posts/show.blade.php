@extends('layouts.master')

$section('sty')

<style type="text/css">
.text-center {

	display: none;

	}

#head {
		 margin-left: 20%;
    	 margin-right: 20%;

	}
	.post-img {
    width: 200px;
    height: 120px;
}

/* resize images */
.post-img img {
    width: 100%;
    height: auto;
    margin-left: 20%;
    	 margin-right: 20%;

}

</style>

	@section('image')
	@stop

@section('content')
    <h1 class='head'>{{{ $post->title }}}</h1>

    <section class="section head" id="themes">
	<div class="container center" id='head'>

		<div class="col-sm-4 col-sm-offset-2">
			<div class="thumbnail">
		
				<div class="caption" >
						
					 <p>
    					{{{ $post->body }}}
    				 </p>	
    				 <div class="post-img">		
    				 <img src="/img/{{{ $post->img_name }}}">
    				</div>
    				
	<a href="#" id='btnDeletePost' class='head'>Delete</a>
	<a href="{{{ action('PostsController@edit', $post->id ) }}}" class='btn head'>Edit</a>
				</div>
			</div>
		</div>
	</div>



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
