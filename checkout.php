<?php
  require_once 'includes/restaurantImage.php';
  include_once 'header.php';

  require 'classes/GetKitchen.php';  
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
<section id="page_header" class='padding'>
  <div class="page_title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <h2 class="title">CheckOut</h2>
        </div>
      </div>
    </div>
  </div>  
</section>

<div class="padding row">
  <div class="col-md-8">
    <form method='post'>
      <fieldset>
        <h2 class='mx-4'>Select Meal</h2>
        <div class="container-fluid col-md-5">
          <select name='select' id='select' class='form-control' onfocus='this.size=1;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
          </select>
        </div>
        <div class='container-fluid col-md-3'>
          <button type='button' class='btn btn-warning mt-5' name='add' id='addToCart'>ADD TO CART</button>
        </div>
      </fieldset>
    </form>
  </div>
  <div class='col-md-4 text-center'>
    <div id='chosenMeal' class='chosenMeal'></div>
    <div id='hiddenDiv' class='hidden'>
      <a href='checkout.php' type='button' class='btn btn-primary' id='checkout'>CHECKOUT</a> 
      <button type='button' class='btn btn-danger' id='clearAll'>CLEAR ALL</button> 
    </div>
  </div>
</div>


<?php
  include_once 'footer.php'; 
  include_once 'modal.php';
  include_once 'script.php';
?>
</body>
</html>