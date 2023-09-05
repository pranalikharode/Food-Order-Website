<?php

   // start Session
   session_start();

    // create constants to store non repeating values
    define('SITEURL' , 'http://localhost/food-order/') ;
    define('LOCALHOST' , 'localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','food-order');

    

    // $conn = mysqli_connect('localhost' , 'root' , '') or die(mysqli_error());
    // $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());

    // die is used to stop the process and mysqli_query is used to execute the query 

     $conn = mysqli_connect(LOCALHOST , DB_USERNAME , DB_PASSWORD) or die(mysqli_error($conn));   // database connection 
     $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));  // selecting database

?>
