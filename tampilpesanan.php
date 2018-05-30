 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maknyus resto</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">

<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
           <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="assets/img/logo.png" id="logo"><strong>MAKNYUS RESTO</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="home.html">HOME </a></li>
                    <li class="pesentetion"><a href="customer.php">CUSTOMER</a>
                    <li role="presentation"><a href="menu.html">MENU </a>
                    <li role="presentation"><a href="pesanan.html">PESAN</a></li>
                </ul>
            </div>
        </div>
    </nav>

 <center>


<style>
.pesan{ height:500px; width:100%;  border-top:6px solid rgba(236, 225, 217, 0.4); border-bottom:6px solid rgba(236, 225, 217, 0.4); } 
.pesan{text-align:center;}
.pesan #pesanan{}
.pesan #pesanan h3{ color:#cf0e1e; font-size:20px;  letter-spacing:8px; font-family:Economica-bold; margin-top:30px; margin-bottom:50px;}
 
 .name{background:grey;  width:200px; height:60px; background-image:url(../images/icon4.png); background-position:7px 7px; background-repeat:no-repeat; border-radius:8px; border:0px; color:white; font-size:25px; font-family:hansen; padding:0 30px;
 line-height:87px; background-position:95% 50%; margin-bottom:20px; float:left;}
 
 .name1{background:grey;  width:200px; height:60px; background-image:url(../images/icon4.png); background-position:7px 7px; background-repeat:no-repeat; border-radius:8px; border:0px; color:white; font-size:25px; font-family:hansen; padding:0 30px;
 line-height:87px; background-position:95% 50%; margin-bottom:20px; float:right; }
    
    
 .booknow{ background:#ff5a0b; height:55px; border-radius:10px; border:0px; width:100px; margin-top:20px; border-bottom:5px solid #c84d29; margin-bottom:40px; font-family:OSWALD-BOLD; font-size:30px; color:white; line-height:47px; cursor:pointer;}
 .booknow:active{ top:2px; border-bottom:3px solid #c84d29;}
 .booknow:hover{}
 
 .booknow{position:relative;}

 .kiri {  background-position:95% 50%; margin-bottom:20px; float:left;  }
    
 .kanan{ background-position:95% 50%; margin-bottom:20px; float:right; }

 
</style>

<div class="container" id="orderline">
    
  <form action="datatanggal.php" method="POST">
    <h5><a class="kiri">Masukkan Tanggal Awal </a><a class="kanan">Masukkan Tanggal Terakhir</a></h5>
    <input type="date" class="name wow zoomIn" name="tanggalawal"  />
    <input type="date" class="name1 wow zoomIn" name="tanggalakhir" /> 
    <center><input class="booknow wow fadeInUp" type="submit" name="cari" value="search" /></center> 
    </form>
    
<center>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    
</style>
        
    <table border="1">
        <h2 class="wow fadeInUp" data-wow-delay="0.3s"><center> Daftar Pesanan</center></h2>
        <tr>
        <td>ID Pemesan</td>
        <td>Nomor Meja </td>
        <td>Tanggal</td>
        <td>Jumlah pesanan</td>
        <td>Total Pembayaran</td>
        <td>Uang Pembayaran</td>
        <td>Uang Kembalian</td>
        <center>
        <td colspan=2><center>Aksi</center></td>
        </tr> 
        
    <?php
    $konek = new mysqli("localhost", "root","", "maknyusresto");

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
    $select = mysqli_query($konek, "SELECT * from pesanan");

    if ($select->num_rows > 0){
    $no = 1; 
  while ($row = $select->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['nomormeja']."</td>";
    echo "<td>".$row['tanggal']."</td>";
    echo "<td>".$row['jumlahpesanan']."</td>";
    echo "<td>".$row['bayar']."</td>";
    echo "<td>".$row['cash']."</td>";
    echo "<td>".$row['kembalian']."</td>";
    
    echo "<td><a href='deletepesanan.php?nomormeja=".$row['nomormeja']."'>Hapus</a></td>";
    echo "<td><a href='struck.php?nomormeja=".$row['nomormeja']."'>Cetak</a></td>";
    echo "</tr>";
  }
}else{
echo '<tr><td colspan="7"> Data Yang Dicari Tidak ada ...!!! <td></tr>';
    }
     ?>
</table>

</table>

<center><a href='home.html'>Kembali ke Home</a></center>
</center>   <br><br>


<p></p><p></p>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">Maknyus Resto</a></h3>
                    <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">menu makan</a><strong> · </strong><a href="#">menu minum </a><strong> · </strong><a href="#">pesanan </a><strong> </strong>
                        <a href="#"> </a>
                    <p class="company-name">Maknyus Resto© 2018 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p>janturan no.22 </p>
                        <p>umbulharjo, yogyakarta</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left">+6289623939163 </p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">ritamelina41@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
</form>               
</html>
<?php $konek->close(); ?>
  </body>
