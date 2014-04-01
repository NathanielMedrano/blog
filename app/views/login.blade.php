@extends('layouts.master')

  @section('sty')
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
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

  </style>

    @section('content')

{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
    
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name='email' type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name='password' type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

{{ Form::close() }}      

    
    @stop