<html>
	<head>
		<title>Cross Blogs</title>
		<link rel="stylesheet" href="css/style.txt">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="jQuery/jquery-3.5.1.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<style>
		.toggler { width: 500px; height: 200px; }
		#button { padding: .5em 1em; text-decoration: none; }
		#effect { width: 240px; height: 170px; padding: 0.4em; position: relative; }
		#effect h3 { margin: 0; padding: 0.4em; text-align: center; }
		</style>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	<body class="site-background">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary on-top">
			<a class="navbar-brand" href="index.php">Cross Blogs</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		   		<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor01">
		   		<ul class="navbar-nav mr-auto">
		    	  	<li class="nav-item active">
		      			<a class="nav-link" href="index.php">Home</a>
	      			</li>
	      			<li class="nav-item">
		       			<a class="nav-link" href="game-chat.php">Game Talks</a>
		  			</li>
		  			<li class="nav-item">
		       			<a class="nav-link" href="anime-chat.php">Anime Talks</a>
		  			</li>
		      	</ul>
			</div>
		</nav>
		<div class="home-container">
			<div class="jumbotron home-banner">
				<h1 class="display-3">Cross x Blogs</h1>
				<p class="lead">Here's my own personal blog to talk about some games and anime</p>
				<hr class="my-4">
				<p>Find out what I like, scroll down mate.</p>
			</div>
			<div class="progress" style="margin-bottom: 10px;">
				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
				</div>
			<div id="toggle" class="home-content">
				<div class="row">
			<div class="col">
				<h1 class="display-6">To Games!</h1>
				<div class="home-image"><img src="img/home-game.png"></div>
				<div style="width: 80%; margin-left: auto; margin-right: auto;">
					<span style="font-size: 24px; float: left;">HOLLOW KNIGHT</span>
					<span style="font-size: 24px; text-align: center; padding-right: 35px;">DISGAEA 1 COMPLETE</span>
					<span style="font-size: 24px; float: right;">ARKNIGHTS</span></p>
				</div>
				<p class="lead" style="font-size: 20px;">Here I talk about certain games for you beautiful gamers<br>
				Want something to check out to play for yourself? Here are my recommendations</p>
				<p>Hopefully you'll see something you like and play</p>
				<a href="game-chat.php"><button type="button" class="btn btn-primary btn-lg">Game On!</button></a>
			</div>
			<div class="col">
				<h1 class="display-6">To Anime!</h1>
				<div class="home-image"><img src="img/home-anime.png"></div>
				<div style="width: 96%; margin-left: auto; margin-right: auto;">
					<span style="font-size: 24px; padding-left: 8%; float: left;">LOG HORIZON</span>
					<span style="font-size: 24px; padding-left: 10%; text-align: center; ">ACCHI KOCCHI</span>
					<span style="font-size: 24px; float: right;">AVATAR: LAST AIRBENDER</span>
				</div>
				<p class="lead" style="font-size: 20px;">Anime Anime Ani...Cartoon?<br>In the world of animation, here are the anime...and cartoon I suppose? that I love to watch</p>
				<p><span style="font-size: 10px; text-decoration: line-through; ">I am going to get crucified for calling Avatar an anime</p>
				
				<a href="anime-chat.php"><button type="button" class="btn btn-primary btn-lg">Let's Watch~</button></a>
			</div>
			<script>
				$(document).ready(function(){
					$("#toggle").show("blind", 1000 );
				});
			</script>
			</div>
		</div>
		</div>
		<div class="progress" style="margin-top: 10px;">
				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
				</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="page-footer">
  				<p class="footer-text">© 2020-2020 Lachenal</p>
  			</div>
		</nav>
	</body>
</html>