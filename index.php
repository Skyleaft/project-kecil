<html>

<head>
    <style>
        table {
            margin: auto;
            font-size: 12px;
        }

        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }

        .data-table th,
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }

        .data-table caption {
            margin: 7px;
        }

        /* Table Header */
        .data-table thead th {
            background-color: #1976d2;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
            padding: 15px;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }



        .data-table tbody tr:nth-child(odd) td {
            background-color: #e3f2fd;
        }

        .data-table tbody tr:hover td {
            background-color: #b2dfdb;
            border-color: #b2dfdb;
        }

        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }

        .data-table tfoot th:first-child {
            text-align: left;
        }

        .data-table tbody td:empty {
            background-color: #ffcccc;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 12 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
        }

        .button3 {
            background-color: #ff6f60;
            color: black;
        }

        .button3:hover {
            background-color: #b61827;
            color: white;
        }

        .button4 {
            background-color: white;
            color: black;
            
        }

        .button4:hover {
            background-color: #64b5f6;
        }
    </style>
</head>
<?php require 'header.php'; ?>

<h2 style="text-align: center">Data Anggota</h2>

<?php
require 'koneksi.php';

$query = $db->prepare("SELECT * FROM data_diri");
$query->execute();

echo '<table class="data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Provinsi</th>
				<th>Kota/Kabupaten</th>
				<th>Kecamatan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>';


while ($data = $query->fetchObject()) {
    ?>
    <tr>
        <td><?= $data->id; ?></td>
        <td><?= $data->nama; ?></td>
        <td><?= $data->provinsi; ?></td>
        <td><?= $data->kota_kab; ?></td>
        <td><?= $data->kecamatan; ?></td>
        <td>
            <a href="edit.php?idubah=<?= $data->id ?>" class="button button4">Ubah</a>
            <a onclick="return confirm('Yakin mau dihapus ?')" href="delete.php?id=<?= $data->id ?>" class='button button3'>Hapus</a>
        </td>
    </tr>

<?php } ?>
</tbody>
</table>

</body>

</html>