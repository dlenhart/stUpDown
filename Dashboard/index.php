<?php
/*
	Author:  Drew D. Lenhart
	http://www.drewlenhart.com
	Page: index.php
	Desc: Main view screen.	Displays server status.
	*/

include("includes/header.php"); 
include("includes/navbar.php"); ?>

<article>
<h1>Server Status</h1>
<br />
<div class="container-fluid">

<div id="server"></div>
</div>
</article>
<!--Ajax file-->
<script src="resources/js/status_refresh.js" type="text/javascript"></script>
<?php include("includes/footer.php"); ?>