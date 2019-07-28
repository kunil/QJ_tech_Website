<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $currentPage='signup';
        $title='Signup';
        include 'head.php';
    ?>
    
	<link type="text/css" rel="stylesheet" href="css/sign.css" />
</head>

<body>
	<header id="signup">
		<!-- Background Image -->
		<div class="bg-img" >
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<?php include 'navbar.php'?>
    </header>
<script>
function validateForm()
{

	var x=document.forms["form1"]["password"].value;
	var y=document.forms["form1"]["passwordRepeat"].value;
	
	if(x != y)
	{
		alert("The passwords dont match");
		return false;
	}
}


</script>	
  <div class="container__child signup__form">
  <h1><font color ="black">SIGN UP</font></h1>
    <form action="/formp.php" name="form1" method="post">
      <div class="form-group">
        <input class="form-control" type="text" name="username" id="username" placeholder="Username"  />
      </div>
      <div class="form-group">
       
        <input class="form-control" type="text" name="email" id="email" placeholder="Email"  />
      </div>
	  
	  
      <div class="form-group">
        
        <input class="form-control" type="password" name="password" id="password" placeholder="New Password"  />
      </div>
      <div class="form-group">
        
        <input class="form-control" type="password" name="passwordRepeat" id="passwordRepeat" placeholder="Confirm Password"  />
      </div>
	  
	  <div class="form-group">
        
        <input class="form-control" type="text" name="mobile" id="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" title="Enter a valid mobile number"  />
      </div>
	  
	  <div class="form-group">
        
        <input class="form-control" type="text" name="url" id="url" placeholder="WEBSITE"   />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" onclick="validateForm()" value="Register" />
          </li>
          <li>
            <a class="signup__link" href="#">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>

</body>
</html>
