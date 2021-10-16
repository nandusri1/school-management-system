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
<style>
body{
  margin: 0;
  padding:0;
  background-color:skyblue;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
h3{
  margin-bottom: 30px;
  color:tomato;
}
h3:hover{
  background-color: white;
}
form{
  margin-left: 8px;
  margin-right: 8px;
}
input{
  padding:10px;
  width:100%;
  margin-bottom: 25px;
  border: 1px solid black;
}
input:hover{
  background-color: cadetblue;
}
.btn{
	padding-top:15px;
	padding-bottom:15px;
	padding-right:15px;
	padding-left:15px;
	background-color:palevioletred;
}

</style>
<body>
<center><h3>Marks</h3></center>
        <form method='post' action="">
            <p>Enter reg.no</p>
            <input type="text" name="regno" placeholder="Enter student regno">
            <p>class</p>
            <input type="text" name="class" placeholder="Enter class">
            <p>exam</p>
            <input type="text" name="exam" placeholder="Enter exam">
            <p>subject</p>
            <input type="text" name="subject" placeholder="Enter subject">
            <p>Mark</p>
            <input type="text" name="Mark" placeholder="Enter marks"><br>
            <br><input class="btn" type="submit" value="submit" name="final">
        </form>
</body>
</html>
<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'school');

if(isset($_POST['final'])){
    $exam=$_POST['exam'];
    $regno=$_POST['regno'];
    $subject=$_POST['subject'];
    $class=$_POST['class'];
    $MARK=$_POST['Mark'];
  $sql="INSERT INTO marks (regno,class,exam,subject,mark) VALUES('$regno','$class','$exam','$subject','$MARK')";
  if($connection->query($sql)==TRUE){
    echo "<script>alert('Sucessfully recorded')</script>";
  }
  else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

}
?>