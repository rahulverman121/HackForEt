<?php
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$empid=$_POST['empid'];
$pass=$_POST['password'];
$sql = "insert into faculty(fname,lname,email,empid,password) values ('$fname','$lname','$email','$empid','$pass')";
if(mysqli_query($con,$sql))
{
echo "Faculty Registered Successfully.";

}
else
echo "error : " .mysqli_error($con) ;
?>