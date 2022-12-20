<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

include("config.php");


$sql = mysqli_query($conn, "SELECT * FROM orderlist");



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

        <a href="#" class="logo"><i class="fa-sharp fa-solid fa-champagne-glass"></i>restop.</a>


        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="profile.php" class="fas fa-user"></a>
            <a href="home.html" class="fas fa-home"></a>
            <i href="listorder.php" class="fas fa-cart"></i>
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
                <div class="image">
                    <img src="images/salmon.jpg" alt="">
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
                    <h3>Salmon Panggang</h3>
                    <p>Dilengkapi dengan Telur dan Saus Barbeque</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 95.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/menu-2.jpg" alt="">
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
                    <h3>Burger Queen</h3>
                    <p>Dilengkapi dengan keju mozarella dan tambahan topping</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 35.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/sandwich.jpg" alt="">
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
                    <h3>Sandwich Club</h3>
                    <p>Cocok untuk di makan dengan teman dan keluarga</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 150.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/mie.jpg" alt="">
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
                    <h3>Mie Ramen</h3>
                    <p>Ditemani secangkir kopi leih enak</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 59.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/makaroni.jpg" alt="">
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
                    <h3>Pasta Hijau</h3>
                    <p>Disajikan dengan sari daun Bayam</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 60.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/steak.jpg" alt="">
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
                    <h3>Steak</h3>
                    <p>Perfect Entree</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 80.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/kentang.jpg" alt="">
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
                    <h3>Kentang Dill</h3>
                    <p>Cocok di santap dengan Steak</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 43.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/pizza.jpg" alt="">
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
                    <h3>Pizza</h3>
                    <p>Cukup untuk 1 orang</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 55.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/dill.jpg" alt="">
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
                    <h3>Kentang Ukraina</h3>
                    <p>Cocok disajikan dengan pasta/</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 62.000</span>
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