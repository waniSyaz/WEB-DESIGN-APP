<!DOCTYPE html>
<html>
<head>
    <title>Update Admin</title>
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
        <h1>Update Admin</h1>
    </header>
    
    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bakery";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['username']) && !empty($_POST['username'])) {
                $username = $conn->real_escape_string($_POST['username']);

                if (isset($_POST['password']) && !empty($_POST['password'])) {
                    $password = $conn->real_escape_string($_POST['password']);

                    // SQL query to update a specific record
                    $sql = "UPDATE admin SET password = '$password' WHERE username = '$username'";

                    if ($conn->query($sql) === TRUE) {
                        // Check if any rows were affected by the UPDATE operation
                        if ($conn->affected_rows > 0) {
                            echo '<div class="pop-up">Admin updated successfully</div>';
                        } else {
                            echo "No record found with the provided username.";
                        }
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    echo "Invalid password. Please provide a valid password.";
                }
            } else {
                echo "Invalid username. Please provide a valid username.";
            }
        }

        // Close the database connection
        $conn->close();
        ?>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" autocomplete="off" placeholder="Username" required>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" autocomplete="off" placeholder="Password" required>
            <input type="submit" value="Update">
        </form>
        <div class="messages">
            <p><a href="homePage.php">Back to Main Menu</a></p>
        </div>
    </div>
</body>
</html>

