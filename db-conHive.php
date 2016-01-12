<?php
    $username = "ontopgam_bee";
    $password = "Pokemon22";
    $hostname = "localhost"; 
    $database = "ontopgam_bee_database";
    
    $cnxn = @mysqli_connect($hostname, $username, $password, $database) 
        or die ("Error connecting to database: " .
                mysqli_connect_error());
?>