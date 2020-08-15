<?php 
	include('database.php');

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		$days = $_POST['days'];
		$email = $_POST['email'];
		$sid = $_POST['sid'];

		$sql ="INSERT INTO student(name,firstname,days,email,sid) VALUES('$name','$firstname','$days','$email','$sid')";
	
		
			if(mysqli_query($conn,$sql)){
				echo "Registration Successfully Done";
			}else{
				echo "Error";
			}
		
mysqli_close($conn);
		
	}



$sqlgetinfo ="SELECT * FROM student";
$results = mysqli_query($conn,$sqlgetinfo);



	

?>