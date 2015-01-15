<html>
	
	<head>
		<title>Michael Potiska</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">	
		{{ HTML::style('/css/custom.css') }}	
	</head>

	<body>
		<div id="wrapper">
			<header id="header">
				{{-- show a rudimentary navbar--}}
				<div class="tab5">
					<h1><a href="{{ URL::to ('/') }}">MICHAEL POTISKA</a></h1>
					<ul class="no-bullets">
						<li>
							<b>Phone: </b><a href="tel:2145871175">(214)-587-1175</a>
						</li>
						<li>
							<b>Email: </b><a href="mailto:mike.potiska@gmail.com">MIKE.POTISKA@GMAIL.COM</a></li>
						</li>
					</ul>
					<div id="icons">
						<a href="{{ URL::to ('https://www.youtube.com/user/MikePotiska') }}"><img width="64" height="64" src="{{ URL::to ('/img/youtube_icon.png') }}" alt="youtube"></a>
						<a href="{{ URL::to ('https://www.linkedin.com/pub/michael-potiska/75/805/2a0') }}"><img width="64" height="64" src="{{ URL::to ('/img/linkedin_icon.png') }}" alt="linkedin"></a>
					</div>
				</div>
				<br>
				<nav class="navbar-blue" role="navigation">
					<div class="navbar-inner">
						<ul class="nav">
							<a class="navbar-caps" href="{{ URL::to ('/') }}">HOME</a>
							<a class="navbar-caps" href="{{ URL::to ('/gallery') }}">GALLERY</a>
							<a class="navbar-caps" href="{{ URL::to ('/resume') }}">RESUME</a>
						</ul>
					</div>
				</nav>
			</header>
			
			{{-- grab the appropriate content --}}
			<div>
				<content id="content">
					@yield ('content')
				</content>
			</div>			
		</div>

		<footer id="footer">			
		
		</footer>		
	</body>
</html>