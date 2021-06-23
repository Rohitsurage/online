<?php
  require_once('OLEwriter.php');
  require_once('BIFFwriter.php');
  require_once('Worksheet.php');
  require_once('Workbook.php');
  require_once('connect.php');


  function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
// HTTP headers
HeaderingExcel('test.xls');// Creating a workbook
$workbook = new excel("-");
// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('AGS');
$worksheet1->freeze_panes(1, 0);


  $format =& $workbook->add_format();
  $format->set_size(20);
  $format->set_align('left');
  $format->set_color('black');
  $format->set_pattern();
  $format->set_fg_color('white');
  $format->set_border('1');

  

   $worksheet1->write_string(0,0,"Project",$format);











/////////////////
	

	$qryreport = mysqli_query($conn,"SELECT * FROM teacher") or die(mysqli_error());
	
	$sqlrows=mysqli_num_rows($qryreport);
	$j=0;
	
	WHILE ($reportdisp=mysqli_fetch_array($qryreport)) {
	$j=$j+1;
			$project = $reportdisp['FirstName'];
			 $leaderid = $reportdisp['teacher_id']; 
			 
			 $qryleader = mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='".$leaderid."'") or die(mysqli_error());
				$leader = mysqli_fetch_assoc($qryleader);
				
				$assignedto = $leader['FirstName'] . " " . $leader['FirstName'];
			
			 $worksheet1->write_string($j,0,"$project");
		 $worksheet1->write_string($j,1,"$project");
			 
	}
/////////////////
  
  
$workbook->close();
?>

