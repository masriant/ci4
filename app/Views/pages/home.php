<?php
//ubah timezone menjadi jakarta
// date_default_timezone_set("Asia/Jakarta");

//ambil jam dan menit
$jam = date('H:i');

//atur salam menggunakan IF
if ($jam > '01:30' && $jam < '10:00') {
  $salam = 'Pagi';
} elseif ($jam >= '10:00' && $jam < '15:00') {
  $salam = 'Siang';
} elseif ($jam < '18:00') {
  $salam = 'Sore';
} else {
  $salam = 'Malam';
}

//tampilkan pesan
// echo 'Selamat ' . $salam;

?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Welcome back, <?= 'Selamat ' . $salam . ' ' . $nama; ?></h1>
      <!-- Loading -->
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-secondary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-success" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-danger" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-warning" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-info" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-light" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <!-- EndLoading -->
    </div>
  </div>
</div>