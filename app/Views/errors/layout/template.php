<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <title><?= $title; ?> | Masrianto</title>
</head>

<body>


  <?= $this->include('layout/navbar'); ?>
  <?= $this->renderSection('content'); ?>
  <div class="clearfix"></div>
  <!-- Footer -->
  <div class="container mt-3">
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

        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.5
        </div>
      </div>

    </footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
  </script>
  <script src="/js/script.js"></script>
</body>

</html>