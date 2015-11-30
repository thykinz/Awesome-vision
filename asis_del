<?php
  include("db.php");  

	$id =$_REQUEST['as_is_id'];
	
	
	// sending query
	mysql_query("DELETE FROM as_is WHERE as_is_id = '$id'")
	or die(mysql_error());  	
	
	header("Location: asis_admin.php");
?>
