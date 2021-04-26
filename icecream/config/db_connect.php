<?php

 // Connect to database
 $conn = mysqli_connect('mysql.itbree.com', 'itbree', 'N3itizn0t', 'icecream_db');

 // Check Connection
 if(!$conn){
   echo 'Connection error: ' . mysqli_connect_error();
 }

?>