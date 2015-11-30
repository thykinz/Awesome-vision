<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
</head>

<body>
<form method="post">
<table>

	<tr>
		<td>Category:</td>
		<td><input type="text" name="cat" /></td>
	</tr>
	<tr>
		<td>Definition</td>
		<td><input type="text" name="def" /></td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td> <input type="submit" name="back" value="Go back">
            <input type="submit" name="submit" value="Add" /></td>
	</tr>
</table>
<?php
include 'header.php';
if (isset($_POST['submit']))
	{	   
	include 'db.php';
    
	
			 		$cat=$_POST['cat'] ;
					$def= $_POST['def'] ;					
					
					
												
		 mysql_query("INSERT INTO `as_is`(category,definition) 
		 VALUES ('$cat','$def')"); 
				
				
	        }

if(isset($_POST['back']))
{	

	
	header("Location: asis_redirect.php");			
}

?>
</form>
<table border="1">
	
			<?php
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM as_is");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['as_is_id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['category']."</font></td>";
				echo"<td><font color='black'>". $test['definition']. "</font></td>";
					
				echo"<td> <a href ='asis_view.php?as_is_id=$id'>Edit</a>";
				echo"<td> <a href ='asis_del.php?as_is_id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>

</body>
</html>
