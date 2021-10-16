<!DOCTYPE html>
<html>
<head>
<title>faculty attendence</title>
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
background-color:orangered;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
h3{
  margin-bottom: 30px;
}
h5{
  font-size: 20px;
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
.btn{
    background-color:yellow;
    padding-left:15px;
    padding-top:15px;
    padding-right:15px;
    padding-bottom:15px;
}
form{
    margin-left:8px;
    margin-right: 8px;
}
</style>
<body>
<center><h3>Enter test details</h3></center>
        <form method='post' action="">
        <p>Enter student regno</p>
            <input type="text" name="studentregno" placeholder="Enter regno of student">
            <p>Enter class title</p>
            <input type="text" name="classname" placeholder="Enter class Title">
            <p>Enter class timings</p>
            <input type="text" name="classtime" placeholder="Enter class Timings">
            <p>Enter date of the class</p>
            <input type="textarea" name="classdate" placeholder="Enter class date">
            <p>Enter status of the student(present/absent)</p>
            <input type="textarea" name="classstatus" placeholder="Enter class status of the student"><br>
            <br><input class="btn" type="submit" value="submit" name="final">
        </form>
</body>
</html>
<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'school');

if(isset($_POST['final'])){
  $studentregno=$_POST['studentregno'];
    $classname=$_POST['classname'];
    $classtime=$_POST['classtime'];
    $classdate=$_POST['classdate'];
    $classstatus=$_POST['classstatus'];
  $sql="INSERT INTO class (studentregno,classname,classtime,classdate,classstatus) VALUES('$studentregno',$classname','$classtime','$classdate','$classstatus')";
  if($connection->query($sql)==TRUE){
    echo "<script>alert('class details Sucessfully recorded')</script>";
  }
  else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

}
?>