<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <title>Sports Website</title>
</head>
<body>
        <section id="header">
          <a href="index.php" class="logo"><img src="./Arpit/logoo.jpg"></a>

            <div class="search">
                <input type="text" placeholder="Type here to search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <div>
                <ul class="navigation">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a class="active" href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a class="non-active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>

        </section>
        
        <section id="page-header" class="about-header">
            <h2>#knowus</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, eius?</p>
        </section>

        <section id="about-head" class="section-p1">
            <img src="./headers/343596.jpg" alt="">
            <div>
                <h2>WHO WE ARE?</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur nam corrupti dolores harum architecto aliquam corporis iusto ex, itaque ad.</p>
                <br><br>
                <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat voluptates pariatur at.</marquee>
            </div>
        </section>

        <section id="about-app" class="section-p1">
            <h1>Download our <a href="#">APP</a></h1>
            <div class="video">
                <video autoplay muted loop src="about/1.mp4"></video>
            </div>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="features/f1.png" alt="">
                <h6>Free Shipping</h6>
            </div>

            <div class="fe-box">
                <img src="features/f2.png" alt="">
                <h6>Online Order</h6>
            </div>

            <div class="fe-box">
                <img src="features/f3.png" alt="">
                <h6>Save Money</h6>
            </div>

            <div class="fe-box">
                <img src="features/f4.png" alt="">
                <h6>Promotions</h6>
            </div>

            <div class="fe-box">
                <img src="features/f5.png" alt="">
                <h6>Happy Sell</h6>
            </div>

            <div class="fe-box">
                <img src="features/f6.png" alt="">
                <h6>24/7 Support</h6>
            </div>
        </section>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up for Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
         </section>

     <footer class="section-p1">
       <div class="col">
        <a href="#" class="logo" >Sports</a>
        <h4>Contact</h4>
        <p><strong>Address: </strong> Sported,Near City Pearl Super Market,Hebbal,Bangalore</p>
        <p><strong>Phone: </strong> 9508209825</p>
         <div class="follow">
            <h4>Follow US</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
         </div>
       </div>

       <div class="col">
        <h4>About</h4>
        <a href="#">About US</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact US</a>
       </div>

       <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
       </div>

       <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="pay/app.jpg" alt="">
            <img src="pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="pay/pay.png" alt="">
       </div>

       <div class="copyright">
          <p>&#169 2022, Sports</p>
       </div>
     </footer>
    <script src="script.js"></script>
</body>
</html>