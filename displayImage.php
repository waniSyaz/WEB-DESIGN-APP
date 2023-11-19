<?php
include("connection.php");
include("menu.php");

$categories = ['Macarons', 'Cakes', 'Cookies', 'Thai Dessert'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="font/css/all.min.css">
    <title>Product Page</title>
    <style>
        .card {
            border: 1px solid #ccc;
            display: inline-block;
            margin: 10px;
            width: 300px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.4);
        }
        .card img {
            max-width: 99.9%;
            height: auto;
            object-fit: cover;
			align-items: center;
        }
        img {
            border: 1px solid #ccc;
            width: 447px;
            max-width: 100%;
            height: 230px;
            object-fit: cover;
        }
        .caption {
            padding: 10px;
        }
		.rate 
		{
        display: flex;
        color: gold;
        margin-bottom: 10px; 
        }
        .rate i {
        margin-right: 5px; 
        }
        footer {
            text-align: center;
            background-color: palevioletred;
            color: #fff;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <?php
    foreach ($categories as $category) {
        $sql = "SELECT * FROM product WHERE category = '$category'";
        $result = $conn->query($sql);

        echo "<h2>$category</h2>";

        echo '<main>';
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="card">
            <div class="image">
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
                <p class="price"><b>RM<?php echo $row["price"]; ?></b></p>
            </div>
        </div>
    <?php
        }
        echo '</main>';
    }
    ?>
    <script>
    var addToCartButtons = document.getElementsByClassName("add-to-cart");

    for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener("click", function (event) {
            var target = event.target;
            var id = target.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    alert(data.in_cart);
                    document.getElementById("badge").innerHTML = data.num_cart;
                }
            }

            xml.open("GET", "connection.php?id=" + id, true);
            xml.send();
        });
    }
</script>

    <footer>
        <p>&copy; 2023 ZNN Sweet Treats. All rights reserved.</p>
    </footer>
</body>
</html>
