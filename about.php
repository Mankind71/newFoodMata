<?php
  include_once 'header.php';
?>

<body>

<?php
  include 'loaderTopbar.php';
?>

<!--Header-->
<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo/FoodMata_Logo_Transparent.png" alt="logo" class="img-responsive logo"></a> 
         </div>
        
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="faq.php">FAQ</a></li> -->
                <li><a data-toggle="modal" data-target="#restaurants">Order Now</a></li>
                <li><a data-toggle="modal" data-target="#delivery">Deliver for Me</a></li>
                <li class="hidden"><a data-toggle="modal" data-target="#kitchenRegister">Register your Kitchen</a></li>
              </ul>
            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>

<!--Page header & Title-->
<section id="page_header">
  <div class="page_title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <h2 class="title">About Us</h2>
           <p></p>
        </div>
      </div>
    </div>
  </div>  
</section>
  
<!-- The Company -->
<section id="company" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="text-center">
         <h2 class="heading">The &nbsp; Company</h2>
         <hr class="heading_space">
        </div>
         <p class="aboutP">FoodMata is a one stop Food partner to cater for your food needs.  We are committed to getting you, your desired food from any restaurant of your choice, at any time you want, and to any place you want within our coverage.</p>
          <p>We are the leading food service delivery online platform in Akure. With a wide range of restaurants, eateries, and local kitchens registered within our online platforms, the need to get any food type of your choice, from any restaurant of your choice and delivered to your place of convenience is met.</p>
      </div>
    </div>
  </div>
</section>

<!-- Company overview -->
<section id="overview" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <h2 class="heading">What &nbsp; We &nbsp; do</h2>
         <hr class="heading_space">
         <p class="aboutP"><span class="spanP">Food & Drinks Order and Delivery:&nbsp;</span> With our large variety of restaurants, you can  order for any food or/and drink of your choice and get it delivered to your doorstep. Also, if you want custom made food, you could place your order. We have Specialised Chefs that help with special custom made foods.</p>
         <p class="aboutP"><span class="spanP">Errands Delivery:&nbsp;</span> Restaurants and caterers who make foods of any sort can also outsource their delivery to us.</p>
          
      </div>
    </div>
  </div>
</section>


<?php
  include_once 'footer.php';
?>

<?php
  include_once 'modal.php';
?>

<?php
  include_once 'script.php';
?>
</body>
</html>