<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
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
        input[type="text"] {
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
        <h1>Update Page</h1>
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
            // Check if product_id is set and not empty
            if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
                // Sanitize input to prevent SQL injection
                $product_id = $conn->real_escape_string($_POST['product_id']);

                // Check if product_name and price are set and not empty
                if (isset($_POST['product_name']) && !empty($_POST['product_name']) &&
                    isset($_POST['price']) && !empty($_POST['price'])) {
                    $product_name = $conn->real_escape_string($_POST['product_name']);
                    $price = $conn->real_escape_string($_POST['price']);

                    // SQL query to update a record
                    $sql = "UPDATE product SET product_name = '$product_name', price = '$price' WHERE product_id = '$product_id'";

                    if ($conn->query($sql) === TRUE) {
                        // Check if any rows were affected by the UPDATE operation
                        if ($conn->affected_rows > 0) {
                            echo '<div class="pop-up">Product updated successfully</div>';
                        } else {
                            echo "No record found with the provided product_id.";
                        }
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    echo "Invalid product_name or price. Please provide valid values.";
                }
            } else {
                echo "Invalid product_id. Please provide a valid product_id.";
            }
        }

        // Close the database connection
        $conn->close();
        ?>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="product_id">Product ID:</label>
            <input type="text" name="product_id" id="product_id" autocomplete="off" placeholder="Enter" required>
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" placeholder="Enter" required>
            <label for="price">Product Price:</label>
            <input type="text" name="price" id="price" autocomplete="off" placeholder="RM" required>
            <input type="submit" value="Update">
        </form>
        <div class="messages">
            <p><a href="homePage.php">Back to Main Menu</a></p>
        </div>
    </div>
</body>
</html>
