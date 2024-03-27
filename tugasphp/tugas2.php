<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./csstugas/styletugas2.css">
  <style>
    .center-frame {
      background-color: #B4D4FF;
      margin: 0 auto;
      max-width: 600px;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="center-frame">
    <div class="form-table-container">
      <h2 align="center">Elektronik Mart</h2>
      <div class="profile-picture">
        <img src="gambartugas/anam.jpg" alt="Gambar Profil" width="200">
      </div>
      <form method="post">
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
          <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="produk" class="col-4 col-form-label">Produk Pilihan</label> 
          <div class="col-8">
            <select id="produk" name="produk" class="custom-select">
              <option value="rabbit">--- PILIH PRODUK ---</option>
              <option value="handphone">HANDPHONE</option>
              <option value="laptop">LAPTOP</option>
              <option value="pc">PC</option>
              <option value="printer">PRINTER</option>
              <option value="tv">TV</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah Pembelian</label> 
          <div class="col-8">
            <input id="jumlah" name="jumlah" type="text" class="form-control">
          </div>
        </div> 

        <!-- disini saya menambahkan beberapa botton untuk bisa kembali ke form login -->
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
            <button name="batal" type="reset" class="btn btn-primary">batal</button>
            <a button href="logintugas2.php" class="btn btn-primary">kembali</button></a> 
          </div>
        </div>
      </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = $_POST['nama'];
      $produk = $_POST['produk'];
      $jumlah = $_POST['jumlah'];
      $proses = $_POST['proses'];

      // Harga satuan
      switch ($produk) {
        case 'handphone':
          $harga_satuan = 2000000;
          break;
        case 'laptop':
          $harga_satuan = 8000000;
          break;
        case 'pc':
          $harga_satuan = 10000000;
          break;
        case 'printer':
          $harga_satuan = 1500000;
          break;
        case 'tv':
          $harga_satuan = 5000000;
          break;
        default:
          $harga_satuan = 0;
          break;
      }

      if(isset($proses)){
        ?>
<?php
      // Total belanja
      $total_belanja = $jumlah * $harga_satuan;

      // Diskon
      $diskon = 0.20 * $total_belanja;

      // PPN
      $ppn = 0.10 * ($total_belanja - $diskon);

      // Harga bersih
      $harga_bersih = ($total_belanja - $diskon) + $ppn;
?>
    <!-- saya disini membuat sebuah table untuk tampilan hasil form di atas -->

        <h3 align="center">Ringkasan Belanja :</h3>
        <table class="table">
          <tbody>
            <tr>
              <td>Nama Pelanggan : </td>
              <td><?php echo $nama; ?></td>
            </tr>
            <tr>
              <td>Produk : </td>
              <td><?php echo $produk; ?></td>
            </tr>
            <tr>
              <td>Jumlah Pembelian:</td>
              <td><?php echo $jumlah; ?></td>
            </tr>
            <tr>
              <td>Harga Satuan : </td>
              <td><?php echo $harga_satuan; ?></td>
            </tr>
            <tr>
              <td>Total Belanja : </td>
              <td><?php echo $total_belanja; ?></td>
            </tr>
            <tr>
              <td>Diskon : </td>
              <td><?php echo $diskon; ?></td>
            </tr>
            <tr>
              <td>PPN : </td>
              <td><?php echo $ppn; ?></td>
            </tr>
            <tr>
              <td>Harga Bersih : </td>
              <td><?php echo $harga_bersih; ?></td>
            </tr>
          </tbody>
        </table>

    <?php
      }
    }
    ?>
  </div>

</body>
</html>