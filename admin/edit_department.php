<?php include('session.php'); include('header.php'); include('dbcon.php'); 
$id_get=$_GET['id'];
?>
<body>
<?php include('nav-top1.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li>
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
   <li class="divider-vertical"></li>
  <li><a href="schedule.php"><i class="icon-group icon-large"></i>Class Schedule</a></li>
   <li class="divider-vertical"></li>
    <li><a href="exam_schedule.php"><i class="icon-group icon-large"></i>Exam Schedule</a></li>
   <li class="divider-vertical"></li>
  <li class="active"><a href="record.php"><i class="icon-list icon-large"></i>Entry</a></li>
   <li class="divider-vertical"></li>
  <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
     <li class="divider-vertical"></li>
  <li><a href="user_account.php"><i class="icon-user icon-large"></i>User Account</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>
</ul>
    </div>
    </div>
    </div>
    </div>
<div class="wrapper">



	

<div id="element" class="hero-body">
<div class="left-nav">
<ul class="nav nav-tabs nav-stacked">
  <li><a href="record.php"><font color="white">Teacher</font></a></li>
  <li><a href="course.php"><font color="white">Course Year/Section</font></a></li>
  <li><a href="subject.php"><font color="white">Subject</font></a></li>
  <li><a href="room.php"><font color="white">Room</font></a></li>
  <li class="active"><a href="department.php"><font color="white">Department</font></a></li>
  <li><a href="shool_year.php"><font color="white">School Year</font></a></li>

</ul>
</div>
<div class="right-nav-content">
<h2><font color="white">Edit Department</font></h2>
	<a class="btn btn-primary"  href="department.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	<form id="save_voter" class="form-horizontal">	
    <fieldset>
	</br>
	<div class="add_subject">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
        <input type="hidden" name="id_get" class="id_get" value="<?php echo $id_get;?>">
	
	<?php $result=mysqli_query($conn,"select * from departmet where department_id='$id_get'")or die(mysqli_error());
$row=mysqli_fetch_array($result);
	?>
	
	<div class="control-group">
    <label class="control-label" for="input01">Department:</label>
    <div class="controls">
   <select name="Department" class="Department" id="span9000">
	<option><?php echo  $row['department']; ?></option>
<?php 

$department=mysqli_query($conn,"select * from departmet")or die(mysqli_error());
while($row2=mysqli_fetch_array($department)){
?>
<option><?php echo $row2['department']; ?></option>	
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Person Incharge:</label>
    <div class="controls">
    <input type="text" id="span900" name="Person" class="Person" value="<?php echo $row['person_incharge']; ?>">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Title:</label>
    <div class="controls">
    <input type="text" id="span900" name="Title" class="Title" value="<?php echo $row['title']; ?>">
    </div>
    </div>
	
		

	


	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>

</div>


	</div>	

<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
			
	 
<script type="text/javascript">
$(document).ready( function () {

jQuery('#save_voter').submit(function(e){
    e.preventDefault();
var Title = jQuery('.Title').val();
var Person = jQuery('.Person').val();
var Department = jQuery('.Department').val();


	
    e.preventDefault();
if (Title && Person && Department){	
    var formData = jQuery(this).serialize();	
	
    jQuery.ajax({
        type: 'POST',
        url:  'update_department.php',
        data: formData,
             success: function(msg){
            showNotification({
message: "Department Entry Successfully Updated",
type: "success", 
autoClose: true, 
duration: 5 

});

		 var delay = 2000;
		setTimeout(function(){ window.location = 'department.php';}, delay);  
	
        }
    });
	
}else
{
alert('All fields are required!');
return false;
}	
});


});
</script>
