<?php 

   require('connection.php');
   session_start();

?>
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
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="cart.php"><i class="fa-solid fa-cart-shopping fa-1x"></i></a></li>
                </ul>
            </div>

            <?php
             if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
             {
                echo"
                <div class='user'>
                   $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                </div>
                ";
             }
             else
             {
                echo"
                  <div class='sign-in-up'>
                    <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                    <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
                  </div>

                ";
             }


           ?>

        </section>


        <div class="popup-container" id="login-popup">
            <div class="popup">
                <form method="POST" action="login_register.php">
                    <h2>
                        <span>USER LOGIN</span>
                        <button type="reset" onclick="popup('login-popup')">X</button>
                    </h2>
                    <input type="text" placeholder="E-mail or username" name="email_username">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="login-btn" name="login">LOGIN</button>
                </form>
            </div>
        </div>

        <div class="popup-container" id="register-popup">
            <div class="register popup">
                <form method="POST" action="login_register.php">
                    <h2>
                        <span>USER REGISTER</span>
                        <button type="reset" onclick="popup('register-popup')">X</button>
                    </h2>
                    <input type="text" placeholder="Full Name" name="fullname">
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="E-mail" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="register-btn" name="register">REGISTER</button>
                </form>
            </div>
        </div>
        
        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super value deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons & up to 70% off!</p>
            <div class="shop123" onclick="window.location.href='shop.php';">
              <button>Shop Now</button>
            </div>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="features/f1.png" alt="">
                <h6>Free Shipping</h6>
            </div>

            <div class="fe-box">3
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

        <section id="product1" class="section-p1">
               <h2>featured Products</h2>
               <p>Summer Collection New Modern Design </p>
               <div class="pro-container">
                   <div class="pro">
                       <img src="./xyz/1.webp" alt="">
                       <div class="des">
                        <span>Klapp</span>
                        <h5>Willow Cricket Kit</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rs 599</h4>
                    </div>
                     <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                   </div>

                   <div class="pro">
                    <img src="./xyz/2.webp" alt="">
                    <div class="des">
                     <span>Vicky</span>
                     <h5>Jupiter Red Cricket Ball</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>Rs 7655</h4>
                 </div>
                  <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div class="pro">
                    <img src="./xyz/3.webp" alt="">
                    <div class="des">
                     <span>Adrenex</span>
                     <h5>R202 Combo White Badminton</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>Rs 649</h4>
                 </div>
                  <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div class="pro">
                    <img src="./xyz/4.webp" alt="">
                    <div class="des">
                     <span>Cosco</span>
                     <h5>Cosco Kick Football-Size:5</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>Rs 446</h4>
                 </div>
                  <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div class="pro">
                    <img src="./xyz/5.webp" alt="">
                    <div class="des">
                     <span>polo</span>
                     <h5>Hockey Stick with Ball</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>689</h4>
                 </div>
                  <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div class="pro">
                    <img src="./xyz/6.webp" alt="">
                    <div class="des">
                     <span>Test</span>
                     <h5>Cricket Batting Gloves</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>Rs 1789</h4>
                 </div>
                  <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div class="pro">
                    <img src="./Projectimages/Bag/1/1.webp" alt="">
                    <div class="des">
                     <span>Maxipak</span>
                     <h5>Cricket Kit Bag</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>Rs 899</h4>
                 </div>
                  <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div class="pro">
                    <img src="./xyz/8.webp" alt="">
                    <div class="des">
                     <span>SG</span>
                     <h5>Batting Helmet Tough</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>Rs 1599</h4>
                 </div>
                  <a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div>
        </section>
        
        <section id="banner" class="section-m1">
            <h4>Repair Services</h4>
            <h2>Up to <span>70% off</span> - All t-Shirts & Accessories</h2>
            <button class="normal">Explore More</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>New Arrivals</h2>
            <p>Summer Collection New Modern Design </p>
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='sproduct.php';">
                    <img src="Projectimages/helmet/2/3.webp" alt="">
                    <div class="des">
                     <span>steelbird</span>
                     <h5>Cricket Helmet Black</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>Rs 1499</h4>
                 </div>
                  <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>

                <div class="pro" onclick="window.location.href='sproduct.php';">
                 <img src="./Projectimages/Armguard/2/1.webp" alt="">
                 <div class="des">
                  <span>DSC</span>
                  <h5>Cricket Arm Guard</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rs 699</h4>
              </div>
               <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
             </div>

             <div class="pro" onclick="window.location.href='sproduct.php';">
                 <img src="./Projectimages/Bat/1/1.webp" alt="">
                 <div class="des">
                  <span>MRF</span>
                  <h5>Cricket Bat Heavy</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rs 799</h4>
              </div>
               <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
             </div>

             <div class="pro" onclick="window.location.href='sproduct.php';">
                 <img src="Projectimages/gloves/1/3.webp" alt="">
                 <div class="des">
                  <span>BAS</span>
                  <h5>Batting Gloves</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rs 1299</h4>
              </div>
               <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
             </div>

             <div class="pro" onclick="window.location.href='sproduct.php';">
                 <img src="./Projectimages/Bails/3.webp" alt="">
                 <div class="des">
                  <span>POKO</span>
                  <h5>Cricket Bails</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rs 199</h4>
              </div>
               <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
             </div>

             <div class="pro" onclick="window.location.href='sproduct.php';">
                 <img src="Projectimages/ball/8/3.webp" alt="">
                 <div class="des">
                  <span>Vicky</span>
                  <h5>Cricket Dues Ball</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rs 2999</h4>
              </div>
               <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
             </div>

             <div class="pro" onclick="window.location.href='sproduct.php';">
                 <img src="Projectimages/Bat/2/1.webp" alt="">
                 <div class="des">
                  <span>New balance</span>
                  <h5>Cricket Bat Fancy</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rs 1799</h4>
              </div>
               <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
             </div>

             <div class="pro" onclick="window.location.href='sproduct.php';">
                 <img src="Projectimages/bottle/2.webp" alt="">
                 <div class="des">
                  <span>Spider</span>
                  <h5>Cricket Kit Bag with Sipper</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rs 1199</h4>
              </div>
               <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
             </div>

             <div>
     </section>
     <section id="sm-banner" class="section-p1">
         <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at Sports</span>
            <button class="white">Learn More</button>
         </div>

         <div class="banner-box banner-box2">
            <h4>spring summer</h4>
            <h2>Upcomming Seasons</h2>
            <span>The best classic products is on sale at Sports</span>
            <button class="white">Collection</button>
         </div>
     </section>

     <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Helmet Collection -20% OFF</h3>
         </div>

         <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Stumps Collection -10% OFF</h3>
         </div>

         <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Jersey Collection -25% OFF</h3>
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
        <p><strong>Address: </strong>Sported,Near City Pearl Super Market,Hebbal,Bangalore</p>
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

     <?php
       if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
       {
         echo"<h1 style='text-align: center; margin-top: 200px;'> welcome to our website - $_SESSION[username]</h1>";
       }
     ?>

     <script>
        function popup(popup_name)
        {
            get_popup=document.getElementById(popup_name);
            if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else
            {
                get_popup.style.display="flex";
            }
        }


     </script>
</body>
</html>
