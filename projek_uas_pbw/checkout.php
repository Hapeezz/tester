<!DOCTYPE html>
<html>
    <head>
        <title>Check Out - Hikari Store</title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-checkout.css">
        <link rel="shortcut icon" href="images/logo.ico">
    </head>
    <body>
        <!-- Header -->
        <header>
        <div class="header">
                <h1>Checkout - Hikari Store</h1>
                <p>Tempatnya Handphone Berkualitas Tinggi</p>
            </div>
            <div class="topnav">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="katalog.html">Katalog</a>
                <a href="saran.php">Saran</a>
            </div>
        </header>
        
        <!-- Section Pertama -->
        <div class="isi-section-checkout">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="validasi()">
                <table class="form">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="fnama" size="65px" id="nama"></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><input type="tel" name="fnotel" size="65px"></td>
                    </tr>
                    <tr>
                        <td>Alamat Email</td>
                        <td>:</td>
                        <td><input type="email" name="femail" size="65px"></td>
                    </tr>
                    <tr>
                        <td>Nama Produk</td>
                        <td>:</td>
                        <td><input type="text" name="fnamaproduk" size="65px"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Produk</td>
                        <td>:</td>
                        <td><input type="text" name="fjumlah" size="65px"></td>
                    </tr>
                    <tr>
                        <td>Note</td>
                        <td>:</td>
                        <td><textarea name="fnote" cols="61" rows="4"></textarea></td>
                    </tr>
                </table>
                <p><input type="submit" name="Submit" class="tombol-akhir"><input type="reset" name="Reset" class="tombol-akhir"></p>
            </form>
        </div>
        <div class="isi-section-checkout">
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $notel = $_POST['fnotel'];
                    $email = $_POST['femail'];
                    $namaproduk = $_POST['fnamaproduk'];
                    $jumlah = $_POST['fjumlah'];
                    $note = $_POST['fnote'];

                    echo"
                        <table>
                            <h3>Rincian Pesanan</h3>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>$nama</td>
                            </tr>
                            <tr>
                                <td>Nomor Telepon</td>
                                <td>:</td>
                                <td>$notel</td>
                            </tr>
                            <tr>
                                <td>Alamat Email</td>
                                <td>:</td>
                                <td>$email</td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td>:</td>
                                <td>$namaproduk</td>
                            </tr>
                            <tr>
                                <td>Jumlah Produk</td>
                                <td>:</td>
                                <td>$jumlah</td>
                            </tr>
                            <tr>
                                <td>Note</td>
                                <td>:</td>
                                <td>$note</td>
                            </tr>
                        </table>
                    ";
                }
            ?>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <footer id="copyright">
                <p>Copyright &copy; 2022 Muhammad Alhafiz</p>
            </footer>
        </div>
    </body>
</html>