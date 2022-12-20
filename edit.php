<?php

include_once("config.php");

if (isset($_POST['update'])) {
    // ambil data dari formulir
    $id = $_POST['id_order'];
    $nama = $_POST['pesanan'];
    $harga = $_POST['harga'];


    // query
    $query = mysqli_query($conn, "UPDATE orderlist SET pesanan ='$nama', harga ='$harga' WHERE id = '$id' ");
    // mengecek apakah query berhasil diubah
    header('location: index.php');
}

// Check if form is submitted for user update, then redirect to homepage after update
if (!isset($_GET['id'])) {
    header('Location: index.php');
}
// about

$id = $_GET['id_order'];

// update user data about
$query = mysqli_query($conn, "SELECT * FROM orderlist WHERE id_order = '$id'");
$row = mysqli_fetch_assoc($query);

$nama = $row['pesanan'];
$harga = $row['harga'];

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="tema.css">
</head>

<body class="warnasatu">
    <nav class="navbar warnadua">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="color : #22A39F;" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <b style="color : #22A39F;">Andi's market</b>
            </a>
        </div>
    </nav>
    <div class="container pt-5">
        <a class="btn" style="background-color: #22A39F;" href="index.php">Kembali Ke Home</a>
        <br /><br />

        <form name="update_user" method="post" action="edit.php?id=$row[id]" class="p-5">
            <div>
                <td><input type="hidden" name="id_order" value=<?php echo $_GET['id_order']; ?>></td>
            </div>
            <div class="mb-3">
                <label class="form-label fontsatu">Nama</label>
                <input type="input" class="form-control" name="pesanan" value=<?php echo $nama; ?>>
                <div class="form-text"></div>
            </div>
            <div class="mb-3">
                <label class="form-label fontsatu">Harga</label>
                <input type="input" class="form-control" name="harga" value=<?php echo $harga; ?>>
                <div class="form-text"></div>
            </div>
            <tr>
                <td><input type="hidden" name="id_order" value=<?php echo $_GET['id_order']; ?>></td>
                <td><input type="submit" style="background-color: #22A39F;" name="update" value="Update"></td>
            </tr>
        </form>
    </div>
</body>

</html>