
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>

<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more').hide();
		
		 $("#click").click(function () {
      $(".more").toggle("slow");
      $("#click").hide("slow");
    });
	
	

		
		});
</script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more1').hide();
		
		 $("#click1").click(function () {
      $(".more1").toggle("slow");
      $("#click1").hide("slow");
    });
	
	

		
		});
</script>

</head> 
<body>

<div class="coat">

<div class="wrapper_home">
<div class="navbar navbar-fixed-top">
 <div class="navbar">
  <div class="navbar-inner1">
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
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="img/1.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/2.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/3.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/4.jpg" width="1090" height="250"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>

<div class="hero-unit-bud">
<div class="jkl">
<a href="http://www.facebook.com/" class="facebook"><img src="img/facebook.png"/></a>&nbsp;&nbsp;<img src="img/email_32.png"/>&nbsp;&nbsp;<img src="img/rss_32.png"/>&nbsp;&nbsp;<img src="img/twitter_32.png"/>
&nbsp;&nbsp;<img src="img/blogger.png"/>
</div>
<ul class="nav nav-tabs"> 
  <li class="active"><a class="news" href="#home" data-toggle="tab"><font color="white"><i class="icon-list-alt icon-large"></i></font><font color="orange">News And Events</font></a></li>
  <li><a class="about" href="#profile" data-toggle="tab"><font color="white"><i class=" icon-info-sign icon-large"></i></font><font color="orange">About Chmsc</a></font></li>
  <li><a class="site" href="#settings" data-toggle="tab"><font color="white"><i class="icon-sitemap icon-large"></i></font><font color="orange">Site Map</a></font></li>

  <li><a class="calendar" href="#calendar" data-toggle="tab"><font color="white"><i class="icon-calendar icon-large"></i></font><font color="orange">Calendar of Events</a></font></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

  
<p><h3>CHMSC holds Turnover Ceremony for College Presidency</h3></p>
<p>By Roberto Sumilang and Vanessa Abigail Ledesma</p>
<hr width="700">
<div class="index-text">
Carlos Hilado Memorial State College welcomes Dr. Renato M. Sorolla as the newly elected College President during the Turnover Ceremony,
 at CHMSC – Talisay Multi-purpose Hall, July 9, 2012. Dr. Sorolla was the former Dean of the College Industrial Technology of Western Visayas College of Science and Technology (WVCST).

Dr. Benny A. Palma, the outgoing CHMSC President warmly relinquised the office after his 4 years of service. The program highlights the turning over of the College Maze,
 Banner, and Medal as well as the budget, projects, 371 faculty members, 169 staff and 11,069 students.

“Thanks for all the learning I’ve got after four years of my stay here at CHMSC. I will cherish it all my life, together with my family,” Dr. Palma shared in his speech.

<p>Dr. Sorolla stated all his primary visions, plans, and programs for the College.</p>

<div class="more1">
<p>
“Today, I am honored to be given this opportunity for stewardship of a good college. Dr. Palma has done a lot of effort. I know that my ability and inspiration in teaching, education and leadership management keep me fitted for this one of a kind duty.” Dr. Sorolla said.

“I am fully aware that the goal is to make CHMSC a center of excellence, a center of development. But I would like to remind you that I did not come here as a one man army. With your full cooperation and active participation, together, we can make CHMSC fit for its statutory functions," Dr. Sorolla added.

 </p>
</div>

<button class="btn btn-info" id="click1"><i class="icon-share icon-large"></i>&nbsp;Read More</button>

</div>
<div class="turn-over">
<a  class="pic2" data-toggle="modal" href="#pic"><img src="img/turnover.jpg" width="300" height="250"/></a>

</div>
     </div>
	</br>
  <div class="hero-unit-y">
<p><h3>Torrico Take oath of Office</h3></p>
<hr>

<p>By Joefell Francis Balagosa with reports from Gyler Ann Granja</p>



JULY 13, 2012 became a talk of the day as CHMSC finally proclaimed its new set of Supreme Student Government (SSG) officers through the manner of voting held at the assigned precinct rooms.

Arnel Torrico, BSED III-A, of PARAGON Party won the presidency garnering 1, 642 total votes.

Meanwhile, Torrico’s running mate Catherine Jarder, BEED III-C, was declared as the vice-president.
</br>
</br>
<div class="more">
<p>
Eleven other senators were named and Rubi Aguilar topped the rank. Other senators were Ian Bancayan, Christian Castillano, Jacklyn Montes, Adyent Prayco, Love Joy Jacildo, Jaypee Batisla-ong, Debie Tiolo, Mry Grace Galfo, Michael John Sepil, Aldrin Mahilum, and Carlo Entor.

SSG Election is noted as one of the most awaited events in CHMSC that answers the search for the student representatives and leaders that will embody good governance.

Torrico’s problem is to create more projects to pave the way in CHMSC’s development. President Renato Sorolla, conducted the oath of Office of the new set of SSG Officers at the College AVR on July 19.

CHMSC Student body hopes that the new administration under Torrico will promote integrity in leadership.
 </p>
</div>

<button class="btn btn-info" id="click"><i class="icon-share icon-large"></i>&nbsp;Read More</button>
 </div>
  </div>
  
  <div class="tab-pane" id="profile">
    <div class="hero-unit-y">
  <div class="hero-unit-y">
  <div class="about_nav">

  <ul class="nav nav-tabs nav-stacked">
 
<ul class="nav nav-tabs nav-stacked">
  <li class="active"><a href="#"><font color="white"><i class="icon-book icon-large"></i></font><font color="orange">History</font></a></li>
  <li><a data-toggle="modal" href="#mission"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Mission</font></a></li>
  <li><a data-toggle="modal" href="#vision"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Vision</font></a></li>
  <li><a data-toggle="modal" href="#mandate"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Mandate</font></a></li>
  <li><a data-toggle="modal" href="#hymm"><font color="white"><i class=" icon-music icon-large"></i></font><font color="orange">Chmsc Hymm</font></a></li>


</ul>
</ul>
  
  </div>


  <div class="history_chmsc">
  <p><h2>CHMSC History</h2></p>
  <hr>
  <p>
Carlos Hilado Memorial State College, formerly Paglaum State College, is a public educational institution that aims to provide higher technological, professional and vocational instruction and training in science, agriculture and industrial fields as well as short term or vocational courses.
 
It was Batas Pambansa Bilang 477 which integrated these three institutions of learning:
the Negros Occidental College of Arts and Trades (NOCAT) in the Municipality of Talisay, Bacolod City National Trade School (BCNTS) in Alijis, Bacolod City, and the Negros Occidental Provincial Community College (NOPCC) in Bacolod City, into a tertiary state educational institution to be called Paglaum State College.  Approved in 1983, the College Charter was implemented effective January 1, 1984, with Mr. Sulpicio P. Cartera as its President.
The administrative seat of the first state college in Negros Occidental is located at the
Talisay Campus which was originally established as Negros Occidental School of Arts and Trades (NOSAT) under R.A. 848, authored and sponsored by Hon. Carlos Hilado.  It occupies a five-hectare land donated by the provincial government under Provincial Board Resolution No. 1163.
The renaming of the college to Carlos Hilado Memorial State College was effected by
virtue of House Bill No. 7707 authored by then Congressman Jose Carlos V. Lacson of the 3rd Congressional District, Province of Negros Occidental, and which finally became a law on May 5, 1994.
 
Talisay Campus. July 1, 1954 marked the formal opening of NOSAT with Mr. Francisco Apilado as its first Superintendent and Mr. Gil H. Tenefrancia as Principal. There were five (5) full time teachers, with an initial enrolment of eighty-nine (89) secondary and trade technical students. The shop courses were General Metal Works, Practical Electricity and Woodworking.
The first classes were held temporarily at Talisay Elementary School while the shop
buildings and classrooms were under construction.  NOSAT was a recipient of FOA-PHILCUA aid in terms of technical books, equipment, tools and machinery.
Alijis Campus. The Alijis Campus of the Carlos Hilado Memorial State College is situated in a 5-hectare lot located at Barangay Alijis, Bacolod City. The lot was a donation of the late Dr. Antonio Lizares. The school was formerly established as the Bacolod City National Trade School. The establishment of this trade technical institution is pursuant to R.A. 3886 in 1968, authored by the late Congressman Inocencio V. Ferrer of the second congressional district of the Province of Negros Occidental.
Fortune Towne. The Fortune Towne Campus of the Carlos Hilado Memorial State College was originally situated in Negros Occidental High School (NOHS), Bacolod City on a lot owned by the Provincial Government under Provincial Board Resolution No. 91 series of 1970. The school was formerly established as the Negros Occidental Provincial Community College and formally opened on July 13, 1970 with the following course offerings: Bachelor of Arts, Technical Education and Bachelor of Commerce.
The initial operation of the school started in July 13, 1970, with an initial enrolment of 209 students.  Classes were first housed at the Negros Occidental High School while the first building was constructed. Then Governor Alfredo L. Montelibano spearheaded the first operation of the NOPCC along with the members of the Board of Trustees.
In June 1995, the campus transferred to its new site in Fortune Towne, Bacolod City.
Binalbagan Campus. On Nov. 24, 2000, the Negros Occidental School of Fisheries (NOSOF) in Binalbagan, Negros Occidental was integrated to the Carlos Hilado Memorial State College system as an external campus by virtue of Resolution No. 46 series of 2000.
</p>
 </div>
 </div>
 </div>
  </div>

  <div class="tab-pane" id="settings">
                  <p><iframe width="1055" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
				  src="http://maps.google.com/maps/ms?doflg=ptm&amp;ie=UTF8&amp;msa=0&amp;msid=203722259750162261795.0004aafd513ccced356f4&amp;sll=10.743085,122.969515&amp;sspn=0,0&amp;ll=10.743346,122.969686&amp;spn=0,0&amp;t=h&amp;vpsrc=0&amp;output=embed">
				  </iframe></p>

  </div>

  
    <div class="tab-pane" id="calendar">
    <div class="hero-unit-y">
		<p><h3><i class="icon-calendar icon-large"></i>&nbsp;&nbsp;Calendar of Events In School Year 2012-2013</h3></p>
		<hr>
	<div class="cal">
<p>First Semester	June 6, 2012 to October 12, 2012 (18 weeks)</p>
<p>Semestral Break	Oct. 13, 2012 to November 4, 2012</p>
<p>Second Semester	Nov. 5, 2012 to March 22, 2012 (18 weeks)</p>
<p>Summer Break	March 26, 2012 to April 8, 2012</p>
<p>Summer	April 8 , 2012 to May 24, 2012</p>
<p><h3>June</h3></p>
<hr>
<div class="june">
<img src="img/calendar1.png"  width="200" height="200">
</div>
<div class="june1">
<p>June 6, 2012 to October 7, 2012 – First Semester AY 2012-2013</p>
<p>June 4-5, 2012	Orientation with the Parents of the College Freshmen</p>
<p>June 6	College Personnel General Assembly</p>
<p>June 7	First Day of Classes</p>
<p>June 13	Orientation with Students by College/Campus/Department</p>
<p>June 20,21,22	Branch/Campus Visit for Administrative/Academic/Accreditation/Concerns</p>
<p>June	Club Organizations (By Discipline/Programs) Student Affiliation/Induction Programs</p>
<hr>
</div>
<p><h3>July</h3></p>
<hr>
<div class="july">
<img src="img/calendar2.png"  width="200" height="200">
</div>
<div class="july1">
<p>July	Nutrition Month (Sponsor: Laboratory School)</p>
<p>July 12, 13	Long Tests</p>
<hr>
</div>
<p><h3>August</h3></p>
<hr>
<div class="august">
<img src="img/calendar3.png"  width="200" height="200">
</div>
<div class="august1">
<p>August 9, 10	Midterm Examinations</p>
<p>August 20	Araw ng Lahi</p>
<p>August 24	Submission of Grade Sheets for Midterm</p>
<p>August	Recognition Program (Dean’s List)</p>
<p>August 26	National Heroes Day (Regular Holiday)</p>
<p>August 29, 30, 31	Sports and Cultural Meet</p>
<hr>
</div>
<p><h3>September</h3></p>
<hr>
<div class="september">
<img src="img/calendar4.png"  width="200" height="200">
</div>
<div class="september1">
<p>September 20, 21	Long Tests</p>
<hr>
</div>
<p><h3>October</h3></p>
<hr>
<div class="october">
<img src="img/calendar5.png"  width="200" height="200">
</div>
<div class="october1">
<p>October 5	Teachers’ Day / World Teachers’ Day</p>
<p>October 11, 12	Final Examination</p>
<p>October 13	Semestral Break</p>
<hr>
</div>
<p><h3>November</h3></p>
<hr>
<div class="november">
<img src="img/calendar6.png"  width="200" height="200">
</div>
<div class="november1">
<p>November. 5, 2012 to March 24, 2013 – Second Semester AY 2012-2013</p>
<p>November 5	Start of Classes</p>
<p>November 22, 23	Intercampus Sports and Cultural Fest</p>
<hr>
</div>
<p><h3>December</h3></p>
<hr>
<div class="december">
<img src="img/calendar7.png"  width="200" height="200">
</div>
<div class="december1">
<p>December 6, 7	Long Tests</p>
<p>December 14	Thanksgiving Celebrations</p>
<p>December 18	Start of Christmas Vacation</p>
<p>December 25	Christmas Day (Regular Holiday)</p>
<p>December 30	Rizal Day (Regular Holiday)</p>
<hr>
</div>
<p><h3>January</h3></p>
<hr>
<div class="jan">
<img src="img/calendar8.png"  width="200" height="200">
</div>
<div class="jan1">
<p>January 3, 2013	Classes Resume</p>
<p>January 10, 11	Midterm Examinations</p>
<p>January 28	Submission of Grades Sheets for Midterm</p>
<hr>
</div>
<p><h3>February</h3></p>
<hr>
<div class="feb">
<img src="img/calendar9.png"  width="200" height="200">
</div>
<div class="feb1">
<p>February 14, 15	Long Tests</p>
<p>February 18, 19, 20, 21, 22	College Week Celebrations</p>
<hr>
</div>
<p><h3>March</h3></p>
<hr>
<div class="march">
<img src="img/calendar10.png"  width="200" height="200">
</div>
<div class="march1">
<p>March 7, 8	Final Examinations (Graduating)</p>
<p>March 14, 15	Final Examinations (Non-Graduating)</p>
<p>March 18, 19, 20, 21, 22	Recognition / Graduation Rites</p>
<p>March 25	Last Day of Service for Faculty</p>
<hr>
</div>
	</div>
	<hr>
	</div>
  </div>
  
</div>
</div>
<div class="hero-unit-bud">
 <div class="hero-unit-yy">
<p><font color="white"><b>Related Sites</b></font></p>
<a href="http://www.chmsc.edu.ph"><font color="white">chmsc.edu.ph</font></a> &nbsp;&nbsp;&nbsp;<a href="http://psitschmscft.blogspot.com/"><font color="white">psitschmscft.blogspot.com</font></a>&nbsp;&nbsp;&nbsp;
<a href="www.chmsc.edu.ph"><font color="white">chmscians.com</font></a> &nbsp;&nbsp;&nbsp;<a href="chmsc.edu.ph"><font color="white">chmscians.webs.com</font></a>&nbsp;&nbsp;&nbsp;
<a href="chmsc.edu.ph"><font color="white">thetechnopacer.journ.ph</font></a> &nbsp;&nbsp;&nbsp;<a href="chmsc.edu.ph"><font color="white">chmscconnectivity.blogspot.com</font></a>&nbsp;&nbsp;&nbsp;

</div>
</div>
<?php include('footer.php'); ?>
</div>
</div>


</body>


<div class="modal hide fade" id="pic">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<div class="turn">
<img src="img/turnover.jpg" width="500" height="350"/>
</div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <p>Mission</p>
	         Aleading institution in higher and continuing education commited to engage in quality instruction, development-oriented research sustinable lucrative economic enterprise, and responsive extension and training services through relevant academic programs to empower a human resource that responds effectively to challenges in life and acts as catalyst in the holistoic development of a humane society. 

	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		<div class="modal hide fade" id="vision">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <p>Vission</p>
  <p>CHMSC ExCELS: Excellence, Competence, and Educational Leaderhip in Science and Technology.</p>
	                Driven by its passion for continous improvement, the State College has to vigorously pursue distinction and proficieny in delivering its statutory functions to the Filipino people in the fields of education, business, agro-fishery, industrial, science and technology, through committed and competent human resource, guided by the beacon of innovation and productivity towards the heights of elevated status. 

	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

		
				<div class="modal hide fade" id="mandate">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <p>Mandate</p>

	 Carlos Hilado Memorial State College shall primarily provide higher technological, professional and vocational instruction and training in science/agricultural and industrial fields as well as short-term technical or vocational courses. It shall provide research, advance studies and progressive leadership in its areas of specialization.
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
						<div class="modal hide fade" id="hymm">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<p>CHMSC Hymn</p>

<p>Lyrics by: Dr. Victoria L. Ojas</p>

 

<p>A wisp from sky’s resplendent wall</p>

<p>Breathes hope brings light as it does fall</p>

<p>Steers on the anvil so the gear</p>

<p>To weave the song CHMSC dear.</p>

<p>CHMSC thou art hope and joy</p>

<p>Science, Technology ye do deploy</p>

<p>To youth with fervor burning still</p>

<p>Thou quench the thirst for knowledge and skills.</p>

<p>O hail!we pledge our loyalty</p>

<p>And all the toils for thy glory be</p>

<p>To the skies that lend the noble blue</p>

<p>CHMSC, to the we’ll be true.</p>

<p>O hail!when pioneering days will end</p>

<p>And success or stress will sure portend</p>

<p>This song will ring loudly through the sky</p>

<p>To thank the great Power on high.</p>
 	 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>


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
   <select name="teacher" class="span333">
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
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
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
   <select name="CYS" class="span333">
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
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
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
   <select name="room" class="span333">
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
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
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

	    
  
  <h2>Search Teacher Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_teacher_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="teacher" class="span333">
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
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
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
		
		
		
		
					<div class="modal hide fade" id="exam_room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Rooms:</label>
    <div class="controls">
   <select name="room" class="span333">
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
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
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
		
		
					
								<div class="modal hide fade" id="exam_CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

 
  <h2>Search Course Year Section Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_CYS_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Course Year Section:</label>
    <div class="controls">
   <select name="CYS" class="span333">
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
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">School Year:</label>
    <div class="controls">
   <select name="sy" class="span333">
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
		
			
		
</html>



