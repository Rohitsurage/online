<?php include('session.php'); include('header.php'); include('dbcon.php'); ?>
<body>
<?php include('nav-top1.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li>
    <a href="user_home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
   <li class="divider-vertical"></li>
  <li><a href="user_schedule.php"><i class="icon-group icon-large"></i>Class Schedule</a></li>
   <li class="divider-vertical"></li>
    <li><a href="CIT_exam_schedule.php"><i class="icon-group icon-large"></i>Exam Schedule</a></li>
   <li class="divider-vertical"></li>
  <li class="active"><a href="CIT_record.php"><i class="icon-list icon-large"></i>Entry</a></li>
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
  <li><a href="CIT_record.php"><font color="white">Teacher</font></a></li>
  <li><a href="CIT_course.php"><font color="white">Course Year/Section</font></a></li>
  <li><a href="CIT_subject.php"><font color="white">Subject</font></a></li>
  <li><a href="CIT_room.php"><font color="white">Room</font></a></li>
  <li><a href="CIT_department.php"><font color="white">Department</font></a></li>
  <li  class="active"><a href="CIT_shool_year.php"><font color="white">School Year</font></a></li>

</ul>
</div>
<div class="right-nav-content">
<h2><font color="white">Add School Year List</font></h2>
	<a class="btn btn-primary"  href="CIT_shool_year.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>

<form id="save_voter" class="form-horizontal">	
    <fieldset>
	</br>
	<div class="add_subject">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
    
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
    <input type="text" name="sy" class="sy">
    </div>
    </div>

	<div class="control-group">

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
var sy = jQuery('.sy').val();



	
    e.preventDefault();
if (sy){	
    var formData = jQuery(this).serialize();	
	
    jQuery.ajax({
        type: 'POST',
        url:  'save_school_year.php',
        data: formData,
             success: function(msg){
            showNotification({
message: "School Year Entry Successfully Added",
type: "success", 
autoClose: true, 
duration: 5 

});

		 var delay = 2000;
		setTimeout(function(){ window.location = 'CIT_shool_year.php';}, delay);  
	
        }
    });
	
}else
{
alert('field are required!');
return false;
}	
});


});
</script>