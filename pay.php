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
  <link rel = "icon" href ="pictures/logo.jpg" type = "image/x-icon">
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
        </nav><br><br><br><br><br>
        <div class="container">
          <form>
            <div class="form-group">
              <label for="exampleInputadd">Full Address</label>
              <input type="email" class="form-control" id="exampleInputadd" aria-describedby="addHelp" placeholder="Enter address">
              <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputph">Contact Number</label>
              <input type="number" class="form-control" id="exampleInputph" placeholder="">
            </div>
            
            
            <div class="form-group">
            <label for="exampleFormControlInput1">Pin Code</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Please Select Delivery Time</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Anytime(12am-11:59pm)</option>
              <option>Home Type(7am-9pm)</option>
              <option>Office Type(10am-6pm)</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Please Select Payment Option</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>COD (Cash On Delivery)</option>
              
              
            </select>
          </div>
         
          <a href="success.php" button type="submit" class="btn btn-primary">Confirm Order</button>
          </form>
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
