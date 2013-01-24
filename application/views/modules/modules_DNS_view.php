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
          <h2>DNS Spoofing</h2>
          <p><b>Definition</b> - DNS Spoofing is an attack method that is used by crackers to re-direct a request for a specific Internet site to another computer by means of fooling or hi-jacking the Domain Name Service session. A malicious user is able to “convince” your computer that the attacker’s site is to be trusted and in fact is the site you requested. A cracker would be capable of gaining access to all of the information from the trusted site. The Domain Name Service uses the UDP protocol, which, unfortunately, fails to provide for authentication services. Without authentication identities can't be verified. </p>

<p><b>Its Relevance:</b> A Domain Name Service exploit can be particularly harmful and measures must be taken to avoid falling victim to such an attack. Infrastructure owners could avoid name service hijacking by encrypting traffic. By default a robust form of “authentication” (knowing the key) is put into place. </p>

<i><u>Sources:</u></i> <a href="http://www.computer-security-glossary.org/dns_spoofing.html" target="_blank">http://www.computer-security-glossary.org/dns_spoofing.html</a> <br>
<i><u>Examples:</u></i> <a href="http://www.youtube.com/watch?v=ZwfUFlpTUdc" target="_blank">http://www.youtube.com/watch?v=ZwfUFlpTUdc</a><br>
<a href="http://www.youtube.com/watch?v=0hfYbQ90rZY" target="_blank">http://www.youtube.com/watch?v=0hfYbQ90rZY</a><br>
<a href="http://www.youtube.com/watch?v=vRuFB4ffxS0" target="_blank">http://www.youtube.com/watch?v=vRuFB4ffxS0</a><br>
<a href="http://www.youtube.com/watch?v=Aak6-B3JORE " target="_blank">http://www.youtube.com/watch?v=Aak6-B3JORE </a><br>

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
