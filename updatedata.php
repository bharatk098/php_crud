<?php
$student_idd = $_POST['sid'];
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];



$conn = mysqli_connect("localhost","root","","crudd") or die("connection uncessfull");

$sql = "UPDATE  student SET sname = '{$sname}', saddress = '{$saddress}', sclass = '{$sclass}', sphone = '{$sphone}' WHERE sid = {$student_idd}";


mysqli_query($conn,$sql) or die("query failed");



header("location: index.php");





?>