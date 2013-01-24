<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NetSecLab Module</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="<?=base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url();?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url();?>assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url();?>assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?=base_url();?>assets/ico/favicon.png">
  </head>

  <body>
		<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?=base_url();?>index.php/site">NetSecLab</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <a href="<?=base_url();?>index.php/login/logout" class="navbar-link">logout</a>
            </p>
            <ul class="nav">
              <li><a href="<?=base_url();?>index.php/site">Home</a></li>
              <li><a href="<?=base_url();?>index.php/site/about">About</a></li>
              <li><a href="<?=base_url();?>index.php/site/contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <?php include_once('header.php'); ?>
        <div class="span9">
          <h2>Mysql Injection</h2>
          <p><b>Definition</b> - SQL injection is probably the most abundant programming flaw that exists on the internet at present. It is the vulnerability through which unauthorized person can access the various critical and private dat. SQL injection is not a flaw in the web or db server but but is a result of the poor and inexperienced programming practices. And it is one of the deadliest as well as easiest attacks to execute from remote location. </p>
		  <p>In SQL injection, we interact with DB server with the various commands and get various data from it. In this tutorial, I would be discussing 3 aspects of SQL injection namely bypassing logins, accessing the secret data and modifying the page contents. </p>
		  <p><b>Bypassing Logins:</b> Suppose, a site has a login form & only the registered users are allowed to enter the site. Now, say u wanted to bypass the login and enter the site as the legitimate user. If the programmer does not properly sanitize the login script, you may have luck to enter the site. U might be able to login into the site without knowing the real username and real password by just interacting with the DB server. </p>	
			
<i><u>Sources:</u></i> <a href="http://www.go4expert.com/forums/showthread.php?t=20438" target="_blank">http://sourcedaddy.com/networking/sniffing.html</a> <br>
<i><u>Examples:</u></i> <a href="http://www.youtube.com/watch?v=xeuWST_KOyg" target="_blank">http://www.youtube.com/watch?v=xeuWST_KOyg</a><br>
<a href="http://www.youtube.com/watch?v=LS8R353ynUE" target="_blank">http://www.youtube.com/watch?v=LS8R353ynUE</a><br>
<a href="http://www.youtube.com/watch?v=7H358PrFagc" target="_blank">http://www.youtube.com/watch?v=7H358PrFagc</a><br>

		</div><!--/row-->
		</div><!--/span9-->
      <hr>

      <footer>
        <p>&copy; Communications Systems Center 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-transition.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-alert.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-modal.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-tab.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-popover.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-button.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
