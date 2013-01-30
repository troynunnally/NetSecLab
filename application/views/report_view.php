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
         
      		<h1> <u> Guidelines for Report </u> </h1>
<br> The report is the main portion of the project (and the part that results in the grade). The reports are informal and do not need polishing. We basically want to know 
<ul>
<li>how you hardened your box, 
<li>what scripts you developed or used for attacking, 
<li>what references (people, websites, books, independent research, etc.) you used to learn about the exploits, 
<li>a description of the effectiveness of your defence and offence during the lab. 
</ul>
 <li>
 
 <a href="javascript:ReverseDisplay('reportformat')"><b> <u> Report Format</b> </u></a>
<div id="reportformat" style="display:none;"><br/>Please form your paper like this (but if you have a better format, please feel free to use it):
<ul>
<li>Introduction (specify the purpose of the lab)?
<li>Hardening Techniques
<li>Attacking Techniques
<li>Technique Analysis
<li>Conclusion
<li>Game Point Justifications
<li>Team Member Contributions
<li>References to web sites, books, articles, etc.
<li>Appendix (if necessary) 
</ul> 
</div>

<li>
<a href="javascript:ReverseDisplay('technique')"><b> <u> Report - Technique Sections </b> </u></a>
<div id="technique" style="display:none;"><br/> In the technique analysis section, you should give:
<ul>
<li>Give justifications for the points you earned in the lab. 
<li>Discuss how you found an exploit, how you used it.
<li>Present some proof that the exploit worked like the shadow password file or a screenshot (please learn to take screenshots and to use the script command). 
<li>Try to give us reasons to assign as much partial credit as we can. 
<li>If something did not work, please give us your best guess why it did not work. 
</ul>
</div>

<li>
<a href="javascript:ReverseDisplay('turnin')"><b> <u>Turn-ins </b> </u></a>
<div id="turnin" style="display:none;">
<ul>
<li> Reports: Please send them via email to us. It should not have any large sections of source code or log files or anything else that would belong in an appendix.
<li>Hard Disks due in class on Monday April 22.
<li>Create a gzipped tarball under /root home directory called: netsec-09spring-teamname.tar.gz where team name is your team name 
<li>Include a README file describing the contents of the tarball (this should be about the same as the 'appendix' that you will add to the report)?
<li>The tarball should contain files of interest to the lab including: 
<br/>log files, exploit source code (no binaries please), tcpdump files, and anything that you would like to reference from your report for proof.
<li>Change the root password to "rootme".
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
