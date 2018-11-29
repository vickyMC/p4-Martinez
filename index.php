<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="https://wayf.ucol.mx/ucol_mini.png"/>
    <link rel="shortcut" href="img/icon2-ucol-128.png"  type="image/x-icon" >
	<link rel="apple-touch-icon" href="https://wayf.ucol.mx/ucol_mini.png" />
	<link rel="manifest" href="manifest.json">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Asistencias">
	<link rel="apple-touch-icon" href="img/icon2-ucol-128.png">
	<meta name="application-name" content="Asistencias"/>
	<meta name="msapplication-TileImage" content="img/icon2-ucol-128.png">
	<meta name="msapplication-TileColor" content="#2F3BA2">
  </head>

  <body>
   <?php 
// Initialize site configuration
require_once('includes/config.inc.php');
// Get posts from database
$datosPer = Personas::getAll();
// Include page view
require_once(VIEW_PATH.'index.view.php');?>
    <script>
	    $( '#ini' ).on( 'click', function() {
		 	window.location.href = "planteles.php";
		});
		 if(navigator.userAgent.match(/Android/i)){
			window.scrollTo(0,1);
		}
    </script>
	<script src="index.js"></script>	
  </body>
</html>