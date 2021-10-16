<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO application (firstname,middlename,lastname,course,gender,pincode,phone,currentaddress,email,fathername,mothername) VALUES('".$_POST['firstname']."', '".$_POST['middlename']."','".$_POST['lastname']."','".$_POST['course']."','".$_POST['gender']."','".$_POST['pincode']."', '".$_POST['phone']."', '".$_POST['currentaddress']."','".$_POST['email']."','".$_POST['fan']."','".$_POST['mon']."')";

if (mysqli_query($conn, $sql)) {
    echo "Your deatils are succesfully submitted,Prerana management will get back to you soon";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "An error occured,please wait for some time and try again";
}

mysqli_close($conn);
?> 
