<?php

class Session{
	
	public static function checkSession($token){
		global $db;
		
		$st = $db->prepare("SELECT * FROM shc_session WHERE token=:token");
		
		$st->execute(['token' => $token]);
		
		return $st->fetch();
	}
	
	public static function sendData($team, $label, $value){
		global $db;
		
		$data = [
			'team' => $team,
			'label' => $label,
			'value' => $value
		];
		$sql = "INSERT INTO shc_results (team, label, value) VALUES (:team, :label, :value)";
		$stmt= $db->prepare($sql);
		$stmt->execute($data);
		
	}
	
}

?>