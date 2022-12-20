<?php 
require 'config.php';

$query = mysqli_query($conn, "SELECT * FROM users");
$result = [];
 while($res = mysqli_fetch_assoc($query)){
    $result[] = $res;
 };
 $i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restop.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="moi.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        table {
            border: 2px solid black;
        }
        .table-utama, button {
            position: absolute;
            top: 20%;
            left: 30%;
        }
        .a-btn {
            position: absolute;
            top: 65%;
            left: 39%;
        }
    </style>
</head>
<body>
    <center>
    <div class="mt-5 card text-bg-dark mt-5 col-5 table-utama">
    <table cellspacing="10">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <?php foreach($result as $r): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $r["username"] ?></td>
            <td><?= $r["email"] ?></td>
        </tr>
        <?php
            $i = $i + 1;
            endforeach;
        ?>
    </table>
    </div>
    <div class="a-btn">
        <a href="home.html" class="btn btn-dark">Kembali</a>
        <a href="logout.php" class="btn btn-dark">Log Out</a>
    </div>
    </center>
</body>