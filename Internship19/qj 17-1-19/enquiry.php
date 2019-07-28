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
							<form class="contact-form" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
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