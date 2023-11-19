<?php
include('menu.php')
?>

<html>
<head>
<title>Home Page</title>
	<style>
		body {
            padding: 0;
            margin: 0;
            font-family: "Arial", sans-serif;
            background-color: whitesmoke;
            font-size: 17px;
			display: flex;
			flex-direction: column;
			min-height: 100vh;
        }
			.center-text {
            font-family: "Times New Roman";
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        #exploreBtn {
            background-color: mediumpurple;
            color: white;
            border: 4px solid antiquewhite;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: "Times New Roman";
            font-size: 20px;
            margin: 20px;
            cursor: pointer;
        }

        #exploreBtn:hover {
            background-color: deeppink;
            color: white;
            border-color: antiquewhite;
            transition: 0.1s;
        }

        .header2 {
			background-color: white;
            display: flex;
            align-items: center;
            padding: 20px;
            text-align: center;
			
        }
        .header3 {
            background-color: lavender;
            height: 710px;
            display: flex;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
		.header4 {
            background-color: white;
            padding: 20px;
            text-align: center;
			box-shadow: 0 0 20px rgba(128, 0, 128, 0.5);
        }
        .content-wrapper {
            display: flex;
            align-items: center;
        }

        .content {
            flex: 1;
            font-family: "Arial";
            font-size: 50px;
            text-align: justify;
            padding-left: 20px;
            color: palevioletred;
        }
        .content-border {
            display: flex;
            flex: 1;
            margin-left: 20px;
            margin-top: 20px;
            margin-right: 50px;
            padding: 10px;
            color: black;
            background-color: mediumpurple;
        }
        .product-images
		{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }

        .product-images img 
		{
            max-width: 410px;
            height: auto;
			border: 1px solid #000;
			padding: 5px;
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.6); 
        }
		footer 
		{
            text-align: center;
            background-color: palevioletred;
            color: #fff;
            padding: 10px 0;
			margin-top: auto;
        }
	</style>
</head>
 
<body>
    <main>
    <div class="header2">
        <div class="content-wrapper">
            <div class="content">
                <h2><strong>ALWAYS</strong><br><strong></strong>FRESHLY<br><strong>BAKED</strong></h2>
                <p style="font-size: 25px; color: black; font-family: Calibri; text-align: justify; margin-right: 50px">At our bakery, we believe that life's sweetest<br> moments are best celebrated with a delicious treat in hand.<br> From the aroma of freshly baked bread to the sweetness of our<br> pastries, we're here to make every moment special.</p>
                <button id="exploreBtn">FIND OUT MORE</button>
            </div>
            <img src="macaroon3.jpg" alt="macaron logo" width="750" height="auto" style="margin-right: 20px;">
        </div>
    </div>

    <div class="header3">
        <div class="content-wrapper">
            <div class="content">
                <h2><strong>PRODUCTS</strong><br><strong>YOU CAN</strong><br><strong>TRUST</strong></h2>
                <p style="font-size: 25px; color: darkslateblue; font-family: Calibri; text-align: justify; margin-right: 50px">In a world full of choices, we want to be the one<br>you trust. Our commitment to quality, our passion<br> for perfection, and our love for what we do shine through<br>we offer. Your trust is our most cherished reward.</p>
            </div>

            <img src="redvelvet.jpg" alt="redvelvet logo" width="400" height="auto" style="margin-right: 20px;">
	        <video style="margin-left: -80px;" width="600" height="auto" controls>
		    <source src="bakery.mp4" type="video/mp4">
		</video></p> 
        </div>
    </div>
		
		<div class="header4">
			<div class="content-wrapper">
				<div class="centere-text">
				<h2 style="color: deeppink ; font-size: 45px; font-family: TIMES NEW ROMAN; text-shadow: 3px 3px 0 blue; text-align: center;"><strong>TOP 3 BEST SELLER IN OUR SHOP</strong></h2>
			</div>
			</div>
		<div class="product-images">
            <img src="1pcs.jpg" alt="Product 1">
            <img src="2pcs.jpg" alt="Product 2">
            <img src="cake3.jpg" alt="Product 3">
        </div>
				
			</div>
		</div>

    </div>
	</main>
		<footer>
        <p>&copy; 2023 ZNN Sweet Treats. All rights reserved.</p>
    </footer>
</body>
</html>
