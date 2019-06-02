<?php
require 'koneksi.php';
$id = $_GET['id'];
$sql = 'DELETE FROM data_diri WHERE id=:id';
$statement = $db->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header('Refresh: 0, url = /project-kecil/');
}