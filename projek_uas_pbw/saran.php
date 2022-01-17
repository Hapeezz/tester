<!DOCTYPE html>
<html>
    <head>
        <title>Saran - Hikari Store</title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-saran.css">
        <link rel="shortcut icon" href="images/logo.ico">
    </head>
    <body>
        <!-- Header -->
        <header>
        <div class="header">
                <h1>Saran - Hikari Store</h1>
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
        <div class="isi-section-saran1">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="validasi()">
                <p>
                    <label>Nama:</label><br>
                    <input type="text" name="fnama" size="60px" id="nama">
                </p>
                <p>
                    <label>Saran</label><br>
                    <textarea name="fsaran" cols="56" rows="4"></textarea><br><br>
                    <input type="submit" name="Submit" class="tombol-akhir"><input type="reset" name="Reset" class="tombol-akhir">
                </p>
            </form>
        </div>
        <div class="isi-section-saran2">
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $saran = $_POST['fsaran'];

                    echo"
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>$nama</td>
                            </tr>
                            <tr>
                                <td>Saran</td>
                                <td>:</td>
                                <td>$saran</td>
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