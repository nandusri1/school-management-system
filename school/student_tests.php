<!DOCTYPE html>
<html>
<head>
<title>student upcoming tests</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<br><br>
<div class="container">
<?php
	$conn = mysqli_connect("localhost", "root", "", "school");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM test";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	// output data of each row
?>
	
<center><h1>Your upcoming tests</h1></center>
	<div class="card-columns">
<?php
	while($row = $result->fetch_assoc()) {
		echo "<div class='card'><div class='card-body'>";
		$i=$i+1;
		echo "<h4>".$row['testname']."</h4><div class='card-text'><b>1.Testname: </b>".$row['testname']."<br><b>2.Testtime: </b>".$row['testtime']."<br><b>3.Syllabus: </b>".$row['syllabus']."<br><b>4.Instructions: </b>".$row['instructions'];
			echo "</div></div></div>";
	}
	
	} //else { echo "<br><h5>No results found</h5>"; }
	$conn->close();
?>
</div>
</div>
</body>
</html>