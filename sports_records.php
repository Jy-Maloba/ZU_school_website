<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "school";

$con = Mysqli_connect($server,$username, $password, $db_name)
or die("error connecting server".mysqli_error());
echo "server connected successfully ";


	$number = $_POST['s_id'];
	$sname = $_POST['s_name'];
	$hos = $_POST['hos'];

	if(empty($number)|| empty($sname)|| empty($hos)){
		header("location: add_records.html");
	}else{
		$sql="INSERT INTO sports(sport_id, sport_name, Head_of_sport) 
		VALUES('$number','$sname','$hos')";
		
		$res = mysqli_query($con,$sql);

		if($res){
			header("location: sports.php");
		}else{
			echo"records not added";

		}
}
Mysqli_close($con);
?>