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
    $change =$_POST['change'];

    if(empty($number)|| empty($sname)|| empty($hos)){
		header("location: add_records.html");
    }else{
		$sql="UPDATE sports SET sport_id ='$number', 
		sport_name ='$sname', Head_of_sport = '$hos'
        WHERE sport_id = '$change'";
		
		$res = mysqli_query($con,$sql);

		if($res){
			header("location: sports.php");
		}else{
			echo"records not updated";

		}
    }
Mysqli_close($con);
?>