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
                    <li><a href="about.php">About Us</a></li>
                    <li><a class="active" href="contact.php">Contact Us</a></li>
                    <li><a class="non-active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>

        </section>
        
        <section id="page-header" class="about-header">
            <h2>#let's talk</h2>
            <p>Leave a message we love to hear from you!</p>
        </section>

        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>get in touch</span>
                <h2>visit one of our agency location or contact us today</h2>
                <h3>head office</h3>
                <div>
                    <li>
                        <i class="fa-regular fa-map"></i>
                        <p>Sported,Near Atria Institute Of Technology,Bangalore</p>
                    </li>
                    <li>
                        <i class="fa-regular fa-envelope"></i>
                        <p>arpittarwey@gmail.com</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <p>9508209825</p>
                    </li>
                    <li>
                        <i class="fa-regular fa-clock"></i>
                        <p>monday to sunday 9:00am to 6:00pm</p>
                    </li>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.7623972803217!2d77.59172917918401!3d13.032514149425996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17bdb6ede1e5%3A0xdcf1c9d129a9e34f!2sATRIA%20INSTITUTE%20OF%20TECHNOLOGY%2C%20Anandnagar%2C%20Hebbal%2C%20Bengaluru%2C%20Karnataka%20560024!5e0!3m2!1sen!2sin!4v1668150233103!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="form-details">
            <form action="">
                <span>leave a message</span>
                <h2>we love to hear from you</h2>
                <input type="text" placeholder="your name">
                <input type="text" placeholder="email">
                <input type="text" placeholder="subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="your message"></textarea>
                <button class="normal">submit</button>
            </form>

            <div class="people">
                <div>
                    <img src="people/1.png" alt="">
                    <p><span>Arpit kumar<br>phone: +9508209825<br>email: arpittarwey@gmail.com</span></p>
                </div>
                <div>
                    <img src="people/2.png" alt="">
                    <p><span>Abhigna Raghunandan<br>phone:9972946916<br>email:abhigna7rs@gmail.com</span></p>
                </div>
                <div>
                    <img src="people/3.png" alt="">
                    <p><span>Pranav Kuamr Bhagat<br>phone: 7488707574<br>email:pranavkumarbhagat@gmail.com </span></p>
                </div>
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