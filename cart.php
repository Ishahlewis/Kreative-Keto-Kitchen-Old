<?php 

    require('functions.php');

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <meta name="description" content="Honor - Creative Portfolio HTML Template" />
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/ico/favicon-16x16.png"/>
        <link rel="icon" type="image/png" href="assets/images/ico/favicon-32x32.png"/>
        <link rel="icon" type="image/png" href="assets/images/ico/favicon-96x96.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
        <!-- Page Title -->
        <title>Honor - Creative Portfolio HTML Template</title>
        <!-- Plugins -->
        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <!-- Custom css file -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="ms-preloader"></div>
        <!-- Wrapper -->
            <div class="ms-main-container">

                <!-- This page is the cart page -->

                <!-- Header -->
                    <header class="ms-header">
                        <nav class="ms-nav">
                            <div class="ms-logo">
                                <a href="index.html" data-type="page-transition">
                                    <img src="assets/images/SVGLogo.svg" alt="logo">
                                </a>
                            </div>
                            <!-- Mobile Menu Button -->
                                <button class="nav__btn">
                                    <span class="burger">
                                        <span class="burger__line"></span>
                                        <span class="burger__line"></span>
                                        <span class="burger__line"></span>
                                    </span>
                                    <span class="cross">
                                        <span class="cross__line"></span>
                                        <span class="cross__line"></span>
                                    </span>
                                </button>
                            <!-- Mobile Menu Button -->
                            <ul class="ms-navbar">
                                <li class="ms-nav-item link active">
                                    <a href="index.html">Browse Bakery</a>
                                </li>
                                <li class="ms-nav-item link">
                                    <a href="about.html" data-type="page-transition">About</a>
                                </li>
                                <li class="ms-nav-item link">
                                    <a href="post-single-page.html" data-type="page-transition">FAQ</a>
                                </li>
                                <li class="ms-nav-item link">
                                    <a href="contact.html" data-type="page-transition">Contact</a>
                                </li>
                                <li class="ms-nav-item link">
                                    <a href="work-single-page.html" data-type="page-transition"><i class="fas fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </header>
                <!-- /Header -->

                <!-- Container -->
                    <main class="ms-container">


                            <div class="view-cart">

                                    <section class="wrapper one top">
                                        <div class="my-cart">
                                            <h2>My Cart</h2>
                                            <div class="cart-items">

                                                <?php $total = 0; ?>
                                                <?php foreach ($cart as $key=>$quantity): ?>   

                                                    <?php $product = $products[$key]; ?>
                                                    <div>
                                                        <p><?php echo $product['title'] ?> | <?php echo $quantity ?></p>
                                                        <a href="removeFromCart.php?product=<?php echo $key ?>"><i class="fas fa-times"></i></a>
                                                    </div>

                                                    <?php $total += $quantity * $product['price'] ; ?>
                                                <?php endforeach?>   
                                    


                                            </div>
                                            <div class="price">
                                                <h3>Total</h3>
                                                <h4 class="price-custom">$<?php echo number_format($total) ?></h4>
                                                
                                            </div>
                                             <div class="back-to-shop">
                                                <button><i class="fas fa-arrow-circle-left"></i><a href="index.html"> Continue shopping</a></button>                        
                                            </div>
                                        </div>
                                        <div class="checkout" action="processCheckout.php" method="post">
                                            <h2>Checkout</h2>
                                            <p>Enter your email address. This address will be used to send your status updates.</p>
                                            <form action="submit">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <input type="email" name="email" class="form-control" placeholder="Email address" autocomplete="off">
                                                    </div>

                                                    <div class="col-md-6 layer-1">
                                                        <div class="ms-btn__square submit-check">
                                                            <input type="submit" value="Continue">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section> 


                                    <section class="wrapper two">
                                        <div class="my-cart">
                                                <h2>My Cart</h2>
                                                <div class="cart-items">
                                                    <div>
                                                        <p>Lorem ipsum dolor sit amet.</p>
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                    <div>
                                                        <p>Lorem ipsum dolor sit amet.</p>
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                    <div>
                                                        <p>Lorem ipsum dolor sit amet.</p>
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                    <div>
                                                        <p>Lorem ipsum dolor sit amet.</p>
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <h3>Total</h3>
                                                    <h4 class="price-custom">$12.00</h4>
                                                    
                                                </div>
                                                <div class="back-to-shop">
                                                    <button><i class="fas fa-arrow-circle-left"></i><a href="index.html"> Continue shopping</a></button>
                                                </div>
                                                <div class="back-to-prev two">
                                                    <button><i class="fas fa-arrow-circle-left"></i><a href="#"> Go back</a></button>
                                                </div>
                                        </div>
                                        <div class="checkout">
                                            <h2>Contact Details</h2>    
                                            <p>Please enter your contact details</p>                  
                                            <form action="submit" id="validForm">
                                                <div class="row phone-name">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="name" class="form-control" id="cl" placeholder="Full name" autocomplete="off">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="text" class="form-control" placeholder="Number (optional)" autocomplete="off">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <p>Please specify any order instructions:</p>
                                                        <textarea name="message" class="form-control" id="message" placeholder="Your message"></textarea>
                                                    </div>
                                                    <div class="col-md-6 layer-2">
                                                        <div class="ms-btn__square submit-check">
                                                            <input type="submit" value="Continue">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>
                                    </section>  

                                    <section class="wrapper three"> 
                                            <div class="my-cart">
                                                    <h2>My Cart</h2>
                                                    <div class="cart-items">
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                    </div>
                                                    <div class="price">
                                                        <h3>Total</h3>
                                                        <h4 class="price-custom">$12.00</h4>
                                                        
                                                    </div>
                                                     <div class="back-to-shop">
                                                        <button><i class="fas fa-arrow-circle-left"></i><a href="index.html"> Continue shopping</a></button>
                                                     </div>
                                                     <div class="back-to-prev three">
                                                        <button><i class="fas fa-arrow-circle-left"></i><a href="#"> Go back</a></button>
                                                    </div>
                                            </div>
                                        <div class="checkout radio">
                                            <h2>Shipping</h2>
                                            <div class="choose">
                                                <div class="delivery" data-choice="delivery ">Delivery</div>
                                                <div class="pick" data-choice="pick-up">Pick up</div>
                                            </div>
                                            <div class="deliver-wrap">
                          
                                                <p>All loaf orders are sent Monday - Thursday for next day delivery. No Saturday delivery (if you are desperate this can be arranged by request but will require additional freight charges). Last orders and payment for Friday delivery 5pm Wednesday. Any orders placed after this will be despatched Monday for Tuesday delivery. Please make payment and email or txt a screenshot as I don’t have time for chasing. <br> No rural shipping as it takes over two days.</p>
                                                <h5>Please select your shipping option.</h5>
                                                 
                                            <div class="radio-wrap">
                                                <div class="north">
                                                    <h4>North Island</h4>
                                                    <label for="radio" data-target="delivery" data-price="8.50"><input type="radio">North Island | 1 loaf - $8.50 </label><br>
                                                    <label for="radio" data-target="delivery"  data-price="13.50"><input type="radio">North Island | 2 loaves - $13.50 </label><br>
                                                    <label for="radio"  data-target="delivery"  data-price="16.50"><input type="radio">North Island | 4 loaves - $16.50 </label><br>
                                                    <label for="radio" data-target="delivery"  data-price="7.50"><input type="radio">Auckland | 2 - 4 loaves - $7.50</label><br>
                                                    <label for="radio" data-target="delivery"  data-price="8.50"><input type="radio">Whangarei/Hamilton | 2 - 4 loaves - $8.50</label>
                                                </div>
                                                <div class="south">
                                                    <h4>South Island</h4>
                                                    <label for="radio" data-target="delivery"  data-price="9.50"><input type="radio">South Island | 1 loaf - $9.50</label><br>
                                                    <label for="radio" data-target="delivery"  data-price="17.50"><input type="radio">South Island | 2 loaves - $17.50</label><br>
                                                    <label for="radio" data-target="delivery"  data-price="25"><input type="radio">South Island | 2 - 6 loaves - $25.00/$30.00</label>
                                                </div>
                                            </div> 
                                            <p>To ship 2 - 6 loaves to the South Island, leave a message and I can get back to you on shipping costs.</p>
                                            </div>
        
                                            <div class="pick-wrap hide">
                                                <h5>Arrange pickup</h5>
                                                As I have a day job and a busy schedule, catching me at home can be very hit and miss however if you would prefer to pick up your order, text or email me to arrange a time. 
                                            </div>
        
                                            <div class="col-md-6 layer-3">
                                                <div class="ms-btn__square submit-check layer-3">
                                                    <input type="submit" value="Continue">
                                                </div>
                                            </div>
                                        </section>


                                    <section class="wrapper four">
                                            <div class="my-cart">
                                                    <h2>My Cart</h2>
                                                    <div class="cart-items">
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                        <div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                    </div>
                                                    <div class="price">
                                                        <h3>Total</h3>
                                                        <h4 class="price-custom">$12.00</h4>
                                                        
                                                    </div>
                                                     <div class="back-to-shop">
                                                        <button><i class="fas fa-arrow-circle-left"></i><a href="index.html"> Continue shopping</a></button>
                                                     </div>
                                                     <div class="back-to-prev four">
                                                        <button><i class="fas fa-arrow-circle-left"></i><a href="#" > Go back</a></button>
                                                    </div>
                                                </div>
                                            <div class="checkout">
                                                <h2>Payment</h2>        
                                                <div class="pay">
                                                    <h4>Payment method</h4>   
                                                    <P>INTERNET BANK TRANSFER</P>
                                                    <h5>Please pay to - 020152-0046534-83</h5>
                                                    <p>Please use your name as a reference when paying and notify me when the payment has been made in order for me to commence baking. While it is not neccessary, a screen shot of the payment is helpful.</p>
                                                    <p>
                                                </div>
                                                <h4>Billing Address</h4>
                                                    <form action="submit" id="validForm">
                                                            <div class="form-group col-md-12">
                                                                <input type="text" name="subject" class="form-control" placeholder="Street Address">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <input type="text" name="subject" class="form-control" placeholder="City">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <input type="text" name="subject" class="form-control" placeholder="Post Code">
                                                            </div>    
                                                            <div class="col-md-6">
                                                                <div class="ms-btn__square submit-check layer-4">
                                                                    <input type="submit" value="Place Order">
                                                                </div>
                                                            </div>
                                                    </form>
                                    </section> 


                                    <section class="wrapper six"> 
                                            <h3>Your order has been sent through</h3>

                                            <div class="order">
                                                <h5>Your order</h5>
                                                <p>item one</p>
                                                <p>item two</p>
                                                <h5>Total: <span>price</span></h5>
                                            </div>
                                            <div class="awaiting">
                                                <h5>Internet Bank Transfer- 020152-0046534-83</h5>
                                                <p>Please use your name as a reference when paying and notify me when the payment has been made in order for me to commence baking. While it is not neccessary, a screen shot of the payment is helpful.</p>
                                            </div>
                                            <div class="send">
                                                <h5>Delivery</h5>
                                                <p>North Island | 2 - 4 loaves - $18.00</p>
                                            </div>
                        
                                                <div class="back-to-shop wrap-6">
                                                    <button><i class="fas fa-arrow-circle-left"></i><a href="index.html"> Continue shopping</a></button>
                                                </div>
                                    </section>
                        </div>

                        <!-- /Hero area -->




                                
                            </article>
                        <!-- /Post Content -->

                        

                        <!-- Back to top button -->
                        <a href="#" class="back-top"><i class="material-icons">arrow_upward</i></a>
                    </main>
                <!-- /Container -->


                <!-- Footer -->
                    <footer class="ms-footer">
                        <ul class="footer-socials">
                            <li><a class="ms-btn" href="https://www.facebook.com/pg/kreativeketokitchen">facebook</a></li>
                            <li><a class="ms-btn" href="https://www.instagram.com/kreativeketokitchen/">instagram</a></li>
                        </ul>
                        <div class="copyright">© 2019 All Rights Reserved | Kreative Keto Kitchen</div>
                    </footer>
                <!-- /Footer -->

            </div>
        <!-- /Wrapper -->
    <!-- JS -->
    <!-- jquery-2.1.3.min js -->
        <script src='assets/js/jquery-3.2.1.min.js'></script>
    <!-- Plugins -->
        <script src='assets/js/plugins.min.js'></script>       
    <!-- Main js -->
        <script src="assets/js/main.js"></script>
    </body>
</html>


<!-- shipping
All loaf orders are sent Monday - Thursday for next day delivery - no Saturday delivery (if you are desperate this can be arranged by request but will require additional freight charges). Last orders and payment for Friday delivery 5pm weds.. Any orders placed after this will be despatched Monday for Tuesday delivery. Please make payment and send a screenshot or txt - I don’t have time for chasing 😉👍
Shipping Rates
One loaf NI $8.50
One loaf SI $9.50
Local - Auckland to Orewa/Bombays $7.50 2-4 loaves
Whangarei/Hamilton $8.50 2-4 loaves
Rest of NI $13.50 2 loaves (4 loaves $16.50)
SI 2 loaves $17.00 - more than this please ask 👍 can send up to 6 loaves (between $25 - $30 depending on amount)
No rural sorry - as this can take up to 2 days.
Orders are usually ready overnight but if its a large order or at busier times you are in line and I will notify you throughout the process - you will be supplied with a tracking number by request. All items have non signature ticket, once delivered if there is no one home item is photographed where it is left by the courier. Please advise if you have instructions regarding deliver -->