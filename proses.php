
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'maindb';
$dbdsn = "mysql:dbname=$dbname;host=$dbhost";
$mysqli = new mysqli("localhost", $dbuser, $dbpass, $dbname);
try {
    $db = new PDO($dbdsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$nama = $_REQUEST['nama'];

$prov = $_REQUEST['prov'];

$kota = $_REQUEST['kab'];

$kec = $_REQUEST['kec'];

$query = "INSERT INTO data_diri (nama, provinsi, kota_kab, kecamatan) values ('$nama','$prov','$kota','$kec')";
$mysqli->query("$query");
$mysqli->close();

echo "<h2>Data Berhasil Tersimpan</h2>";

echo "<a href='tampil.php'><h4>Tampilkan Data</h4></a>";

?>