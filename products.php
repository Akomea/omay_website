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
    <title>Omay Company Limited | Affordable and Durable boutique supplies</title>
    <meta name="description" content="We provide staple equipment such as Mannequins, Hangers, Clothes Racks and many more to supplement your stores"/>
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
                <li class="nav-item dropdown active">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown">Boutique Accessories <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu listborder ">
                        <li><a  href="products.php"> Mannequins</a></li>
                        <li data-filter=".rack"><a href="./hrproducts.php">Hangers & Racks</a></li>
                        <li data-filter=".display"><a href="./hrproducts.php">Display cabinets</a></li>
                        <li data-filter=".mirror"><a href="./hrproducts.php">Standing Mirrors</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                <a class="nav-link waves-effect waves-light" href="./supermarket.php">Supermarket Supplies</i></a>
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
                    <li data-filter=".realistic" class="page-item">
                        <a class="page-link border" href="#topcat">Realistic</a>
                    </li>
                    <li data-filter=".seated"  class="page-item">
                        <a class="page-link border">Seated</a>
                    </li>
                    <li data-filter=".abstract"  class="page-item">
                        <a class="page-link border">Abstract</a>
                    </li>
                    <li data-filter=".torso"  class="page-item">
                        <a class="page-link border">Torso</a>
                    </li>
                    <li data-filter=".headless"  class="page-item">
                        <a class="page-link border">Headless</a>
                    </li>
                    <li data-filter=".child"  class="page-item">
                        <a class="page-link border">Child</a>
                    </li>
                    <li data-filter=".other"  class="page-item">
                        <a class="page-link border">Other</a>
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m1.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">White & Gold Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m2.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Matte Black Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m3.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">White Male Swimmer
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m4.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a  class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a  class="dark-grey-text disabled">Black Bald Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m5.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a  class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a  class="dark-grey-text disabled">Glossy Black Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m6.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistc Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Bald Black Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m7.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Red Lean Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m8.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Black Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m9.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Lean White Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m10.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Bald Black Male</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m11.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Glossy White Male
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

            <!--Fourth column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m12.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Bald Black Male</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->
                </div>
                <!--Card-->

            </div>
            <!--Fourth column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m13.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Matte Black Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract seated">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m14.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Seated Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Blue Faceless Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item seated">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m15.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Seated Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">White Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item seated">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m16.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Seated Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">White Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic seated">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m17.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Seated Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Realistic Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m18.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistc Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">White Male 
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m19.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Grey Muscly Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item child">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m20.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Child Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Male Child
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item child">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m21.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Child Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Faceless Male Child
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item child">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m22.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Child Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Realistic Female Child</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item child">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m23.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Child Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Realistic Male Child
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

            <!--Fourth column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item headless">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m24.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Headless Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Headless White Child</a>
                    </strong>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Fourth column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item other">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m25.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Female Legs
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m26.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">James Bond Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item headless">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m27.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5> Headless Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Male White
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m28.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Sexy Black Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m29.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a  class="dark-grey-text disabled">James Bond Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m30.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Glossy Silver Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item headless">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m31.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Headless Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Fat Female (Oboshi)
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m32.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">White Abstract Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m33.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Glossy Black Female
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m34.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Glossy Red Sexy Female</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item realistic">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m35.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Realistic Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Bald Fat Female
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

            <!--Fourth column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item abstract">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m36.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Abstract Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Glossy Black Female</a>
                    </strong>
                        </h5>
                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Fourth column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item torso">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m37.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Tailor's Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">White legless Male
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 item torso">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="img/mannequins/m38.jpg" class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card image-->
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Category & Title-->
                        <a class="grey-text disabled">
                            <h5>Tailor's Mannequin</h5>
                        </a>
                        <h5>
                            <strong>
                      <a class="dark-grey-text disabled">Female Torso with Stand
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
                    <li data-filter=".realistic" class="page-item">
                        <a class="page-link border" href="#topcat">Realistic</a>
                    </li>
                    <li data-filter=".seated"  class="page-item">
                        <a class="page-link border">Seated</a>
                    </li>
                    <li data-filter=".abstract"  class="page-item">
                        <a class="page-link border">Abstract</a>
                    </li>
                    <li data-filter=".torso"  class="page-item">
                        <a class="page-link border">Torso</a>
                    </li>
                    <li data-filter=".headless"  class="page-item">
                        <a class="page-link border">Headless</a>
                    </li>
                    <li data-filter=".child"  class="page-item">
                        <a class="page-link border">Child</a>
                    </li>
                    <li data-filter=".other"  class="page-item">
                        <a class="page-link border">Other</a>
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