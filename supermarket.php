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
    <link rel="icon" type="image/png" href="img/logo3.ico"/>
    <title>Omay Company Limited | Best Supermarket Supply Store In Ghana</title>
    <meta name="description" content="We are the leading supply store providing Shelves, Storage Racks, Shopping Baskets and many more for your supermarkets"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <!-- Your custom styles (optional) -->
    <style>
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }
        
        @media (max-width: 740px) {
            html,
            body,
            header,
            .carousel {
                height: 50vh;
            }
        }
        
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .carousel {
                height: 50vh;
            }
        }
        .view,
        body,
        html {
            height: 100%
        }
        
        .carousel {
            height: 50%
        }
        
        .carousel .carousel-inner,
        .carousel .carousel-inner .active,
        .carousel .carousel-inner .carousel-item {
            height: 100%
        }
        
        @media (max-width:776px) {
            .carousel {
                height: 50%
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php
        include('header2.html')
    ?>
    <!-- Navbar -->
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel" style="margin-top: 0em !important; padding: 0em !important;">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div  class="carousel-inner" role="listbox" style="margin-top: 0em !important;">
            <!--Second slide-->
            <div class="carousel-item">
                <div class="view" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/pos.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Checkout Equipment</strong>
                                <hr style="width: 50px; border-top: 3px solid goldenrod">
                            </h1>

                            <p>
                                Tools and supplies for a smooth and effortless checkout
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                Checkout Counters | POS Machines | Card Readers | Stands
                            </p>
                            <p><a class="btn btn-primary mb-4 " data-toggle="modal" data-target="#modalContactForm" style="background-color: goldenrod !important;">Get a quote</a></p>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/Second slide-->

            <!--First slide-->
            <div id="topcat"  class="carousel-item active">
                <div class="view" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/manny.jpg');  background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Mannequins</strong>
                                <hr style="width: 50px; border-top: 3px solid goldenrod">
                            </h1>

                            <p>
                                All kinds of dummies for your business
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                Abstract | Headless | Torso-only | Seated & more
                            </p>
                            <p><a class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalContactForm" style="background-color: goldenrod !important; ">Get a quote</a></p>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/displayfridge.jpg'); background-repeat: no-repeat; background-size: cover; ">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Showcases</strong>
                                <hr style="width: 50px; border-top: 3px solid goldenrod">
                            </h1>
                            <p>
                                Show off your products with our wide range of showcases
                            </p>
                            <p class="mb-4 d-none d-md-block">
                                Display Cabinets | Display Fridges & Freezers
                            </p>
                            <p><a class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalContactForm" style="background-color: goldenrod !important;">Get a quote</a></p>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->

    <!--Carousel Wrapper-->

    <!--Contact Modal-->
    <form action="products.php" method="POST" class="form" >
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="form-group form">
                        <i class="fas fa-user prefix grey-text disabled"><label data-error="wrong" data-success="right" for="form34">Name</label></i>
                        <input type="" id="form34" class="form-control validate" required>
                    </div>

                    <div class="form form-group">
                        <i class="fas fa-envelope prefix grey-text disabled"></i><label data-error="wrong" data-success="right" for="form29">Email</label>
                        <input type="email" id="form29" class="form-control validate" required>
                    </div>

                    <div class="form form-group">
                        <i class="fas fa-tag prefix grey-text disabled"></i><label data-error="wrong" data-success="right" for="form32">Subject</label>
                        <input type="" id="form32" class="form-control validate" required>
                    </div>
                    <!-- md-form mb-5 -->
                    <div class="form form-group">
                        <i class="fas fa-pencil prefix grey-text disabled"></i><label data-error="wrong" data-success="right" for="form8">Message</label>
                        <textarea type="text" id="form8" class="md-textarea form form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button value="submit" name="submit" type="submit" class="btn btn-primary" style="background-color: #2b364dcb !important; text-transform: none !important;">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <?php
		if ($message_sent) :
		?>
			<div class="alert alert-success">
                <strong>Success!</strong> Thanks, we will be in touch
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-window-close" aria-hidden="true"></i></span>
        </button>
                
			</div>
		<?php
		else :
		?>
          <?php
	endif;
?>
    </div>
    </form>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-xl navbar-dark mdb-color lighten-3 mt-3 mb-5" style="margin-left: 40px !important; margin-right: 40px !important;">
        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown ">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown">Boutique Accessories <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu listborder">
                        <ul style="padding:0em; margin:0em; list-style-type: none;" class="listborder"><li><a href="./products.php">Mannequins</a></li></ul>
                        <li><a href="./hrproducts.php">Hangers & Racks</a></li>
                        <li><a href="./hrproducts.php">Display cabinets</a></li>
                        <li><a href="./hrproducts.php">Standing Mirrors</a></li>
                    </ul>
                </li>
                <li class="nav-item active">
                <a class="nav-link waves-effect waves-light"href="./supermarket.php">Supermarket Supplies</i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link waves-effect waves-light"href="./restaurant.php">Restaurant Equipment</i></a>
                </li>
                <li class="nav-item">
                <a class="nav-link waves-effect waves-light"href="./salon.php">Salon Supplies</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./general.php">Other Accessories</a>
                </li>
            </ul>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
    <div class="fluid-container text-center mb-4">
        <p>Sort through category:</p>
    </div>
    <section class="fluid-container text-center mb-4">
        <body>
            <!--Pagination-->
            <nav style="padding-left: 25px;" class="d-flex justify-content-center">
                <ul class="row filters pagination pg-blue">
                    <li data-filter="*" class="page-item active">
                        <a class="page-link border" >All<span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li data-filter=".basket" class="page-item">
                        <a class="page-link border" href="#topcat">Baskets & Carts</a>
                    </li>
                    <li data-filter=".checkout" class="page-item">
                        <a class="page-link border" href="#topcat">Checkout Counters</a>
                    </li>
                    <li data-filter=".display"  class="page-item">
                        <a class="page-link border"> Display Fridges & Freezers</a>
                    </li>
                    <li data-filter=".pos"  class="page-item">
                        <a class="page-link border">POS Machines</a>
                    </li>
                    <li data-filter=".shelf"  class="page-item">
                        <a class="page-link border">Shelves & Stands</a>
                    </li>
                </ul>
            </nav>
            <!--Pagination-->
        </body>
    </section>

    <!--Section: Products v.3-->
    <div class="fluid-container projects">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Supermarket double door fridge
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Brown frame display fridge
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Triple door supermarket fridge
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f4.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Diplay Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Black frame display fridge
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f5.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Supermarket 3 tier display fridge
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f6.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Doouble 4 tier display fridge
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f7.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Freezer</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Supermarket snack display freezer
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Touchscreen Pos Machine
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Double screen Pos Machine
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        <!-- </h5>

                        <h4 class="font-weight-bold blue-text">
                            <strong>CODE</strong>
                        </h4> -->

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Handheld Pos Machine</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p4.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">All in one Pos Machine
                        <span class="badge badge-pill primary-color">bestseller</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item basket">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/baskets/b1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Shopping Cart</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Large Shopping Cart
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item basket">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/baskets/b2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Shopping Cart</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Two-tier Shopping Cart
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item basket">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/baskets/b3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Shopping Basket</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Red double handle basket
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item basket">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/baskets/b4.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a  class="grey-text disabled">
                            <h5>Shopping Basket</h5>
                        </a>
                        <h5>
                            <strong>
                      <a  class="dark-grey-text disabled">Grey double handle basket
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item basket">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/baskets/b5.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a  class="grey-text disabled">
                            <h5>Shopping Basket</h5>
                        </a>
                        <h5>
                            <strong>
                      <a  class="dark-grey-text disabled">Large longer handle basket
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item basket">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/baskets/b6.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Shopping Cart</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Small shopping trolley
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item  checkout">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/checkout/c1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Checkout Counter</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Brown Checkout Counter
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item  checkout">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/checkout/c2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Checkout Counter</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Black Checkout Counter
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item checkout">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/checkout/c3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Checkout Counter</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Grey Checkout Counter
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Supermarket double door fridge
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Brown frame display fridge
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Triple door supermarket fridge
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f4.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Diplay Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Black frame display fridge
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f5.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Supermarket 3 tier display fridge
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f6.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Fridge</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Doouble 4 tier display fridge
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item display">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/fridges/f7.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Freezer</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Supermarket snack display freezer
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Touchscreen Pos Machine
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Double screen Pos Machine
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        <!-- </h5>

                        <h4 class="font-weight-bold blue-text">
                            <strong>CODE</strong>
                        </h4> -->

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Handheld Pos Machine</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item pos">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/pos/p4.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>POS Machine</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">All in one Pos Machine
                        <span class="badge badge-pill primary-color">bestseller</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Shelf</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Double sided 3 tier shelf
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Shelf</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Double sided 4 tier shelf
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Shelf</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Upright 4 tier shelf
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s4.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">5 tier wire mesh snack stand
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s5.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">4 tier supermarket stand
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s6.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">5 tier display stand
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s7.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Snacks display stand
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s8.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Upright snack display stand</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s9.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">7 tier display stand
                        <span class="badge badge-pill primary-color">bestseller</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s10.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">5 tier display stand
                        <span class="badge badge-pill primary-color">bestseller</span>
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item shelf">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/shelves/s11.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Display Stand</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">double sided 4 tier display stand
                      </a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!--Section: Products v.3-->

    <section class="fluid-container text-center mb-4">
        <body>
            <!--Pagination-->
            <nav style="padding-left: 25px;" class="d-flex justify-content-center">
                <ul class="row filters pagination pg-blue">
                    <li data-filter="*" class="page-item active">
                        <a class="page-link border" >All<span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li data-filter=".basket" class="page-item">
                        <a class="page-link border" href="#topcat">Baskets & Carts</a>
                    </li>
                    <li data-filter=".checkout" class="page-item">
                        <a class="page-link border" href="#topcat">Checkout Counters</a>
                    </li>
                    <li data-filter=".display"  class="page-item">
                        <a class="page-link border"> Display Fridges & Freezers</a>
                    </li>
                    <li data-filter=".pos"  class="page-item">
                        <a class="page-link border">POS Machines</a>
                    </li>
                    <li data-filter=".shelf"  class="page-item">
                        <a class="page-link border">Shelves & Stands</a>
                    </li>
                </ul>
            </nav>
            <!--Pagination-->
        </body>
    </section>
    <!--footer-->
    <?php
        include('footer.html')
    ?>
    <!--/.Footer-->

    <!-- JQuery -->
    <script>
        $('.carousel').carousel({
            interval: 1000
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="fwb/floating-wpp.css">
    <script type="text/javascript" src="fwb/floating-wpp.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        AOS.init();
    </script>

    <div id="myButton"></div>

    <script src="js/isotope.min.js"></script>
      <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
      
      <script>
        var $projects = $('.projects');
        $projects.imagesLoaded().progress( function() {
        $projects.isotope('layout');
        'use strict';
        $projects.isotope({
            filter: '*',
            itemSelector: '.item',
            layoutMode: 'fitRows'
        });
        
        $('ul.filters > li').on('click', function(e){
            e.preventDefault();
            var filter = $(this).attr('data-filter');
            $('ul.filters > li').removeClass('active');
            $(this).addClass('active');
            $projects.isotope({filter: filter});
        });

    })(jQuery);
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
            buttonImage: '<img src="fwb/whatsapp.svg" />'
        });
    });
</script>
</html>