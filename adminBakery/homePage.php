<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
</head>

<body>
    <header class="header">
        <ul class="navigation">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Product</a>
                <ul class="submenu">
                    <li><a href="upload.php">Insert Product</a></li>
                    <li><a href="update.php">Update Product</a></li>
                    <li><a href="delete.php">Delete Product</a></li>
                </ul>
            </li>
            <li><a href="#">Admin</a>
                <ul class="submenu">
                    <li><a href="newAdmin.php">New Admin</a></li>
                    <li><a href="updateAdmin.php">Update Admin</a></li>
                    <li><a href="deleteAdmin.php">Delete Admin</a></li>
                </ul>
            </li>
			<li><a href="productList.php">Product List</a></li>
        </ul>
    </header>

    <?php
    include("connectionA.php");
	$username = "zonzon";
    ?>

    <div class="profile">
        <img src="nunu.jpeg" width="150" height="150" style="border-radius: 50%;">
        <p><strong><?php echo $username; ?></strong></p>
    </div>
	
    <div class="header2">
        <div class="content-wrapper">
            
            <div class="content">
                <p style="font-family: Arial; font-size: 53px; color: lightcoral; text-align: center;"><strong>Welcome To Admin Site</strong></p>
                <p style="font-family: Times New Roman; font-size: 30px; color: darkgoldenrod;">ZNN Sweet Treats</p>
				<br>
				<br>
				
            </div>
        </div>
    </div>
		<div class="container">
			<h2 style="font-size: 30px; color: deeppink;"><strong>WHY SWEETS IS MY PASSSION?</strong></h2>
			<br>
			<p style="font-size: 23px; color: black; font-family: Calibri; text-align: justify; margin-right: 50px">I really love sweets. Sweet aren't just food to me but they're like little pieces of happiness. It could be a smooth piece of chocolate or a warm, freshly baked cookie - each one makes me smile. My love for sweets is something I've had for a long time and it makes my day better. sweets are like magic for me and I enjoy trying new flavors and sharing my love for them with others.
			<br>
			<br>
			My love for sweets is a big part of who I am. Just thinking about a sweet treat can make me happy and I love sharing my passion with all people. In fact, sweet is the reason I opened my own brand where I create and share my favorite sweet treats with the world. </p>
		</div>
</body>

</html>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: whitesmoke;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
    }

    .header {
        background: coral;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 40px;
    }

    .profile {
        background-color: white;
        text-align: center;
        padding: 30px;
        position: absolute;
        top: 50px;
        right: 50px;
        border: 2px solid coral;
        border-radius: 10px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.6);
    }

    .profile img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }

    .profile strong {
        font-size: 16px;
    }

    .navigation {
        list-style: none;
        display: flex;
        margin: 0;
    }

    .navigation li {
        margin: 0 30px;
        position: relative;
    }

    .navigation a {
		width: 180px;
		height: auto;
		font-size: 18px;
        text-decoration: none;
        color: white;
    }

    .active,
    .navigation li:hover {
        background: transparent;
        border-radius: 3px;
        text-align: center;
    }

    .submenu {
        display: none;
        position: absolute;
        background: orange;
        border: 1px solid black;
    }

    .submenu li {
        display: block;
        margin: 0;
        border-bottom: 1px solid black;
    }

    .submenu a {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: black;
		
    }

    .navigation li:hover .submenu {
        display: block;
    }

    .header2 {
        display: flex;
        align-items: center;
        padding: 20px;
        justify-content: space-between;
    }

    .content-wrapper {
        display: flex;
        align-items: center;
    }

    .content {
        flex: 1;
    }

    .btn-wrapper {
        text-align: center;
        margin-top: 20px;
        flex: 1;
    }

    .btn {
        background-color: orange;
        color: black;
        border-radius: 5px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-family: "Times New Roman";
        font-size: 20px;
        cursor: pointer;
        display: block;
    }

    .btn:hover {
        color: lightgrey;
        border-color: lightgrey;
        transition: 0.1s;
    }

    .container {
		width: 1000px; 
        margin: 0 auto;
        background: antiquewhite; 
		margin-left: 20px;
        padding: 40px;
        border: 3px solid hotpink; 
        border-radius: 10px; 
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.6); 
    }
    </style>
