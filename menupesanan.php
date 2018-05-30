<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maknyus resto</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    
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

            <form action="simpanpesanan.php" method="post">
            <table border ="0" width="1350px" margin="auto" >
                <tr> 
                <td><h1>data pemesan</h1></td>
                </tr>  
            </table>
        <table width="1370px" margin="auto" style="background-color: #caedf8;">
        <tr>
          <td><h3>id customer</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input type="number" name="idcustomer"></h3></td>
        </tr>
         <tr>
          <td><h3>namacustomer</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input type="text" name="namacustomer" ></h3></td>
        </tr>
        <tr>
          <td><h3>no meja</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input type="text" name="nomormeja"></h3></td>
        </tr>
        <tr>
          <td><h3>tanggal pesan</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input id="date" placeholder="tanggal &amp;" type="date" name="tanggal"></h3></td>
        </tr>

<table border ="0" width="1350px" margin="auto">
                <tr>
                <br> 
                <p></p>
                <td><h1><center>menu makanan</center></h1></td>
                 <P></P>
                </tr>
              </br>
            </table>
        <table border ="2" width="1350px" margin="auto" style="background-color: #caedf8;">
            <tr style="background-color: #b3b3ff;">
                <th><h3><center>gambar menu </center></h3></th>
                <th><h3><center>id menu</center></h3></th>
                <th><h3><center>nama makanan  </center></h3></th>
                <th><h3><center>harga makanan </center></h3></th>
                 <th><h3><center>pesanan</center></h3></th>
                <th><h3><center>jumlah pesanan </center></h3></th>
 </tr>
        <tr>
            <td><img src="assets/img/kepiting.jpg"></td>
            <td><h4><center><input type="text" name="idmenu" value="j1" disabled="idmenu"></center></h4></td>
            <td><h4><center><input type="text" name="namamenu" value="kepiting saus tiram" disabled="namamenu"></center></h4></td>
            <td><h4><center><input type="text" name="harga" value="Rp. 35.000" disabled="harga"></center></H4></td>
            <td><center><input type="checkbox" name="namamenu" value="kepiting saus tiram" ></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
        </tr>


        <tr>
           <td><img src="assets/img/udang.jpg" ></td>
           <td><h4><center><input type="text" name="idmenu" value="j2" disabled="idmenu"></center></h4></td>
           <td><h4><center><input type="text" name="namamenu" value="udang tepung" disabled="namamenu"></center></h4></td>
           <td><H4><center><input type="text" name="harga" value="Rp. 20.000" disabled="harga"></center></H4></td>
           <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
       </tr>
       <tr>
           <td><img class="img-fluid" src="assets/img/cumi.jpg"></td>
           <td><h4><center><input type="text" name="idmenu" value="j3" disabled="idmenu"></center></h4></td>
           <td><h4><center><input type="text" name="namamenu" value="cumi saus teriyaki" disabled="namamenu"></center></h4></td>
           <td><H4><center><input type="text" name="harga" value="Rp 33.000" disabled="harga"></center></H4></td>
           <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
       </tr>
       <tr>
           <td><img src="assets/img/kerang.jpg"></td>
           <td><h4><center><input type="text" name="idmenu" value="j4" disabled="idmenu"></center></h4></td>
           <td><t><h4><center><input type="text" name="namamenu" value="kerang asam pedas" disabled="namamenu"></center></h4></t></td>
           <td><t><H4><center><input type="text" name="harga" value="Rp. 25.000" disabled="harga"></center></H4></t></td>
           <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
        </tr>
        <tr>
            <td><img src="assets/img/asamanis.jpeg"></td>
            <td><h4><center><input type="text" name="idmenu" value="j5" disabled="idmenu"></center></h4></td>
            <td><h4 class="card-title"><center><input type="text" name="namamenu" value="kepiting asam manis" disabled="namamenu"></center></h4></td>
            <td><H4 class="card-text"><center><input type="text" name="harga" value="Rp. 27.000" disabled="harag"></center></H4></td>
            <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
        </tr>
        <tr>
            <td><img src="assets/img/hitam.jpg"></td>
            <td><h4><center><input type="text" name="idmenu" value="j6" disabled="idmenu"></center></h4></td>
            <td><h4><center><input type="text" name="namamenu" value="cumi bumbu hitam" disabled="namamenu"></center></h4></td>
            <td><H4><center><input type="text" name="harga" value="Rp. 30.000" disabled="harga"></center></H4></td>
            <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
        </tr>
    </table>
    <p></p>
    <table border ="0" width="1350px" margin="auto">
                <tr> 
                <p></p>
                <td><h1><center>menu minuman</center></h1></td>
                 <P></P>
                </tr>  
            </table>

        <table border ="2" width="1350px" margin="auto" style="background-color: #caedf8;">
            <tr style="background-color: #b3b3ff;">
                <th><center><h3>gambar menu</h3></center></th>
                <th><center><h3>id menu</h3></center></th>
                <th><center><h3>nama minuman</h3></center></th>
                <th><center><h3>harga minuman</h3></center></th>
                <th><h3><center>pesanan</center></h3></th>
                <th><h3><center>jumlah pesanan </center></h3></th>
            </tr>
        <tr>
               <td> <img src="assets/img/jus jeruk.jpg"></td>
               <td><h4><center><input type="text" name="idmenu" value="k1" disabled="idmenu"></center></h4></td>
               <td><h4><center><input type="text" name="namamenu" value="jus jeruk" disabled="namamenu"></center></h4></td>
               <td><h4><center><input type="text" name="harga" value="Rp. 8.000" disabled="harga"></center></h4></td>
               <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
            <tr>

            </tr>
               <td><img class="img-fluid" src="assets/img/jus mangga.jpg"></td>
               <td><h4><center><input type="text" name="idmenu" value="k2" disabled="idmenu"></center></h4></td>
               <td><h4><center><input type="text" name="namamenu" value="jus mangga" disabled="namamenu"></center></h4></td>
               <td><h4><center><input type="text" name="harga" value="Rp. 10.000" disabled="harga"></center></h4></td>
               <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
            <tr>

            </tr>
                <td><img class="img-fluid" src="assets/img/aqua.jpg"></td>
                <td><h4><center><input type="text" name="idmenu" value="k3" disabled="idmenu"></center></h4></td>
               <td><h4><center><input type="text" name="namamenu" value="air mineral" disabled="namamenu"></center></h4></td>
               <td><h4><center><input type="text" name="harga" value="Rp. 5.000" disabled="harga"></center></h4></td>
               <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
            </tr>

            </tr>
                <td><img class="img-fluid" src="assets/img/es teh.jpg"></td>
                <td><h4><center><input type="text" name="idmenu" value="k4" disabled="idmenu"></center></h4></td>
               <td><h4><center><input type="text" name="namamenu" value="es teh" disabled="namamenu"></center></h4></td>
               <td><h4><center><input type="text" name="harga" value="Rp. 7.000" disabled="harga"></center></h4></td>
               <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
            <tr>

            </tr>
                <td><img class="img-fluid" src="assets/img/jus stoberry.jpg"></td>
                <td><h4><center><input type="text" name="idmenu" value="k5" disabled="idmenu"></center></h4></td>
               <td><h4><center><input type="text" name="namamenu" value="jus stroberry" disabled="namamenu"></center></h4></td>
               <td><h4><center><input type="text" name="harga" value="Rp. 10.000" disabled="harga"></center></h4></td>
               <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
            <td><center><input type="text" name="jumlahpesanan" ></center></td>
            </tr>

            </tr>
                <td><img class="img-fluid" src="assets/img/es teler.jpg"></td>
                <td><h4><center><input type="text" name="idmenu" value="k6" disabled="idmenu"></center></h4></td>
               <td><h4><center><input type="text" name="namamenu" value="es oyen" disabled="namamenu"></center></h4></td>
               <td><h4><center><input type="text" name="harga" value="Rp. 15.000" disabled="harga"></center></h4></td>
               <td><center><input type="checkbox" name="namamenu[]" value= "<?php echo $x['idmenu']; ?>"></center></td>
                <td><center><input type="text" name="jumlahpesanan" ></center></td>
            </tr>
            </table>
            </table>

            <p></p>
             <tr>
             <td><center>
            <input type="submit" value="Submit">
            <input type="reset" value="reset"></center></td>
             </tr>
    </div>
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
</body>

</html>
