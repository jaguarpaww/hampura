<?php
$db=mysqli_connect("localhost","root","","transaksi");
$kode_brg=$_GET['kode_brg'];
$query=mysqli_query($db,"DELETE FROM barang WHERE kode_brg='$kode_brg' ");
if (mysqli_affected_rows($db)){
		echo "
		<script>
		alert('DELETE SUCCES')
		document.location.href='halaman_home.php'
		</script>
		";
	} else {
		echo "
		<script>
		alert('DELETE NOT SUCCES')
		</script>
		";
	}
?>	
