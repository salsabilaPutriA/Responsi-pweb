<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$makanan = $_POST['makanan'];
$jumlah = $_POST['Jumlah'];
$minuman = $_POST['minuman'];
$jumlah2 = $_POST['Jumlah2'];
$komentar = $_POST['Komentar'];

echo "<head><title>Tempat Nongkrong</title></head>";
$fp = fopen("JCO.txt", "a+");
fputs($fp, "$nama|$alamat|$makanan|$jumlah|$minuman|$jumlah2|$komentar\n");
fclose($fp);

echo "Terima kasih atas orderannya <br>";
echo "<a href='tampilan.php'>Isi Orderan</a><br>";
echo "<a href='lihat.php'>Lihat Orderan</a><br>";

 ?>



