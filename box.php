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
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Made With Love &#128151;</h1>
            
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cards & Boxes</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="watch">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\tower_box.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Tower Explosion Box (Black)</h6>
                    <h6>Price :Rs 1600</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="box.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                    <a href="1.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\infinty2.jpeg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Infinty box(Pink-Purple)</h6>
                    <h6>Price :Rs 700</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(25)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="box.php?id=25" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                    <a href="25.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\mosiaccard.jpeg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Mosiac Card</h6>
                    <h6>Price :Rs 600</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="box.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="4.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\infinty_box.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Infinty box with folds</h6>
                    <h6>Price :Rs 1000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="box.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="3.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\tower2.jpeg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Tower explosion box (Blue)</h6>
                    <h6>Price :Rs 1600</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(28)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="box.php?id=28" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="28.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="pictures\popupcubes.jpeg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>Pop Up Box</h6>
                    <h6>Price :Rs 600</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(24)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="box.php?id=24" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    <a href="24.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="pictures\gaintheart.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Gaint Heart Card</h6>
                        <h6>Price :Rs 700</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="box.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="9.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\heartshape.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Heart Shape Card</h6>
                        <h6>Price :Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(10)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="box.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="10.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shoes" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="pictures\never_ending.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Infinty box(White-Blue)</h6>
                            <h6>Price :Rs 700</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(12)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="box.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="12.php" button type="button" class="btn btn-success">View Product Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="pictures\tricard.jpeg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Triangle Card</h6>
                            <h6>Price :Rs 500</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(42)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="box.php?id=42" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                     <?php
                    }
                    }
                    ?>
                    <a href="42.php" button type="button" class="btn btn-success">View Product Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="pictures/mini.jpeg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Mini Explosion Box</h6>
                            <h6>Price :Rs 700</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(38)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="box.php?id=38" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="38.php" button type="button" class="btn btn-success">View Product Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="pictures/zigzag.jpeg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h6>Zig Zag Card</h6>
                    <h6>Price :Rs 500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(34)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="box.php?id=34" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="34.php" button type="button" class="btn btn-success">View Product Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="headphones">
                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="pictures/rakhi.jpeg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Rakhi/Bhaiduj Card</h6>
                                <h6>Price :Rs 600</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(31)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="box.php?id=31" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="31.php" button type="button" class="btn btn-success">View Product Details</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="pictures/infinty3.jpeg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Infinity Box(Black-White)</h6>
                                <h6>Price :Rs 700</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(41)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="box.php?id=41" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="41.php" button type="button" class="btn btn-success">View Product Details</button></a>
                            </div>
                        </div>
                    </div>
                    </div> 
                    
                </div>
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
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
<?php
require("includes/common.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
}
?>

</html>