@extends('layouts.master')
		
		@section('sty')
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/magister.css">
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


	</style>

	@section('image')
	@stop

    @section('content')
    
    <div id="head" class="content">
    	<h1>Make A Payment</h1>
    </div>

    <form action="" method="POST">
	  <script
	    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	    data-key="pk_live_8xBZVpORU8K0Qai8GuUtpqEC"
	    data-amount="32500"
	    data-name="NatsTech"
	    data-description="theccgroup.com ($325.00)"
	    data-image="/img/natspic.jpg">
	  </script>
	</form>


    @stop