<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head><center>
<body>
<table border="1" >
	<div class="container">
		<center><img src="assets/img/logo.PNG" width="100px" height="100px"></center>
		<h1> maknyus resto </h1>
		<h3> Jalan Janturan No 237 , Yogyakarta</h3>
		<h2> ===================== </h2>	
<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "maknyusresto";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nomormeja = $_GET['nomormeja'];
$data =mysqli_query($konek, "SELECT * from pesanan where nomormeja = '$nomormeja'");
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<center>";
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> ID PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['idcustomer']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>==================";
		echo "<td>=</td>";
		echo "<td>========</td>";
		echo "<td>=====</td>";
		echo "<td>=======</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> kepiting saus tiram </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order1']*35000;
		echo "</td>";
		echo "<td>".$row['order1']."</td>";
		echo "<td>x 35000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> udang tepung </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order2']*20000;
		echo "</td>";
		echo "<td>".$row['order2']."</td>";
		echo "<td>x 20000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> cumi saus teriyaki </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order3']*33000;
		echo "</td>";
		echo "<td>".$row['order3']."</td>";
		echo "<td>x 33000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> kerang asam pedas </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order4']*25000;
		echo "</td>";
		echo "<td>".$row['order4']."</td>";
		echo "<td>x 25000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> kepiting asam manis</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order5']*27000;
		echo "</td>";
		echo "<td>".$row['order5']."</td>";
		echo "<td>x 27000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> cumi bumbu hitam </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order6']*30000;
		echo "</td>";
		echo "<td>".$row['order6']."</td>";
		echo "<td>x 30000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> jus jeruk</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order7']*8000;
		echo "</td>";
		echo "<td>".$row['order7']."</td>";
		echo "<td>x 8000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> jus mangga</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order8']*10000;
		echo "</td>";
		echo "<td>".$row['order8']."</td>";
		echo "<td>x 10000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> air mineral</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order9']*5000;
		echo "</td>";
		echo "<td>".$row['order9']."</td>";
		echo "<td>x 5000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> es teh</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order10']*7000;
		echo "</td>";
		echo "<td>".$row['order10']."</td>";
		echo "<td>x 7000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> jus stroberry</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order11']*10000;
		echo "</td>";
		echo "<td>".$row['order11']."</td>";
		echo "<td>x 10000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> es oyen</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order12']*15000;
		echo "</td>";
		echo "<td>".$row['order12']."</td>";
		echo "<td>x 15000</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> TOTAL PEMESANAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['jumlahpesanan'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> SUB TOTAL  </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['bayar'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TUNAI </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['cash'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> KEMBALIAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['kembalian'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</center>";
		
	}	
}else{
	echo"Tidak dapat di cetak";
}
	echo"<br>";
    echo "<center>";
	echo"<tr>";
	echo"<td><a href='' onClick=window.print();> Print </a></td>";
	echo"</tr>";
	echo "</center>";
	echo"<br>";
	echo "<center>";
	echo"<tr>";
	echo "<td><a href='home.html'>Home</a></td>";
	echo"</tr>";
	echo "</center>";

$konek->close();
?>
</div>
</table>
</center>
</body>
</html>