<?php

include("config.php");

$list = mysqli_query($conn, "SELECT * FROM pemesan");

?>
<?php
    // Check If form submitted, insert form data into users table.
    if (isset($_POST['yakin'])) {
        $nama = $_POST['nama'];
        $nomor = $_POST['nomor'];
        $alamat = $_POST['alamat'];
        $pesan = $_POST['pesan'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $hasil = mysqli_query($conn, "INSERT INTO pemesan(nama,nomor,alamat,pesan) 
                VALUES('$nama','$nomor','$alamat', '$pesan')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
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
    <link rel="stylesheet" href="moi.css">

    <!--Flowbite-->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

</head>
<body class="bek">
    <section class="order fr" id="order">

        <h3 class="sub-heading"> order now </h3>
        <h1 class="heading"> free and fast </h1>

        <form style="background-color: #9BA17B;"  action="">
    
            <div class="inputBox" >
                <div class="input">
                    <span>your name</span>
                    <input type="text" nama = "nama"placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="text" name="number" name ="nomor" placeholder="enter your number">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="alamat" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="pesan" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>

            <!--Pop Up-->
            
            <button class="btn text-white bg-gray-800 hover:bg-gray-600" type="button" data-modal-toggle="popup-modal">Pesan</button>
            <a href="home.html" class="btn bg-gray-800 hover:bg-gray-600" style="margin-left: 8px;">Home</a>
            <div id="popup-modal" tabindex="-1" style="font-size: 60%;" class="fixed top-0 left-0 right-0 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-full h-full max-w-md md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg class="w-6 h-6 mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin dengan pesanan anda?</h3>
                            <a href="home.html"><button nama ="yakin"class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2" type="button" data-modal-toggle="popup-modal">Ya, Saya Yakin</button></a>
                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak, Batalkan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Pop Up-->  
        </form>
    </div>
    </section>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>
</html>
