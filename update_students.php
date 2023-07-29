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
	$change =$_POST['change'];

	if(empty($number)|| empty($fname)|| empty($lname)|| empty($email)|| empty($course)|| empty($sport)){
		header("location: update.html");
	}else{
		$sql="UPDATE students SET student_id ='$number', 
		first_name ='$fname', last_name = '$lname', 
		email = '$email', course = '$course',
		sport = '$sport' WHERE student_id = '$change'";
		
		$res = mysqli_query($con,$sql);

		if($res){
			header("location: students.php");
		}else{
			echo"records not updated";

		}
}
Mysqli_close($con);
?>