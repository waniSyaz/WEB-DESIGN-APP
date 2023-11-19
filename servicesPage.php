<?php
include("connection.php");
include("menu.php");

$message = ""; // Variable to store the popup message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $messageText = $_POST["message"];

    $stmt = $conn->prepare("INSERT INTO services (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $messageText);
    $stmt->execute();
    $stmt->close();

    // Set the success message
    $message = "We have received your message!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services Page</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: "Arial", sans-serif;
            background-color: whitesmoke;
            font-size: 17px;
        }

        .menu-bar {
            height: 80px;
            background: palevioletred;
            text-align: left;
        }

        header {
            background-color: white;
            color: black;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .terms h2 {
            font-size: 24px;
            margin-top: 20px;
        }

        .terms p {
            font-size: 16px;
            margin: 10px 0;
        }

        footer {
            text-align: center;
            background-color: palevioletred;
            color: #fff;
            padding: 10px 0;
        }

        .contact-form {
            margin-top: 20px;
        }

        .contact-form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Additional style for the popup message */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
    </style>
    <script>
        // JavaScript to show the popup message
        document.addEventListener("DOMContentLoaded", function() {
            var popup = document.getElementById("popup");

            <?php
            // Display the popup if the message is set
            if ($message != "") {
                echo "popup.style.display = 'block';";
            }
            ?>

            // Close the popup when the close button is clicked
            document.getElementById("closePopup").addEventListener("click", function() {
                popup.style.display = "none";
            });
        });
    </script>
</head>
<body>
    <main>
        <section class="terms">
            <h2>1. Introduction</h2>
            <p>These terms of use outline the rules and regulations for the use of our website.</p>

            <h2>2. Acceptable Use</h2>
            <p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent, or harmful, or in connection with any unlawful, illegal, fraudulent, or harmful purpose or activity.</p>

            <h2>3. Contact Information</h2>
            <p>If you have any questions about these Terms of Use, please contact us at support@example.com.</p>

            <div class="contact-form">
                <h3>Contact Us</h3>
                <form method="post" action="">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 ZNN Sweet Treats. All rights reserved.</p>
    </footer>

    <!-- Popup message -->
    <div id="popup" class="popup">
        <p><?php echo $message; ?></p>
        <button id="closePopup">Close</button>
    </div>
</body>
</html>
