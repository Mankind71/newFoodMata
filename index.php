<?php
  include 'header.php';
  require_once 'includes/restaurantImage.php';
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
                <li><a href="about.php">About Us</a></li>
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

<!-- Notice -->
<div class="info" style="z-index: 40;">
  <p>Available now in Akure...</p>
</div>

<!-- REVOLUTION SLIDER -->			
<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
  <div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
    <ul>	<!-- SLIDE  -->
      <li class="text-center" data-index="rs-129" data-transition="slideleft" data-slotamount="default" data-rotate="0"  data-title="Food &nbsp; Matters" data-description="Available for orders and deliveries!">
        <img id="firstbanner" src="images/banner.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg img-fluid" data-no-retina>
                <h1 class="tp-caption tp-resizeme" 
                  data-x="center" data-hoffset="15"
                  data-y="100" 
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  style="z-index: 6;">
                  <span class="small_title">your food,</span> <br> at &nbsp; any &nbsp; favourite &nbsp; restaurant,&nbsp;<br><span class="small_title">delivered.</span>
                </h1>       
                    
                  <div class="tp-caption fade tp-resizeme"
                    data-x="center" data-hoffset="15"
                    data-y="300"
                    data-width = "full"  
                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1200"
                    style="z-index: 12;">
                    <a data-toggle="modal" data-target="#newRest" class="btn-common btn-white page-scroll">Order Now</a> &nbsp;
                    <a data-toggle="modal" data-target="#restaurants" class="btn-common-white page-scroll">Find&nbsp;&nbsp; Restaurant</a>
                </div>  
      </li>
      <li data-index="rs-130" data-transition="fade" data-slotamount="default" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"  data-title="Local &nbsp; Delicacies" data-description="Enjoy Delicious solids!">
        <!-- MAIN IMAGE -->
        <img src="images/Egusi.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYER NR. 2 -->
        <h1 class="tp-caption tp-resizeme" 
                  data-x="left" data-hoffset="15"
                  data-y="70" 
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  style="z-index: 6;">
                  <span class="small_title">Delicious Local Meals</span> <br> Enjoy &nbsp; to &nbsp; <span class="">Your &nbsp; Taste</span>
                </h1>
        <!-- LAYER NR. 2 -->
                <p class="tp-caption tp-resizeme"
                  data-x="left" data-hoffset="15"
                  data-y="210" 
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="800"
                  style="z-index: 9;">Enjoy Delicious Food!
                  
                </p>
                <div class="tp-caption fade tp-resizeme"
                    datae-x="left" data-hoffset="15"
                    data-y="280"
                    data-width = "full"  
                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1200"
                    style="z-index: 12;">
                    <a data-toggle="modal" data-target="#restaurants" class="btn-common btn-orange page-scroll">Find&nbsp;&nbsp; Restaurant</a>
                </div>
      </li>
      <li class="text-right" data-index="rs-131" data-transition="slideleft"   data-rotate="0" data-title="Continentals" data-description="Savouring continentals of your choice!">
        <img src="images/jolloff.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <h1 class="tp-caption tp-resizeme" 
                  data-x="right" data-hoffset="" 
                  data-y="70" 
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  style="z-index: 6;">
                  <span class="small_title">Enjoy</span> <br>  <span class="color">Custom</span> &nbsp; Orders 
                </h1>
                <p class="tp-caption tp-resizeme"
                  data-x="right" data-hoffset="" 
                  data-y="210" 
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="800"
                  style="z-index: 9;">Enjoy Delicious Food!
                </p>
      
                    <div class="tp-caption fade tp-resizeme"
                    data-x="right" data-hoffset=""
                    data-y="280"
                    data-width = "full" 
                    data-transform_idle="o:1;"
                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1200"
                    style="z-index: 12;">
                    <a data-toggle="modal" data-target="#restaurants" class="btn-common btn-orange page-scroll">Find&nbsp;&nbsp; Restaurant</a>
                </div>  
      </li>
      <!-- SLIDE  -->
    </ul>
  </div>
</div>
<!-- END REVOLUTION SLIDER -->


<!--Features Section-->
<section class="feature_wrap padding-half" id="specialities">
  <div class="container">
    <div class="row">
     <div class="col-md-12 text-center">
        <h2 class="heading ">Our &nbsp; Specialities</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="row " >
      <div class="col-md-3 col-sm-6 feature text-center">
        <a data-toggle="modal" data-target="#newRest"><i class="icon-glass"></i>
        <h3>Instant Order</h3></a>
        <p style="color:rgb(48, 64, 17)"> Instant Delivery of Order</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <a data-toggle="modal" data-target="#restaurants"><i class="icon-coffee"></i>
        <h3>Schedule your Order</h3></a>
        <p style="color:rgb(48, 64, 17)"> Busy? Schedule  your Order for your choice time</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <a data-toggle="modal" data-target="#kitchenRegister" data-dismiss="modal"><i class="icon-glass"></i>
          <h3>Register your Kitchen</h3></a>
        <pstyle="color:rgb(48, 64, 17)"> Are you a caterer, chef or a restaurant owner?.. Register your kitchen with us..</pstyle=>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <a data-toggle="modal" data-target="#delivery"><i class="icon-coffee"></i>
        <h3>Deliver for Me</h3></a>
        <p style="color:rgb(48, 64, 17)">Need help with delivery meals to your customer? We got You.</p>
      </div>
    </div>
    
  </div>
</section>


<!--Kitchens and meals-->
<section id="services" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
         <h2 class="heading">Featured &nbsp; Food</h2>
         <hr class="heading_space">
         <div class="slider_wrap">
        <div id="service-slider" class="owl-carousel">
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/okra.jpg" alt="Services Image">
              <a  href="#"></a>
              </div>
              <h3><a href="#">Okra with swag</a></h3>
              <p></p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/meatpie.jpg" alt="Services Image">
              <a  href="#"></a>
              </div>
              <h3><a href="#">Pies</a></h3>
              <p>Swaggalicious meat pies</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/chocoCake.jpg" alt="Services Image">
              <a  href="#"></a>
              </div>
              <h3><a href="#">Chocolate Cake</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2 class="heading">Top  &nbsp;Food Suggestions </h2>
        <hr class="heading_space">
        <ul class="menu_widget">
          <li>Shoprite<span class="fa fa-cutlery"> </span></li>
          <li>Fried rice and Chicken<span class="fa fa-cutlery"> </span></li>
          <li>Cake and Pastries <span class="fa fa-cutlery"> </span></li>
          <li>Spring Roll, Samosa & Puffpuff<span class="fa fa-cutlery"> </span></li>
          <li>Domino's<span class="fa fa-cutlery"> </span></li>
          <li>Pizza<span class="fa fa-cutlery"> </span></li>
          <li>Bolakomo <span class="fa fa-cutlery"> </span></li>
          <li>Fish Barbeque <span class="fa fa-cutlery"> </span></li>
        </ul>
         <h3>Other Special Menu</h3>
         <p>Enjoy Delicious Food!</p>
      </div>
    </div>
  </div>
</section>


<!-- Background Image -->
<section class="info_section paralax">
  <div class="container">
    <div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-8">
         <div class="text-center">
         <h2 class="heading_space">HOT Deal of the Day</h2>
         <p class="heading_space detail">Enjoy Delicious Food!</p>
         <a data-toggle="modal" data-target="#restaurants" class="btn-common-white page-scroll">Order Now</a>
         <a data-toggle="modal" data-target="#delivery" class="btn-common btn-white page-scroll">Deliver for Me</a>
         </div>          
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>

<!-- Kitchen Logo -->
<form method="post"></form>
<div class="container padding">
  <div class="row">
    <div class="col-md-12">
      <div id="mdb-lightbox-ui">
        <div style="" class="mdb-lightbox">

          <?php
            getImage('Bolakomo', 'Bolakomo');
            getImage('cakesandpasteries', 'Cakes and Pasteries');
            getImage('chapters','Chapters');
            getImage('chickenrepublicalagbaka', 'Chicken Republic (Alagbaka)');
            getImage('chickenrepublicoja','Chicken Republic (Oja)');
            getImage('chickenrepublicroadblock','Chicken Republic (Roadblock)');
            getImage('chiefchef', 'Chief Chef');
            getImage("chomsalagbaka", "Chom's Chom oven (alagbaka)");
            getImage("chomscathedral", "Chom's Chom oven (cathedral)");
            getImage("domino", "Domino's");
            getImage('glofes', 'Glofes');
            getImage('mandate', 'Mandate');
            getImage('shoprite', 'Shoprite');
            getImage("vickys", "Vicky's Restaurant");
          ?>

          <script>
            var kitchens = document.querySelectorAll(".clickedrest");
            kitchens.forEach(function(kitchen){
              kitchen.addEventListener('click', function(){
                kitchen.innerText;
              })
            })
          </script>
          
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</form>

<!-- testimonial -->
<section id="testinomial" class="padding">
  <div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div id="testinomial-slider" class="owl-carousel text-center">
        <div class="item">
          <h3>Got my Food from shoprite Alagbaka in less than 30 minutes</h3>
          <p>Alex [Oba-Ile]/p>
        </div>
        <div class="item">
          <h3>Amazing customer service, Now I can schedule my food delivery for my kids</h3>
          <p>Busayo [Akad] </p>
        </div>
        <div class="item">
          <h3>Amazing food recommendation, Guys you really need to try out the red velvet Cake from Glofes </h3>
          <p>Olamide [N.Gate]</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>

<?php
  include_once 'footer.php';
?>

<?php
  include 'modal.php';
?>

<?php
  include_once 'script.php';
?>
</body>
</html>