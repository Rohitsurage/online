<?php 
include('dbcon.php');
include('session.php'); 


$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$User_Type=$_POST['User_Type'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$department=$_POST['department'];


mysqli_query($conn,"insert into users (UserName,Password,User_Type,FirstName,LastName,College)
VALUES('$UserName','$Password','$User_Type','$FirstName','$LastName','$department')")or die(mysqli_error());




$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add User','$FirstName&nbsp;$LastName','$type')") or die(mysqli_error());


header('location:user_account.php');
?>