<html>
	
	<head>
		<title>Michael Potiska</title>	
	</head>

	<body>
		<div id="wrapper">
			<header id="header">
				{{-- show a rudimentary navbar--}}
				<div id="left">
					<h1><a href="{{ URL::to ('/') }}">Michael Potiska</a></h1>
					<b>Phone: </b><a href="tel:2145871175">(214)-587-1175</a>
					<b>Email: </b><a href="mailto:mike.potiska@gmail.com">MIKE.POTISKA@gmail.com</a></li>
				</div>
				<div id="icons">
					<a href="{{ URL::to ('https://www.youtube.com/user/MikePotiska') }}"><img src="" alt="youtube"></a>
					<a href="{{ URL::to ('https://www.linkedin.com/pub/michael-potiska/75/805/2a0') }}"><img src="" alt="linkedin"></a>
				</div>
				<div id="navBlock">	
					<ul>
						<li><a href="{{ URL::to ('/') }}">HOME</a></li>
						<li><a href="{{ URL::to ('/gallery') }}">GALLERY</a></li>
						<li><a href="{{ URL::to ('/resume') }}">RESUME</a></li>
					</ul>
				</div>
			</header>
			
			{{-- grab the appropriate content --}}
			<div id="center">
				<content id="content">
					@yield ('content')
				</content>
			</div>			
		</div>

		<footer id="footer">			
		
		</footer>		
	</body>
</html>