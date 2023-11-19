<?php
  include("menu.php")
?>

<html>
<head>
    <title>About Page</title>
    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
        }
		.header2 {
            display: flex;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
        
        .header3 {
            display: flex;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
        
        .content-wrapper {
            display: flex;
            align-items: center;
        }
        
        .content {
            flex: 1;
            font-family: "Arial";
            font-size: 40px;
            text-align: justify;
            padding-left: 20px;
            color: palevioletred;
        }
		footer {
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
			<h2><strong>ABOUT US</strong></h2>
                <p style="font-size: 23px; color: black; font-family: Calibri; text-align: justify; margin-right: 50px">Welcome to <strong>ZNN Sweet Treats</strong>, where our journey is as the flavors we create. Our passion for sweet desserts is at the heart of everything we do. With every sprinkle, every layer, and every flavor, we aim to craft experiences that linger in your memory and make life's sweetest moments even sweeter. Our passion for sweet desserts is at the heart of everything we do.
					
				<br><br>Our ovens have witnessed countless smiles, and our recipes have warmed hearts. We believe that every treat we create has the power to bring joy, and we take immense pride in the smiles we've inspired over the years. From the cozy warmth of our bakery to the moment you savor that first bite, we aim to make every interaction memorable. It's a user-friendly and safe space where you can explore our product offerings and connect with our brand. Your satisfaction is our goal, and we're here to make your experience delightful.</p>
            </div>
            <img src="cake.jpg" alt="cake logo" width="670" height="auto" style="margin-right: 20px;">
        </div>
    </div>
	
    <div class="header3">
        <div class="content-wrapper">
            <img src="cookies.jpg" alt="cookies logo" width="670" height="auto" style="margin-left: 20px;">
            <div class="content">
				<h2><strong>OUR MISSION</strong></h2>
                <p style="font-size: 23px; color: black; font-family: Calibri; text-align: justify; margin-left: 20px;">At ZNN Sweet Treats, our mission is to create a delightful journey into the world of sweet desserts. We provide an inviting and user-friendly platform where you can explore our exquisite products, connect with our passion for baking and make delightful purchases with confidence. Our goal is to satisfy your cravings and leave you wanting to return for more.
					
				<br><br>As we share our love for baking and sweet treats, we also commit to personal growth and learning, continuously improving to offer captivating and interactive experiences. Join us in celebrating life's sweetest moments and embark on a mouthwatering journey with ZNN Sweet Treats. We're here to bake, learn and inspire, one delectable experience at a time.</p>
            </div>
        </div>
    </div>
	</main>
	<footer>
        <p>&copy; 2023 ZNN Sweet Treats. All rights reserved.</p>
    </footer>
</body>
</html>
