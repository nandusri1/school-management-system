<!DOCTYPE html>
<html>
<head>
<title>student marks</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'school');
$reg=$_SESSION['regno'];
$sql="SELECT * FROM class WHERE studentregno='".$reg."'";
$result = $connection  ->query($sql);
?>

<body> 
	<center><h1>your attendence</h1></center>
    <table class="table table-dark table-striped"><tr>
    <th>class title</th>
    <th>class date</th>
    <th>class time</th>
    <th>class status</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr><td><?php echo $row["classname"]; ?></td>
    <td><?php echo $row["classdate"]; ?></td>
    <td><?php echo $row["classtime"]; ?></td>
    <td><?php echo $row["classstatus"]; ?></td>
    <?php
	$i++;
	}
	?>
    </table>
   
</body> 
<style>
table, th, td {
  background-color:pink;
  border: 2px solid black;
  text-align: left;
  padding: 8px;
  margin-left:20px;
}
body{
    background-color:greenyellow; 
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
</style>
</html>
