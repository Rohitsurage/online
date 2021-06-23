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

//


//

$day=$Monday." ".$Tuesday." ".$Wednesday." ".$Thursday." ".$Friday." ".$Saturday." ".$Sunday;
$time_start=$_POST['time_start'];
$time_end=$_POST['time_end'];
$semester=$_POST['semester'];
$sy=$_POST['sy'];
$CYS=$_POST['CYS'];
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];
$room=$_POST['room'];

// conflic on schedule
$result=mysqli_query($conn,"select * from schedule where
day like '%Monday%' and day like '%Wednesday%' and day like '%Friday%'    
and time='$time_start'
and time_end='$time_end'
and room='$room'
and type=''") or die(mysqli_error());
$count=mysqli_num_rows($result);
$teacher1=mysqli_fetch_array($result);
$teacher_n=$teacher1['teacher'];

$tth=mysqli_query($conn,"select * from schedule where
day like '%Tuesday%' and day like '%Thursday%'  
and time='$time_start'
and time_end='$time_end'
and room='$room'
and type=''") or die(mysqli_error());
$count_tth=mysqli_num_rows($tth);
$teacher1_tth=mysqli_fetch_array($tth);
$teacher_n_tth=$teacher1_tth['teacher'];
// end 



// conflick on teacher 
$teacher2=mysqli_query($conn,"select * from schedule where
day like '%Monday%' and day like '%Wednesday%' and day like '%Friday%'  
and time='$time_start'
and time_end='$time_end'
and teacher='$teacher'
and type=''") or die(mysqli_error());
$teacher_row=mysqli_fetch_array($teacher2);
$count1=mysqli_num_rows($teacher2);
$teacher_1=$teacher_row['teacher'];

$tth1=mysqli_query($conn,"select * from schedule where
day like '%Tuesday%' and day like '%Thursday%'  
and time='$time_start'
and time_end='$time_end'
and teacher='$teacher'
and type=''") or die(mysqli_error());
$teacher_rowth=mysqli_fetch_array($tth1);
$count1th=mysqli_num_rows($tth1);
$teacher_1th=$teacher_rowth['teacher'];
//end 

// conflict on students
$students_query=mysqli_query($conn,"select * from schedule where
day like '%Monday%' and day like '%Wednesday%' and day like '%Friday%' 
and time='$time_start'
and time_end='$time_end'
and CYS='$CYS'
and type=''") or die(mysqli_error());
$students_row=mysqli_fetch_array($students_query);
$count2=mysqli_num_rows($students_query);
$student_2=$students_row['CYS'];

$students_queryth=mysqli_query($conn,"select * from schedule where
day like '%Tuesday%' and day like '%Thursday%'  
and time='$time_start'
and time_end='$time_end'
and CYS='$CYS'
and type=''") or die(mysqli_error());
$students_rowth=mysqli_fetch_array($students_queryth);
$count2th=mysqli_num_rows($students_queryth);
$student_2th=$students_rowth['CYS'];







if ($count == 1){ ?>


<script type="text/javascript">
alert('Schedule Already Taken<?php echo ' '.'by'." ". $teacher_n; ?>');
window.location="add_schedule.php";
</script>
<?php
}else if($count_tth == 1){ ?>
<script type="text/javascript">
alert('Schedule Already Taken<?php echo ' '.'by'." ". $teacher_n_tth; ?>');
window.location="add_schedule.php";
</script>
<?php
}
else if($count2 == 1){ ?>
<script type="text/javascript">
alert('<?php echo $student_2." ".'Already  have a Schedule on this Time'; ?>');
window.location="add_schedule.php";
</script>

<?php
}
else if($count2th == 1){ ?>
<script type="text/javascript">
alert('<?php echo $student_2th." ".'Already  have a Schedule on this Time'; ?>');
window.location="add_schedule.php";
</script>

<?php
}
else if($count1 == 1){ ?>
<script type="text/javascript">
alert('<?php echo $teacher_1." ".'Already  have a Schedule on this Time'; ?>');
window.location="add_schedule.php";
</script>

<?php
}
else if($count1th == 1){ ?>
<script type="text/javascript">
alert('<?php echo $teacher_1th." ".'Already  have a Schedule on this Time'; ?>');
window.location="add_schedule.php";
</script>
<?php
}else{
mysqli_query($conn,"insert into schedule (semester,sy,CYS,subject,teacher,room,day,time,time_end)
VALUES('$semester','$sy','$CYS','$subject','$teacher','$room','$day','$time_start','$time_end')")or die(mysqli_error());




$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add Schedule','$time_start&nbsp;$time_end','$type')") or die(mysqli_error());
header('location:schedule.php');
?>

<?php 
}
}

?>