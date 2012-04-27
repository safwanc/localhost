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
     <script src="js/refresh.js"></script>
  </head>

  <body onload="JavaScript:timedRefresh(5000);">
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
	        <ul class="nav">
				<li><a href="http://im.safwanc.com/">IM</a></li>
				<li><a href="https://ece.uwaterloo.ca/~schoudhu/">UW</a></li>
				<li><a href="http://cv.safwanc.com">CV</a></li>
				<li><a href="http://www.safwanandnabihah.com">SN</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /NAVIGATION -->
	
    <div class="container">
    
    <div class="alert alert-info">
      <button class="close" data-dismiss="alert">×</button>
      <strong>Note:</strong> This page is served locally over the network but it may pull some information from APIs online. 
    </div>
	
	<!-- CONTENT -->
    <h1>Active</h1>
    <p>@TODO!</p>
    
    <h1>Sandbox</h1>
    <p>@TODO.</p>
    
    <h1>Websites</h1>
    <p>@TODO.</p>
    <!-- /CONTENT -->
    	
    <!-- FOOTER --> 
    <hr>
	<footer>
		<p>
			Copyright &copy; Safwan Choudhury <?php echo date("Y"); ?>. 
			Hosted on a MacBook Pro running OS X Lion Server.
		</p>
		<pre class="serverinfo"><?php echo php_uname(); ?></pre>
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
