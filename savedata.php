<?php

 $sname = $_POST['sname'];
 $saddress = $_POST['saddress'];
 $sclass = $_POST['class'];
 $sphone = $_POST['sphone'];



$conn = mysqli_connect("localhost","root","","crudd") or die("connection uncessfull");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$sname}','{$saddress}','{$sclass}','{$sphone}')";


mysqli_query($conn,$sql) or die("query failed");



header('location: index.php');

mysqli_close($conn);





?>

<a href="index.php">home page</a>