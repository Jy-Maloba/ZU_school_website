<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Students</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />

		<style>
			table {
				margin: 0 auto;
				font-size: large;
				border: 1px solid black;
			}
	
			h1 {
				text-align: center;
				font-size: xx-large;
				font-family: 'Gill Sans', 'Gill Sans MT',
				' Calibri', 'Trebuchet MS', 'sans-serif';
			}
	
			td {
				background-color: #E4F5D4;
				border: 1px solid black;
			}
	
			th,
			td {
				font-weight: bold;
				border: black;
				padding: 10px;
				text-align: center;
			}
		</style>
	</head>
	<body>
    <section class="nav">
        <img src="assets/logo.jpg" alt="logo" class="logo"/>
        <div class="nav-main">
            <div class="upper">
                <p class="name">ZETECH UNIVERSITY</p>
                <p class="motto">Invent your future</p>
            </div>
            
            <ul class="nav-menu">
                <li><a href="home.html" >Home</a></li>
                <li><a href="students.php" >students</a></li>
                <li><a href="courses.php" >Courses</a></li>
                <li><a href="sports.php" >Sports</a></li>
            </ul>
        </div>
    </section>
	<div class="container">
        
		<div class="menu">
			<ul>
				<li><a href="add_records.html" >Add Records</a></li>
				<li><a href="update.html" >update</a></li>
				<li><a href="delete.html" >Delete </a></li>
				
			</ul>
		</div>

		<div class="content">
			<div>
				<h1 class="heading">Course Records</h1>
			</div>
			<table>
				<tr>
					<th>Course ID</th>
					<th>Course Name</th>
					<th>Department</th>
					<th>HOD</th>
				</tr>
				<?php
				$server = "localhost";
				$username = "root";
				$password = "";
				$db_name = "school";

				$con = Mysqli_connect($server,$username, $password, $db_name)
				or die("error connecting server".Mysqli_error());
				echo " ";

				$sql = "SELECT * FROM courses ORDER BY course_id";
				$result = $con ->query($sql);
				// $mysqli->close();

				
				if ($result ->num_rows>0){
					while($rows = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$rows['course_id']."</td>";
						echo "<td>".$rows['course_name']."</td>";
						echo "<td>".$rows['department']."</td>";
						echo "<td>".$rows['HOD']."</td>";
					}
				}else{
					echo "No Records Found";
				}
				$con->close();
				?>
			
			</table>
			</div>
		</div>
	</div>
	</body>
</html>