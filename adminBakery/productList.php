<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: palevioletred;
            color: white;
        }

        button {
            background-color: darkorange;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: hotpink;
        }
    </style>
</head>

<body>
    <h3>ALL PRODUCT DETAILS</h3>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "bakery";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //create and execute query
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    //check if records were returned
    if ($result->num_rows > 0) {
        //create a table to display the record
        echo '<table>';
        echo '<tr><th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Category</th></tr>';

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["product_id"] . '</td>';
            echo '<td>' . $row["product_name"] . '</td>';
            echo '<td>' . $row["price"] . '</td>';
            echo '<td>' . $row["category"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "0 results"; //if no record found in the database
    }
    //close connection
    $conn->close();
    ?>
    <!-- Back to Main Menu Button -->
    <div style="text-align: center; margin-top: 20px;">
        <button onclick="location.href='homePage.php'">Back to Main Menu</button>
    </div>
</body>

</html>
