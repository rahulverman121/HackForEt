<?php
    session_start();     
    include('connection.php');
    $regno = $_POST['regno'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($regno);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $regno);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from student where regno = '$regno' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count != 0){  
            $_SESSION["regno"] = $row['regno'];
		$_SESSION["fname"] = $row['fname'];
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
    if(isset($_SESSION["regno"])) {
    header("Location:student.html");
    } 
?>  