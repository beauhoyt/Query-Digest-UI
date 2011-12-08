<!DOCTYPE html>
<html>
    <head>
        <title>ptqdui</title>
        <link rel="stylesheet" href="css/cupertino/jquery-ui-1.8.16.custom.css" type="text/css" media="all" >
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" >
		<link rel="stylesheet" href="css/superfish.css" media="screen" >
			
        <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
		<script src="js/hoverIntent.js" type="text/javascript"></script>
		<script src="js/superfish.js" type="text/javascript"></script>
		<script src="js/supersubs.js" type="text/javascript"></script>
		
		<script> 
		   $(document).ready(function() { 
			   $('ul.sf-menu').superfish({ 
				   delay:       1000,                            // one second delay on mouseout 
				   animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
				   speed:       'fast',                          // faster animation speed 
				   autoArrows:  false,                           // disable generation of arrow mark-up 
				   dropShadows: false                            // disable drop shadows 
			   }); 
		   }); 
	   </script>
		
	</head>
	<body>

	<div id="navMenu">
		<ul id="menu" class="sf-menu">
			<li><a href="list-unreviewed.php">Unreviewed Queries</a></li>
			<li><a href="list-reviewed-seen.php">Seen after Reviewed Queries</a></li>
			<li><a href="list-reviewed.php">Reviewed Queries</a></li>
		</ul>
	</div>
	
	<div id="content">