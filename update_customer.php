<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","maknyusresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST['idcustomer'];
$namacustomer= $_POST['namacustomer'];
$alamatcustomer = $_POST['alamatcustomer'];
$email = $_POST['email'];
$telp = $_POST['telp'];

$sql = "UPDATE customer SET namacustomer='$namacustomer',alamatcustomer='$alamatcustomer',email='$email',telp='$telp' WHERE idcustomer='$idcustomer'";
if($konek->query($sql)){
  echo "Data customer BERHASIL diedit!<br/>";
}else{
  echo "Data customer GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>
