<?php

//for file uploading for development

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
    $desc_title = $_POST['desc_title'];
    $description=$_POST['description'];
    $creative_design = $_POST['creative_design'];
    $technology = $_POST['technology'];
    $service = $_POST['service'];
    $modify = $_POST['modify'];
    $structure = $_POST['structure'];
    $perspective = $_POST['perspective'];    

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
		$sql = "INSERT INTO development (image,title,desc_title,description,creative_design,technology,service,modify,structure,perspective) VALUES ('$image','$title','$desc_title','$description','$creative_design','$technology','$service','$modify','$structure','$perspective')";
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