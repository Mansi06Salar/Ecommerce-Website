<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "info";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$Name = $_GET["name"];
$Email = $_GET["email"];
$Subject = $_GET["subject"];
$Message = $_GET["message"];

$sql = "INSERT INTO information (`Name`, `Email`, `Subject`, `Message`) VALUES ('$Name', '$Email', '$Subject', '$Message')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  // header('Location: displaydata.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>