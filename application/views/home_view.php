<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NetSecLab</title>
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
          <a class="brand" href="#">NetSecLab</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <a href="<?=base_url();?>index.php/login/logout" class="navbar-link">logout</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="<?=base_url();?>index.php/site/about">About</a></li>
              <li><a href="<?=base_url();?>index.php/site/contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            
            <ul class="nav nav-list">
              <li class="nav-header">Documentation</li>
              <li><a href="<?=base_url();?>index.php/site/overview">About</a></li>
              <li><a href="<?=base_url();?>index.php/site/rules">Rules</a></li>
              <li><a href="#">Registration</a></li>
              <li><a href="<?=base_url();?>assets/files/NetSecLab.ppt">Presentation</a></li>
              <li><a href="#">Frequently Asked Questions (FAQ) </a></li>
              
              <li class="nav-header">Modules</li>
              <li><a href="<?=base_url();?>index.php/modules/">About Modules</a></li>
              <li><a href="<?=base_url();?>index.php/modules/start">Start Modules</a></li>
              <li class="nav-header">Network Security Repo</li>
              <li><a href="#">About</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Resources</li>
              <li><a href="<?=base_url();?>index.php/site/faq">Frequently Asked Questions (FAQ)</a></li>
              <li class="nav-header">Publications</li>
              <li><a href="<?=base_url();?>assets/files/Design_of_NetSecLab.pdf">Design of NetSecLab</a></li> 
              <li><a href="<?=base_url();?>assets/files/05454381.pdf">The Design of NetSecLab: A Small Competition-Based Network Security Lab</a></li> 
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Welcome to NetSeclab!</h1>
            <p> The purpose of this lab is two fold: harden Linux and to compromise other computers on the lab network. Points is given according to the level of compromise achieved on other boxes and the completion of modules. A report will be required on Wednesday, April 17th for a grade and a bonus given for a high score during the competition. There will be two in-lab competitions: April 8th and 10th. On each date, all teams will be given one hour concurrently to attempt to compromise the other computers including the other teams.</p>
            <p><a class="btn btn-primary btn-large" href="<?=base_url();?>index.php/site/overview">Learn more &raquo;</a></p>
          </div>
          
          <div class="row-fluid">
            <div class="span4">
              <h2>Competition</h2>
              <p>This link includes all the information, documentation and rules required for the competition. Click here to find out more about how to participate and maximize your experience during this journey!</p>
              
              <p><a href="<?=base_url();?>index.php/site/overview" class="btn">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Learning Modules</h2>
              <p>Need resources to better prepare for the competition? Here is the perfect link for you, whether you are a begineer or an advanced hacker! </p>
              <p><a href="#" class="btn">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>NetSecRepo</h2>
              <p>This is your link to access the repository that has all the data collected from the competition </p>
              <p><a href="#" class="btn">View details »</a></p>
            </div><!--/span-->
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
