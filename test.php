<?php
  include('./db.php');

  function keluarin() {
    return "awwww";
  }
?>

<html>
  <head>
    <title>TEST PAGE TITLE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function wadidaw() {
        return 'adow'
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              kiri
            </div>
            <div class="col-md-6">
              kanan
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          kiri 2
        </div>
        <div class="col-md-6">
          kanan 2
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">
            BAHAN
          </a>
        </div>
        <div class="col-md-12">
          <p>PANGGIL FUNGSI PHP : </p>
          <?php
            $nampung = keluarin();
            $parameter = array(
              "alamat" => "mysql",
              "port" => "3306"
            );

            $parameter = [
              "alamat" => "mysql",
              "port" => "3306"
            ];
            $db = new DB($parameter);
            $conn = $db->conn();
            $query = "select * from kategori_barang";
            $result = $conn->query($query);
            echo "<br>";
            echo $nampung;
            echo '<br>';
            echo $db->alamat;
            echo '<br>';
            echo $db->port;
            echo '<br>';
            echo '<br>';
            echo "<pre>";
            $data = array();
            while($row = $result->fetch_assoc()) {
              $data[] = $row;
              var_dump($row);
            }
            echo "</pre>";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table-bordered">
            <thead>
              <th>
                Nomor / PK
              </th>
              <th>
                Nama Kategori
              </th>
              <th>
                Date Created
              </th>
            </thead>
            <tbody>
            <?php
              foreach($data as $key => $val) {
                echo '<tr>';
                echo '<td>'. $val['id'] .'</td>';
                echo '<td>'. $val['nama_kategori'] .'</td>';
                echo '<td>'. $val['date_created'] .'</td>';
                echo '</tr>';
              }
            ?>
            </tbody>
          </table>
          <br>
          <br>
          <br>
          <table class="table-bordered">
            <thead>
              <th>
                Nomor / PK
              </th>
              <th>
                Nama Kategori
              </th>
              <th>
                Date Created
              </th>
            </thead>
            <tbody>
            <?php
              foreach($data as $key => $val) {
                echo '<tr>';
                foreach($val as $key2 => $val2) {
                  echo '<td>'. $val2 .'</td>';
                }
                echo '</tr>';
              }
            ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-md-12">
          <h2>contoh form</h2>
        </div>
        <div class="col-md-12">
          <form method="POST" action="proses.php">
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" class="form-control" name="nama_barang" placeholder="nama barang">
            </div>
            <div class="form-group">
              <label>Jumlah Barang</label>
              <input type="number" class="form-control" name="jumlah_barang" placeholder="jumlah barang">
            </div>
            <div class="form-group">
              <label>contoh select</label>
              <select class="form-control" name="contoh_select">
                <option value="0">pilih dong</option>
                <?php
                  foreach($data as $key => $val) {
                    echo '<option value="'.$row['id'].'">';
                    echo $val['nama_kategori'];
                    echo '</option>';
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">PROSES</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $(document).ready(function() {
      let crot = wadidaw()
      console.log('test')
      console.log(crot)
    })
  </script>
</html>