<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'school');
//$un=$_SESSION['uname'];
$reg=$_SESSION['regno'];
$sql="SELECT * FROM marks WHERE regno='".$reg."'";
$result = $connection  ->query($sql);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>student marks</title>
</head>
<body> 
	<center><h1>Your Marks</h1></center>
    <table class="table table-success table-striped">
    <tr>
    <th>exam</th>
    <th>subject</th>
    <th>marks</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <td><?php echo $row["exam"]; ?></td>
    <td><?php echo $row["subject"]; ?></td>
    <td><?php echo $row["mark"]; ?></td>
    <?php
	$i++;
    }
	?>
    </table>
   
</body> 
<style>

body{
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
table{
    width:"80%"
}
</style>
</html>

