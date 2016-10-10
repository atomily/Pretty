<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - Pretty</title>
  <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme.css?<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
 </head>
 <body>
  <div class="navigation-container">
   <div class="navigation">
    <div class="logo-container">
     <a href="#" class="logo pulse">Pretty</a>
    </div>
    <ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="portfolio.php">Portfolio</a></li>
    </ul>
   </div>
  </div>
  <div class="content-container">
   <div class="content">
    <h1 class="title pulse">Hello World!</h1>
    <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla turpis dolor. Aliquam non imperdiet est. Nullam eu eros ac nulla aliquet lacinia et nec elit. </h2>
    <div class="btn-g">
     <a href="#" class="btn-p">Follow Us On Github</a>
    </div>
   </div>
  </div>
  <div class="footer-container">
   <div class="footer">
    <div class="social">
     <a href="#"><i class="fa fa-github pulse" aria-hidden="true"></i></a>
     <a href="#"><i class="fa fa-linkedin-square pulse" aria-hidden="true"></i></a>
     <a href="#"><i class="fa fa-twitter pulse" aria-hidden="true"></i></a>
     <a href="#"><i class="fa fa-paper-plane pulse" aria-hidden="true"></i></a>
    </div>
    <div class="copy">
     <p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date("Y"); ?> <a href="#" class="pulse">Pretty</a> All Rights Reserved</p>
    </div>
   </div>
  </div>
  <!-- js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.js"></script>
  <![endif]-->
 </body>
</html>
