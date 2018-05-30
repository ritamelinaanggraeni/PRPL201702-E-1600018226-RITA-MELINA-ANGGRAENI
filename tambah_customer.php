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

    <h1><center>Tambah customer</center></h1>
    <p></p>
    <form action="simpan_customer.php" method="post">
      <center>
      <table>
         <tr>
          <td><h3>id customer</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input type="number" pattern="[0-9]+" title="id customer hanya angka" name="idcustomer" required></h3></td>
        </tr>
        <tr>
          <td><h3>nama customer</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input type="text" name="namacustomer" title="nama customer wajib diisi" required></h3></td>
        </tr>
        <tr>
          <td><h3>email</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  name="email" title="email wajib diisi dengan benar" required></h3></td>
        </tr>
        <tr>
          <td><h3>no telp</h3></td>
          <td><h3>:</h1></t3>
          <td><h3><input type="tel" pattern="^\d{12}$" name="telp" title="no telp hanya angka saja" required  onkeypress="return hanyaangka(event)"></h3></td>
        </tr>
        <tr>
          <td><h3>alamat</h3></td>
          <td><h3>:</h3></td>
          <td><h3><textarea type="text" name="alamatcustomer" title="alamat wajib diisi" required></textarea></h3></td>
        </tr>
        <tr>
          <td><h3>password</h3></td>
          <td><h3>:</h3></td>
          <td><h3><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{1,}" title="password wajib diisi" name="password" required></h3></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="simpan"></td>
        </tr>
      </table>
  </center>

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