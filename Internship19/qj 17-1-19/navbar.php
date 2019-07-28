		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="home.html">
							<img class="logo" src="images/other/Logo_3.png" alt="logo">
							<img class="logo-alt" src="images/other/Logo_4.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div id="collapse" class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="nav navbar-nav navbar-right main-nav ">
					<li class="<?php if($currentPage==='home'){echo 'active';}?>"><a href="<?php if($currentPage==='home'){echo '#home';} else {echo 'home.php';}?>">Home</a></li>
					<li class="<?php if($currentPage==='training'){echo 'active';}?>"><a href="<?php if($currentPage==='training'){echo '#training';} else {echo 'training.php';}?>">Training</a></li>
					<li class="<?php if($currentPage==='development'){echo 'active';}?>"><a href="<?php if($currentPage==='development'){echo '#development';} else {echo 'development.php';}?>">Development</a></li>
					<li class="<?php if($currentPage==='services'){echo 'active';}?>"><a href="<?php if($currentPage==='services'){echo '#services';} else {echo '#';}?>">Services</a></li>
					<li class="<?php if($currentPage==='blog'){echo 'active';}?>"><a href="<?php if($currentPage==='blog'){echo '#blog';} else {echo '#';}?>">Blog</a></li>
					<li class="<?php if($currentPage==='contact'){echo 'active';}?>"><a href="<?php if($currentPage==='contact'){echo '#contact';} else {echo 'contact.php';}?>">Contact</a></li>
                    <li><a href="signup.php"><i class="fa fa-user"></i></a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
