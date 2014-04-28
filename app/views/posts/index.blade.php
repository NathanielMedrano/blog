@extends('layouts.master')

$section('sty')

<style type="text/css">
	.row {
		margin-top: 5%;
	}

    #search {

            float: left;
            margin-left: 5%;
        }

</style>

@section('content')

    <div id='search' class="col-sm-8 contact-form">
        {{ Form::open(array('action' => 'PostsController@index', 'class' => 'col-xs-6 col-md-6', 'method' => 'get')) }}
        <div class="col-xs-6 col-md-6 form-group">
            {{Form::text('search', null, array('class' => 'form-control', 'placeholder' => 'search'))}}
            {{ $errors->has('search') ? $errors->first('search', '<p><span class="help-block">:message</span></p>') : '' }}

        </div>
        {{ Form::close() }}
    </div>

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
{{ $posts->appends(array('search' => Input::get('search')))->links() }}
    


@stop