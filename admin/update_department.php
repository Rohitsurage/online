<?php 
include('dbcon.php');
include('session.php'); 

$id_get=$_POST['id_get'];
$Title=$_POST['Title'];
$Person=$_POST['Person'];
$Department=$_POST['Department'];


mysqli_query($conn,"update departmet set department='$Department',title='$Title',person_incharge='$Person' where department_id='$id_get'")or die(mysqli_error());


$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry Department','$Department','$type')") or die(mysqli_error());

?>