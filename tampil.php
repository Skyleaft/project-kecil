
<html>
    <head>
        <style>
            table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
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
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}
        /* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
        </style>
    </head>
</html>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'maindb';
$dbdsn = "mysql:dbname=$dbname;host=$dbhost";
try {
    $db = new PDO($dbdsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$query = $db->prepare("SELECT * FROM data_diri");
$query->execute();

echo '<table class="data-table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Provinsi</th>
				<th>Kota/Kabupaten</th>
				<th>Kecamatan</th>
			</tr>
		</thead>
		<tbody>';

	
while ($data = $query->fetchObject()) {
	
	echo '<tr><td>' . $data->nama . '</td>';
	echo '<td>' . $data->provinsi . '</td>';
	echo '<td>' . $data->kota_kab . '</td>';
	echo '<td>' . $data->kecamatan . '</td></tr>';

}

echo '</tbody></table>';

?>
