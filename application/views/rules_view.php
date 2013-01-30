<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NetSecLab Rules</title>
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
  <script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
</script>
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
         
      		<h1> <u> Rules for the competition </u> </h1>
                  <p> 
            Points are assigned according to the level of compromise achieved on other boxes. There will be two in-lab competitions and all teams would be given one hour to attempt to compromise the other computers. <br><br>
            Click on each category to see the respective rules.
            </p>

            <li>
			 <a href="javascript:ReverseDisplay('uniquename9')"><b> <u> General Important Rules </b> </u></a>
			<div id="uniquename9" style="display:none;"><ul>
			<li> Competition in a private network, outside connection not allowed
			<li> Primary subnet: 192.168.100.0/24
			<li> Install Linux OS from provided CD.  Do not install a later operating system on your team's external hard drive. 
			<li> IP # will be received on competition day 1
			</ul>
			</div>
            
            
            
            <li>
            <a href="javascript:ReverseDisplay('uniquename')"><b> <u> Hard Drive and Machine Access: </b> </u></a>
            <div id="uniquename" style="display:none;"> Each team captain will receive a hard drive in class, which will have to install a Ubuntu 8.04 Desktop (Linux), running several services prescribed below. Each team will be assigned an IP address. You can plug the hard drive into any unused Dell Dimension 370 systems in KACB 2446. You will need a hard drive lock key for it to work. The hard drive has a serial IDE interface and may not work with many older systems. You may take the hard drives home to install patches or whatnot. All teams and victims should be configured to use the 192.168.100.0/24 network. </div>
            
            <li>
            <a href="javascript:ReverseDisplay('uniquename1')"><b> <u> User Accounts: </b> </u></a>
            <div id="uniquename1" style="display:none;">A user account called "hacker" should be created on each team box. Each team must pass the login information of that account to the TA and its password should not be changed throughout the competition. This account is used to test the services with the traffic generator, thus accurate login information is vital. Each team member should have their own logins into the system as well.
            
            <li>
            <a href="javascript:ReverseDisplay('uniquename2')"><b> <u> Services: </b> </u></a>
            <div id="uniquename2" style="display:none;">During the competition, each server should have all 6 services available listed in the table below. Each service must be on the default port listed and must allow a valid login from any computer on the network. This will be tested by traffic generating scripts from random source IPs. These services should be maintained throughout the duration of the competition. SMTP should not relay, but should deliver email from anywhere to users on the box.<br><br>
            <table border="1" >
            <tr><td><b>Service</b></td><td><b>Port</b></td></tr>
            <tr><td>ssh</td><td>22</td></tr>
            <tr><td>telnet</td><td>23</td></tr>
            <tr><td>smtp</td><td>25</td></tr>
            <tr><td>https</td><td>443</td></tr>
            <tr><td>mysql</td><td>3306</td></tr>
            <tr><td>phpMyAdm/pma</td><td>--</td></tr>
            <tr><td>XMPP/Jabber</td><td>5222</td></tr>
            <tr><td>MultiCastZoo</td><td>446</td></tr>
           </table>
           <br>
            MySQL does not have to be available via the network, but the contents should be accessible via the webpage interface, phpMyAdmin.
            </div>
            
            <li>
			<a href="javascript:ReverseDisplay('uniquename10')"><b> <u> Important Rules to be remembered</b> </u></a>
			<div id="uniquename10" style="display:none;"><ul>
			<li>Attackers should not change victims' passwords unless needed for a compromise, and then it should be reset back to the original password.
			<li>No denial of service attacks, rate throttle your nmaps (no -T4).
			<li>Services on the team and victim should remain up and active throughout the competition. <li>Services should not be turned off by the defender or the attacker (unless momentarily necessary for a compromise or defence). The service should still be available for legitimate use.
			<li>Absolutely no deleting of logs (yours or others). They are precious as gold when writing the report.
			<li>No arp poisoning. It is not needed since we will use a hub. Since we have ten teams we cannot support teams doing arp poisoning
			<li>No kernel modification
			<li>No breaking into traffic generator 
			</ul>
			</div>
            
            <li> 
            <a href="javascript:ReverseDisplay('uniquename3')"><b> <u> Points: </b> </u></a>
            <div id="uniquename3" style="display:none;">Points are assigned by the level of compromise each team is able to perform to the network. Do note that efficiency and creativity are given bonuses (but it?s impossible to outline them here). We want people to think up and implement new ways of exploiting machines and will reward such efforts in any way we can.
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
            </div>
            
            <a href="javascript:ReverseDisplay('uniquename4')"><li> <b> <u> Time Bonus:</b> </u></a>
            <div id="uniquename4" style="display:none;">Additional points given for time to complete all of the above goals according to the time table below: 
            <ul>
            <li>Not having services up during competition (-150 pts.)
            <li>Your box becomes compromised (-300 pts.)
            <br>Below are bonuses you can receive outside of the competition: </br>
            <li><b>Super bonus: </b> Successfully cracking a password (100 pts. per password). You can continue to crack passwords up until the turnin deadline.
            </ul>
            </div>
            
            
            <a href="javascript:ReverseDisplay('uniquename5')"><li> <b> <u> Victim Boxes:</b> </u></a>
            <div id="uniquename5" style="display:none;">Along with all the participants on the network, there will be additional 'victim boxes.'  These boxes are operating systems with various levels of hardening that are just waiting to be exploited.  Some will be full of holes, some will look very similar to the operating systems the participants receive, and some will be close to commercial products.  Points will be awarded for each exploited box based on the difficulty of the exploit.</div>
			
			

			<li> 
			<a href="javascript:ReverseDisplay('uniquename11')"><b> <u> Logistics </b> </u></a>
            <div id="uniquename11" style="display:none;">
            <ul>
            <li>Installation CDs will be provided.
            <li>External HDs will be distributed to each team captain: Please use the keys in KACB 2446 to lock the drive in place. 
            <li>Keep an eye on your HW all times.
            <li>You can sit down at any computer you like. Please remember there are 2 other classes utilizing the same space.
            <li>Internet access in the lab limited. There are computers on back row (not connected to exercise network) and crossover cables are also available in the lab for PC hookup.
			</ul>
			</div>





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
