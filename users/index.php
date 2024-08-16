<?php
    //include auth_session.php file on all user panel pages
    include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Kaski Kot Coffee Shop</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <!-- Custom CSS File Link -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!-- font awesome cdn link -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    </head>
    <body>
        <!-- HEADER SECTION -->
        <header class="header">
            <a href="#" class="logo">
                <img src="../assets/images/logo.png" class="img-logo" alt="Coffee Logo">
            </a>

            <!-- MAIN MENU FOR SMALLER DEVICES -->
            <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#home" class="text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="text-decoration-none">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#menu" class="text-decoration-none">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="#gallery"class="text-decoration-none">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blogs" class="text-decoration-none">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="text-decoration-none">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="text-decoration-none">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

            <!-- SEARCH TEXT BOX -->
            <div class="search-form">
                <input type="search" id="search-box" class="form-control" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </div>

            <!-- CART SECTION -->
            <div class="cart">
                <h2 class="cart-title">Your Cart:</h2>
                <div class="cart-content">
                    
                </div>
                <div class="total">
                    <div class="total-title">Total: </div>
                    <div class="total-price">Rs</div>
                </div>
                <!-- BUY BUTTON -->
                <button type="button" class="btn-buy">Checkout Now</button>
            </div>
        </header>

        <!-- HERO SECTION -->
        <section class="home" id="home">
            <div class="content">
                <h3>Welcome to Kaski Kot Coffee Shop, <?php echo $_SESSION['username']; ?>!</h3>
                <p>
                    <strong>We are open 4:00 PM to 10:00 PM.</strong>
                </p>
                <a href="#menu" class="btn btn-dark text-decoration-none">Order Now!</a>
            </div>
        </section>

        <!-- ABOUT US SECTION -->
        <section class="about" id="about">
            <h1 class="heading"> <span>About</span> Us</h1>
            <div class="row g-0">
                <div class="image">
                    <img src="../assets/images/about-img.png" alt="" class="img-fluid">
                </div>
                <div class="content">
                    <h3>Welcome to Kaski Kot!</h3>
                    <p>
                    Kaskikot, often referred to as "Kaski," is a village located in the Kaski District of Nepal, near the popular tourist destination of Pokhara. The area is known for its breathtaking views of the Annapurna mountain range, rich cultural heritage, and traditional Nepali lifestyle. Coffee culture has been growing in Nepal, including in areas like Kaskikot.
                    </p>
                    <p>
                    The ambiance of a Kaskikot coffee shop would likely be rustic and peaceful, with simple decor that highlights the natural beauty of the surroundings. Large windows or outdoor seating areas would offer panoramic views, making it a perfect place to relax and take in the scenery.
                    </p>
                    <a href="https://www.trippokhara.com/package/kaskikot-durbar-hiking" target="_blank" class="btn" >Learn More</a>
                </div>
            </div>
        </section>

        <!-- MENU SECTION -->
        <section class="menu" id="menu">
            <h1 class="heading">Our <span>Menu</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-1.png" alt="" class="product-img">
                                <h3 class="product-title">Americano - Hot Espresso (12 OZ)</h3>
                                <div class="price">Rs.400</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-2.png" alt="" class="product-img">
                                <h3 class="product-title">Colombian Supremo Cup (12 OZ)</h3>
                                <div class="price">Rs.200</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-3.png" alt="" class="product-img">
                                <h3 class="product-title">Nitro Cold Brew w/ Straw (12 OZ)</h3>
                                <div class="price">Rs.300</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-4.png" alt="" class="product-img">
                                <h3 class="product-title">Seasonal Single-Origin (12 OZ)</h3>
                                <div class="price">Rs.150</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-5.png" alt="" class="product-img">
                                <h3 class="product-title">Indonesian Sumatra Mandheling (12 OZ)</h3>
                                <div class="price">Rs.250</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-6.png" alt="" class="product-img">
                                <h3 class="product-title">Mint Mojito Iced Coffee (12 OZ)</h3>
                                <div class="price">350</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-7.png" alt="" class="product-img">
                                <h3 class="product-title">Iced Americano (12 OZ)</h3>
                                <div class="price">Rs.500</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-8.png" alt="" class="product-img">
                                <h3 class="product-title">Specialty Brews (12 OZ)</h3>
                                <div class="price">Rs.450</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-9.png" alt="" class="product-img">
                                <h3 class="product-title">Seasonal Origin (12 OZ)</h3>
                                <div class="price">Rs.220</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-10.png" alt="" class="product-img">
                                <h3 class="product-title">Ethiopian Yirgacheffe Cup (12 OZ)</h3>
                                <div class="price">Rs.180</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-11.png" alt="" class="product-img">
                                <h3 class="product-title">Cold Brew Tonic In a Cup (12 OZ)</h3>
                                <div class="price">Rs.160</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-12.png" alt="" class="product-img">
                                <h3 class="product-title">Caramel Cold Foam Cold Brew (12 OZ)</h3>
                                <div class="price">Rs.240</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <center>
                        <button id="showHideBtn" class="btn btn-dark">SHOW MORE</button>
                    </center> 
                </div>
            </div>
        </section>

        <!-- GALLERY SECTION -->
        <section class="gallery" id="gallery">
            <h1 class="heading">The <span>Gallery</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/gallery1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/gallery2.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 2</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/gallery3.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 3</h3>
                                </div>
                            </div>
                        </div>
                    </div><br />
                    <div class="row pic-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/gallery4.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 4</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/gallery4.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 4</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/gallery5.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="gallery-title">Picture 5</h3>
                                </div>
                            </div>
                        </div>
                    </div><br />
                    <center>
                        <button id="showBtn" class="btn btn-dark">SHOW MORE</button>
                    </center> 
                </div> 
            </div>
        </section>

        <!-- BLOGS SECTION -->
        <section class="blogs" id="blogs">
            <h1 class="heading">Our <span>Blogs</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/pour.jpg" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank" class="title text-decoration-none">Batch Brew vs. Pour Over | The Pros and Cons Experienced by Coffee Professionals</a>
                                    <span>by The Way to Coffee</span>
                                    <p>Thinking back 15-20 years, I remember my parents going about their morning ritual of brewing coffee on weekends before burying...</p>
                                    <center>
                                        <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/carbon.webp" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee" target="_blank" class="title text-decoration-none">Carbon Neutral Tea and Coffee</a>
                                    <span>by Taylors editorial team</span>
                                    <p>All our tea and coffee is carbon neutral – but what does that actually mean? Here’s an explanation of how we’ve lowered our carbon footprint, and the three projects in Kenya, Malawi and Uganda which have reduced the emissions of our products to...</p>
                                    <center>
                                        <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/coffeemaker.jpg" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank" class="title text-decoration-none">BEST DRIP COFFEE MAKERS 2020</a>
                                    <span>by CoffeeStylish.com</span>
                                    <p>What is a good coffee maker? A good home coffee maker should have removable parts so it can be cleaned completely because you don’t want mold or buildups in your machine. It should be fast. It...</p>
                                    <center>
                                        <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>

        <!-- REVIEW SECTION -->
        <section class="review" id="review">
            <h1 class="heading"><span>Customer </span>Review</h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                I visited Kaskikot Coffee Shop during my trip to Pokhara, and it was an incredible experience! The ambiance is peaceful and cozy.
                                </p>
                                <img src="../assets/images/pic-1.png" alt="" class="user">
                                <h3>Rama Adhikari</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                The coffee was excellent, made from locally sourced beans that were rich and aromatic. I enjoy more and it was one of the best in Nepal.
                                </p>
                                <img src="../assets/images/pic-2.png" alt="" class="user">
                                <h3>Ram Karki</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                There is comfortable seating options both indoors and outdoors, and the Wi-Fi was surprisingly fast for such a remote location.
                                </p>
                                <img src="../assets/images/pic-3.jpg" alt="" class="user">
                                <h3>Yubraj</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </section>

        <!-- CONTACT US SECTION -->

        
        <section class="contact" id="contact">
         <h1 class="heading"><span>Contact</span> Us</h1>
         <div class="row">
        <iframe 
            id="map"
            class="map pull-left"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14111.225984605836!2d83.91769438172564!3d28.234200289302084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399593a8e5a05793%3A0x2b1f1c6489ab8a02!2sKaskikot%2C%20Nepal!5e0!3m2!1sen!2snp!4v1627890396714!5m2!1sen!2snp"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
        ></iframe>

        <form action="submit_form.php" method="POST" class="input-wrapper">
        <form name="contact" method="POST" action="/submit-form">
            <h3>Get in touch with us!</h3>
            <div class="inputBox">
                <label for="email"><span class="fas fa-envelope"></span></label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="inputBox">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Enter your message..." required></textarea>
            </div>
            <button type="submit" class="btn">Contact Now</button>
         </form>
         </div>
       </section>

        <!-- FOOTER SECTION -->
        <section class="footer">
            <div class="footer-container">
                <div class="logo">
                    <img src="../assets/images/logo.png" class="img"><br />
                    <i class="fas fa-envelope"></i>
                    <p>yubrajtimilsina@gmail.com</p><br />
                    <i class="fas fa-phone"></i>
                    <p>061-1422</p><br />
                    <i class="fab fa-facebook-messenger"></i>
                    <p>@kaskikotcoffee</p><br />
                    <i class="fab fa-whatsapp"></i>
                    <p>9819199772</p><br />
                </div>
                <div class="support">
                    <h2>Support</h2>
                    <br /> 
                    <a href="#">Contact Us</a>
                    <a href="#">Customer Service</a>
                    <a href="#">Chatbot Inquiry</a>
                    <a href="#">Submit a Ticket</a>
                </div>
                <div class="company">
                    <h2>Company</h2>
                    <br /> 
                    <a href="#">About Us</a>
                    <a href="#">Affiliates</a>
                    <a href="#">Resources</a>
                    <a href="#">Partnership</a>
                    <a href="#">Suppliers</a>
                </div>
                <div class="newsletters">
                <h2>Newsletters</h2>
                          <br /> 
                     <p>Subscribe to our newsletter for news and updates!</p>
                      <form action="subscribe.php" method="POST" class="input-wrapper">
                      <input type="email" name="email" class="newsletter" placeholder="Your email address" required>
                       <button type="submit" id="paper-plane-icon" class="fas fa-paper-plane"></button>
                       </form>
                    </div>

                <div class="credit">
                    <hr /><br/>
                    <h2>Kaski Kot Coffee © 2024 | All Rights Reserved.</h2>
                    <h2>Designed by <span>Yubraj</span> | Timilsina</h2>
                </div>
            </div>
        </section>


        <!-- JS File Link -->
        <script src="../assets/js/googleSignIn.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            // CODE FOR THE FORMSPREE
            window.onbeforeunload = () => {
                for(const form of document.getElementsByTagName('form')) {
                    form.reset();
                }
            }


            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN MENU
            $(document).ready(function() {
                $(".row-to-hide").hide();
                $("#showHideBtn").text("SHOW MORE");
                $("#showHideBtn").click(function() {
                    $(".row-to-hide").toggle();
                    if ($(".row-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN GALLERY
            $(document).ready(function() {
                $(".pic-to-hide").hide();
                $("#showBtn").text("SHOW MORE");
                $("#showBtn").click(function() {
                    $(".pic-to-hide").toggle();
                    if ($(".pic-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });
        </script> 
    </body>
</html>