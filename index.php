<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome </title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="css\bootstrap.css" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="css\font-awesome.css" rel="stylesheet">
    <!-- flaticon css -->
    <link href="css\flaticon.css" rel="stylesheet">
    <!-- animate css -->
    <link href="css\animate.css" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="css\owl.css" rel="stylesheet">
    <!-- fancybox css -->
    <link href="css\jquery.fancybox.css" rel="stylesheet">
    <link href="css\hover.css" rel="stylesheet">
    <!-- style css -->
    <link href="css\style.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css\revolution\settings.css">
    <link rel="stylesheet" type="text/css" href="css\revolution\layers.css">
    <link rel="stylesheet" type="text/css" href="css\revolution\navigation.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="images\favicon.ico" type="image/x-icon">
    <link rel="icon" href="images\favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css\responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        
        <!-- Main Header -->
      <?php include('header.php'); ?>
        <!-- Main Header end -->

        <!--Main Slider-->
        <section class=" ">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
      <img src="images\main-slider\1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="images\main-slider\2.jpg" alt="Los Angeles">
    </div>

    <div class="item active">
      <img src="images\main-slider\1.jpg" alt="Los Angeles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </section>
        <!--Main Slider  end-->

        <!--welcome container-->
        <div class="welcome-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-6">
                        <div class="welimage">
                            <img src="https://3b6xlt3iddqmuq5vy2w0s5d3-wpengine.netdna-ssl.com/state-of-security/wp-content/uploads/sites/3/Untitled-design9-4-800x450.jpg">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-4 col-sm-6">
                        <div class="weltext">
                            <h2>Welcome to  <span>Antariksha Technologies

</span>  </h2>
                             
                            <p>Founded in 2015, Antariksha Technologies provides business consulting and

strategic Information Technology (IT) services for transformational CIOs through a

globally recognized and experienced executive team and seasoned partners, to bring

measurable business value, resulting in unprecedented customer satisfaction.</p>
                            
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
        <!--welcome container end-->

        <!--All services-->
        <div class="services-sec">
            <div class="container">
                <div class="sec-title text-center">
                    <h2>Our Services</h2>
                     
                    <span class="colorborder"></span>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\taxation.jpg">
                                    <img src="https://static1.squarespace.com/static/53c5fe8ae4b0a1379e350fd7/t/53cc81afe4b0e7d8eb409729/1405911486130/">
                                    
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="technology-consulting.php">
        Technology Consulting
                </a></h3>
                                 
                            </div>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\service1.jpg">
                                    <img src="data:image/jpeg;base64,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">
                                   
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="business-advisory.php">
								Business Advisory</a></h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\investmentplanning.jpg">
                                    <img src="data:image/jpeg;base64,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">
                                     
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="application-security-and-audit.php"> SMART  Governance</a></h3>
                                
                            </div>
                        </div>
                    </div>
					 
			   </div>
            </div>
        </div>
        <!--All services end-->

    <?php include('footer.php') ?>
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".site-header"><span class="icon fa fa-long-arrow-up"></span></div>

    <!-- jquery Liabrary -->
    <script src="js\jquery-1.12.4.min.js"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="js\bootstrap.min.js"></script>
    <!-- fancybox js -->
    <script src="js\jquery.fancybox.pack.js"></script>
    <script src="js\jquery.fancybox-media.js"></script>
    <!-- owl.carousel js -->
    <script src="js\owl.js"></script>
    <!-- counter js -->
    <script src="js\jquery.appear.js"></script>
    <script src="js\jquery.countTo.js"></script>
    <!-- mixitup js -->
    <script src="js\mixitup.js"></script>
    <!-- validate js -->
    <script src="js\validate.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js\revolution\jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js\revolution\jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.video.min.js"></script>

    <!-- script JS  -->
    <script src="js\script.js"></script>
</body>

</html>