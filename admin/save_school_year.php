<?php 
include('dbcon.php');
include('session.php'); 


if (isset($_POST['save'])){

$sy=$_POST['sy'];



$query=mysqli_query($conn,"select * from sy where sy='$sy'")or die('Query error.');
$rows=mysqli_fetch_array($query);
$count=mysqli_num_rows($query);


if ($count==1){
?>
<script type="text/javascript">
alert('Entry Already Exist');
window.location="add_school_year.php";
</script>
<?php  
}else{


mysqli_query($conn,"insert into sy (sy)
VALUES('$sy')")or die(mysqli_error());

$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


mysqli_query($conn,"insert into history (date,action,data,user)
VALUES (NOW(),'Add Entry School Year','$sy','$type')") or die(mysqli_error());

header('location:shool_year.php');
}
}
?>