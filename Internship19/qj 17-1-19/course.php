<?php
  $con = mysqli_connect("localhost:3306","root","","qj");
 $page=$_GET['id'];
  $sql = "SELECT * from training where id='$page'";
  $result = mysqli_query($con, $sql);
   while($row = mysqli_fetch_assoc($result)) {
       $sub_id = $row['id'];
	   $coursetitle = $row['title'];
       $image = $row['image'];
	   $minidesc = $row['minidesc'];
	   $attend = $row['attend'];
	   $duration = $row['duration'];
	   $certificates = $row['certificates'];
       $features = $row['features'];
	   $skills = $row['skills'];
	   $syllabus = $row['syllabus'];
      
       $arr1[] = array('id' => $sub_id,
					  'title' => $coursetitle,
                      'image' => $image,
					  'minidesc' => $minidesc,
					  'attend'=> $attend,
					  'duration' => $duration,
					  'certificates' => $certificates,
					  'features' => $features,
					  'skills' => $skills,
                      'syllabus' => $syllabus,
                       
                    );
  
	   $temp = $row['skills'];
	   $skills_temp=json_decode($temp);
	   $temp1 = $row['syllabus'];
	   $syllabus1=json_decode( $temp1 );
       
       $temp2 = $row['features'];
	   $features1=json_decode( $temp2 );
       
	   
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $currentPage='training';
    $title=$arr1[0]['title']." Course";
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
				<h2><?php echo $arr1[0]['title'];?></h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.html">Home</a></li>
					<li class="breadcrumb-item"><a href="training.html#blog">Training</a></li>
					<li class="breadcrumb-item active"><?php echo $arr1[0]['title'];?></li>
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
                                <img class="img-responsive" src="<?php echo "uploads/" . $arr1[0]["image"] ?>" alt="">
                            </div>
                            <div class="blog-content col-md-6">
                                 <h3><?php echo $title?></h3>
                                <p><?php echo $arr1[0]['minidesc']?></p>
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
								<p><?php echo $arr1[0]['attend'] ?></p>
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
								<p><?php echo $arr1[0]['duration'] ?></p>
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
								<p><?php echo $arr1[0]['certificates'] ?></p>
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
							 <?php 
						          $count=count($features1);
                                  for ($x = 0; $x < $count; $x++) {	
                            ?>
							<ul>
                                <li><?php echo $features1[$x]; ?></li>
							</ul>
                             <?php
                                }
                              ?> 
						</div>	
						<!-- key features-->
                        <div class="sm-padding">
							<h3 class="title " >Skills you will master</h3>
                           <?php 
						          $count=count($skills_temp);
                                  for ($x = 0; $x < $count; $x++) {	
                                ?>
                            <div class="skills">
				                <i class=" fa fa-check"></i> <?php echo $skills_temp[$x];?><br>
                            </div>
                            <?php
                                }
                            ?>    
						</div>	
						
						<!-- workshop content-->
                        <div>
							<h3 class="title">Course Syllabus</h3>
							<?php 
                                $count=count($syllabus1);
                                for ($x = 0; $x < $count; $x++) {	
                            ?>
                            <div class="col-sm-6">
							<ul>
                                <li><?php echo $syllabus1[$x]; ?></li>
							</ul>
                            </div>
                             <?php
                                }
                              ?> 
						</div>
                        <div class="">
							<h3 class="title">Download the brochure</h3>
                            <a href="<?php echo "uploads/" . $arr1[0]["pdf"] ?>"  class="button" download><i class="fa fa-download"></i>PDF</a>
						</div>
					</div>
				</main>
				<!-- /Main -->

               <!-- Enquiry box -->
                <?php    

$con=mysqli_connect("localhost:3306","root","","qj");
    

if(isset($_POST['SubmitButton']))
{ //check if form was submitted
  $fname = $_POST['firstname']; //get input text
  $Lname = $_POST['lastname'];
  $email = $_POST['email'];
  $msg = $_POST['message'];
    
    
    
    $sql = "INSERT INTO enquiry(fname,Lname,email,message) VALUES ('$fname','$Lname','$email','$msg')";
		if (mysqli_query($con, $sql)==true){
			echo "Data inserted";
		}
		else{
			echo "error ". $con->error;
		}
		
  
}    
?>
<html>
				<!-- Aside -->
				<aside id="aside" class="col-md-3">

					
					<!-- Category -->
					<div class="widget" >
						<h3 class="title">Enquiry Box</h3>
						<div class="widget-category">
							<form class="contact-form" action="" method="post">
						<input type="text" class="input" name="firstname" placeholder="First Name">
								<input type="text" class="input" name="lastname" placeholder="Last Name">
						<input type="email" class="input" name="email" placeholder="Email">
								<input type="tel" class="input" name="mobile" placeholder="Mobile Number">
                                
						<input type="text" class="input" name="message" placeholder="Message">
						<button class="main-btn bg-blue" name="SubmitButton">Send message</button>
                           
					</form>
						</div>
					</div>
					<!-- /Category -->				
				</aside>
				<!-- /Aside -->
</html>
</html>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->
   <?php include 'loaderFooter.php';?>

</body>

</html>
