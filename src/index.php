<?php

require_once "includes/main.php";

try {

	if($_POST['start']){
		$c = new StartController();
	}
	else if($_POST['session'] || $_GET['session']){
		$c = new SessionController();
	}
	else if($_POST['results']){
		$c = new ResultsController();
	}
	else if(empty($_POST)){
		$c = new HomeController();
	}
	else throw new Exception('Wrong page!');
	
	$c->handleRequest();
}
catch(Exception $e) {
	// Display the error page using the "render()" helper function:
	render('error',array('message'=>$e->getMessage()));
}

?>