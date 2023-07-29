<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$con = Mysqli_connect($server,$username, $password, $db_name)
or die("error connecting server".mysqli_error());
echo "server connected successfully ";


	$number = $_POST['c_id'];
	$cname = $_POST['c_name'];
	$dept = $_POST['dept'];
	$hod = $_POST['hod'];

	if(empty($number)|| empty($cname)|| empty($dept)|| empty($hod)){
		header("location: add_records.html");
	}else{
		$sql="INSERT INTO courses(course_id, course_name, department, HOD) 
		VALUES('$number','$cname','$dept', '$hod')";
		
		$res = mysqli_query($con,$sql);

		if($res){
			header("location: courses.php");
		}else{
			echo"records not added";

		}
}
Mysqli_close($con);
?>