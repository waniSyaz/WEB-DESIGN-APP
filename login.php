<?php
$servername = "localhost"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbName = "bakery"; // Database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define $myusername, $mypassword
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

$sql = "SELECT username, password FROM users WHERE username='$myusername' AND password='$mypassword'";
$result = $conn->query($sql);

// Mysql_num_rows is counting table row
if ($result->num_rows > 0) {
    // Redirect to file "adminMenu.php"
    header("location: home.txt.php");
} else {
    echo "<p>Wrong Username or Password. Please try again.";
}

$conn->close();
?>