<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","maknyusresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table customer
$sql = "CREATE TABLE customer(
  idcustomer VARCHAR(15) NOT NULL,
  namacustomer VARCHAR(30),
  alamatcustomer VARCHAR(50),
  email VARCHAR(50),
  telp CHAR(12),
  PRIMARY KEY (idcustomer)
)";

if($konek->query($sql)){
  echo "Table customer BERHASIL dibuat!<br/>";
}else{
  echo "Table customer GAGAL dibuat : ".$konek->error;
}


$sql = "CREATE table menu(
  idmenu VARCHAR(15) NOT NULL,
  jenismenu VARCHAR(50),
  namamenu VARCHAR(50),
  hargamenu VARCHAR(50),
  PRIMARY KEY(idmenu)
  )";

if($konek->query($sql)){
  echo "Table menu BERHASIL dibuat!<br/>";
}else{
  echo "Table menu GAGAL dibuat : ".$konek->error;
}


$sql = "CREATE table pesanan(
  idcustomer VARCHAR(50),
  namacustomer VARCHAR(50),
  nomormeja VARCHAR(50),
  tanggal date,
  order1 VARCHAR(50),order2 VARCHAR(50),order3 VARCHAR(50),order4 VARCHAR(50),order5 VARCHAR(50),order6 VARCHAR(50),order7 VARCHAR(50),
  order8 VARCHAR(50),order9 VARCHAR(50),order10 VARCHAR(50),order11 VARCHAR(50),order12 VARCHAR(50),
  jumlahpesanan VARCHAR(50),
  subtotal VARCHAR(50),
  bayar VARCHAR(50),
  cash VARCHAR(50),
  diskon VARCHAR(50),
  kembalian VARCHAR(50)
    )";

if($konek->query($sql)){
  echo "Table pesanan BERHASIL dibuat!<br/>";
}else{
  echo "Table pesanan GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>
