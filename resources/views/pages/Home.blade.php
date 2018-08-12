@extends('layout.app')

@section('title')
<title>Welcome to PUP-FISS!</title>
@endsection
@section('content')
	
<section>
      <img class="img-fluid" src ="Header.jpg" alt="PUP SJ Website" />  </section>
<section class="cid-qW67Rcphaw mbr-fullscreen mbr-parallax-background" id="header2-37">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);"></div>
<video width="350" controls>
  <source src="mov_bbb.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login">

        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" />
        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password" />
        </div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a></div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
</div>
</div>
</div>
@endsection
