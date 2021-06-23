<?php 
include('dbcon.php');
include('session.php'); 

if (isset($_POST['save'])){

$day=$_POST['day'];
$time_start=$_POST['time_start'];
$time_end=$_POST['time_end'];
$semester=$_POST['semester'];
$sy=$_POST['sy'];
$CYS=$_POST['CYS'];
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];
$room=$_POST['room'];

$result=mysqli_query($conn,"select * from schedule where
day='$day' 
and time='$time_start'
and time_end='$time_end'
and room='$room'
and type=''") or die(mysqli_error());
$count=mysqli_num_rows($result);

if ($count == 1){ ?>
<script type="text/javascript">
alert('Schedule Already Taken');
window.location="COE_add.php";
</script>
<?php
}else{



if ($day=='Monday'){

mysqli_query($conn,"insert into schedule (semester,sy,CYS,subject,teacher,room,day,time,time_end,day1)
VALUES('$semester','$sy','$CYS','$subject','$teacher','$room','$day','$time_start','$time_end','MWF')")or die(mysqli_error());




$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add Schedule','$time_start&nbsp;$time_end','$type')") or die(mysqli_error()); ?>
<script type="text/javascript">
alert('Schedule Successfully Added');
window.location="COE_schedule.php";
</script>
<?php 
}else if($day=='Tuesday'){
mysqli_query($conn,"insert into schedule (semester,sy,CYS,subject,teacher,room,day,time,time_end,day1)
VALUES('$semester','$sy','$CYS','$subject','$teacher','$room','$day','$time_start','$time_end','TTH')")or die(mysqli_error());




$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add Schedule','$time_start&nbsp;$time_end','$type')") or die(mysqli_error()); ?> 
<script type="text/javascript">
alert('Schedule Successfully Added');
window.location="COE_schedule.php";
</script>
<?php 
}else if($day=='Wensday'){

mysqli_query($conn,"insert into schedule (semester,sy,CYS,subject,teacher,room,day,time,time_end,day1)
VALUES('$semester','$sy','$CYS','$subject','$teacher','$room','$day','$time_start','$time_end','MWF')")or die(mysqli_error());




$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add Schedule','$time_start&nbsp;$time_end','$type')") or die(mysqli_error()); ?>
<script type="text/javascript">
alert('Schedule Successfully Added');
window.location="COE_schedule.php";
</script>
<?php 
}else if ($day=='Thursday'){
mysqli_query($conn,"insert into schedule (semester,sy,CYS,subject,teacher,room,day,time,time_end,day1)
VALUES('$semester','$sy','$CYS','$subject','$teacher','$room','$day','$time_start','$time_end','TTH')")or die(mysqli_error());




$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add Schedule','$time_start&nbsp;$time_end','$type')") or die(mysqli_error());
?>
<script type="text/javascript">
alert('Schedule Successfully Added');
window.location="COE_schedule.php";
</script>
<?php
}else if ($day=='Friday'){
mysqli_query($conn,"insert into schedule (semester,sy,CYS,subject,teacher,room,day,time,time_end,day1)
VALUES('$semester','$sy','$CYS','$subject','$teacher','$room','$day','$time_start','$time_end','MWF')")or die(mysqli_error());




$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add Schedule','$time_start&nbsp;$time_end','$type')") or die(mysqli_error());
?>
<script type="text/javascript">
alert('Schedule Successfully Added');
window.location="COE_schedule.php";
</script>
<?php 

}
}
}
?>