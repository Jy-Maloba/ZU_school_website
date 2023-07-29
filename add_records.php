<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$con = Mysqli_connect($server,$username, $password, $db_name)
or die("error connecting server".mysqli_error());
echo "server connected successfully ";


	$number = $_POST['id'];
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$email = $_POST['email'];
	$course = $_POST['course'];
	$sport = $_POST['sport'];

	if(empty($number)|| empty($fname)|| empty($lname)|| empty($email)|| empty($course)|| empty($sport)){
		header("location: add_records.html");
	}else{
		$sql="INSERT INTO students(student_id, first_name, last_name, email, course, sport) 
		VALUES('$number','$fname','$lname', '$email', '$course', '$sport')";
		
		$res = mysqli_query($con,$sql);

		if($res){
			header("location: students.php");
		}else{
			echo"records not added";

		}
}
Mysqli_close($con);
?>