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
				<h2>Django Programming</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.php">Home</a></li>
					<li class="breadcrumb-item"><a href="training.php">Training</a></li>
					<li class="breadcrumb-item active">Django Programming</li>
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
                               <h3>Django Programming Training</h3>
							<p>This Django Programming course by QJ Technologies covers all the details you will
need to become a good web developer using Django. This course will cover contents
right from introduction and installation to deploying your final application on the web.</p>
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
								<li>Documented Codes</li>
								<li>Certificate </li>
								<li>Internship Opportunity</li>
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
                        <div>
							<h3 class="title">Course Syllabus</h3>
							<ul>
								<li>The Django Web Framework</li>
								<li>Django Templates</li>
								<li>Django Models: Database Interaction</li>
								<li>Django Administration</li>
								<li>Django Forms</li>
								<li>Generating Non-HTML Contents</li>
								<li>Sessions and Users</li>
								<li>Deploying Django</li>		
				   			</ul>
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
