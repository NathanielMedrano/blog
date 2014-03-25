@extends('layouts.master')

	@section('sty')
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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

	#font {

		font-size: 15px;

	}

	.col-md-4 {

		position: relative;

	}

	</style>

	@section('image')
	@stop
    @section('content')
<div id='font' >
   <div id='head'>
    <h1>Nathaniel Medrano</h1>
    <p class="lead">Web Developer</p>
  </div>

  <div class="row" align="center">
  <div class="col-md-4" align="right">
    <p><strong>Contact:</strong></p>
    
  </div>
  <div class="col-md-4" >

    <p>Nathaniel Medrano</p>
    <p>7003 Broadway Apt 109</p>
    <p>San Antonio, TX 78209</p>
      <p>natmed1991@gmail.com</p>
     <p>210.367.3596</p>

    



  </div>
  <div class="col-md-4" align="left">

  <p><a href="https://github.com/NathanielMedrano"> <i class="fa fa-github"></i> Github</a></p>
  <p><a href="http://www.linkedin.com/in/nathanielmedrano/"> <i class="fa fa-linkedin"></i> LinkedIn</a></p>
  <p><a href="http://instagram.com/natmed91"> <i class="fa fa-instagram"></i> natmed91</a></p>
  <p><a href="https://twitter.com/ndmedrano"> <i class="fa fa-twitter"></i> @ndmedrano</a></p>



  </div>
  </div>
  <hr>

   <div class="row" align="right">
  <div class="col-md-4"><strong>Work Experience:</strong></div>
  <div class="col-md-4" align="center">
    <p>Intern: <a href="http://netamericaalliance.com/">Net America Alliance</a></p>
    <p>Front Desk: <a href="http://stric.com/">South Texas Radiology Imaging Center</a></p>

  </div>
  <div class="col-md-4" align="left">
    <p>May 2013-November 2013</p>
    <p>July 2009 - March 2012</p>
  </div>
  </div>
  <hr>

   <div class="row" align="right">
  <div class="col-md-4"><strong>Education:</strong></div>
  <div class="col-md-4" align="center">
    <p><a href="http://www.codeup.com/">Codeup</a></p>
    <p><a href="https://www.alamo.edu/sac/">San Antonio College</a></p>
    <p><a href="http://www.nisd.net/healthcareers/">Health Careers HS</a></p>

  </div>
  <div class="col-md-4" align="left">
    <p>Graduating in Spring 2014</p>
    <p>Pre-Nursing Courses 2010-2012</p>
    <p>Graduated May 2010</p>
  </div>
  </div>
</div>  


    @stop