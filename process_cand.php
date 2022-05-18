<?php
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$number = $_REQUEST['txtNumber'];
$branch =  $_REQUEST['txtbranch'];
$rollno =  $_REQUEST['txtRollNo'];
$enroll =  $_REQUEST['txtEnrollID'];
$aadharNumber =  $_REQUEST['txtaadharNumber'];
$aadharCard =  $_REQUEST['txtaadharCard'];



//database connection
include('dbConnect.php');

$sql = "INSERT into candidates(name,email,mobile,branch,rollno,enrollid,aadharNumber,aadharCard) values(:name,:email,:mobile,:branch,:rollno,:enrollid,:aadharNumber,:aadharCard)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":mobile",$number);
$stmt->bindParam(":branch",$branch);
$stmt->bindParam(":rollno",$rollno);
$stmt->bindParam(":enrollid",$enroll);
$stmt->bindParam(":displayPicture",$displayPicture);
$stmt->bindParam(":aadharCard",$aadharCard);

$stmt->execute();

header('location: pending.php');
?>
