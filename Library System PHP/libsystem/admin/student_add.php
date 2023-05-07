<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
                $student_id = $_POST['student_id'];
		$course = $_POST['course'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$sql = "INSERT INTO students (student_id, firstname, lastname, course_id, photo, created_on) VALUES ('$student_id', '$firstname', '$lastname', '$course', '$filename', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: student.php');
?>