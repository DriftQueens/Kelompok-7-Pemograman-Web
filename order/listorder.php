<?php
session_start();
include("config.php");

if (!isset($_SESSION['username'])){
    header('location: login.php');
}

$ambil = mysqli_query($conn, "SELECT * FROM orderlist");

?>

<head>

</head>

<body>
    <table class="table table-striped">
        <tr>
            <th>pesanan</th>
            <th>Harga</th>
            <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($ambil)) {
            echo "<tr>";
            echo "<td>" . $user_data['pesanan'] . "</td>";
            echo "<td>Rp." . $user_data['harga'] . "</td>";
            echo "<td>
                        <a class='btn btn-danger' href='delete.php?id_order=$user_data[id_order]'>Delete</a>
                        </td>";
            echo "</tr>";
        }/*
        if(isset($_POST['btn2'])){
            if($_SESSION['pesan']='dessert'){
                unset($_SESSION['pesan']);
                header('location:dessert.php');
            }
            elseif($_SESSION['pesan']='appetizer'){
                unset($_SESSION['pesan']);
                header('location:appetizer.php');
            }
            elseif($_SESSION['pesan']='drink'){
                unset($_SESSION['pesan']);
                header('location:drink.php');
            }
            elseif($_SESSION['pesan']='entree'){
                unset($_SESSION['pesan']);
                header('location:entree.php');
            }
        }*/
        ?>
    </table>
    <a href="order.php" class="btn">Lanjutkan pesanan</a>
    <a href="drink.php" class="btn">balik</a>
</body>