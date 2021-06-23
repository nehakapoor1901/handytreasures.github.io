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
                <li class="breadcrumb-item active" aria-current="page">Products</li>
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
                    <h6>Tower Explosion Box</h6>
                    <h6>Price :Rs 1600</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="products.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
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
                <img src="pictures\effiel_tower.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Effiel tower</h6>
                    <h6>Price :Rs 1200</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="products.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                    <a href="2.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\infinty_box.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Infinty Box With Folds</h6>
                    <h6>Price :Rs 1000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="3.php" button type="button" class="btn btn-success">View Product Details</button></a>
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
                        </p><a href="products.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="4.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\choclate.jpeg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Choclate Bouqet</h6>
                    <h6>Price :Rs 900</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="5.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\iloveyou.jpeg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>I Love You String Art</h6>
                    <h6>Price :Rs 400</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(18)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="products.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                    <a href="6.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="pictures\frame.jpeg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>Frame & Flower -Combo</h6>
                    <h6>Price :Rs 400</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    <a href="7.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\string_art.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Name String Art</h6>
                    <h6>Price :Rs 1000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="products.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                    <a href="8.php" button type="button" class="btn btn-success">View Product Details</button></a>
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
                    if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="products.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
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
                        if (check_if_added_to_cart(11)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="10.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
            <div class="card">
                
                <video width="320" height="240" controls>
                <source src="pictures/video1.mp4" type="video/mp4">
                </video>

                <div class="figure-caption">
                    <h6><b>Anniversary Album (70 Pictures)</b></h6>
                    <h6>(can be customised for any occasion)</h6>
                    <h6>Price :Rs 2000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="products.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                    <a href="11.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
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
                    if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="products.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="12.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                    <img src="pictures\hearstring1.jpeg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Heart String Art</h6>
                    <h6>Price :Rs 900</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="13.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
            <div class="card">
                <video width="320" height="240" controls>
                <source src="pictures/video3.mp4" type="video/mp4">
                </video>

                <div class="figure-caption">
                    <h6><b>Memory Book</b></h6>
                    <h6>(can be customised for any occasion)</h6>
                    <h6>Price :Rs 1500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="14.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\loop.jpeg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Photo Loop</h6>
                    <h6>Price :Rs 600</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="15.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\reason.jpeg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>99 Reason Why <br> I Love You Jar</h6>
                    <h6>Price :Rs 500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="16.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\photoreel.jpeg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Photo Reel</h6>
                    <h6>Price :Rs 500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=17" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="17.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                <video width="320" height="240" controls>
                <source src="pictures/video5.mp4" type="video/mp4">
                </video>

                    <div class="figure-caption">
                    <b><h6>Birthday Memory Book</b></h6>
                    <h6>(can be customised for any occasion)</h6>
                    <h6>Price :Rs 1500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=18" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="18.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="pictures\loverstring.jpeg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>Lover String Art</h6>
                    <h6>Price :Rs 1500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=19" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    <a href="19.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\name2.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Name String Art</h6>
                        <h6>Price :Rs 1000</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=20" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="20.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <video width="320" height="240" controls>
                    <source src="pictures/video2.mp4" type="video/mp4">
                    </video>

                    <div class="figure-caption">
                        <h6><b>Anniversary Album (110 Pictures)</b></h6>
                        <h6>(can be customised for any occasion)</h6>
                        <h6>Price :Rs 2500</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="products.php?id=21" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="21.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\krishna.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Krishna String Art</h6>
                        <h6>Price :Rs 1400</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=22" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="22.php" button type="button" class="btn btn-success">View Product Details</button></a>
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
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=24" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    <a href="24.php" button type="button" class="btn btn-success">View Product Details</button></a>
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
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="products.php?id=25" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                    <a href="25.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\teacher.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Best Teacher String Art</h6>
                        <h6>Price :Rs 1400</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=26" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="26.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\ganesh.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Ganesha String Art</h6>
                        <h6>Price :Rs 1000</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=27" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="27.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
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
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=28" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="28.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            
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
                    if (check_if_added_to_cart(13)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="products.php?id=31" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="31.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\diwali.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Diwali String Art</h6>
                        <h6>Price :Rs 1400</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=32" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="32.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="pictures\family2.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Family String Art (Joint)</h6>
                        <h6>Price :Rs 1900</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=33" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="33.php" button type="button" class="btn btn-success">View Product Details</button></a>
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
                        if (check_if_added_to_cart(12)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="products.php?id=34" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="34.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="pictures\name.jpeg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Name String Art</h6>
                        <h6>Price :Rs 1000</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="products.php?id=35" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="35.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
            <div class="card">
                <video width="320" height="240" controls>
                <source src="pictures/video4.mp4" type="video/mp4">
                </video>

                <div class="figure-caption">
                    <h6><b>Mini Birthday Album</b></h6>
                    <h6>(can be customised for any occasion)</h6>
                    <h6>Price :Rs 1200</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="products.php?id=36" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                    <a href="36.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-3">
            <div class="card">
                <img src="pictures\family1.jpeg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Family String Art (nuclear)</h6>
                    <h6>Price :Rs 1500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="products.php?id=37" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                }
                ?>
                <a href="37.php" button type="button" class="btn btn-success">View Product Details</button></a>
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
                    if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="products.php?id=38" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="38.php" button type="button" class="btn btn-success">View Product Details</button></a>
                    </div>
                </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="pictures\heartname.jpeg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Name & Heart String Art</h6>
                    <h6>Price :Rs 1300</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="products.php?id=40" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    <a href="40.php" button type="button" class="btn btn-success">View Product Details</button></a>
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
                    if (check_if_added_to_cart(14)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="products.php?id=41" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    <a href="41.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-3">
            <div class="card">
                <img src="pictures/tricard.jpeg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                <h6>Traingle card</h6>
                <h6>Price :Rs 500</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="products.php?id=42" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                   <?php
                    }
                    }
                    ?>
                    <a href="42.php" button type="button" class="btn btn-success">View Product Details</button></a>
                </div>
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