<?php
/*
	Author:  Drew D. Lenhart
	http://www.drewlenhart.com
	Date: 8/01/2015
	Page: api/index.php
	Desc: poor mans api for Updating server status:  http://localhost/api/index.php?server=192.168.1.2&status=true
	-Uses post
	*/

require_once('../includes/database.class.php');
include('../includes/validator.php');
$db = database::getInstance();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST['status']) && !empty($_POST['server']) && !empty($_POST['time'])) {
		$grab_server = validator($_POST['server']);
		$grab_stat = validator($_POST['status']);
		$grab_time = validator($_POST['time']);
		
		$data = array($grab_stat, $grab_time, $grab_server);
		
		$sql="UPDATE srvr_status SET s_status=?, s_date=? WHERE s_server=?";
        $result = $db->updateData($sql, $data);
		if(!$result){
            die("Database query failed: update server info.");
        }else{
             $answer = "success!";
			 echo $answer;
        }
	}
	else { 
		echo "Invalid Parameters!"; 
	}
}
?>