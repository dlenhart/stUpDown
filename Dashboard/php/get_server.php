<?php 
/*
	Author:  Drew D. Lenhart
	http://www.drewlenhart.com
	Date: 8/01/2015
	Page: get_server.php
	Desc: Queries database for server status, executed by status_refresh.js ajax.
	*/
require_once('../includes/database.class.php');
$db = database::getInstance();
?>

<div class="row" style="text-align: center">
	<?php
	$sql = 'SELECT * FROM srvr_status';
	$rows = $db->getData($sql);

	foreach ($rows as $row) : 
	    $entryID = $row['s_ID'];
	    $server = $row['s_server'];
	    $stat = $row['s_status'];
		$date = $row['s_date'];
		if($stat == "no"){
			//no = offline
			$out = "boxStatBad";
			$status = "Offline";
		}elseif($stat == "yes"){
			//yes = online
			$out = "boxStatGood";
			$status = "Online";
		}else{
			//else other than 1 or 0 make unknown.
			$out = "boxStatBad";
			$status = "Unknown Status";
		}
	    echo "<div class='col-xs-6 col-sm-3' style='margin-bottom: 4%'><div class='boxC'><div class='boxTitle'>" .  $server . "</div><div class='" . $out . "'>" . $status . "<br />". $date . "</div></div></div>";	
	endforeach;
	?>
</div>
<?php $db->closeConn() ?>