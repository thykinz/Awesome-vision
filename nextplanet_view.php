<?php
require("db.php");
include 'header.php';
$id =$_REQUEST['as_is_id'];

$result = mysql_query("SELECT * FROM as_is WHERE as_is_id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$cat=$test['category'] ;
				$def= $test['definition'] ;					
				

if(isset($_POST['save']))
{	
	$cat_save = $_POST['cat'];
	$def_save = $_POST['def'];
	

	mysql_query("UPDATE as_is SET category ='$cat_save', definition ='$def_save' WHERE as_is_id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: asis_admin.php");			
}

if(isset($_POST['back']))
{	

	
	header("Location: asis_admin.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>Category:</td>
		<td><input type="text" name="cat" value="<?php echo $cat ?>"/></td>
	</tr>
	<tr>
		<td>Definition:</td>
		<td><input type="text" name="def" value="<?php echo $def ?>"/></td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
        
		<td>
            <input type="submit" name="back" value="Go back">
            <input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
