<?php
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$semester=$_POST['sem'];
$regno=$_POST['regno'];
$pass=$_POST['password'];
$sql = "insert into student(fname,lname,email,semester,regno,password) values ('$fname','$lname','$email','$semester','$regno','$pass')";
if(mysqli_query($con,$sql))
{
echo "Student Registered Successfully.";
}
else
echo "error : " .mysqli_error($con) ;
?>