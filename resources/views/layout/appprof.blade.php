<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>

  <link rel="stylesheet" href="{{asset('css/mobirise-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('css/tether.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/snow-plugin/style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/theme/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/mbr-additional.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/app.css') }}"/>
  <link rel="stylesheet" href="{{asset('css/dropdown/css/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}"/>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="generator" content="Mobirise v4.7.7, mobirise.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
  <link rel="shortcut icon" href="images/Polytechnic_University_of_the_Philippines_San_Juan_Logo.svg.png" type="image/x-icon" />
  <meta name="Description" content="" />
  @yield('title')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
video {
	float:left;
    width: 90%;
    height: 90%;
	margin: 20px auto 30px;
	padding: 50px 70px 70px 71px;
}
</style>
<style type="text/css">
body#LoginForm{ background-image:url"{{asset("images/pup.jpg")}}"; background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px; float:right;}

.form-heading { color:#800000; font-size:23px;}
.panel h2{ color:#800000; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#800000; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control { float:right;
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #800000;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  float:right;
  background: #f7f7f7 none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 80%;
  padding: 50px 70px 70px 71px;
  opacity:0.9;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #800000;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #800000 none repeat scroll 0 0;
  border-color: #800000;
  color: #800000;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px; color:800000;
}
.botto-text {
  color: #800000;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #800000 none repeat scroll 0 0;
}
.back {color:800000; text-align: left; margin-top:10px;}
.back a {color: #800000; font-size: 13px;text-decoration: none;}
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif; }

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #C0C0C0;
    background-color: #C0C0C0;
    width: 300px;
    height: 275px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: #FFFFFF;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
	font:bold;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #808080;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #808080;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 0px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}

</style>
</head>
<body>
    <section>
            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <!-- Brand/logo -->
                    <a class="navbar-brand" href="/admin">FISS</a>
                    
                    <!-- Links -->
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="/professor">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/professor/profile">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/professor/schedule">Schedule</a>
                      </li>
                          <li class="nav-item">
                        <a class="nav-link" href="/professor/about">About</a>
                      </li>
                          </li>
                          <li class="nav-item">
                        <a class="nav-link" href="/">Log Out</a>
                      </li>
                    </ul>
                  </nav>
                  
    </section>
    @yield('content')

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/tether.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/smooth-scroll.js')}}"></script>
  <script src="{{asset('js/jarallax.min.js')}}"></script>
  <script src="{{asset('js/schnee.js')}}"></script>
  <script src="{{asset('js/theme/js/script.js')}}"></script>
  <script src="{{asset('css/dropdown/js/script.min.js')}}"></script>
  <script src="{{asset('js/jquery.touch-swipe.min.js')}}"></script>
  <script src="{{asset('js/jquery.mb.vimeo_player.js')}}"></script>
</body>
</html>
