<?php

class SessionController{
	
	public function handleRequest(){
		
		// Fetch all the results
		if(isset($_GET['session'])) $_POST['session'] = $_GET['session'];
		$validSession = Session::checkSession($_POST['session']);
		
		if($validSession){
			if($_POST['card']){
				Session::sendData($_POST['session'], $_POST['title'], $_POST['score'] );
			}
		}
		
		if($validSession){
			if(empty($_POST['card'])){
				render('session',array(
					'title'		=> 'Delivering Value',
					'card'		=> '1',
					'image'		=> "<img src='assets/img/delivering_value.jpg' alt='delivering_value' />",
					'firstText'	=> "We deliver on a regular basis things that make our product better. We're proud of it and our stakeholders are really happy.",
					'secondText'=> "Our deliveries are chaotics and don't improve our products. We feel ashamed to deliver it. Our stakeholders hate us."
				));	
			} else if ($_POST['card'] == 2) {
				render('session',array(
					'title'		=> 'Easy to release',
					'card'		=> '2',
					'image'		=> "<img src='assets/img/easy_release.jpg' alt='easy_release' />",
					'firstText'	=> "Releasing is simple, safe, painless and mostly automated.",
					'secondText'=> "Releasing is risky, painful, lots of manual work and takes forever."
				));	
			} else if ($_POST['card'] == 3) {
				render('session',array(
					'title'		=> 'Fun',
					'card'		=> '3',
					'image'		=> "<img src='assets/img/fun.jpg' alt='fun' />",
					'firstText'	=> "We love going to work and have great fun working together!",
					'secondText'=> "Boooooooring..."
				));	
			} else if ($_POST['card'] == 4) {
				render('session',array(
					'title'		=> 'Health of Codebase',
					'card'		=> '4',
					'image'		=> "<img src='assets/img/codebase.jpg' alt='codebase' />",
					'firstText'	=> "We're proud of the quality of our code! It is clean, easy to read and has great test coverage.",
					'secondText'=> "Our code is a pile of dung and technical debt is raging out of control."
				));
			} else if ($_POST['card'] == 5) {
				render('session',array(
					'title'		=> 'Learning',
					'card'		=> '5',
					'image'		=> "<img src='assets/img/learning.jpg' alt='learning' />",
					'firstText'	=> "We're learning lots of interesting stuff all the time!",
					'secondText'=> "We never have time to learn anything."
				));
			} else if ($_POST['card'] == 6) {
				render('session',array(
					'title'		=> 'Mission',
					'card'		=> '6',
					'image'		=> "<img src='assets/img/mission.jpg' alt='mission' />",
					'firstText'	=> "We know exactly why we are here and we’re really excited about it!",
					'secondText'=> "We have no idea why we are here, there's no high level picture or focus. Our so called mission is completely unclear and uninspiring."
				));
			} else if ($_POST['card'] == 7) {
				render('session',array(
					'title'		=> 'Pawns of players',
					'card'		=> '7',
					'image'		=> "<img src='assets/img/pawns_players.jpg' alt='pawns_players' />",
					'firstText'	=> "We are in control of our own destiny! We decide what to build and how to build it.",
					'secondText'=> "We are just pawns in a game of chess with no influence over what we build or how we build it."
				));
			} else if ($_POST['card'] == 8) {
				render('session',array(
					'title'		=> 'Speed',
					'card'		=> '8',
					'image'		=> "<img src='assets/img/speed.png' alt='speed' />",
					'firstText'	=> "We get stuff done really quickly! No waiting and no delays.",
					'secondText'=> "We never seem to get anything done. We keep getting stuck or interrupted. Stories keep getting stuck on dependencies."
				));
			} else if ($_POST['card'] == 9) {
				render('session',array(
					'title'		=> 'Suitable process',
					'card'		=> '9',
					'image'		=> "<img src='assets/img/suitable_process.jpg' alt='suitable_process' />",
					'firstText'	=> "Our way of working fits us perfectly!",
					'secondText'=> "Our way of working sucks!"
				));
			} else if ($_POST['card'] == 10) {
				render('session',array(
					'title'		=> 'Support',
					'card'		=> '10',
					'image'		=> "<img src='assets/img/support.jpg' alt='support' />",
					'firstText'	=> "We always get great support and help when we ask for it!",
					'secondText'=> "We keep getting stuck because we can't get the support and help that we ask for."
				));
			} else if ($_POST['card'] == 11) {
				render('session',array(
					'title'		=> 'Teamwork',
					'card'		=> '11',
					'image'		=> "<img src='assets/img/teamwork.jpg' alt='teamwork' />",
					'firstText'	=> "We are a super-team with awesome collaboration!",
					'secondText'=> "We are a bunch of individuals that neither know nor care about what the other people in the squad are doing."
				));
			} else if ($_POST['card'] == 12) {
				render('home',array(
					'title'		=> 'Squad Health Check',
					'content'	=> 'Thank you.'
				));
			}
		} else {
			render('home',array(
				'title'		=> 'Squad Health Check',
				'content'	=> 'Wrong token.'
			));
		}
		
	}
	
}

?>