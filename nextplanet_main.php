<?php
require('db_connect.php');
require('header.php');
    
echo "<a href='main_awesome.php'><img src='img/awesomeplanet.png' width='618' height='73' alt='Awesome Vision' /></a>";
        
        
        // Gets the function connect_db() and stores it in vector $mysql
        $mysql=connect_db();
        
        // query that selects everything from the table planet_awesome
        $sql="SELECT * FROM as_is";
        
        //stores the result of the query and connection to the database in vector $result
        $result=$mysql->query($sql);
        
        // creates a split vector for looping trough the categories
        $split=0;
        
        ?>
        
        <!-- create a table -->
        <table class="awesomecategories">
        
        <?php
        
        while ($row=$result->fetch_assoc()){
            // creates a row for the table
            echo "<td class='awesomerow'>"
            // echoes the information from the db    
            . "<p>" . $row['category'] . "</p>"   
                
        
            
            . "<p>  <img src='." . $row['definition'] . "' class='awesomeavatar'></p>";
        
        
        // Counts the split 
        $split++;
        
        // when the split is equal to 6 (started from 0), then a new row will be created
        if($split%6==0){
            echo "</tr><tr>";
        }   // finishes the split
    
    }   //end of while-loop

// end of table
echo "</tr></table>";
                
        ?>
      
            
        
        <div id="edit">
       <a href="asis_admin.php"><img src="img/edit.png"></a> 
    
   </div>
  
            
            <!--<div class="stars">
    </div>
 
<div class="space"></div>
  
   


   -->
 




