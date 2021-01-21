<?php

class Results{
	
	public static function find($arr = array()){
		global $db;
		
		if($arr['team']){
			$st = $db->prepare("SELECT * FROM shc_results WHERE team = :team");
		}
		else {
			throw new Exception("Unsupported property!");
		}
		
		$st->execute($arr);
		
		$data = $st->fetchAll();
		
		$sortData = array();
		
		foreach($data as $value){
			$sortData[$value['label']] += $value['value'];
		}
		
		return $sortData;
	}
	
	public static function name($arr = array()){
		global $db;
		
		if($arr['token']){
			$st = $db->prepare("SELECT name FROM shc_session WHERE token = :token");
		}
		else {
			throw new Exception("Unsupported property!");
		}
		
		$st->execute($arr);
		
		return $st->fetch();
	}
	
}

?>