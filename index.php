<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
      <link rel="stylesheet" href="css/motion-ui.css" />
  </head>
  <body>
      <?php require 'header.php';
      ?>
<div class="stars">
    </div>
 
<div class="space"></div>
     

 
        

<div id="container">
  <div class="dot"></div>
  <div class="pulse"></div>
</div>


    
      <div class="preplanet"><a href="nextplanet_redirect.php">
          <img src="img/moon.png">          </a> 
                
        
        
    </div>
      
      <div class="asis"><a href="asis_redirect.php">
          
          <img src="img/earth.png">     </a>      
                
        
        
    </div>
      
      <div class="nextplanet">
     <img src="img/mars.png">           
                  
    </div>
      
      <div class="raket" onclick="raket();">
     <img src="img/rocket1.png">           
                
        
        
    </div>
      
 
      <div class="saturn">
     <img src="img/saturn.png">           
                
        
        
    </div>
      
      
       <div class="awesome"><a href="awesome_redirect.php">
           <img src="img/awesome.png">    </a>
        
        
    </div>
      
<div class="alien2">
<img src="img/alien3.png"></div>
    
    
         
    <footer class="row">
    
    <div class="medium-2 columns" id="cv1">
    Core Value 1
    </div>
    
    <div class="medium-2 columns" id="cv2">
    Core Value 2
    </div>
    
    <div class="medium-2 columns" id="cv3">
    Core Value 3
    </div>
    
    <div class="medium-2 columns" id="cv4">
    Core Value 4
    </div>
    
        <div class="medium-2 columns" id="cv5">
   <a data-open="exampleModal4"><button>Change core values</button></a>
    </div>
        
    
    </footer>
   
        
     
      

<div class="reveal" id="exampleModal4" data-reveal>
  <h2>Core values</h2>
  <p class="lead">Here you can change core values</p>
     <input type="text" id="value1">
     <input type="text" id="value2">
     <input type="text" id="value3">
     <input type="text" id="value4">
  <a class='button' onclick="changecore();" data-close aria-label="Close reveal" >Save</a>
 
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    
      

    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
<script src="js/foundation.reveal.js"></script>
<script src="js/foundation.util.box.js"> </script>
<script src="js/foundation.util.triggers.js"> </script>
<script src="js/foundation.util.mediaQuery.js"> </script>
<script src="js/foundation.util.motion.js"> </script>
<script src="js/motion-ui.js"> </script>
<script src="js/foundation.interchange.js"> </script>

    <script>
      $(document).foundation();
        
                function changecore()  {
               
    var userinput1= document.getElementById('value1').value;
    var userinput2= document.getElementById('value2').value;
    var userinput3= document.getElementById('value3').value;
    var userinput4= document.getElementById('value4').value;
    
        document.getElementById('cv1').innerHTML = userinput1;
        document.getElementById('cv2').innerHTML = userinput2;
        document.getElementById('cv3').innerHTML = userinput3;
        document.getElementById('cv4').innerHTML = userinput4;

}      
   
        
    
    
  
    </script>
  </body>
</html>
