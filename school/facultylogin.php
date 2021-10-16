<?php
$un=$_POST['funame'];
$p=$_POST['fpsw'];

if ($un=="faculty1"&&$p=="pfaculty01"){    
?> 
<!DOCTYPE html>
<html>
<head>
  <title>prerana faculty portal</title>
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
      <a href="faculty_profile.html">profile</a>
      <a href="faculty_timetable.html">Timetable</a>
      <a href="faculty_marks.php">Marks</a>
      <a href="faculty_attendence.php">Attendence</a>
      <a href="faculty_uptests.php">Upcoming tests</a>
      <a href="faculty_logout.php">Logout</a>
    </div>

    <center><h1>faculty academic portal</h1></center>

  </div>
</body>
</html>

<?php
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Incorrect username or password.  ";
    echo "<a href='facultylogin.html'>Try Again</a>";
}
?>