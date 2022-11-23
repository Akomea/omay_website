<!DOCTYPE html>
<html lang="en">
<?php
  $message_sent = false;
  if(isset($_POST['email'])&&['email'] != ''){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //submit form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "dickson.kuffuor@omaycompany.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to,$messageSubject,$body);

        $message_sent = true;
    }
    else{
      $invalid_class_name = "form-invalid";
    }
  }
?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="google-site-verification" content="fe51K4NiDFDxKq4w1NMTPESA9XmMlC2p29c6CGdYeQk" />
        <link rel="icon" type="image/png" href="img/logo3.ico"/>
        <meta charset="utf-8"/>
        <title>Omay Company Limited | Best Supply Store for Shop accessories in Ghana</title>
        <meta name="description" content="We provide General supplies and commercial equipment such as Storage racks, Counting Machines, Aluminiun Show Cases, Safes, Racks, Stands and many more for various business outfits."/>
        <link href="css/styles-min.css" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <style type="text/css">
            html,
            body,
            header,
            .view {
                height: 100%;
            }
            .carousel,
            .carousel-item,
            .carousel-item.active {
                height: 100%;
            }
            .carousel-inner {
                height: 100%;
            }
            @media (min-width: 800px) and (max-width: 850px) {
                .navbar:not(.top-nav-collapse) {
                    background: #1C2331!important;
                }
            }
            @media (min-width: 100px) and (max-width: 450px) {
                .feature-size {
                    font-size: 6vw !important;
                    font-weight: 300;
                }
            }
        </style>
    </head>
    <body>
        <?php
        include('header.html')
    ?>
    <section class="hero-sliders" data-autoplay="10000">
        <div id="hero-slider" class="slick-container">

            <div class="slide-item" data-src="img/warehouse000.jpg">
                <div class="hero-image-container-2">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="height: 100%; width: auto;">
                        <!-- Content -->
                        <div class="hero-text">
                            <div class="text-center white-text mx-5" data-aos="fade-right" style="margin: 0em auto; margin-bottom: 0em;">
                                <h1 class="header-text mb-4" style="font-family:CustomFont !important; font-size:35pt !important; font-weight: bolder !important;">
                                    <strong>The Shop Doctor</strong>
                                </h1>
                                <p style="margin-bottom: 0em;">
                                    <strong>A wide range of supplies readily available for your businesses</strong>
                                </p>

                                <p class="detail-text mb-4 d-md-block">
                                    <strong>The number one supply shop in the country</strong>
                                </p>

                                <div class="hero-button"> <a target="_self" href="./hrproducts.php" class="btn btn-outline-white btn-lg">Explore Category<i class="fa fa-binoculars ml-2"></i>
                        </a></div>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                    <div class="hero-image-2"><img class="lazyload" alt="Mannequin" src="img/allcat.png" />
                    </div>
                </div>
                <div class="hero-image"></div>
            </div>
            <div class="slide-item" data-src="img/boutique.jpg">
                <div class="hero-image-container-2">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="height: 100%;">
                        <!-- Content -->
                        <div class="hero-text">
                            <div class="text-center white-text mx-5" style="margin: 0em auto; margin-bottom: 0em;">
                                <h1 class="header-text mb-4" style="font-family:CustomFont !important; font-weight: bolder !important;">
                                    <strong>Boutique Supplies</strong>
                                </h1>
                                <p style="margin-bottom: 0em;">
                                    <strong>Equipment needed for opening a boutique business.</strong>
                                </p>

                                <p class="detail-text mb-4 d-md-block">
                                    <strong>The number one supply shop in the country</strong>
                                </p>

                                <div class="hero-button"> <a target="_self" href="./hrproducts.php" class="btn btn-outline-white btn-lg">Explore Category<i class="fa fa-binoculars ml-2"></i>
                        </a></div>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                    <div class="hero-image-2"><img class="lazyload" src="img/boutallcat.png" /></div>
                </div>
                <div class="hero-image"></div>
            </div>
            <div class="slide-item" data-src="img/supermarket.jpg">
                <div class="hero-image-container-2">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="height: 100%;">
                        <!-- Content -->
                        <div class="hero-text">
                            <div class="text-center white-text mx-5" style="margin: 0em auto; margin-bottom: 0em;">
                                <h1 class="header-text mb-4" style="font-family:CustomFont !important; font-weight: bolder !important;">
                                    <strong>Supermarket Supplies</strong>
                                </h1>
                                <p style="margin-bottom: 0em;">
                                    <strong>Everything your supermarket needs to serve shoppers</strong>
                                </p>

                                <p class="detail-text mb-4 d-md-block">
                                    <strong>The number one supply shop in the country</strong>
                                </p>

                                <div class="hero-button"> <a target="_self" href="./supermarket.php" class="btn btn-outline-white btn-lg">Explore Category<i class="fa fa-binoculars ml-2"></i>
                        </a></div>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                    <div class="hero-image-2"><img class="lazyload" alt="Mannequin" src="img/superallcat.png" /></div>
                </div>
                <div class="hero-image"></div>
            </div>
            <div class="slide-item" data-src="img/hairdresser.jpg">
                <div class="hero-image-container-2">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="height: 100%;">
                        <!-- Content -->
                        <div class="hero-text">
                            <div class="text-center white-text mx-5" style="margin: 0em auto; margin-bottom: 0em;">
                                <h1 class="header-text mb-4" style="font-family:CustomFont !important; font-weight: bolder !important;">
                                    <strong>Salon Supplies</strong>
                                </h1>
                                <p style="margin-bottom: 0em;">
                                    <strong>Supplies and commercial equipment needed for your salon business </strong>
                                </p>

                                <p class="detail-text mb-4 d-md-block">
                                    <strong>The number one supply shop in the country</strong>
                                </p>

                                <div class="hero-button"> <a target="_self" href="./salon.php" class="btn btn-outline-white btn-lg">Explore Category<i class="fa fa-binoculars ml-2"></i>
                        </a></div>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                    <div class="hero-image-2"><img class="lazyload" alt="Mannequin" src="img/salonallcat.png" /></div>
                </div>
                <div class="hero-image"></div>
            </div>
            <div class="slide-item" data-src="img/restaurant.jpg">
                <div class="hero-image-container-2">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="height: 100%;">
                        <!-- Content -->
                        <div class="hero-text">
                            <div class="text-center white-text mx-5 wow fadeIn" style="margin: 0em auto; margin-bottom: 0em;">
                                <h1 class="header-text mb-4" style="font-family:CustomFont !important; font-weight: bolder !important;">
                                    <strong>Restaurant Supplies</strong>
                                </h1>
                                <p style="margin-bottom: 0em;">
                                    <strong>Equipment needed for your restaurant.</strong>
                                </p>

                                <p class="detail-text mb-4 d-md-block">
                                    <strong>The number one supply shop in the country</strong>
                                </p>

                                <div class="hero-button"> <a target="_self" href="./restaurant.php" class="btn btn-outline-white btn-lg">Explore Category<i class="fa fa-binoculars ml-2"></i>
                        </a></div>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                    <div class="hero-image-2"><img class="lazyload" alt="Mannequin" src="img/restallcat.png" /></div>
                </div>
                <div class="hero-image"></div>
            </div>
        </div>
        <div class="hero-logos-slider-wrapper">
            <div id="hero-logos-slider" class="hero-logos-slider">
            </div>
    </section>
    <section class="highlights py-10">
        <section class="site-section">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center heading-section mb-5">
                        <div class="paws">
                            <span class="icon-paw"></span>
                        </div>
                        <h2 style="font-family: CustomFont; font-weight: bolder;" class="text-black mb-2">Welcome to Omay Company Limited</h2>
                        <p>We are the leading supplier of products for outfits in the country
                            <br> You are welcomed to explore our wide range of products
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container" >
            <div class="row text-center">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i class="fas fa-store"></i></div>
                    <h3 style="font-family: CustomFont;">Facility Setup </h3>
                    <p class="mb-0">We provide solution to setting up your store, office, supermarket and many more</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i class="fas fa-thumbs-up"></i></div>
                    <h3 style="font-family: CustomFont;">Good Quality </h3>
                    <p class="mb-0">Quality assurance is of topmost priority at Omay Company Limited</p>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i class="fas fa-hands-helping"></i></div>
                    <h3 style="font-family: CustomFont;">Procurement</h3>
                    <p class="mb-0">We assist in making external purchases under conditions of product unavailability or scarcity</p>
                </div>
            </div>
        </div>
    </section>
    <hr  class="my-5">
    <section class="site-section">
        <div class="container" data-aos="fade-right">
            <div class="row hover-1-wrap mb-5 mb-lg-0">
                <div class="col-12">
                    <div class="row">
                        <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2">
                            <a href="#" class="hover-1">
                                <img src="img/trust.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1" data-aos="fade-left">
                            <h2 style="font-family: CustomFont;" class="text-black">Reliable Suppliers</h2>
                            <p class="mb-4">With over 10 years of experience in accumulating product demand data, We have the advantage of providing affordable yet durable goods to customers from all over the country.
                                <p><a class="btn btn-primary" style="background-color: #2b364dcb !important;">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <main>
                <section  class="bg-white py-10">
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 style="font-family: CustomFont; color: #1C2331;" class="mb-0 feature-size"><strong>Featured categories</strong></h2>
                            <a style="background-color: goldenrod !important;" class="btn btn-sm btn-primary d-inline-flex align-items-center" href="products.php">See more<i class="ml-1" data-feather="arrow-right"></i></a>
                        </div>
                        <div class="row ">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <a class="card lift h-100" href="./products.php">
                                    <div class="card-flag card-flag-dark card-flag-top-right">Updated 1 month</div>
                                    <img class="card-img-top" src="img/boutique2.jpg" alt="..." />
                                    <div class="card-body">
                                        <h3 class="text-primary mb-0">Boutique Equipment</h3>
                                        <div class="small text-gray-800 font-weight-500">Mannequins | Hangers | Stands & racks</div>
                                        <div class="small text-gray-500">Full stock</div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                                        <div class="small text-gray-500">View products</div>
                                        <div class="small text-gray-500"><i data-feather="arrow-right"></i></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <a class="card lift h-100" href="./supermarket.php">
                                    <div class="card-flag card-flag-dark card-flag-top-right">Updated 6 days</div>
                                    <img class="card-img-top" src="img/supermarket.jpg" alt="..." />
                                    <div class="card-body">
                                        <h3 class="text-primary mb-0">Supermarket Supplies</h3>
                                        <div class="small text-gray-800 font-weight-500">Shelves | Display Fridges | POS Machines</div>
                                        <div class="small text-gray-500">Available</div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                                        <div class="small text-gray-500">View products</div>
                                        <div class="small text-gray-500"><i data-feather="arrow-right"></i></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a class="card lift h-100" href="./restaurant.php">
                                    <div class="card-flag card-flag-dark card-flag-top-right">Updated 2 weeks</div>
                                    <img class="card-img-top" src="img/restaurant.jpg" alt="..." />
                                    <div class="card-body">
                                        <h3 class="text-primary mb-0">Restaurant Supplies</h3>
                                        <div class="small text-gray-800 font-weight-500">Pizza Oven | Meat Mincer | Buffet Stand</div>
                                        <div class="small text-gray-500">Available</div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                                        <div class="small text-gray-500">View products</div>
                                        <div class="small text-gray-500"><i data-feather="arrow-right"></i></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <div id="about1" class=" mobile-browser site-blocks-cover inner-page-cover overlay get-notification aos-init aos-animate" style="margin-top: 20px; background-image: url(img/warehouse3.jpg); background-attachment: fixed;" data-aos="fade">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <section class="site-section">
                                <div class="container">
                                    <div class="row justify-content-center" data-aos="fade-up">
                                        <div class="col-lg-6 text-center heading-section mb-5">
                                            <div class="paws">
                                                <span class="icon-paw"></span>
                                            </div>
                                            <h2 style="color: #fff; font-weight: bolder;font-size: 40px; text-shadow:5px 5px 10px black;" class="mb-2 justify-content-center"><strong>Why Choose Us?</strong></h2>
                                            <p>We provide a wide range of products readily available, coupled with excellent customer service</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div  class="container">
                    <!--Section: Main info-->
                    <section class="mt-5">
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div  class="col-md-6 mb-4">
                                <div class="form-container">
                                    <div class="container justify-content-center text-center">
                                        <h3 style="font-weight: bold; color:#2b364dcb;">Write to us</h3>
                                        <hr style="width: 50px; border-top: 5px solid goldenrod">
                                    </div>
                                    <form action="index.php#sent" method="POST" class="form">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control no-border"  id="name" name="name" placeholder="Your Name" tabindex="1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-label">Your Email</label>
                                            <input type="email" class="form-control no-border" id="email" name="email" placeholder="omaycustomer@email.com" tabindex="2" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="form-label">Subject</label>
                                            <input type="text" class="form-control no-border" id="subject" name="subject" placeholder="Hello Omay!" tabindex="3" required>
                                        </div>
                                        <div id="sent" class="form-group">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control no-border" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                                        </div>
                                        <div>
                                            <button id="about" type="submit" class="btn btn-primary" style="background-color: #2b364dcb !important;">Send Message<i style="margin-left: 5px;" class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <?php
		if ($message_sent) :
        ?>
            <div class="alert alert-success">
                <strong>Success!</strong> Thanks, we will be in touch
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-window-close" aria-hidden="true"></i></span></button>
        </div>
        <?php
		else :
		?>
        <?php
	endif;
?>
    </div>
                        <div class="col-md-6 mb-4">
                            <!-- Main heading -->
                            <h3 style="font-family: CustomFont; color: #1C2331; font-weight:bolder !important;">About Omay Company Limited</h3>
                            <p>A leading company providing a wide range of <strong>good quality</strong> and <strong>affordable</strong> products for business ventures in the country
                            </p>
                            <hr>
                            <p>
                                <strong>Shop fittings</strong> for boutiques,
                                <strong>General accessories</strong> such as Counting Machine, Aluminum Show Cases, Safe and Stands for various business outfits.
                                <strong>Shelves</strong> for all kinds of shops including but not limited to pharmacies, filling stations, and many more.
                                <strong>This is why we have acquired the alias - The Shop Doctor</strong>
                            </p>
                            <!-- <a target="_blank" href="#" class="btn btn-primary btn-md" style="background-color: #2b364dcb !important;">More About Us</a> -->
                            <a target="_blank" href="products.php" class="btn btn-primary btn-md" style="background-color: goldenrod !important;">View Our Products</a>
                        </div>
                        </div>
                    </section>
                    <hr class="my-5">
                </div>
            </main>
            <?php
        include('footer.html')
    ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="fwb/floating-wpp.css">
        <script type="text/javascript" src="fwb/floating-wpp.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/critical.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <div id="myButton"></div>
        <script src="js/aos.js"></script>
        <script>
            $(function() {
            AOS.init();
        });
        </script>
    </body>
    <script type="text/javascript">
        $(function() {
            $('#myButton').floatingWhatsApp({
                phone: '233501396994',
                popupMessage: 'Hello, how can we help you?',
                message: "I'm interested in the mannequins",
                showPopup: true,
                showOnIE: false,
                headerTitle: 'Contact Omay on Whatsapp!',
                headerColor: '#1C2331',
                position: 'right',
                buttonImage: '<img src="fwb/whatsapp.svg"/>'
            });
        });
    </script>
</html>