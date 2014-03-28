@extends('layouts.master')
	
	@section('sty')

	<style type="text/css">
		#twitter {

			float: left;
			margin-left: 5%;

		}
	</style>

    @section('content')

 	<div id='twitter'>
 		<a class="twitter-timeline" href="https://twitter.com/ndmedrano" data-widget-id="449618080012849152">Tweets by @ndmedrano</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

    @stop