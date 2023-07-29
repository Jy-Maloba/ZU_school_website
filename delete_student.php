<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$con = Mysqli_connect($server,$username, $password, $db_name)
or die("error connecting server".mysqli_error());
echo "server connected successfully ";

	$delete =$_POST['delete'];

	if(empty($delete)){
		header("location: delete.html");
	}else{
		$sql="DELETE FROM students WHERE student_id = '$delete'";
		
		$res = mysqli_query($con,$sql);

		if($res){
			header("location: students.php");
		}else{
			echo"records not updated";

		}
}
Mysqli_close($con);
?>