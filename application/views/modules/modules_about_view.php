<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NetSecLab Modules</title>
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
          <div class="hero-unit">
            <h1>Welcome to NetSeclab!</h1>
            <p>In preparation for the competition, the students will acquire and/or improve their knowledge in Network and Security by completing the following modules. Students will gain points after completion of each module. These points are calculated based on the complexity of the modules, and are counted towards the competition scores. </p>
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h2>Man in the Middle (MITM)</h2>
              <p>What does Man-in-the-Middle Attack (MITM) mean? A man-in-the-middle (MITM) attack is a form of eavesdropping where communication between two users is monitored and modified by an unauthorized party.</p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/MITM">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>DNS Spoofing</h2>
              <p>DNS Spoofing is an attack method that is used by crackers to re-direct a request for a specific Internet site to another computer by means of fooling or hi-jacking the Domain Name Service session. </p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/DNS">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>ARP Poisoning</h2>
              <p>ARP spoofing is a technique whereby an attacker sends fake ("spoofed") Address Resolution Protocol (ARP) messages onto a Local Area Network. </p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/ARP">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Buffer Overflow</h2>
              <p>The condition wherein the data transferred to a buffer exceeds the storage capacity of the buffer and some of the data "overflows" into another buffer, one that the data was not intended to go into. </p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/Buffer">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Password Sniffing</h2>
              <p>Password sniffing is particularly a threat for users who log into Unix systems over a network. Telnet or rlogin is usually employed when logging onto a Unix systems over a network. </p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/PWSniff">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>MAC Spoofing</h2>
              <p>MAC spoofing is a technique for changing a factory-assigned Media Access Control (MAC) address of
a network interface on a networked device. </p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/MACSpoof">View details &raquo;</a></p>
            </div><!--/span-->
            </div><!--/row-->
            <div class="row-fluid">
            <div class="span4">
              <h2>Port Scanning</h2>
              <p>Prior to sniffing a network an attacker has to gain access. Attackers gain access by scanning devices on the network for vulnerabilities, then exploiting them.</p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/Port">View details &raquo;</a></p>
            </div><!--/span-->
              <div class="span4">
              <h2>Mysql Injection</h2>
              <p>SQL injection is probably the most abundant programming flaw that exists on the internet at present. It is the vulnerability through which unauthorized person can access the various critical and private data</p>
              <p><a class="btn" href="<?=base_url();?>index.php/modules/Mysql">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

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
