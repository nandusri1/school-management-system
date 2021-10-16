<!DOCTYPE html>
<html>
<head>
<title>faculty marks</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br><br>
<div class="container">
	<div class="card-deck">
		<div class="card border-0">
			<!--<form action="deleteloan.php" method="POST">---->
				<h3>Assign marks to students</h3><br>
				<label>Enter examination:</label>
				<input type="text" name="exam" size="20"/><br>
				<label>Enter subject:</label>
				<input type="text" name="subject" size="20"/><br>
				<label>Enter student Registration number:</label>
				<textarea name="regno" rows="1" cols="30"></textarea><br>
				<label>Enter marks:</label>
				<textarea name="marks" rows="3" cols="30"></textarea><br>
				<button name="add">Add marks</button>
			</form>
		</div>
<?php
	$conn = mysqli_connect("localhost", "root", "", "school");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM marks";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	// output data of each row
?>
	<div class="card border-0">
	<form action="deleteloan.php" method="POST">
		<h3>To delete marks permanently:</h3><br>
		<label>Enter subject:</label>
		<input type="text" name="subject" size="20"/><br>
		<label>Enter registration number</label>
		<input type="text" name="regno" size="20"/><br>
		<button name="submit">Submit</button>
	</form>
</div>
</div>
	<br><hr><br>
	<h3>List of all marks, you have added:</h3><br>
	<!---<p>These will be also visible for customers in your bank:)</p>--->
	<div class="card-columns">
<?php
	while($row = $result->fetch_assoc()) {
		echo "<div class='card'><div class='card-body'>";
		$i=$i+1;
		echo "<h4>".$row['exam']."</h4><div class='card-text'><b>1.subject: </b>".$row['subject']."<br><b>2.register no </b>".$row['regno']."<br><b>3.marks </b>".$row['marks'];
			echo "</div></div></div>";
	}
	
	} //else { echo "<br><h5>No results found</h5>"; }
	$conn->close();
?>
</div>
</div>
</body>
</html>