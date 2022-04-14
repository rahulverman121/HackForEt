<?php
include('connection.php');
$semester=$_POST['sem'];
$subject=$_POST['subject'];
$module=$_POST['module'];
$youtube=$_POST['youtubelink'];
$weblink=$_POST['reflink'];
$target_dir = "assets/";
$target_file = $target_dir . basename($_FILES["notes"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["notes"]["tmp_name"], $target_file);

$sql = "insert into materials(semester,subject,module,youtube,weblink,files) values ('$semester','$subject','$module','$youtube','$weblink','$target_file')";

if(mysqli_query($con,$sql))
{
echo "success";
}
else
echo "error : " .mysqli_error($con) ;

?>