@extends('layouts.master')
	
	@section('sty')

	<style type="text/css">
		#twitter {

			float: left;
			margin-left: 5%;
		}

		  #logform {
     float: none;
    margin: 0 auto;
    top: 12%;
  }
	</style>

    @section('content')
    
    <div class="content">
    	<h1>Make A Payment</h1>
    </div>

    <form action="" method="POST">
	  <script
	    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	    data-key="pk_live_8xBZVpORU8K0Qai8GuUtpqEC"
	    data-amount="32500"
	    data-name="NatsTech"
	    data-description="theccgroup.com ($325.00)"
	    data-image="/128x128.png">
	  </script>
	</form>


    @stop