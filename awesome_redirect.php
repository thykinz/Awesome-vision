<?php
//Funktion för att antingen skicka användare till webbsida beroende på ifall kategorier för awesome vision är inlagda eller ej

require('db_connect.php');
require('header.php');


$mysqli=connect_db();



$url1 = "undefinedawesome.php";
$url2 = "main_awesome.php";

if ($result = $mysqli->query("SELECT category FROM planet_awesome")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

   if ($row_cnt > 0){
header('Location: ' . $url2);
    
}
    else {
      header('Location: ' . $url1);
}
    /* close result set */
    $result->close();
}

/* close connection */
$mysqli->close();

?>
