<head>
    <style>
        .alert {
            padding: 20px;
            background-color: #2196f3;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>
</head>

<?php require 'header.php'; ?>
<?php
require 'koneksi.php';

$S_nama = $_REQUEST['nama'];

$S_prov = $_REQUEST['prov'];

$S_kota = $_REQUEST['kab'];

$S_kec = $_REQUEST['kec'];

$prov = $db->query("SELECT * FROM wilayah WHERE kode=$S_prov")->fetch();
$kota = $db->query("SELECT * FROM wilayah WHERE kode=$S_kota")->fetch();
$stmt = $db->prepare("SELECT * FROM wilayah WHERE kode=?");
$stmt->execute([$S_kec]);
$kec = $stmt->fetch();

//$query = "INSERT INTO data_diri (nama, provinsi, kota_kab, kecamatan) values ('$S_nama','$prov[1]','$kota[1]','$kec[1]')";
//$db->exec($query);

$sql = 'INSERT INTO data_diri (nama, provinsi, kota_kab, kecamatan) values (:nama, :prov, :kota, :kec)';
$statement = $db->prepare($sql);
if ($statement->execute([':nama' => $S_nama, ':prov' => $prov[1], ':kota' => $kota[1], ':kec' => $kec[1]])) {
    $message = 'Data Berhasil Tersimpan';
}
?>

<p>Klik "x" symbol untuk menutup Pesan.</p>

<?php if (!empty($message)) : ?>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?= $message; ?>
    </div>
<?php endif; ?>