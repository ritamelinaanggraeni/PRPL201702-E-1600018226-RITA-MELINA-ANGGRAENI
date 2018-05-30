<?php
 
$konek = new mysqli("localhost", "root","", "maknyusresto");

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST['idcustomer'];
$tanggal = $_POST['tanggal'];
$bayar = $_POST['bayar'];
$nomormeja = $_POST['nomormeja'];
$order1 = $_POST['order1'];
$order2 = $_POST['order2'];
$order3 = $_POST['order3'];
$order4 = $_POST['order4'];
$order5 = $_POST['order5'];
$order6 = $_POST['order6'];
$order7 = $_POST['order7'];
$order8 = $_POST['order8'];
$order9 = $_POST['order9'];
$order10 = $_POST['order10'];
$order11 = $_POST['order11'];
$order12 = $_POST['order12'];

$jumlahpesanan = $_POST['jumlahpesanan'];
$cash = $_POST['cash'];
$kembalian = $_POST['kembalian'];


 //echo"Bayar =  $bayar";
 
$sql = "INSERT INTO pesanan (idcustomer,nomormeja,tanggal,order1,order2,order3,order4,order5,order6,order7,order8,order9,order10,order11,order12,jumlahpesanan,bayar,cash,kembalian)VALUES ('$idcustomer','$nomormeja','$tanggal','$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12','$jumlahpesanan','$bayar' , '$cash', '$kembalian')";

//,'$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12'
//,101,102,103,104,201,202,203,204,301,302,303,304
if($konek->query($sql)){
  echo " <center><h1><a href='tampilpesanan.php'> Pemesanan telah Berhasil</a></h1>";
  //echo "<a href='struck.php?username="username"' </a>";

  //echo '<form action="struck.php" method="POST">
   //     <input type="text" name="nama">
    //    <input type="submit" name="submit" value="Cetak Struk">
     //   </form></center>';
          
 
  //header("location: tampil_customer.php");
}else{
  echo "Data pemesanan GAGAL ditambah : ".$konek->error."<br/>";
}

?>

