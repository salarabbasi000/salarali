<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salar_portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Salar Ali</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="s.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<!-- <div class="logo">
		         <a href="index.html">Salar Ali</a>
		      </div>		      
 -->
		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
						<!-- <li><a class="smoothscroll"  href="#services" title="">Services</a></li> -->				
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
						 <!-- <li><a href="styles.html" title="">Style Demo</a></li> -->				
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h1 style="color:slateBlue">Hello! I'm Salar Ali.</h1>

	   			<p class="intro-position">
	   				<span>Data Enthusiast</span>
	   				<span>Programmer</span>
	   				<span>Web Developer</span>
	   				<span>ML Practitioner</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="https://www.facebook.com/m.salaraliabbasi" target="_blank"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://www.linkedin.com/in/salar-ali-92400a139/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="www.gitbub.com/salarabbasi000" target="_blank"><i class="fa fa-github"></i></a></li>
    </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="images/profile-pic.jpg" alt="Profile Picture">

   				<p class="lead">I am an undergrad computer science student, currently in my final semester, at FAST-NUCES, Karachi. University life has provided me so far, the best environment where one can enhance his/her technical as well as soft skills. I love programming, photography, music, sports (usually badminton and chess). Hobbies include watching netflix and documentaries, reading books, etc.</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p>I love to forge the gap between an idea and a software solution. The efforts made within this whole procees is a challenge itself, and I love to face it.</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Salar Ali</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>September 09, 1998</span>
   				</li>
   				<!-- <li>
   					<strong>Job:</strong>
   					<span>Web And Software Developer</span>
   				</li> -->
   				<!-- <li>
   					<strong>Website:</strong>
   					<span>www.xyz.com</span>
   				</li> -->
   				<li>
   					<strong>Email:</strong>
   					<span>salarabbasi000@gmail.com</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p>Expertise in the following set of technical skills.</p>

				<ul class="skill-bars">
				  
              <?php
              $q="select percent,skill from skills order by percent desc";
              $skills=$conn->query($q);
				  while($row=$skills->fetch_assoc())
              {
              ?>

               <li>
				   	<div class="progress percent<?php print($row["percent"]); ?>"><span><?php print($row["percent"]); ?>%</span></div>
				   	<strong><?php print($row["skill"]); ?></strong>
				   </li>

              <?php
              }
              ?>
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Leave a Query</a>
   			<a href="docs/CV.pdf" title="Download CV" class="button button-primary" download >Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>

   			<p class="lead">Here is my professional work experience.</p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

          <?php
                 $q="select * from work";
                 $skills=$conn->query($q);
                 while($row=$skills->fetch_assoc())
                 {
                    $start=date_format(date_create(($row["start_date"])),"M, Y");                    
                    $d2=date_create($row["end_date"]);
                    $d1=date_create(date("Y-m-d"));
                    $diff=date_diff($d1,$d2);
                    if($diff->format("%a")<0)
                    { $end=date_format(date_create(($row["end_date"])),"M, Y"); }
                    else
                    { $end="Present";}

                 ?>

                     <div class="timeline-block">
                        <div class="timeline-ico">
                          <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="timeline-header">
                          <h3><?php print($row["position"]); ?></h3>
                          <p><?php print($start." - ".$end); ?></p>
                        </div>
                        <div class="timeline-content">
                          <h4><?php print($row["organization"]); ?></h4>
                          <p><?php print($row["description"]); ?></p>
                        </div>
                      </div> <!-- /timeline-block -->
                 <?php
                 }
          ?>

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	
		
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Projects</h5>
   			<h1>Check Out Some of My Works.</h1>

   			<p class="lead">These are university course projcts as well as other fun projects (Contains source code):</p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

               <?php
                 $q="select * from projects";
                 $skills=$conn->query($q);
                 $i=1;
                 while($row=$skills->fetch_assoc())
                 {
                 ?>
                     <div class="bgrid folio-item">
                     <div class="item-wrap">
                        <img src="images/portfolio/<?php print($row["cover"]); ?>" alt="Beetle">
                        <a href="#modal-<?php print($i); ?>" class="overlay">
                           <div class="folio-item-table">
                              <div class="folio-item-cell">
                                 <h3 class="folio-title"><?php print($row["name"]); ?></h3>                       
                                 <span class="folio-types">
                                      <?php print($row["category"]); ?>
                                 </span>              
                              </div>                           
                           </div>                    
                        </a>
                     </div>
                     </div> <!-- /folio-item --> 
                 <?php
                 $i++;
                 }
              ?>
	                

	        	

	            <!-- modal popups - begin
	            ============================================================= -->
               <?php
                 $q="select * from projects";
                 $skills=$conn->query($q);
                 $i=1;
                 while($row=$skills->fetch_assoc())
                 {
                 ?>
                     <div id="modal-<?php print($i); ?>" class="popup-modal slider mfp-hide">  

                        <div class="media">
                           <img src="images/portfolio/modals/m-<?php print($row["cover"]); ?>" alt="" />
                        </div>         

                        <div class="description-box">
                           <h4><?php print($row["name"]); ?></h4>            
                           <p><?php print($row["description"]); ?></p>

                           <div class="categories"><?php print($row["category"]); ?></div>                        
                        </div>

                        <div class="link-box">
                           <a href="<?php print($row["github"]); ?>" target="_blank">Details</a>
                           <a href="#" class="popup-modal-dismiss">Close</a>
                        </div>            

                     </div> <!-- /modal-01 -->
                 <?php
                 $i++;
                 }
              ?>
	            


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 


		
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">For any query, leave a message.</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
   			Gulistan-e-Johar, Block#1<br>
            Karachi, Pakistan.
   			</p>
            
            

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>salarabbasi000@gmail.com</p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Mobile: (+92) 333 7572330<br></p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="https://www.facebook.com/m.salaraliabbasi" target="_blank">
			      	<i class="fa fa-facebook"></i></a></li>
			      <li><a href="https://www.linkedin.com/in/salar-ali-92400a139/" target="_blank">
			      	<i class="fa fa-linkedin" target="_blank"></i></a></li>
			      <li><a href="www.gitbub.com/salarabbasi000" target="_blank">
			      	<i class="fa fa-github" target="_blank"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Salar Ali 2018.</span> 	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>