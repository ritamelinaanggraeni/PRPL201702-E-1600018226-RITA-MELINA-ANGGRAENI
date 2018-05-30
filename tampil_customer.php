<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","maknyusresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql= "SELECT idcustomer, namacustomer, alamatcustomer, email, telp FROM customer";
$data = $konek->query($sql);

echo "<a href='home.html'>Kembali ke home</a>";
echo "<h1>Daftar customer</h1>";
echo "<table border='1'>";
echo "<tr><td>id customer</td><td>nama customer</td><td>alamat customer</td><td>email</td><td>telp</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['telp']."</td>";
    echo "<td><a href='formupdate_customer.php?idcustomer=".$row['idcustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
