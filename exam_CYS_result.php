
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
</head> 
<body>
<div class="coat">
<div class="wrapper">
<div class="navbar navbar-fixed-top">
 <div class="navbar">
  <div class="navbar-inner">
  <div class="nav_jkl">
    <div class="container">
<ul class="nav">
<a class="brand" href="#">
<font color="white">Class Schedule Viewer</font>
</a>
  <li class="active">
    <a href="index.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
          <i class="icon-search icon-large"></i>Exam Schedule
          <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">

      <li><a data-toggle="modal" href="#exam_teacher">Teacher</a></li>
      <li><a  data-toggle="modal" href="#exam_CYS">Course Year Section</a></li>
      <li><a data-toggle="modal" href="#exam_room">Room</a></li>
    
    </ul>
  </li>
   <li class="divider-vertical"></li>
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
          <i class="icon-search icon-large"></i>Class Schedule
          <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
  
      <li><a data-toggle="modal" href="#teacher">Teacher</a></li>
      <li><a data-toggle="modal" href="#CYS">Course Year Section</a></li>
      <li><a href="#room"  data-toggle="modal">Room</a></li>
    
    </ul>
  </li>
      <li class="divider-vertical"></li>
  <li><a href="help.php" class="help" id="help"><i class="icon-question-sign icon-large"></i>Help</a></li>

    <li class="divider-vertical"></li>
  <li><a href="admin/index.php" class="admin"><i class="icon-user icon-large"></i>Admin Login</a></li>
 
	</ul>
    </div>
    </div>
  </div>
</div>
</div>

<div class="hero-unit">

</div>

<div class="hero-unit-bud">

<ul class="nav nav-tabs"> 
  <li class="active"><a href="" data-toggle="tab"><font color="white"><i class="icon-search icon-large"></i></font><font color="orange">Search Course Year Section</font></a></li>
</ul>

<div class="tab-content" id="printable">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">
  
 
<?php 

if (isset($_POST['save'])){
$CYS=$_POST['CYS'];
$semester=$_POST['semester'];
$sy=$_POST['sy'];

$search_query_all=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%' and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
$search_query=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%' and type='Exam'   and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
$search_query2=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%'and type='Exam'   and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
$search_query1=mysqli_query($conn,"select * from schedule where CYS like '%$CYS%' and semester like '%$semester%' and sy like '%$sy%'")or die(mysqli_error());
$count=mysqli_num_rows($search_query);
$count2=mysqli_num_rows($search_query2);
$row=mysqli_fetch_assoc($search_query1);
$row_all=mysqli_fetch_assoc($search_query_all);


$id=$row_all['schedule_id'];



?> 
<div class="teph">
<img src="img/logo.png" width="80" height="80">
</div>
<h2 class='_header'>Course Schedule</h2>
	<a class="btn btn-primary"  href="index.php">  <i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
<hr>
<h3><font color="green"><?php echo $row['CYS'];  ?></font></h3>
<h3>School year:&nbsp;<?php echo $row['sy']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
Semeter:&nbsp;<?php echo $row['semester']; ?>
</h3>

<?php if ($count != 0){ ?>



</br>
Exam Schedule
</br>
</br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Day</th>
      <th>Time Start</th>
      <th>Time End</th>
      <th>Proctor</th>
      <th>Subject</th>
      <th>Room</th>
    </tr>
  </thead>

  <tbody>
  	  <?php
while($search_rows=mysqli_fetch_array($search_query)){

?>
    <tr>

      <td width="110"><?php echo $search_rows['day']; ?></td>
      <td width="100"><?php echo $search_rows['time']; ?></td>
      <td width="100"><?php echo $search_rows['time_end']; ?></td>
      <td width="200"><?php echo $search_rows['teacher']; ?></td>
      <td width="300"><?php echo $search_rows['subject']; ?></td>
      <td width="130"><?php echo $search_rows['room']; ?></td>
<?php }}else{
echo 'No Schedule Available on MWF';
} ?>
	  </tr>
  </tbody>
</table>


</br>
	<button  id="print" class="btn btn-info" name="save"><i class="icon-print icon-large"></i>&nbsp;Print Schedule</button>
	</br>
	</br>
	<!-- <form method="POST" action="exam_excel_CYS.php">
	<input type="hidden" name="id_get" value="<?php echo $CYS; ?>">
	<input type="hidden" name="semester" value="<?php echo $semester; ?>">
	<input type="hidden" name="sy" value="<?php echo $sy; ?>">
	<button id="save_voter" class="btn btn-success" name="save"><i class="icon-download icon-large"></i>Download Excel File</button>
	</form> -->
<?php 

}

?>

  
  
     </div>


  </div>
  

</div>
</div>
<div class="hero-unit-bud">
 <div class="hero-unit-yy">
<p><font color="white"><b>Related Sites</b></font></p>
<a href="chmsc.edu.ph"><font color="white">chmsc.edu.ph</font></a> &nbsp;&nbsp;&nbsp;<a href="chmsc.edu.ph"><font color="white">psitschmscft.blogspot.com</font></a>&nbsp;&nbsp;&nbsp;
<a href="chmsc.edu.ph"><font color="white">chmscians.com</font></a> &nbsp;&nbsp;&nbsp;<a href="chmsc.edu.ph"><font color="white">chmscians.webs.com</font></a>&nbsp;&nbsp;&nbsp;
<a href="chmsc.edu.ph"><font color="white">thetechnopacer.journ.ph</font></a> &nbsp;&nbsp;&nbsp;<a href="chmsc.edu.ph"><font color="white">chmscconnectivity.blogspot.com</font></a>&nbsp;&nbsp;&nbsp;

</div>
</div>
<?php include('footer.php'); ?>
</div>
</div>


</body>


				<div class="modal hide fade" id="teacher">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

   
  <h2>Search Teacher Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_teacher_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="teacher" class="span33">
	<option>--Select--</option>
		<?php $teacher_query=mysqli_query($conn,"select * from teacher")or die(mysqli_error());
while($teacher_row=mysqli_fetch_array($teacher_query)){
	?>
	<font size="30"><option><?php echo $teacher_row['Name'] ?></option></font>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span33">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span33">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
  
  
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
				
				
								<div class="modal hide fade" id="CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">


  <h2>Search Course Year Section Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="CYS_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Course Year Section:</label>
    <div class="controls">
   <select name="CYS" class="span33">
	<option>--Select--</option>
	<?php $CYS_query=mysqli_query($conn,"select * from course")or die(mysqli_error());
while($CYS_row=mysqli_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['course_year_section']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span33">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span33">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
					<div class="modal hide fade" id="room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Rooms:</label>
    <div class="controls">
   <select name="room" class="span33">
	<option>--Select--</option>
	<?php $room_query=mysqli_query($conn,"select * from room")or die(mysqli_error());
while($room_row=mysqli_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span33">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span33">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
	
	
					<div class="modal hide fade" id="exam_teacher">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

   <noscript>
	<style>
		button,a{
			display: none !important;
		}
		table{
			width: 100%;
			border-collapse: collapse;
		}
		tr, td, th{
			border: 1px solid black;
		}
		.teph {
		    float: right;
		    margin-right: 30px;
		    position: relative;
		    top:-15px;
		}
		._header{
			padding-bottom: 30px;
		}

	</style>
</noscript>
<script>
   	$('#print').click(function(){
   		var content = $('#printable').clone()
   		var _ns = $('noscript').clone()
   		_ns.append(content)
   		var nw = window.open('Print','_blank','height=750,with=850')
   		nw.document.write(_ns.html())
   		nw.document.close()
   		setTimeout(function(){
		nw.print()
   		setTimeout(function(){
   			nw.close()
   		},750)
   		},1000)

   	})
   </script>
 <?php include('exm.php'); ?>
		
</html>



