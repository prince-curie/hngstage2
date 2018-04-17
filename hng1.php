<html>
<head>
	<meta charset="utf-8">
	<title>
		stage 1 hng internship4
	</title>
	<link rel="stylesheet" href="hng1.css">
</head>
<body>
<div class="body">
	<Header class="header">
		<nav class="header">
			<h1>hng internship 4</h1>
			<ul class="ul">
			<li>sign in</li>
			<li>sign up</li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="main">
			<div class="clock">
						<?php
				date_default_timezone_set('Africa/Lagos');
				echo date('H:i:s A');
				?>
			</div>
			<div class="text">
				<br>
				<p>
				Welcome to HNG Internship4. 
				<br>I am Pseudo Mark 
				<br>and i will be glad to help you on a journey to
				become a full stack developer.
				<br>
			</p>
			</div>
		</div>
	</main>
	<footer>
		<div class="footer">
			<p class="footer">
				all rights reserved &copy; 2018
			</p>
		</div>
	</footer>
</div>
</body>
</html>