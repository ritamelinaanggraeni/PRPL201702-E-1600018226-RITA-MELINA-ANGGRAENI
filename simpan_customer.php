<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","maknyusresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer=$_POST['idcustomer'];
$namacustomer=$_POST['namacustomer'];
$alamatcustomer=$_POST['alamatcustomer'];
$email=$_POST['email'];
$telp=$_POST['telp'];
// membuat table customer
$sql = "INSERT INTO customer(idcustomer, namacustomer, alamatcustomer, email, telp) VALUES ('$idcustomer','$namacustomer','$alamatcustomer', '$email', '$telp')";

if($konek->query($sql)){
  echo "data customer BERHASIL dibuat!<br/>";
}else{
  echo "data customer GAGAL dibuat : ".$konek->error."<br/>";
}


$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>