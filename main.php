<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVOlernz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
        <a href="main.php" class="logo">AVOlernz.</a>
        <nav class="navbar">
            <a href="main.php">Home</a><a href="about.php">About</a><a href="client.php">Clients</a><a href="contact.php">Services</a>
        </nav>
    </section>
    <section class="home" id="home">
                <div class="slide">
                    
                    <div class="content fade">
                        <h3>Revolutionizing Coaching industries</h3>
                        <a href="about.php" class="btn">discover more</a>
                    </div>
                    <div class="circle">

                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
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
    <div class="home-about-section" id="home-about-section">
        <img src="images/about.jpg" alt="" width="40%">
        <div class="about">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor error quidem molestias, distinctio aperiam in fuga dignissimos, dolores at repellendus, ipsa enim quam dolorem molestiae quo. Quibusdam modi delectus animi.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </div>
    <section class="client">
        <h1>Our Clients</h1>
        <div class="box-container2">
            <div class="box">
                <span><img src="images/user.png" width="10%"><h2>client 1</h2></span>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium vitae maxime modi rerum error magnam nesciunt mollitia deserunt eveniet. Aliquam itaque alias sunt, distinctio consectetur eaque optio quis sed quod!</p>
                    <a href="client.php" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <span><img src="images/user.png" width="10%"><h2>client 2</h2></span>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium vitae maxime modi rerum error magnam nesciunt mollitia deserunt eveniet. Aliquam itaque alias sunt, distinctio consectetur eaque optio quis sed quod!</p>
                    <a href="client.php" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <span><img src="images/user.png" width="10%"><h2>client 3</h2></span>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium vitae maxime modi rerum error magnam nesciunt mollitia deserunt eveniet. Aliquam itaque alias sunt, distinctio consectetur eaque optio quis sed quod!</p>
                    <a href="client.php" class="btn">read more</a>
                </div>
            </div>
            
        </div>
        <div class="content"><a href="client.php" class="btn">load more</a></div>
    </section>
    
    <div class="price">
        <h1>pricing</h1>
        <div class="web">
            <h2>Web development</h2>
            <p>Rs. 5999</p>
        </div>
        <div class="web">
            <h2>App development</h2>
            <p>Rs. 14999</p>
        </div>
        <div class="web">
            <h2>Web + App development</h2>
            <p>Rs. 16999</p>
        </div>
        <div class="content"><a href="contact.php" class="btn">grab offers</a></div>
    </div>
    <!-- <div class="black"></div> -->
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
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>