<?php

//form for the workshop

$con = mysqli_connect( "localhost:3306", "root", "", "qj" );
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="agency.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

</head>

<body>

	<form action="fileUpload2.php" method="post" enctype="multipart/form-data" class="form-style-9">
		<ul>
  			<li>
				<input type="text" name="id" class="field-style field-split align-left" placeholder="ID" id="id">
			</li>
			<li>

				<input type="text" name="title" class="field-style field-split align-left" placeholder="Title" id="title">
				<input type="file" name="myfile" id="fileToUpload" accept="image/*" class="field-style field-split align-right">
                <input type="file" name="pdf" id="fileToUpload" accept="pdf/*" class="field-style field-split align-right">



			</li>
            <li>
				<input type="text" name="attend" class="field-style field-split align-left" placeholder="attend" id="attend">
			</li>
			<li>
				<input type="text" name="duration" class="field-style field-split align-left" placeholder="duration" id="duration">
				<input type="text" name="features" class="field-style field-split align-right" placeholder="features" id="features">
			</li>
			<li>
				<textarea name="skills" class="field-style field-full align-none" id="skills" placeholder="skills"></textarea>
			</li>
            <li>
				<input type="text" name="certificates" class="field-style field-split align-left" placeholder="certificates" id="certificates">
			</li>
			<li>
				<textarea name="minidesc" class="field-style" id="minidesc" placeholder="Mini Course Description"></textarea>
				<textarea name="contents" class="field-style" id="contents" placeholder="contents"></textarea>
			</li>
			<li>
				<input type="submit" name="submit">

			</li>
		</ul>
	</form>
</body>

</html>