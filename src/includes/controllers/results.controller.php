<?php

class ResultsController{
	
	public function handleRequest(){
		
		// Fetch all the results
		$results = Results::find(array('team'=>$_POST['results']));
		$name = Results::name(array('token'=>$_POST['results']));
		
		if(empty($results) || empty($name)){
			throw new Exception("There is no such category!");
		}
		
		render('results',array(
			'title'			=> 'Results',
			'results'		=> $results,
			'name'			=> $name
		));			
	}
	
}


?>