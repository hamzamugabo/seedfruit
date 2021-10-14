<?php
   
  $dbC = mysqli_connect("localhost", "root", "", "seedfruit");
 
// Check connection
if($dbC === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// else{echo 'connected';}

?>