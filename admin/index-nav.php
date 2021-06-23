	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="branded">
		<img src="img/chmsc.png" width="100" height="90">
 	</a> 
	<a class="brand">
	 <h1>Online Scheduling System</h1>
	 <div class="chmsc_nav"><font size="5" color="white">Carlos Hilado Memorial State College</font></div>
 	</a>
<div class="time_top">	
<font color="orange">
  <?php
 $Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font>
<br>
	<a href="../index.php" class="btn btn-warning"><i class="icon-arrow-left icon-large"></i>&nbsp;Back to Home</a>
	
</div>
	</div>
	</div>
	</div>