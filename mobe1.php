<?php
$servername = "localhost:3306";
$username = "root";
$password = "faraz9005...";
$dbname = "mobe";
/*
  echo "<script>alert('There are no fields to generate a report');</script>";
  
  
  $num_text_fields = $_POST['num_text_fields'];

foreach($_POST['id'] as $key => $value) {
    echo "text $key = $value";
}

echo $_POST['first_name'];
echo $_REQUEST['last_name'];
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['gender'];
 
$sql = "INSERT INTO innovation (name, email, gender)
VALUES ('$a', '$b', '$c')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>