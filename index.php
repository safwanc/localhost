<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Safwan Choudhury | Local</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Local Server Landing Page">
    <meta name="author" content="Safwan Choudhury">
    <link href="css/bootstrap.css" rel="stylesheet">
    <style> 
      body {
        padding-top: 60px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/localhost.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- <script src="js/refresh.js"></script> -->
  </head>
  
  <body>
  <!--<body onload="JavaScript:timedRefresh(30000);">-->
	<!-- NAVIGATION -->
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>
	      <a class="brand" href="#">Safwan's MacBook Pro</a>
	      <div class="nav-collapse">
	      <!--
	        <ul class="nav">
				<li><a href="http://im.safwanc.com/">IM</a></li>
				<li><a href="https://ece.uwaterloo.ca/~schoudhu/">UW</a></li>
				<li><a href="http://cv.safwanc.com">CV</a></li>
				<li><a href="http://www.safwanandnabihah.com">SN</a></li>
	        </ul>
	        -->
	        <ul class="nav pull-right">
	        	<li class="dropdown" id="socialmenu">
	        		<a class="dropdown-toggle" data-toggle="dropdown" href="#socialmenu">
	        		<i class="icon-user"></i><b class="caret"></b>
	        		</a>
	        		<ul class="dropdown-menu">
	        			<li><a href="http://im.safwanc.com/github">Github</a></li>
	        			<li><a href="http://im.safwanc.com/stackoverflow">Stack Overflow</a></li>
	        			<li class="divider"></li>
	        			<li><a href="http://im.safwanc.com/quora">Quora</a></li>
	        			<li><a href="http://im.safwanc.com/linkedin">LinkedIn</a></li>
	        			<li><a href="http://im.safwanc.com/academia">Academia</a></li>
	        		</ul>
	        	</li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /NAVIGATION -->
	
    <div class="container">
    <br />
	<div class="alert">
		<strong><?php echo php_uname('n'); ?></strong> 
		<p class="serverinfo"><?php echo php_uname('v'); ?></p>
	</div>
	
	
	<br />
	<div class="row">
		<!-- PROJECT VERTICAL --> 
		<div class="span4">
			<h1>Active</h1> <hr>
			
			<div class="project">
			<h3>safwanc.com</h3>
			<p>Personal Website</p>
				<a class="btn btn-mini" href="www/"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse" href="http://www.safwanc.com"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
			<div class="project">
			<h3>cv.safwanc.com</h3>
			<p>Curriculum Vitae Front End</p>
				<a class="btn btn-mini" href="cv/"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse" href="http://cv.safwanc.com"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
			<div class="project">
			<h3>safwanandnabihah.com</h3>
			<p>Engagement/Wedding Website</p>
				<a class="btn btn-mini" href="snc/"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse" href="http://www.safwanandnabihah.com"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
		</div>
		
		<!-- PROJECT VERTICAL --> 
		<div class="span4">
			<h1>Personal</h1> <hr>
			
			<div class="project">
			<h3>im.safwanc.com</h3>
			<p>Tumblr Blog</p>
				<a class="btn btn-mini disabled" href="#"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse" href="http://im.safwanc.com"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
			<div class="project">
			<h3>ece.uwaterloo.ca/schoudhu</h3>
			<p>University Website</p>
				<a class="btn btn-mini disabled" href="#"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse" href="http://ece.uwaterloo.ca/~schoudhu"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
		</div>
		
		<!-- PROJECT VERTICAL --> 
		<div class="span4">
			<h1>Other</h1> <hr>
			
			<div class="project">
			<h3>nabsy.me</h3>
			<p>Nabby's Blog</p>
				<a class="btn btn-mini disabled" href="#"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse" href="http://nabsy.me"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
			<div class="project">
			<h3>hotyogadaily.com</h3>
			<p>Wordpress Blog</p>
				<a class="btn btn-mini disabled" href="#"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse disabled" href="#"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
			<div class="project">
			<h3>snowingapp.com</h3>
			<p>Tentative App Idea</p>
				<a class="btn btn-mini disabled" href="#"><i class="icon-cog"></i> Local</a>
				<a class="btn btn-mini btn-inverse disabled" href="#"><i class="icon-random icon-white"></i> Live</a>
			</div>
			
		</div>
	</div>	
	<br />

    <!-- FOOTER --> 
    <hr>
	<footer>
		<p>
			Copyright &copy; Safwan Choudhury <?php echo date("Y"); ?>. 
			Hosted on a MacBook Pro running OS X Lion Server.
		</p>
	</footer>
	<!-- /FOOTER -->
	
    </div>
	
	<!-- JQUERY PLUGINS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
	<!-- /JQUERY PLUGINS -->
	
  </body>
</html>
