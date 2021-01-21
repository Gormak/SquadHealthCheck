<?php

/* This controller renders the home page */

class HomeController{
	
	public function handleRequest(){
		
		//$content = Results::find();
		$content = "";
		
		render('home',array(
			'title'		=> 'Squad Health Check',
			'content'	=> $content
		));
		
	}
	
}

?>