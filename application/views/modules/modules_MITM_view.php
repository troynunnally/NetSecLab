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
          <h2>Man in the Middle (MITM)</h2>
          <p><b>Definition</b> - What does Man-in-the-Middle Attack (MITM) mean?
A man-in-the-middle (MITM) attack is a form of eavesdropping where communication between two users is monitored and modified by an unauthorized party. Generally, the attacker actively eavesdrops by intercepting a public key message exchange and retransmits the message while replacing the requested key with his own. </p>

<p>In the process, the two original parties appear to communicate normally. The message sender does not recognize that the receiver is an unknown attacker trying to access or modify the message before retransmitting to the receiver. Thus, the attacker controls the entire communication.This term is also known as a janus attack or a fire brigade attack.</p>

<i><u>Sources:</u></i> <a href="http://www.techopedia.com/definition/4018/man-in-the-middle-attack-mitm" target="_blank">http://www.techopedia.com/definition/4018/man-in-the-middle-attack-mitm</a> <br>
<i><u>Examples:</u></i> <a href="http://www.youtube.com/watch?v=-hd7XG-b6ukhttp://www.youtube.com/watch?v=CVnOt0qJTa8&NR=1&feature=fvwp" target="_blank">http://www.youtube.com/watch?v=-hd7XG-b6uk</a><br>
<a href="http://www.youtube.com/watch?v=CVnOt0qJTa8&NR=1&feature=fvwp" target="_blank">http://www.youtube.com/watch?v=CVnOt0qJTa8&NR=1&feature=fvwp</a>

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
