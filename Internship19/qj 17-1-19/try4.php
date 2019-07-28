
<?php
  $con = mysqli_connect("localhost:3306","root","","qj");
  $sql = "SELECT * from try ";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)) {
    
       $image = $row['image'];
	   $title = $row['title'];
        $arr1[] = array(   'image' => $image,
                        'title' => $title,
                     
                     );
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $currentPage='development';
        $title = $arr1[0]['title'];
        include 'head.php';
    ?>
</head>


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
				<h2><?php echo $arr1[0]['title'];?></h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.html">Home</a></li>
					<li class="breadcrumb-item"><a href="development.php">Development</a></li>
					<li class="breadcrumb-item active"><?php echo $arr1[0]['title'];?></li>
				</ul>
			</div>
		</div>
		<!-- /header wrapper -->

	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div id="blog" class="section rn-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">


				<!-- Aside -->
				<aside id="aside" class="col-md-3">

					<!-- Category -->
					<div class="widget">
						<h3 class="title">Category</h3>
						<div class="widget-category">
							<a href="software_development.php?id=1">Website Development <span>-></span></a>
                            <a href="software_development.php?id=2">Software Development <span>-></span></a>
							<a href="software_development.php?id=3">Mobile App Development<span>-></span></a>
							<a href="software_development.php?id=4">Search Engine Optimisation<span>-></span></a>
							<a href="software_development.php?id=5">Content Management System<span>-></span></a>
                            <a href="software_development.php?id=6">Brand Design<span>-></span></a>
						</div>
					</div>
					<!-- /Category -->

				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->
<!-- Advantages -->
      
	<!-- Projects -->
	<div id="project" class="section rn-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Projects related to Software Development</h2>
				</div>
				<!-- /Section header -->

				<!-- project1 -->
				<div class="col-md-4">
					<div class="project">
						<div class="project-img">
							<img class="img-responsive" src="./img/blog1.jpg" alt="">
						</div>
						<div class="project-content">
							<ul class="project-meta">
								<li><i class="fa fa-external-link" aria-hidden="true">Playstore</i></li>
							</ul>
							<h3>Project Name</h3>
							<p>More infor about projects</p>
                            
                            
							<a href="<?php echo "uploads/" . $arr1[0]["image"] ?>" download>PDF</a>
						
                        
                        </div>
					</div>
				</div>
				<!-- /project1 -->

				<!-- project2 -->
				<div class="col-md-4">
					<div class="project">
						<div class="project-img">
							<img class="img-responsive" src="./img/blog2.jpg" alt="">
						</div>
						<div class="project-content">
							<ul class="project-meta">
								<li><i class="fa fa-external-link" aria-hidden="true">Playstore</i></li>
							</ul>
							<h3>Project Name</h3>
							<p>More infor about projects</p>
							<a href="project_link.php">Read more</a>
						</div>
					</div>
				</div>
				<!-- /project2 -->

				<!-- project3 -->
				<div class="col-md-4">
					<div class="project">
						<div class="project-img">
							<img class="img-responsive" src="./img/blog3.jpg" alt="">
						</div>
						<div class="project-content">
							<ul class="project-meta">
								<li><i class="fa fa-external-link" aria-hidden="true">Playstore</i></li>
							</ul>
							<h3>Project Name</h3>
							<p>More infor about projects</p>
							<a href="project_link.php">Read more</a>
						</div>
					</div>
				</div>
				<!-- /project3 -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->


	<!-- Footer -->
    <?php include 'loaderFooter.php'; ?>


</body>

</html>
