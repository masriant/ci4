<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=“Googlebot” content=“nofollow” />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

  <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
  </script> -->
  <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">

  <title><?= $title; ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <div class="container"></div> -->
    <div class="container">
      <a class="navbar-brand" href="#">Import</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="<?= site_url('import/index'); ?>">Import</a>
          <a class="nav-link" href="<?= site_url('import/view'); ?>">Data Eksport</a>
          <a class="nav-link" href="<?= site_url('import/excel'); ?>">Excel</a>
          <a class="nav-link" href="<?= site_url('import/print'); ?>"><i class="fa fa-print"></i> Print</a>
          <a class="nav-link" href="<?= site_url('import/pdf'); ?>"><i class="fa fa-file"></i> Eksport PDF</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row mt-4">
      <?= $this->renderSection('forminput'); ?>
      <?= $this->renderSection('view'); ?>
      <?= $this->renderSection('pdf'); ?>
      <?= $this->renderSection('print'); ?>
    </div>

    <footer>

      <div class="environment">
        <p>
          <marquee>Lembaga Administrasi Keuangan dan Ilmu Pemerintahan</marquee>
        </p>
        <!-- <p>Page rendered in //{elapsed_time} seconds

    <br />Environment: <//?= ENVIRONMENT ?>
  </p> -->

      </div>

      <div class="copyrights">

        <p>&copy; 2018 - <?= date('Y') ?> <strong> LAKIP Institute. By <a href="https://lakip.co.id">
              Masrianto</a> .</strong>
          All rights reserved.. </p>

      </div>

    </footer>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

  <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  <script src="/js/script.js"></script>
</body>

</html>