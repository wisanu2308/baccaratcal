<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Baccarat Calculate </title>

	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" />

</head>

	<style type="text/css">
		.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
		    background-color: #D5D5D5;
		}
	</style>

	@yield("style")
	
<body>



<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('/')}}">
				Baccarat Calculate
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- <ul class="nav navbar-nav">

				<li><a href="{{url('fbapi')}}">Facebook API</a></li>
				<li><a href="{{url('igapi')}}">Instagram API</a></li>
				<li><a href="{{url('twapi')}}">Twitter API</a></li>

			</ul> -->
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
		
		@yield("htmlBody")

	</div>
	
</div>


<script type="text/javascript" src="{{asset("plugins/jquery/js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("plugins/bootstrap/js/bootstrap.js")}}"></script>
<script type="text/javascript" src="{{asset("plugins/instafeed/instafeed.min.js")}}"></script>

@yield("script")

</body>


</html>