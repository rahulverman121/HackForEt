<?php     
    $host = "localhost:3302";  
    $user = "root";  
    $password = '';  
    $db_name = "hackforet";  
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(!$con) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error()); 
}  

?>