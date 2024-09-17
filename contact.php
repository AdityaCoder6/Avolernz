<?php include 'dbconnect.php' ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['number']); // Change to match the form field name
    $address = htmlspecialchars($_POST['address']);
    $coaching = htmlspecialchars($_POST['coaching']);
    $country = htmlspecialchars($_POST['country']);
    $students = intval($_POST['students']);
    $about = htmlspecialchars($_POST['about']);

    // Check if 'tickets' table exists
    $sql = "SHOW TABLES LIKE 'user'";
    $result2 = mysqli_query($conn, $sql);
    $tableExist = (mysqli_num_rows($result2) > 0);

    if (!$tableExist) {
        // Create 'tickets' table if it doesn't exist
        $sql = "CREATE TABLE `user` (
            `sno` INT(7) NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL,
            `phno` VARCHAR(15) NOT NULL,
            `address` VARCHAR(255) NOT NULL,
            `coaching` VARCHAR(255) NOT NULL,
            `country` VARCHAR(255) NOT NULL,
            `students` INT(7) NOT NULL,
            `about` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`sno`)
        )";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error creating table: " . mysqli_error($conn);
            exit();
        }
    }

    // Insert user data into 'tickets' table
    $sql = "INSERT INTO `user` (`name`, `email`, `phno`, `address`, `coaching`, `country`, `students`, `about`)
            VALUES ('$name', '$email', '$phone', '$address', '$coaching', '$country', '$students', '$about')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVOlernz - Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
        <a href="main.php" class="logo">AVOlernz.</a>
        <nav class="navbar">
            <a href="main.php">Home</a><a href="about.php">About</a><a href="client.php">Clients</a><a href="contact.php">Services</a>
        </nav>
    </section>
    <section class="services">
        <h1>our services</h1>
        <div class="box-container1">
            <div class="box1">
                <img src="images\web.png" width="50%">
                <h2>Website Development</h2>
            </div>
            <div class="box1">
                <img src="images\app.png" width="50%">
                <h2>App Development</h2>
            </div>
            <div class="box1">
                <img src="images\webapp.png" width="50%">
                <h2>Web + App Development</h2>
            </div>
            
        </div>
    </section>
    <section class="contact">
        <div class="book">
            <form action="contact.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
            
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
            
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your number" name="number">
                </div>
            
                <div class="inputbox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
            
                <div class="inputbox">
                    <span>coaching name :</span>
                    <input type="text" placeholder="enter the coaching name" name="coaching">
                </div>
            
                <div class="inputbox">
                    <span>country :</span>
                    <input type="text" placeholder="country name" name="country">
                </div>
            
                <div class="inputbox">
                    <span>number of students :</span>
                    <input type="number" placeholder="number of students" name="students">
                </div>
                <div class="inputbox">
                    <span>why do you want this? :</span>
                    <input type="text" placeholder="write here" name="about">
                </div>
                
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
        </div>
    </section>
    <section class="footer">
        
    <div class="box-container">
        
        <div class="box">
            <h3>Quick Links</h3>
            <a href="main.php"><i class="fa-solid fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fa-solid fa-angle-right"></i>About</a>
            <a href="client.php"><i class="fa-solid fa-angle-right"></i>Clients</a>
            <a href="contact.php"><i class="fa-solid fa-angle-right"></i>Services</a>
        </div>
        <div class="box">
            <h3>Extra Links</h3>
            <a href="contact.php"><i class="fa-solid fa-angle-right"></i>ask questions</a>
            <a href="about.php"><i class="fa-solid fa-angle-right"></i>about us</a>
            <a href="#"><i class="fa-solid fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fa-solid fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fa-solid fa-phone"></i>+91-8287961834</a>
            <a href="#"><i class="fa-solid fa-phone"></i>+91-9205449220</a>
            <a href="#"><i class="fa-regular fa-envelope"></i>adityaprem32@gmail.com</a>
            <a href="#"><i class="fa-solid fa-map"></i>New Delhi, India-110059</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fa-brands fa-facebook"></i>facebook</a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></i>twitter</a>
            <a href="#"><i class="fa-brands fa-instagram"></i>instagram</a>
            <a href="#"><i class="fa-brands fa-linkedin"></i>linkedin</a>
        </div>
    </div>
    <div class="credit">Created By <span>AVOlernz</span> | All Rights Reserved</div>
    </section>
</body>
</html>