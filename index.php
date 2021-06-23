<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Handy Treasures</title>
    <link rel = "icon" href ="pictures/logo.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
        <div id="" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1><center>Made with love &#128151;</center></h1>
            <center><a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a></center>

            </div>
            </div>

        </div>
    </div>
     <br>


     <h2><center>Gifts For everyone!</h2></center><br>
    <div class="container">
    
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <center><img class="mh-100" style="width: 350px; height: 350px;" src="pictures/logo.jpg" alt="First slide"></center>
            </div>
            <div class="carousel-item">
                <center><img class="mh-100" style="width: 350px; height: 350px;" src="pictures/logo2.jpg" alt="Second slide"><center>
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    
    </div>   
            
        </p>
    </div>

    <div class="text-center pt-4 h3">
         Surprise your loved ones &#128151;
    </div>
        
    
        
    </div> <br><br> 

    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#all"> <img src="pictures\allprod2.jpeg" class="img-fluid " alt="" style="border-radius:0.5rem">
                <!-- https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fm=jpg&w=400&fit=max-->
                    <div class="h5 pt-3 font-weight-bolder">
                      All Products
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="stringart.php#string"  >
                  <img src="pictures\art2.jpeg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                        String Art
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="box.php#box">
                 <img src="pictures\cardbox2.jpeg" class="img-fluid   " alt="" style="border-radius:0.5rem">
                <div class="h5 pt-3 font-weight-bolder">
                    Cards & Boxes
                 </div>
             </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="album.php#alb">
                 <img src="pictures\album2.jpeg" class="img-fluid  " alt="" style="border-radius:0.5rem">
                 <div class="h5 pt-3 font-weight-bolder">
                    Albums
                 </div>
                </a> 
            </div>
            
        </div>
    </div>

    <br><br>
        <div class="container">
        <hr style="height:2px;border-width:5;color:black;background-color:black">    <div class="container pt-3">
        </div>
        <h1><center><span class="badge bg-light">Customer Reviews</span></h1></center>
        <br>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <center><img src="pictures/1.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/2.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/3.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/4.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/5.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/6.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/7.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/8.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/9.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/10.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/11.jpeg" class="d-block w-75" alt=""></center>
            </div>
            <div class="carousel-item">
              <center><img src="pictures/12.jpeg" class="d-block w-75" alt=""></center>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>




          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="container">
        <hr style="height:2px;border-width:5;color:black;background-color:black">    <div class="container pt-3">
        </div>
        <h1><center><span class="badge bg-light">Customer Ratings</span></h1></center>
        <br>
        <div class="container">
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Quality Promise : 95%</div>
        </div> <br>
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">On Time Delivery : 90%</div>
        </div><br>
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Return/Replace : 85%</div>
        </div><br>
            </div><br><br>
        </div>
        <div class="container">
        <div class="you">
            <div class="row text-center"> 
            <div class="col-sm">
                <a href="https://instagram.com/handy_treasures?igshid=2lv6euj3okmd"> <img src="pictures\insta.jpeg" class="img-fluid " style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                      <h2>Follow Our <br> Instagram Page</h2>
                    </div>
                </a>
             </div>
            <div class="col-sm">
                <a href="https://youtube.com/channel/UCKU3PskmFCi-uuPUxRC3BYA">
                  <img src="pictures\youtube.jpeg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                    <div class="h5 pt-3 font-weight-bolder">
                        <h2>Subscribe Our <br> Youtube Channel</h2>
                    </div>
                </a>
             </div>
             <div class="col-sm">
                <a href=" https://m.facebook.com/handy_treasures-104546918006684/?ref=bookmarks">
                  <img src="pictures\fb.jpeg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                    <div class="h5 pt-3 font-weight-bolder">
                        <h2>Follow Our <br> Facebook Page</h2>
                    </div>
                </a>
             </div>
        </div>
        <hr style="height:2px;border-width:5;color:black;background-color:black">    <div class="container pt-3">
        <br><br>
             <div class="container">
              <div class="row">
                <div class="col align-self-start">
                  <h1><span class="badge badge-light"><img src="pictures/one.gif" alt="Computer man" style="width:80px;height:80px;">Free Shipping</span></h1>

                </div>
                <div class="col align-self-center">
                    <h1><span class="badge badge-light"><img src="pictures/twooo.gif" alt="Computer man" style="width:80px;height:80px;">Customized Gifts</span></h1>
                </div>
                <div class="col align-self-end">
                    <h1><span class="badge badge-light"><img src="pictures/three.gif" alt="Computer man" style="width:80px;height:80px;">Pocket Friendly</span></h1>
                </div>
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
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>

</html>