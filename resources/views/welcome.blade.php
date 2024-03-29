<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Share Table</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/stylish-portfolio.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
    	<style type="text/css">
    	.lead{
    		font-weight: 800;
    		color: #A6A19B;
    	}
    	</style>
    	<!-- Navigation -->
    	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    	<nav id="sidebar-wrapper">
    		<ul class="sidebar-nav">
    			<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
    			<li class="sidebar-brand">
    				<a href="#top">Share Table</a>
    			</li>
    			<li>
    				<a href="#top">Home</a>
    			</li>
    			<li>
    				<a href="#about">About</a>
    			</li>
    			<li>
    				<a href="#services">Services</a>
    			</li>
    			<li>
    				<a href="#portfolio">Portfolio</a>
    			</li>
    			<li>
    				<a href="#contact">Contact</a>
    			</li>
    		</ul>
    	</nav>

    	<!-- Header -->
    	<header id="top" class="header">
    		<div class="text-vertical-center">
    			<h1>Share Table</h1>
    			<h3>分享你的午餐時光,時間就應該浪費在美好的事物上</h3>
    			<br>
    			<a href="#about" class="btn btn-dark btn-lg">Start</a>
    		</div>
    	</header>

    	<!-- About -->
    	<section id="about" class="about">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12 text-center">
    					<h2>一個禮拜三次，讓你與不同的人共進午餐</h2>
    					<p class="lead">與不同的人享受美好的時光，給自己一個機會，不一樣的下午產生不一樣的火花</p>
    				</div>	
    			</div>
    			<!-- /.row -->
    		</div>
    		<!-- /.container -->
    	</section>

    	<!-- Services -->


    	<!-- Call to Action -->
    	<aside class="call-to-action bg-primary">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12 text-center">
    					<h3>The buttons below are impossible to resist.</h3>
    					<a href="#" class="btn btn-lg btn-light">Click Me!</a>
    					<a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
    				</div>
    			</div>
    		</div>
    	</aside>

    	<!-- Footer -->
    	<footer>
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-10 col-lg-offset-1 text-center">
    					<h4><strong>Start Bootstrap</strong>
    					</h4>
    					<p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
    					<ul class="list-unstyled">
    						<li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
    						<li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
    						</li>
    					</ul>
    					<br>
    					<ul class="list-inline">
    						<li>
    							<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
    						</li>
    						<li>
    							<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
    						</li>
    						<li>
    							<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
    						</li>
    					</ul>
    					<hr class="small">
    					<p class="text-muted">Copyright &copy; Your Website 2014</p>
    				</div>
    			</div>
    		</div>
    	</footer>

    	<!-- jQuery -->
    	<script src="js/jquery.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="js/bootstrap.min.js"></script>

    	<!-- Custom Theme JavaScript -->
    	<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
    	e.preventDefault();
    	$("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
    	e.preventDefault();
    	$("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
    	$('a[href*=#]:not([href=#])').click(function() {
    		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

    			var target = $(this.hash);
    			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    			if (target.length) {
    				$('html,body').animate({
    					scrollTop: target.offset().top
    				}, 1000);
    				return false;
    			}
    		}
    	});
    });
    </script>

</body>

</html>
