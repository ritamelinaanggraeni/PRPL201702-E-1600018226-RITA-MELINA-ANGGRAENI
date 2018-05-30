<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","maknyusresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_GET['idcustomer'];

$customer = mysqli_query($konek, " SELECT * FROM customer where idcustomer='$idcustomer'");
$row = mysqli_fetch_array($customer);

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>maknyus resto</title>
  </head>
  <body bgcolor="aqua">
    <a href="home.html">Kembali Ke home</a>
    <h1>Edit Data customer</h1>
    <form action="update_customer.php" method="post">

      <table>
        <tr>
          <td>idcustomer</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['idcustomer'];?>"/></td>
        </tr>
        <tr>
          <td>namacustomer</td>
          <td>:</td>
          <td><input type="text" name="namacustomer" value="<?php echo $row['namacustomer'];?>"></td>
        </tr>
        <tr>
          <td>alamatcustomer</td>
          <td>:</td>
          <td><textarea name="alamatcustomer" value="" rows="8" cols="40"><?php echo $row['alamatcustomer'];?></textarea></td>
        </tr>
        <tr>
          <td>email</td>
          <td>:</td>
          <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
        </tr>
        <tr>
          <td>telp</td>
          <td>:</td>
          <td><input type="telp" name="telp" value="<?php echo $row['telp'];?>"></td>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
