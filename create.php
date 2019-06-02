<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project Kecil</title>
  <style>
    td,
    select {
      width: 240px;
    }

    #kab_box,
    #kec_box {
      display: none;
    }

    input[type=text],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #1976d2;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #004ba0;
    }

    .cont {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      
    }
  </style>
</head>
<?php require 'header.php'; ?>

<form id="form1" name="form1" method="post" action="proses.php">

  <?php
  require 'koneksi.php';

  $wil = array(
    2 => array(5, 'Kota/Kabupaten', 'kab'),
    5 => array(8, 'Kecamatan', 'kec')
  );
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    $n = strlen($_GET['id']);
    $query = $db->prepare("SELECT * FROM wilayah WHERE LEFT(kode,:n)=:id AND CHAR_LENGTH(kode)=:m ORDER BY nama");
    $query->execute(array(':n' => $n, ':id' => $_GET['id'], ':m' => $wil[$n][0]));
    echo "<option value=''>Pilih {$wil[$n][1]}</option>";
    while ($d = $query->fetchObject())
      echo "<option value='{$d->kode}'>{$d->nama}</option>";
  } else {
    ?>

    <script>
      var my_ajax = do_ajax();
      var ids;
      var wil = new Array('kab', 'kec');

      function ajax(id) {
        if (id.length < 13) {
          ids = id;
          var url = "?id=" + id + "&sid=" + Math.random();
          my_ajax.onreadystatechange = stateChanged;
          my_ajax.open("GET", url, true);
          my_ajax.send(null);
        }
      }

      function do_ajax() {
        if (window.XMLHttpRequest) return new XMLHttpRequest();
        if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
        return null;
      }

      function stateChanged() {
        var n = ids.length;
        var w = (n == 2 ? wil[0] : (n == 5 ? wil[1] : wil[2]));
        var data;
        if (my_ajax.readyState == 4) {
          data = my_ajax.responseText;
          document.getElementById(w).innerHTML = data.length >= 0 ? data : "<option selected>Pilih Kota/Kab</option>";
          <?php foreach ($wil as $k => $w) : ?>
            document.getElementById("<?php echo $w[2]; ?>_box").style.display = (n > <?php echo $k - 1; ?>) ? 'table-row' : 'none';
          <?php endforeach; ?>
        }
      }
    </script>



    <body>
      <div class="cont">
        <h2 style="color:black;text-align:left;">Masukan Data Anda</h2>
        <table>
          <tr>
            <td colspan="2">
              <hr>
            </td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id=""></td>
          </tr>
          <tr>
            <td>Provinsi</td>
            <td>
              <select id="prov" name="prov" onchange="ajax(this.value)">
                <option value="">Provinsi</option>
                <?php
                $query = $db->prepare("SELECT kode,nama FROM wilayah WHERE CHAR_LENGTH(kode)=2 ORDER BY nama");
                $query->execute();
                while ($data = $query->fetchObject())
                  echo '<option value="' . $data->kode . '">' . $data->nama . '</option>';
                ?>
                <select>
            </td>
          </tr>
          <?php foreach ($wil as $w) : ?>
            <tr id='<?php echo $w[2]; ?>_box'>
              <td><?php echo $w[1]; ?></td>
              <td>
                <select id="<?php echo $w[2]; ?>" name="<?php echo $w[2]; ?>" onchange="ajax(this.value)">
                  <option value="">Pilih <?php echo $w[1]; ?></option>
                </select>
              </td>
            </tr>

          <?php endforeach; ?>
          <tr>
            <td colspan="2">
              <hr>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" value="Simpan">
            </td>
          </tr>
        </table>
      </div>

    </body>

  </form>

  </html>
<?php } ?>