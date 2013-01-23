<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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
              <a href="<?=base_url();?>index.php/login" class="navbar-link">Login</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
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
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Overview</a></li>
              <li><a href="#">Rules</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Modules</li>
              <li><a href="#">About</a></li>
              <li><a href="#">Start Modules</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Network Security Repo</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Publications</li>
              <li><a href="#assets/files/Design_of_NetSecLab.pdf">Design of NetSecLab</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
         
      		<h1> <u> Rules for the competition </u> </h1>
                  <p> 
            Points are assigned according to the level of compromise achieved on other boxes. There will be two in-lab competitions and all teams would be given one hour to attempt to compromise the other computers. 
            </p>
            <ul>
            
            <li>
            <b> <u> Hard Drive and Machine Access: </b> </u> Each team captain will receive a hard drive in class, which will have to install a Ubuntu 7.04 Desktop (Linux), running several services prescribed below. Each team will be assigned an IP address. You can plug the hard drive into any unused Dell Dimension 370 systems in KACB 2446. You will need a hard drive lock key for it to work. The hard drive has a serial IDE interface and may not work with many older systems. You may take the hard drives home to install patches or whatnot. All teams and victims should be configured to use the 192.168.100.0/24 network. 
            
            <li>
            <b> <u> User Accounts: </b> </u>
            A user account called � hacker � should be created on each team box. Each team must pass the login information of that account to the TA and its password should not be changed throughout the competition. This account is used to test the services with the traffic generator, thus accurate login information is vital. Each team member should have their own logins into the system as well.
            
            <li>
            <b> <u> Services: </b> </u>
            During the competition, each server should have all 6 services available listed in the table below. Each service must be on the default port listed and must allow a valid login from any computer on the network. This will be tested by traffic generating scripts from random source IPs. These services should be maintained throughout the duration of the competition. SMTP should not relay, but should deliver email from anywhere to users on the box.
            <ul>
            <li>ServicePort
            <li>ssh22
            <li>telnet23
            <li>smtp25
            <li>https443
            <li>mysql3306
            <li>phpMyAdm/pma
            <li>XMPP/Jabber5222
            <li>MultiCastZoo446
            </ul>
            MySQL does not have to be available via the network, but the contents should be accessible via the webpage interface, phpMyAdmin.
            
            <li> <b> <u> Points: </b> </u>
            Points are assigned by the level of compromise each team is able to perform to the network. Do note that efficiency and creativity are given bonuses (but it�s impossible to outline them here). We want people to think up and implement new ways of exploiting machines and will reward such efforts in any way we can.
            <br>The target goals and points provided for each in this competition are as follows: </br>
            <ul>
            <li>Mapping the network (2 pts. per ip)
            <li>Mapping services (20 pts. per box)
            <li>OS detection (10 pts. per victim box)
            <li>Gaining user access to a victim box (30 pts.)
            <li>Gaining user access to a team box (50 pts.)
            <li>Gaining root access to a victim box and retrieving the shadow hash file (150 pts.)
            <li>Gaining root access to a team box and retrieving the shadow hash file (250 pts.)
            </ul>
            <li> <b> <u> Time Bonus:</b> </u>
            Additional points given for time to complete all of the above goals according to the time table below: 
            <ul>
            <li>Not having services up during competition (-150 pts.)
            <li>Your box becomes compromised (-300 pts.)
            <br>Below are bonuses you can receive outside of the competition: </br>
            <li><b>Super bonus: </b> Successfully cracking a password (100 pts. per password). You can continue to crack passwords up until the turnin deadline.
            </ul>





        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
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
