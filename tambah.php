<?php
$db=mysqli_connect("localhost","root","","transaksi");
if (isset($_POST['simpan'])){
	$kode = $_POST['kode'];
	$nama= $_POST['nama'];
	$stok = $_POST['stok'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$query=mysqli_query($db,"INSERT INTO barang VALUES ('$kode','$nama','$stok','$satuan','$harga')");
	if (mysqli_affected_rows($db)){
		echo "
		<script>
		alert('DATA SAVED')
		document.location.href='halaman_home.php'
		</script>
		";
	} else {
		echo "
		<script>
		alert('DATA NOT SAVED')
		</script>
		";
	}
}
?>
<form action="" method="post">
	MASUKAN KODE BARANG<br>
	<input type="text" name="kode"><br>
	MASUKAN nama BARANG<br>
	<input type="text" name="nama"><br>
	MASUKAN stok BARANG<br>
	<input type="text" name="stok"><br>
	MASUKAN satuan BARANG<br>
	<input type="text" name="satuan"><br>
	MASUKAN harga BARANG<br>
	<input type="text" name="harga"><br>
	<br>
	<input type="submit" name="simpan" value="save">
</form>	
