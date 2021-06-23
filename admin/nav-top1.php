	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="branded">
		<img src="img/chmsc.png" width="100" height="90">
 	</a> 
	<a class="brand">
	 <h1>Online Scheduling System</h1>
	 <div class="chmsc_nav"><font size="5" style="Bookman Old Style" color="white">Carlos Hilado Memorial State College</font></div>
 	</a>
<div class="time_top">	
<font color="orange">
  <?php
 $Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font>
<?php
$logout_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$type=$row['User_Type'];


?>
<p><font color="white">Welcome:<b><?php echo $type;?></b>
<?php echo $row['College'] ?></p></font>
</div>
	</div>
	</div>
	</div>