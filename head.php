<!DOCTYPE html>
<?php 
	require_once("sitesettings.php"); 
	require_once("common_functions.php");
	// echo 'OK:' . getAssignQueryString('lang','test');
?>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Software Force services include web development, application developement out sourcing and ERP package">
    <meta name="author" content="Software Force">
    <link rel="icon" href="favicon.ico">

    <title>Software Force</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/site.css" rel="stylesheet">
  </head>
  <body class = "<?php echo "lang_$lang"; ?>">
	<!-- NAVBAR
	================================================== -->
	<div class="navbar-wrapper">
		<div class="container">
	
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
                            <a class="navbar-brand text-hide" href="#"><?php echo $msg["CompanyName"]; ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				<li <?php echo $url_basePage == "index.php" ? 'class="active"' : '';  ?> ><a href="index.php?lang=<?php echo $lang ?>"><?php echo $msg["Home"]; ?></a></li>
				<li <?php echo $url_basePage == "about.php" ? 'class="active"' : '';  ?> ><a href="about.php?lang=<?php echo $lang ?>"><?php echo $msg["About"]; ?></a></li>
                                <li <?php echo $url_basePage == "contact.php" ? 'class="active"' : '';  ?> ><a href="contact.php?lang=<?php echo $lang ?>"><?php echo $msg["Contact"]; ?></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $msg["Language"]; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a <?php echo isset($_GET['lang']) && strnatcasecmp($_GET['lang'], 'zh') === 0 ? 'class="selected"' : "href='" . getAssignQueryString('lang','zh') . "'" ; ?>><?php echo $msg["Chinese"]; ?></a></li>
					<li><a <?php echo isset($_GET['lang']) && strnatcasecmp($_GET['lang'], 'en') === 0 ? 'class="selected"' : "href='" . getAssignQueryString('lang','en') . "'" ; ?>><?php echo $msg["English"]; ?></a></li>
				</ul>
				</li>
				</ul>
			</div>
			</div>
		</nav>
	
		</div>
	</div>
 