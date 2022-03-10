<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="container-fluid">
	<div class="row">

		<div class="col-md-6">
        <form  action="form_belanja.php" method="POST">>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="radio_0" type="checkbox" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="radio_1" type="checkbox" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="radio_2" type="checkbox" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>

		</div>


		<div class="col-md-6">
        <li class="list-group-item active">Daftar Harga</li>
          <li class="list-group-item">TV : 4.200.000 </li>
          <li class="list-group-item">Kulkas : 3.100.000</li>
          <li class="list-group-item">Mesin Cuci : 3.800.000 </li>
          <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
		</div>
	</div>
	</div>
		</div>
	</div>
</div>



<?php
$proses = $_POST["proses"];
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

if ($produk == "tv") {
    $total_belanja = $jumlah * 4200000;
  }elseif ($produk == "kulkas") {
    $total_belanja = $jumlah * 3100000;
  }elseif ($produk == "mesin cuci") {
    $total_belanja = $jumlah * 3800000;
  }else {
    $total_belanja = 0;
  }
  


echo 'proses :' . $proses;
echo '<br> Nama Customer :' . $customer;
echo '<br> Produk Pilihan :' . $produk;
echo '<br> Jumlah Beli :' . $jumlah;
echo '<br> Total Belanja : Rp. '.number_format ($total_belanja,2,',','.');


?>

</body>
</html>