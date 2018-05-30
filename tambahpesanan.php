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


<script language="JavaScript" type="text/javascript">

function jumlah() {
//var myForm = document.form1;
var kepitingsaustiram = 35000 * myForm.order1.value;
var udangtepung = 20000 * myForm.order2.value;
var cumisausteriyaki = 33000 * myForm.order3.value;
var kerangasampedas = 25000 * myForm.order4.value;
var kepitingasammanis = 27000 * myForm.order5.value;
var cumibumbuhitam = 30000 * myForm.order6.value;
var jusjeruk = 8000 * myForm.order7.value;
var jusmangga = 10000 * myForm.order8.value;
var airmineral = 5000 * myForm.order9.value;
var esteh = 7000 * myForm.order10.value;
var jusstroberry = 10000 * myForm.order11.value;
var esoyen = 15000 * myForm.order12.value;
var hasil = kepitingsaustiram+udangtepung+cumisausteriyaki+kerangasampedas+kepitingasammanis+cumibumbuhitam+jusjeruk+jusmangga+airmineral+esteh+jusstroberry+esoyen;
var jumlah = (kepitingsaustiram/35000)+(udangtepung/20000)+(cumisausteriyaki/33000)+(kerangasampedas/25000)+(kepitingasammanis/27000)+(cumibumbuhitam/30000)+(jusjeruk/8000)+(jusmangga/10000)+(airmineral/5000)+(esteh/7000)+(jusstroberry/10000)+(esoyen/15000);

var terbayar = myForm.cash.value ;
var kembalian = terbayar - hasil;

myForm.jumlahpesanan.value = jumlah;

if (hasil > 200000) {
    myForm.subtotal.value = hasil;
    myForm.diskon.value = (25*hasil)/100;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
    myForm.kembalian.value = terbayar - myForm.bayar.value;
 } else {
    myForm.subtotal.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
    myForm.kembalian.value = terbayar - myForm.bayar.value;
 }
 //document.myForm.bayar.value = hasil;

} 
function resetForm(){
document.form1.reset();
}
</script>
<center>
<marquee><h4>Promo : Diskon 25 % jika transaksi di atas Rp. 200.000 </h4></marquee>

<form name="myForm"  action="simpanpesanan.php" method="post">
<table border="0">  
<tr>
  <label for="exampleInputEmail1"><strong>Nama Pemesan :</strong></label>
  <td><select class="form-control" name="idcustomer"> 
                <?php
                  $konek = new mysqli("localhost", "root","", "maknyusresto");

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
                    $select = $konek->query("SELECT * FROM customer");
                    foreach ($select as $x) {
                ?>
                    <option value="<?php echo $x['idcustomer']; ?>"><?php echo $x['namacustomer']; ?></option>
                <?php } ?>
            </select></td>
  </tr>
<tr>
  <td> nomor meja </td>
  <td> : </td>
  <td> <input type="text" name="nomormeja" placeholder=" nomor meja" required /></td>
</tr>
<tr>
  <td> Tanggal </td>
  <td> : </td>
  <td> <input type="date" name=" tanggal" required /></td>
</tr>
</table>

<table border="2" cellspacing=0 cellpadding=5 >
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4">No</font>
<th width="200"><font color="black" size="4">Makanan/Minuman</font>
<th width="180"><font color="black" size="4">Harga Satuan</font>
<th width="100"><font color="black" size="4">jumlah pesanan</font>
</tr>
<tbody>
<tr>
<td>1<td>kepiting saus tiram<td><input type="text" value="35000" disabled="true"/><td>
<input  type="text"  name="order1" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>2<td>udang tepung<td><input type="text" value="20000" disabled="true"/><td>
<input  type="text"  name="order2" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>3<td>cumi saus teriyaki<td><input  type="text"   value="33000" disabled="true"/> <td>
<input  type="text"  name="order3" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>4<td>kerang asam pedas<td><input  type="text"   value="25000" disabled="true"/>
<td><input  type="text"  name="order4" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>5<td>kepiting asam manis<td><input  type="text"   value="27000" disabled="true"/> <td>
<input  type="text"  name="order5" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>6<td>cumi bumbu hitam<td><input  type="text"   value="30000" disabled="true"/> <td>
<input  type="text"  name="order6" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>7<td>jus jeruk<td><input  type="text"   value="8000" disabled="true"/> <td>
<input  type="text"  name="order7" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>8<td>jus mangga<td><input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order8" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>9<td>air mineral<td><input  type="text"   value="5000" disabled="true"/> <td>
<input  type="text"  name="order9" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>10<td>es teh<td><input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order10" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>11<td>jus stroberry<td><input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order11" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>12<td>es oyen<td><input  type="text"   value="15000" disabled="true"/> <td>
<input  type="text"  name="order12" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Jumlah Pembayaran<td><input type="text"  id="subtotal" name="total" value="" />
</tr>
<tr>
<td colspan=3 align="right">Jumlah pemesanan<td><input type="text"  id="jumlahpesanan" name="jumlahpesanan" value="" />
</tr>
<tr>
<td colspan=3 align="right">Diskon<td><input  type="text"  name="diskon"  />
</tr>
<tr>
<td colspan=3 align="right">Total Pembayaran<td><input type="text" name="bayar" value="" />
</tr>
<tr>
<td colspan=3 align="right">cash<td><input type="text" id="cash" name="cash" value="" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Uang Kembalian<td><input type="text" id="kembalian" name="kembalian" value=""  />
</tr>
</table>

<input type="reset" value="Reset" onClick="resetForm()" />
<button type="submit" value="Konfirmasi" > Konfirmasi</button>

</form action="tampilpesanan.php" method="post">
<br>
<br>

</center>

</body>
</html> 
  

  <script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
 
<!--  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script> 
  --> 
    </div> <!-- end of order id-->
</div>    <!-- end of order order-->


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
