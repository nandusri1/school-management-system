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
$sql = "INSERT INTO contact (firstname,lastname,email,place,subject) VALUES('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['place']."','".$_POST['subject']."')";

if (mysqli_query($conn, $sql)) {
    echo "Deatils are succesfully submitted,Prerana management will get back to you soon";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "An error occured,please wait for some time and try again";
}

mysqli_close($conn);
?> 
