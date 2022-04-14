<?php
    session_start();     
    include('connection.php');
    $empid = $_POST['empid'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($empid);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $empid);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from faculty where empid = '$empid' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count != 0){  
            $_SESSION["empid"] = $row['empid'];
		$_SESSION["fname"] = $row['fname'];
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
		  
        }
    if(isset($_SESSION["empid"])) {
    header("Location:teacher.php");
    } 
?>  