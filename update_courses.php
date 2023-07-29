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
    $change =$_POST['change'];

    if(empty($number)|| empty($cname)|| empty($dept)|| empty($hod)){
        header("location: add_records.html");
    }else{
		$sql="UPDATE courses SET course_id ='$number', 
		course_name ='$cname', department = '$dept', 
		HOD = '$hod' WHERE course_id = '$change'";
		
		$res = mysqli_query($con,$sql);

		if($res){
			header("location: courses.php");
		}else{
			echo"records not updated";

		}
    }
Mysqli_close($con);
?>