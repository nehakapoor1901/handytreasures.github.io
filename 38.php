<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">
            <div class="container">
                    <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Handy Treasures</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                       <li class="nav-item dropdown">
                           <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                               Category
                            </a>
                               <div class="dropdown-menu">
                                   <a href="products.php#watch" class="dropdown-item">All Products</a>
                                   <a href="stringart.php#shirt" class="dropdown-item">String Arts</a>
                                   <a href="box.php#shoes" class="dropdown-item">Cards & Boxes</a>
                                   <a href="album.php#headphones" class="dropdown-item">Albums</a>
                               </div>
                           
                       </li>
                       
                       <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                       <?php
                       if (isset($_SESSION['email'])) {
                        ?>
                       <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                       <?php
                          } 
                    ?>
                    </ul>
                    
                    
            </div>
        </nav>

    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">PRODUCT DETAILS</h3>
          <hr/>
          <div class="card" style="width: 30rem;">
              <img class="card-img-top" src="pictures/mini.jpeg" alt="Card image cap">
              <div class="card-body">
                <center><h5 class="card-title"><b>Mini Explosion Box</b></h5></center>
                
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 700</li>
                <li class="list-group-item">Delivered in 10 working days</li>
                <li class="list-group-item">Free shipping all over india</li>
              </ul>
              
          </div><br>
          <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=38" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                    <a href="index.php" button type="button" class="btn btn-info">Back to home</button></a>
        
          <img
            src=""
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <br>
          
        </div>
        <div class="col-md-4 mt-2">
          <span class="text-warning pt-3">
            <h1 class="title">Mini Explosion Box</h1>
            
          </span>
          <hr>
          

          <p>A personalized is always a good idea -- no matter what kind of present it is. This is perfect when that particular person almost has everything they need. While it’s true that “it’s the thought that counts,” finding your gift sitting on a shelf can be disappointing. Therefore, giving a customized item or handmade gifts, to be exact, is a good idea. A handmade gift is a fail-proof gift you can give on any occasion. It’s a unique way of telling your recipient that they are special. After all, the gift itself took time to be created and nothing spells love better than T-I-M-E.<br><br>

          Buy gift from <b>HANDY TREASURE</b> for any occasion Birthday,Anniversary,Valentine's day,Father's day,Mother's day,Thanksgiving &#128151<br><br>

          This <b>Mini Explosion Box</b> comprises of 20 pictures.You can customize the color combination and number of pictures according to you.Share these details to us on <b> Mail id : treasureshandy@gmail.com </b> or (from the button given below) or <b>Whatsapp </b>(from the button given below).<br><br>
          <b>Pictures :</b> 20<br>
          <b>Color Combination :</b> Same/Other(if any specified) <br>
          <b>Theme</b> : Birthday/Anniversary/Other<br>
          <b>Any Special Message :</b> <br>


          </p>
          <a href="https://www.gmail.com" button type="button" class="btn btn-info">Share your details <br>on <b>Mail<b></button></a>
          <a href="https://wa.me/+919873848098" button type="button" class="btn btn-info">Share your details <br>on <b>Whatsapp</b></button></a>

        </div>
      </div>
    </div>
  </div>

  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Us:</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
</html>
