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
          <h2>Port Scanning</h2>
          <p><b>Definition</b> - Prior to sniffing a network an attacker has to gain access. Attackers gain access by scanning devices on the network for vulnerabilities, then exploiting them. Port scanning can either be targeted or random. An attacker interested in a particular network will attempt to track down information about that network and scan for vulnerabilities. Alternatively, attackers will put large netblocks into a port scanner and let it run for days, trying to find any machine that is available and able to be exploited. This highlights the difference between an attacker and a script kiddie. </p>
		  <p><b>Note:</b> A knowledgeable attacker is looking for specific information; a script kiddie simply wants to destroy things.
A tool commonly used for port scanning is nmap (<a href="http://www.insecure.org/nmap/" target="_blank">www.insecure.org/nmap/</a>). It allows users to enter a range of IP addresses, choose the type of scan desired, and let the program run in the background. When it has completed its sweep it will produce a report, showing the ports that responded, on each network device:
</p>	
<p><code>[root]# nmap -sT www.datacenterwire.com<br> Starting nmap V. 2.99RC2 ( www.insecure.org/nmap/ ) <br>Interesting ports on (66.150.201.102): (The 1589 ports scanned but not shown below are in state: closed) <br>Port State Service <br>21/tcp open<br> ftp 22/tcp open<br> ssh 25/tcp open<br> smtp 53/tcp open<br> domain 80/tcp open<br> http 81/tcp open<br> hosts2-ns 110/tcp open<br> pop-3 443/tcp open<br> https 587/tcp open<br> submission 3306/tcp open<br> mysql 5432/tcp open<br> postgres 10000/tcp open<br> snet-sensor-mgmt Nmap run completed -- 1 IP address (1 host up) scanned in 48 seconds</code></p>
<p>Nmap can be configured to scan all TCP and User Datagram Protocol (UDP) ports, or just the ports that generally have services running on them. Using the information collected in the example, notice there were 12 out of 1,589 scanned ports responding on the server.</p>
<p>Once the list of ports and host names has been compiled, the next step is to try to exploit weaknesses in the various server configurations. This involves knowing what the weaknesses of the different servers are and exploiting those weaknesses.</p>	
			
<i><u>Sources:</u></i> <a href="http://sourcedaddy.com/networking/sniffing.html" target="_blank">http://sourcedaddy.com/networking/sniffing.html</a> <br>
<i><u>Examples:</u></i> <a href="http://www.youtube.com/watch?v=hgc7OvFL80Y" target="_blank">http://www.youtube.com/watch?v=hgc7OvFL80Y</a><br>
<a href="http://www.youtube.com/watch?v=MzkgF611eD8" target="_blank">http://www.youtube.com/watch?v=MzkgF611eD8</a><br>
<a href="http://www.youtube.com/watch?v=ZHR7rxl6xYk" target="_blank">http://www.youtube.com/watch?v=ZHR7rxl6xYk</a><br>

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
