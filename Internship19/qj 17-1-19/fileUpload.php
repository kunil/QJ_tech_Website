<?php

//for uploading the file for course

$con=mysqli_connect("localhost:3306","root","","qj");

$currentDir = getcwd();
$uploadDirectory = "/uploads/";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['jpeg','jpg','png'];

$fileName = $_FILES['myfile']['name'];

$fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $temp= explode('.',$fileName);
    $fileExtension = strtolower(end($temp));
        $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
	$image = $_FILES['myfile']['name']; 
    
    $title = $_POST['title'];
    $minidesc = $_POST['minidesc'];
    $attend=$_POST['attend'];
    $duration = $_POST['duration'];
    $certificates = $_POST['certificates'];

    $temp_skills= $_POST['skills'];
    $skill = explode(',',$temp_skills);
    $skills = json_encode($skill);
    
    $temp_syllabus= $_POST['syllabus'];
    $syllabus= explode(',',$temp_syllabus);
    $syllabus2 = json_encode($syllabus);

    $temp_features = $_POST['features'];
    $feature= explode(',',$temp_features);
    $feature2 = json_encode($feature);

    if (isset($_POST['submit'])) {
		
        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 5000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
		$target="images/".basename($_FILES['myfile']['name']);
		$sql = "INSERT INTO training (title,image,minidesc,attend,duration,certificates,features,skills,syllabus) VALUES ('$title','$image','$minidesc','$attend','$duration','$certificates','$feature2','$skills','$syllabus2')";
		if (mysqli_query($con, $sql)==true){
			echo "Data inserted";
		}
		else{
			echo "error ". $con->error;
		}
		
    }




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>