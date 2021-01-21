<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo formatTitle($title)?></title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 

		<link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="assets/css/styles.css" />
		
		<script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.mobile-1.4.5.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>

	</head> 
	
	<body> 

		<div data-role="page">

			<div data-role="header" data-position="fixed">
				<h1><?php echo $title?></h1>
			</div>

			<div data-role="main" class="ui-content">
