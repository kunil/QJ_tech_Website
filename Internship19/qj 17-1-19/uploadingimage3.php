<?php

//form for the development

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

	<form action="fileUpload3.php" method="post" enctype="multipart/form-data" class="form-style-9">
		<ul>
			<li>

				<input type="text" name="title" class="field-style field-split align-left" placeholder="Title" id="title">
            </li>
            <li>
                <input type="file" name="myfile" id="fileToUpload" accept="image/*" class="field-style field-split align-right">
			</li>
            <li>
				<input type="text" name="desc_title" class="field-style field-split align-left" placeholder="Description Title" id="attend">
                <textarea type="text" name="description" class="field-style field-split align-left" placeholder="Description" id="duration"></textarea>
			</li>
			<li>
                <textarea type="text" name="creative_design" class="field-style field-split align-right" placeholder="Creative Design" id="features"></textarea>
			</li>
			<li>
				<textarea name="technology" class="field-style field-full align-none" id="skills" placeholder="Latest Technology"></textarea>
			</li>
            <li>
                <textarea type="text" name="service" class="field-style field-split align-left" placeholder="Better Service" id="certificates"></textarea>
			</li>
			<li>
				<textarea name="modify" class="field-style" id="minidesc" placeholder="East to Modify"></textarea>
			</li>
            <li>
            	<textarea name="structure" class="field-style" id="minidesc" placeholder="Organising Structure"></textarea>
            </li>
            <li>
                	<textarea name="perspective" class="field-style" id="minidesc" placeholder="Perspective"></textarea>
            </li>
			<li>
				<input type="submit" name="submit">

			</li>
		</ul>
	</form>
</body>

</html>