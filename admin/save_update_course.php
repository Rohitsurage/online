<?php 
include('dbcon.php');
include('session.php'); 

$get_id=$_POST['get_id'];
$CYS=$_POST['CYS'];
$Major=$_POST['Major'];
$Department=$_POST['Department'];


mysqli_query($conn,"update course set course_year_section='$CYS',major='$Major',Department='$Department' where course_id='$get_id'")or die(mysqli_error());



$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry Course','$CYS','$type')") or die(mysqli_error());


header('location:course.php');
?>