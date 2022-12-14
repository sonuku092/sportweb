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
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a class="active" class="non-active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>

        </section>
        
        <section id="page-header" class="about-header">
            <h2>#let's talk</h2>
            <p>Leave a message we love to hear from you!</p>
        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>IMAGE</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                        <td><img src="./Projectimages/Bat/2/1.webp" alt=""></td>
                        <td>new balance POPULAR WILLOW BAT</td>
                        <td>Rs 489</td>
                        <td><input type="number" value="1"></td>
                        <td>Rs 489</td>
                    </tr>

                    <tr>
                        <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                        <td><img src="./Projectimages/Bat/1/1.webp" alt=""></td>
                        <td>MRF genius Kashmir Willow Cricket Bat</td>
                        <td>Rs 799</td>
                        <td><input type="number" value="1"></td>
                        <td>Rs 799</td>
                    </tr>

                    <tr>
                        <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                        <td><img src="./Projectimages/helmet/7/2.webp" alt=""></td>
                        <td>DSC Cricket Defender Cricket Helmet</td>
                        <td>Rs 1489</td>
                        <td><input type="number" value="1"></td>
                        <td>Rs 1489</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="cart-add" class="section-p1">
            <div id="coupon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" placeholder="Enter your coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>

            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotals</td>
                        <td>RS 500</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>TOTAL</strong></td>
                        <td><strong>RS 500</strong></td>
                    </tr>
                </table>
                <button class="normal">Proceed to Checkout</button>
            </div>
        </section>

     <footer class="section-p1">
       <div class="col">
        <a href="#" class="logo" >Sports</a>
        <h4>Contact</h4>
        <p><strong>Address: </strong> neat city pearl</p>
        <p><strong>Phone: </strong> neat city pearl</p>
        <p><strong>Hours: </strong> neat city pearl</p>
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