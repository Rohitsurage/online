<?php
  require_once('OLEwriter.php');
  require_once('BIFFwriter.php');
  require_once('Worksheet.php');
  require_once('Workbook.php');
  require_once('connect.php');
  
  $id_get=$_POST['id_get'];
  $semester=$_POST['semester'];
  $sy=$_POST['sy'];

    function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
	  
	  // HTTP headers
HeaderingExcel('teacher.xls');// Creating a workbook
$workbook = new excel("-");
// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('teacher');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 25);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 10);






$query=mysqli_query($conn,"select * from schedule where  teacher='$id_get' and semester='$semester' and sy='$sy'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
$name=$row['teacher'];
$sy=$row['sy'];
$semester=$row['semester'];

   $worksheet1->write_string(0,0,"Class Schedule");
   $worksheet1->write_string(2,0,"$name");
   $worksheet1->write_string(3,0,"School Year: $sy");
   $worksheet1->write_string(3,1,"Semester: $semester");
   $worksheet1->write_string(6,0,"MWF Schedule");
   $worksheet1->write_string(7,0,"Time");
   $worksheet1->write_string(7,1,"Course Year Section");
   $worksheet1->write_string(7,2,"Subject");
   $worksheet1->write_string(7,3,"Room");
   $worksheet1->write_string(19,0,"TTH Schedule");
   $worksheet1->write_string(20,0,"Time");
   $worksheet1->write_string(20,1,"Course Year Section");
     $worksheet1->write_string(20,2,"Subject");
   $worksheet1->write_string(20,3,"Room");






/////////////////
	

	$qryreport = mysqli_query($conn,"SELECT * FROM schedule where teacher='$id_get' and type='' and day='MWF' and semester='$semester' and sy='$sy'") or die(mysqli_error());
	
	$sqlrows=mysqli_num_rows($qryreport);
	$j=7;
	
	WHILE ($reportdisp=mysqli_fetch_array($qryreport)) {
	$j=$j+1;
			$project = $reportdisp['time'];
			$time_end = $reportdisp['time_end'];
			$CYS = $reportdisp['CYS'];
			$subject = $reportdisp['subject'];
			$room = $reportdisp['room'];
			
			
			
			 $leaderid = $reportdisp['teacher']; 
			 
			 $qryleader = mysqli_query($conn,"SELECT * FROM schedule WHERE teacher='".$leaderid."' and type='' and day='MWF' and semester='$semester' and sy='$sy'") or die(mysqli_error());
				$leader = mysqli_fetch_assoc($qryleader);
				
				$assignedto = $leader['time'];
			
			 $worksheet1->write_string($j,0,"$project-$time_end");
		 $worksheet1->write_string($j,1,"$CYS");
		 $worksheet1->write_string($j,2,"$subject");
		 $worksheet1->write_string($j,3,"$room");
			 
	}
	
	
	
/////////////////
  
  
	$qryreport1 = mysqli_query($conn,"SELECT * FROM schedule where teacher='$id_get' and type='' and day='TTH' and semester='$semester' and sy='$sy'") or die(mysqli_error());
	
	$sqlrows=mysqli_num_rows($qryreport1);
	$j=20;
	
	WHILE ($reportdisp=mysqli_fetch_array($qryreport1)) {
	$j=$j+1;
			$project = $reportdisp['time'];
			$time_end = $reportdisp['time_end'];
			$CYS = $reportdisp['CYS'];
			$subject = $reportdisp['subject'];
			$room = $reportdisp['room'];
			
			
			
			 $leaderid = $reportdisp['teacher']; 
			 
			 $qryleader = mysqli_query($conn,"SELECT * FROM schedule WHERE teacher='".$leaderid."' and type='' and day='TTH' and semester='$semester' and sy='$sy'") or die(mysqli_error());
				$leader = mysqli_fetch_assoc($qryleader);
				
				$assignedto = $leader['time'];
			
		 $worksheet1->write_string($j,0,"$project-$time_end");
		 $worksheet1->write_string($j,1,"$CYS");
		 $worksheet1->write_string($j,2,"$subject");
		 $worksheet1->write_string($j,3,"$room");
			 
	}
  
  
$workbook->close();
?>