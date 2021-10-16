<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$reg=$_POST['regno'];
$p=$_POST['psw'];
//$un=$_POST['uname'];
$_SESSION['regno']=$reg;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select * from account where regno='".$reg."'and psw='".$p."'";
$result=mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
//header("Location: project2.html");
if ($count==1) {
    //echo "<script>alert('yayy');</script>";
    //header("Location: homepage.html");
    //exit();
?> 
<!DOCTYPE html>
<html>
<head>
  <title>prerana student portal</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="style.css">
<script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>
</head>
<body>

  <div id="content">

    <span class="slide">
      <a href="#" onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>

    <div id="menu" class="nav">
      <a href="#" class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times"></i>
      </a>
      <a href="student_profile.html">profile</a>
      <a href="student_timetable.html">Timetable</a>
      <a href="student_marks.php">Marks</a>
      <a href="student_attendence.php">Attendence</a>
      <a href="student_tests.php">Upcoming tests</a>
      <a href="student_logout.php">Logout</a>
    </div>

<center><h1 color="blue">prerana student portal</h1></center>
  </div>
  
</body>
</html>

<?php
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Incorrect username or password.  ";
    echo "<a href='studentlogin.html'>Try Again</a>";
}
?>