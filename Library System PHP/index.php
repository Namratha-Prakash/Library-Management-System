<!DOCTYPE html>
<?php
?>
<html>
<head>
<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
<title>jssateb</title>
 <link rel="stylesheet" href="poster/style.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<style>
.header{
min-height:100vh;
width:100%;
background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(jssateimg1.jpeg);
background-position:center;
background-size:cover;
position:relative;
}
</style>
<body>
  <section class="header">
      <nav>
	     <a href="index.php"><img src="jssatebimg1_50.png"></a>
		 <div class="nav-links" id="navLinks">
		 <i class="fa fa-times" onclick="hideMenue()"></i>
		 <ul>
		   
			<li><a href="libsystem/index.php">SIGN UP</a></li>
			
		 </ul>
		 </div>
		 <i class="fa fa-bars" onclick="showMenue()"></i>
	  </nav>
	  <div class="text-box">
	  <h1><b>JSS ACADEMY OF TECHNICAL EDUCATION BANGALORE</b></h1>
	  <p><b>LIBRARY AND INFORMATION CENTRE</b></p>
	  
	  </div>
  
  </section>
  <!--course--->
 <section class="about">
   <h1>ABOUT</h1>
   <p>The JSSATE-Bangalore Library is a veritable feast of knowledge and is available to students and faculty. 
   It is housed presently in ground floor of the college building (B Block) with 2018.18-sq.mts. carpet area. 
   It has a comprehensive collection of literature predominantly related to engineering, management, and its allied subjects to meet the present and future information needs of the users.</p>
<p>The Library has a collection of about 44,240 documents. The Library subscribes to important technical journals.
 The Library also has access to good number of E-Resources from renowned publishers VIZ., Elsevier, Springer Nature, Emerald (Management), Taylor and Francis, and Map Systems Digital Library platform etc.
 E-Resources can be access anywhere in the campus through Wi-Fi and LAN.</p>
<p>The Infrastructure has a centralized Library with open access facility for students.
 There is also a book bank facility for needy students to borrow the books for the entire semester and we have a Book Bank facility for socially backward Students & they can borrow 5 books for the entire semester.
 Library has LIBSOFT Library management Software to facilitate smooth functioning of the Library. Digital Library is established to access on line database and online Journals.
 Air-conditioned Audio/Visual room also setup for seminars/workshops. Discussion rooms (4 no’s) with white board facility is also provided.
 Photocopying/printout facilities are available; Departmental Libraries are also setup by all the major departments</p>
   
 </section>
 <section class="details">
 <h1>DETAILS</h1>
 <div class="row">
   <div class="books">
     <h3>COURSE BOOKS</h3>
	 <p>A treasure of over 44240 volumes and 15139 single titles,covering all branches of engineering and management.</p>
   </div>
   
   <div class="books">
   <h3>NEWSPAPERS AND MAGAZINES</h3>
   <p>12 Newspapers, 14 General Magazines are subscribed in our library.</p>
   </div>
   </div>
 </section>
 <section class="vision">
 <h1>VISION</h1>
 <p>Library facilitates a fundamental right, the privilage,and ability 
 of students and faculty to chose and pursue any direction of thought,
 sudy,or action they wish.</p>
 </section>
 <section class="mission">
 <h1>MISSION</h1>
 <p>JSSATE Library will provide quality services,resources, and lifelong learning
 opportunities through books and e-resources,a variety of other formats to meet the 
 informational,educational,cultural, and recreational needs and interest of its diverse
 and changing knowledge sources.</p>
 </section>
 
 <section class="contact">
 <h1>CONTACT</h1>
 <div class="row">
   <div class="info">
    <h3>ADDRESS</h3>
	<p>JSS Academy of Technical Education<br> 
	JSSATE-B Campus,<br>
	Dr.Vishnuvardhan Road,<br>
	Uttarahalli-Kengeri Main Road,<br>
	Srinivaspura-poster<br>
	Bengaluru-560 060<br>
	Karnataka,India</p>
   </div>
   <div class="info">
   <h3>QUICK CONTACT</h3>
   <p>Ph:080-2861 2565/2861 1702<br>
    Fax:080-2861 2706/2861 2646</p>
   </div>
   <div class="info">
   <h3>EMAIL ADDRESS<h3>
   <p>info@jssateb.ac.in
    principal@jssateb.ac.in</p>
   </div>
 </div>
 </section>
  
  
  
  
 
<!--javascript--->
<!-- 
<script>
 var navLinks= document.getElementById("navLinks");
 
 function showMenue(){
  navLinks.style.right = "0";
 }
 function hideMenue(){
  navLinks.style.right = "-200px";
 }
 </script> 
 <script>
$('.nav-links a').on('click', function(e) {
if (this.hash !=='') {
e.preventDefault();
const hash = this.hash;
$('html, body').animate(
{
scrollTop: $(hash).offset().top
},
800
);
}
});
 </script>-->
 
</body>

</html>
