<?php 
include('dbcon.php');
include('session.php'); 

$Monday=$_POST['Monday'];
$Tuesday=$_POST['Tuesday'];
$Wednesday=$_POST['Wednesday'];
$Thursday=$_POST['Thursday'];
$Friday=$_POST['Friday'];
$Saturday=$_POST['Saturday'];
$Sunday=$_POST['Sunday'];

if (isset($_POST['save'])){


$id_get=$_POST['id_get'];
$day=$Monday." ".$Tuesday." ".$Wednesday." ".$Thursday." ".$Friday." ".$Saturday." ".$Sunday;
$time_start=$_POST['time_start'];
$time_end=$_POST['time_end'];
$semester=$_POST['semester'];
$sy=$_POST['sy'];
$CYS=$_POST['CYS'];
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];
$room=$_POST['room'];



mysqli_query($conn,"update schedule set semester='$semester',sy='$sy',CYS='$CYS',subject='$subject',teacher='$teacher',room='$room',day='$day',time='$time_start',time_end='$time_end' where schedule_id='$id_get'")or die(mysqli_error());


$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Update Schedule','$time_start&nbsp;$time_end','$type')") or die(mysqli_error());
header('location:schedule.php');
}


?>