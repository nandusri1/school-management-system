<!DOCTYPE html>
<html>
<head>
<title>faculty upcoming tests</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body{
background-color:yellow;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
.btn{
    background-color:pink;
    padding-left:15px;
    padding-top:15px;
    padding-right:15px;
    padding-bottom:15px;
}
input{
  width: 100%;
  padding: 10px;
  border: 1px solid black;
  margin-bottom: 20px;
}
input:hover{
  background-color: palegreen;
}
form{
    margin-left:8px;
    margin-right: 8px;
}
</style>
<body>
<center><h3>Enter test details</h3></center>
        <form method='post' action="">
            <p>Enter test name</p>
            <input type="text" name="testname" placeholder="Enter test name">
            <p>Enter test timings</p>
            <input type="text" name="testtime" placeholder="Enter test timings">
            <p>Enter syllabus of the test</p>
            <input type="textarea" name="syllabus" placeholder="Enter test syllabus">
            <p>Enter instructions(if any)</p>
            <input type="textarea" name="instructions" placeholder="Enter test instructions"><br>
            <br><input class="btn" type="submit" value="submit" name="final">
        </form>
</body>
</html>
<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'school');

if(isset($_POST['final'])){
    $testname=$_POST['testname'];
    $testtime=$_POST['testtime'];
    $syllabus=$_POST['syllabus'];
    $instructions=$_POST['instructions'];
  $sql="INSERT INTO test (testname,testtime,syllabus,instructions) VALUES('$testname','$testtime','$syllabus','$instructions')";
  if($connection->query($sql)==TRUE){
    echo "<script>alert('Test details Sucessfully recorded')</script>";
  }
  else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

}
?>