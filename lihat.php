<?php 

echo "<head><title>Tempat Nongkrong</title></head>";
$fp = fopen("JCO.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Pesan Makanan </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Jumlah </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Pesan Minuman </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td>Jumlah2 </td><td>: $pisah[5] </td></tr>";
    echo "<tr><td>Komentar </td><td>: $pisah[6] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='tampilan.php'> Isi Orderan </a>";

?>
