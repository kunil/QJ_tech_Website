<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $currentPage='django_programming';
    $title='Django Programming Training';
    include 'head.php';
    ?>
</head>

<body>
	<!-- Header -->
	<header id="training">
		<!-- Background Image -->
		<div class="bg-img" >
			<div class="overlay"></div>
		</div>

		<!-- Nav -->
		<?php include 'navbar.php'?>
		<!-- /Nav -->
		
		<!-- header wrapper -->
		<div class="header-wrapper xs-padding bg-grey">
			<div class="container">
				<h2>Internet of Things(IOT)</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.php">Home</a></li>
					<li class="breadcrumb-item"><a href="training.php">Training</a></li>
					<li class="breadcrumb-item active">Internet Of Things Training Course</li>
				</ul>
			</div>
		</div>
		<!-- /header wrapper -->

	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div id="blog" class="section m-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-9">
					<div class="blog">
                        <div class="row">
                            <div class="col-md-6 blog-img ">
                                <img class="img-responsive" src="./img/blog-post.jpg" alt="">
                            </div>
                            <div class="blog-content col-md-6">
                                <h3>Internet of Things Training Course</h3>
                                <p>IOT Course by QJ Technologies, provides best and most relative contents required
for making the participants comfortable with the concepts of IOT. The Course’s main
motive will be to help attendees get started with small things in IOT and motivate them
to gain knowledge on deeper concepts.</p>
                            </div>
                        </div>
			<!-- container -->
			<div class="container sm-padding">
				<!-- row -->
                <div class="col-md-9">
				<div class="row bg-grey">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-user-circle"></i>
							<div class="feature-content">
								<h4>Who can Attend?</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-clock-o"></i>
							<div class="feature-content">
								<h4>Duration</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Certificates</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
				</div>
			</div>
                        </div>
						
						<!--Key Features-->
						<div id="key-features">
							<h3 class="title" >Key Features</h3>
							<ul>
								<li>Organised Content</li>
								<li>Best Illustration</li>
								<li>Certificate and Toolkit</li>
							</ul>
						</div>	
						<!-- key features-->
                        <div class="sm-padding">
							<h3 class="title " >Skills you will master</h3>
                            <div class="skills">
								<i class=" fa fa-check"></i> Organised Content<br>
								<i class="fa fa-check" aria-hidden="true"></i> Best Illustration<br>
								<i class="fa fa-check" aria-hidden="true"></i> Documented Codes<br>
								<i class="fa fa-check" aria-hidden="true"></i> Guaranteed Satisfaction<br>
								<i class="fa fa-check" aria-hidden="true"></i> Certificate and Toolkit<br>
                        </div>
						</div>	
						
						<!-- workshop content-->
                     	<div class="sm-padding">
							<h3 class="title">Course Syllabus</h3>
							<ol type="i">
								<li class="blue-text"> Dive into Internet of Things and Embedded Systems</li>
								<ol>
									<li>Explaining Internet of things</li>
									<li>Trends and Adoption of Internet of Things</li>
									<li>Need for Internet of Things in Society</li>
									<li>Walk-through with Embedded Systems</li>
									<li>Playing with Hardware and Software</li>
									<li>Internet and Networking</li>
								</ol>
								<li class="blue-text">Arduino Platform, Programming and Interfacing</li>
								<ol>
									<li>Understanding Arduino and Arduino Environment</li>
									<li>C Programming basics for Arduino</li>
									<li>Getting started with Arduino Programming</li>
									<li>Debugging and Serial Communication</li>
									<li>Hardware Design, Components and Circuits</li>
									<li>Interfacing with Sensors and Actuators</li>
									<li>Introduction to Software Libraries with Arduino</li>
									<li>Extending Arduino Capabilities with Shields</li>
								</ol>
								<li class="blue-text">Raspberry Pi: Platforms, Programming and Interfacing</li>
								<ol>
									<li>Getting Started with Raspberry Pi</li>
									<li>A walk-through with Linux</li>
									<li>Basis of Python Programming language</li>
									<li>Raspberry Pi Networking </li>
									<li>Network Programming with Raspberry Pi</li>
									<li>Raspberry Pi Interaction with Online Services through API's and SDK's</li>
									<li>Communicating with devices through Raspberry Pi Pins</li>
									<li>Sensing and Actuating with Raspberry Pi</li>
								</ol>
							</ol>
						</div>
					
				
					</div>
				</main>
				<!-- /Main -->

             <!-- Enquiry box -->
                <?php include 'enquiry.php';?>


			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

   <?php include 'loaderFooter.php';?>

</body>

</html>
