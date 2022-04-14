<?php
session_start();
unset($_SESSION['fname']);
unset($_SESSION['empid']);
unset($_SESSION['regno']);
header("location:index.html");
?>