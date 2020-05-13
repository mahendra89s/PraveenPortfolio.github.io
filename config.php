<?php
    $host="localhost";
    $username="root";
    $pass="";
    $db="portfolio";

    $con = new mysqli( $host , $username , $pass , $db );
    
    if( $con->connect_error){
        die("Failed To connect Database!!");
    }
?>