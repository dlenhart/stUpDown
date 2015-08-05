<?php 
/*
	Author:  Drew D. Lenhart
	http://www.drewlenhart.com
	Page: includes/validator.php
	Date: 8/01/2015
	Desc: Form Validation... thank you W3C.org!!
	*/

function validator($input){
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;  
}


?>

