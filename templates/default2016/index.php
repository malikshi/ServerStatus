<!DOCTYPE html>
<html>
	<head>
		<title>Uptime | <?php echo $title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo $template; ?>bs/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $template; ?>css/custom.css" rel="stylesheet">
		<style>
			body { padding-top: 60px; }
			@media (max-width: 979px) {
  				body { padding-top: 0px; }
			}
		</style>
	</head>
<body>
	<div class="navbar navbar-fixed-top special-header">
	  <div class="navbar-inner">
	  	<div class="container" >
		    <a class="navbar-brand" href="index.php">ServerStatus Live</a><a class="navbar-brand" style="float:right;" href="outages.php">Outages</a>
		</div>
	  </div>
	</div>

	<div class="container content">
		<table class="table table-striped table-condensed">
			<?php echo $sTable; ?>
		</table>
	</div>
	
	<div class="container">
		<p style="text-align: center; font-size: 10px;">We are showing <?php echo $rtype; ?> resources.<br /><a href="https://www.qwdsa.com/converse/threads/serverstatus-rebuild.43/">ServerStatus</a> by <a href="http://www.mojeda.com">Michael Ojeda</a> and <a href="http://www.cameronmunroe.com/">Cameron Munroe</a></p>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="<?php echo $template; ?>bs/js/bootstrap.min.js"></script>
	<?php echo $sJavascript; ?>
</body>
</html>
