<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

include("config.php");
$_SESSION['pesan'] = 'dessert';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restop.</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body class="bek">
    <!-- header -->
    <header>

        <a href="home.php" class="logo"><i class="fa-sharp fa-solid fa-champagne-glass"></i>restop.</a>


        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="profile.php" class="fas fa-user"></a>
            <a href="home.html" class="fas fa-home"></a>
            <a href="listorder.php" class="fas"></a>
        </div>

    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!--End Search Form-->
    <!--menu-->
    <section class="menu" id="menu">
        <div style="margin-top: 70px;">
            <h3 class="sub-heading"> Menu Kami </h3>
            <h1 class="heading"> Khusus Hari Ini </h1>
        </div>


        <div class="box-container">
            <div class="box">
                <form action="" method="post">
                    <div class="image">
                        <img src="images/cake.jpg" alt="">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3>Cake Fuffy</h3>
                        <p>Ringan cocok untuk dimakan 1 atau 2 orang.</p>
                        <?php
                        if (isset($_POST['submit'])) {

                            $hasil = mysqli_query($conn, "INSERT INTO orderlist (pesanan, harga) VALUES ('Cake Fuffy', '85000')");
                            header('location:dessert.php');
                        }
                        ?>
                        <button type="submit" class="btn" name="submit" value="Add">Add to cart</button>
                        <span class="price">Rp. 85.000</span>
                    </div>
                </form>
            </div>
            <div class="box">
                <form action="" method="post">
                    <div class="image">
                        <img src="images/muffin.jpg" alt="">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3>Muffin</h3>
                        <p>Dilengkapi dengan kismis didalamnya.</p>
                        <?php
                        if (isset($_POST['submit1'])) {

                            $hasil = mysqli_query($conn, "INSERT INTO orderlist (pesanan, harga) VALUES ('Muffin', '55000')");
                            header('location:dessert.php');
                        }
                        ?>
                        <button type="submit" class="btn" name="submit1" value="Add">Add to cart</button>
                        <span class="price">Rp. 55.000</span>
                    </div>
                </form>

            </div>

            <div class="box">
                <div class="image">
                    <img src="images/orange.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Orange cake</h3>
                    <p>Inovasi baru dari toko kami.</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 65.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-4.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cloudy Choco</h3>
                    <p>Ditemani secangkir kopi leih enak</p>
                    <a href="order.html" class="btn">add to cart</a>
                    <span class="price">Rp. 59.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Brownie Pancake</h3>
                    <p>Perfect Dessert</p>
                    <a href="order.html" class="btn">add to cart</a>
                    <span class="price">Rp. 60.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Aqua Cupcake</h3>
                    <p>Perfect Dessert</p>
                    <a href="order.html" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/gelato.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Gelato Ice Cream</h3>
                    <p>Disajikan dengan banyak varian.</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 73.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/eclair.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Eclair</h3>
                    <p>Dilengkapi dengan stroberi segar.</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 65.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/tart.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Tart</h3>
                    <p>Disajikan dengan cappucino lebih nikmat.</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 92.000</span>
                </div>
            </div>

        </div>

    </section>
    <!--End Menu-->

    <body>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="script.js"></script>
    </body>

</html>