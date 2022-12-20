<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

include("config.php");


$sql = mysqli_query($conn, "SELECT * FROM orderlist");



?>\

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
            <a href="listorder.php" class="fas fa-cart"></a>
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
                    <img src="images/zaitun.jpg" alt="">
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
                    <h3>Salad Buah Tara</h3>
                    <p>Dilengkapi dengan Roti dan Minyak Wijen. </p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 45.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/canape.jpg" alt="">
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
                    <h3>Canape</h3>
                    <p>Dilengkapi dengan Salmon dan Saus mayo.</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 35.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/sate.jpg" alt="">
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
                    <h3>Sate Paprika</h3>
                    <p>Dengan berbabagi varian Paprika membuat rasanya lebih khas.</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 55.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/pukat.jpg" alt="">
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
                    <h3>Salad Alpukat</h3>
                    <p>Ditemani secangkir kopi leih enak</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 39.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/telur.jpg" alt="">
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
                    <h3>Sadwich Telur</h3>
                    <p>Dilengkapi dengan taburan Rumput laut</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 60.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/tara.jpg" alt="">
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
                    <h3>Salad Minyak Zaitun</h3>
                    <p>Makaroni sangat lembut dan mudah di cerna.</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 78.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/labu.jpg" alt="">
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
                    <h3>Sup Labu</h3>
                    <p>Cocokk ditemani dengan roti</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 23.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/mayo.jpg" alt="">
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
                    <h3>Salad Mayo</h3>
                    <p>Perfect Dessert</p>
                    <a href="order.html" class="btn">Pesan</a>
                    <span class="price">Rp. 35.000</span>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/kelapa.jpg" alt="">
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
                    <h3>Sup Labu dan Kelapa</h3>
                    <p>Perpaduan yang sangat cocok.</p>
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