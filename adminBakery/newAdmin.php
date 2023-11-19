<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #808080;
            margin: 0;
            padding: 0;
        }
        .page-header {
            background-color: coral;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .container {
            align-items: center;
            max-width: 420px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 400px;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: deeppink;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: darkorange;
        }
        .pop-up {
            border: 1px solid green;
            padding: 10px;
            margin-top: 10px;
            background-color: lightgreen;
        }
        .messages {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header class="page-header">
        <h1>New Admin</h1>
    </header>
	<div class="container">

<?php
include("connectionA.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate inputs (you should add more validation as needed)
    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
    } else {

        // Check if the username already exists
        $checkSql = "SELECT * FROM admin WHERE username = '$username'";
        $checkResult = $conn->query($checkSql);

        if ($checkResult->num_rows > 0) {
            echo "Username already exists. Please choose a different username.";
        } else {
            // Insert new admin
            $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
            $result = $conn->query($sql);

            if ($result) {
                echo "Admin created successfully!";
            } else {
                echo "Error inserting admin: " . $conn->error;
            }
        }

        $checkResult->close();
    }

    $conn->close();
}
?>
		<form method="post" action="newAdmin.php">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username" required><br>

        <label for="password">Password:</label>
        <input type="text" name="password" placeholder="Password" required><br>

        <input type="submit" value="New Admin">
		<div class="messages">
            <p><a href="homePage.php">Back to Main Menu</a></p>
        </div>
    </form>
	</div>
</body>
</html>
