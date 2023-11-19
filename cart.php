<?php
// connection.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have user authentication in place
// For demonstration purposes, let's assume the username is hardcoded
$username = "example_user";

// Handle adding products to the cart
if (isset($_GET["id"])) {
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE product_id = $product_id";
    $result = $conn->query($sql);
    $total_cart = "SELECT * FROM cart WHERE username = '$username'";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    if (mysqli_num_rows($result) > 0) {
        $in_cart = "already In cart";
        echo json_encode(["num_cart" => $cart_num, "in_cart" => $in_cart]);
    } else {
        $insert = "INSERT INTO cart(username, product_id) VALUES('$username', $product_id)";
        if ($conn->query($insert) === true) {
            $in_cart = "added into cart";
            echo json_encode(["num_cart" => $cart_num, "in_cart" => $in_cart]);
        } else {
            echo "<script>alert('It doesn't insert');</script>";
        }
    }
}

// Handle removing products from the cart
if (isset($_GET["cart_id"])) {
    $cart_id = $_GET["cart_id"];
    $sql = "DELETE FROM cart WHERE cartID = $cart_id AND username = '$username'";

    if ($conn->query($sql) === TRUE) {
        echo "Removed from cart";
    }
}

// Display cart items for the user
$sql_cart = "SELECT * FROM cart WHERE username = '$username'";
$all_cart = $conn->query($sql_cart);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="cart.css">
    <title>In cart products</title>
</head>
<body>
    <?php
    include_once 'menu.php';
    ?>
    
    <main>
        <h1><?php echo mysqli_num_rows($all_cart); ?> Items</h1>
        <hr>
        <?php
        while ($row_cart = mysqli_fetch_assoc($all_cart)) {
            $sql = "SELECT * FROM product WHERE product_id=" . $row_cart["product_id"];
            $all_product = $conn->query($sql);
            while ($row = mysqli_fetch_assoc($all_product)) {
        ?>
                <div class="card">
                    <div class="images">
                        <img src="<?php echo $row["product_image"]; ?>" alt="">
                    </div>

                    <div class="caption">
                        <p class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="product_name"><?php echo $row["product_name"]; ?></p>
                        <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
                        <p class="discount"><b><del>$<?php echo $row["discount"]; ?></del></b></p>
                        <button class="remove" data-id="<?php echo $row_cart["cartID"]; ?>">Remove from Cart</button>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for (var i = 0; i < remove.length; i++) {
            remove[i].addEventListener("click", function (event) {
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        target.innerHTML = this.responseText;
                        target.style.opacity = .3;
                    }
                }

                xml.open("GET", "connection.php?cart_id=" + cart_id, true);
                xml.send();
            })
        }
    </script>
</body>
</html>
