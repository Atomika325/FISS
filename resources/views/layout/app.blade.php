<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>

  <link rel="stylesheet" href="{{asset('sass/mobirise-icons.scss')}}" />
  <link rel="stylesheet" href="{{asset('sass/tether.min.scss')}}" />
  <link rel="stylesheet" href="{{asset('sass/bootstrap.min.scss')}}" />
  <link rel="stylesheet" href="{{asset('sass/bootstrap-grid.min.scss')}}" />
  <link rel="stylesheet" href="{{asset('sass/bootstrap-reboot.min.scss')}}" />
  <link rel="stylesheet" href="{{asset('sass/snow-plugin/style.scss')}}" />
  <link rel="stylesheet" href="{{asset('sass/theme/css/style.scss')}}" />
  <link rel="stylesheet" href="{{asset('sass/mbr-additional.scss')}}" type="text/css" />
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

</style>
</head>
<body>
    @yield('content')
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/tether.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/smooth-scroll.js')}}"></script>
  <script src="{{asset('js/jarallax.min.js')}}"></script>
  <script src="{{asset('js/schnee.js')}}"></script>
  <script src="{{asset('js/theme/js/script.js')}}"></script>
</body>
</html>
