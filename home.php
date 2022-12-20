<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

unset($_SESSION['pesan']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restop.</title>

    <!--CSS-->
    <link rel="stylesheet" href="moi.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <div class="tittle">
        <h1>Selamat Datang di Restop</h1>
        <h2>Mau makan apa hari ini?</h2>
    </div>
<!--Navbar-->

    <nav class="navbar">
        <li><a href="appetizer.php">Appetizer</a></li>
        <li><a href="entree.php">Entree</a></li>
        <li><a href="dessert.php">Dessert</a></li>
        <li><a href="drink.php">Drink</a></li>
    </nav>

<!--End Navbar-->
</body>
</html>