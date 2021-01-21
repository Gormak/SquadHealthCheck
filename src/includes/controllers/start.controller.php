<?php

class StartController{
	
	public function handleRequest(){
		
		$content = Start::random(5, $_POST['start']);
		$state = Start::sendMail($_POST['start'], $content);
		
		render('start',array(
			'title'		=> 'New Session',
			'team'		=> $_POST['start'],
			'content'	=> $content
		));
		
	}
	
}

?>
