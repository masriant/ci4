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
  <link rel="stylesheet" href="/css/stylemenu.css">
  <link rel="stylesheet" href="/css/menu-mega.css">
  <title><?= $title; ?> | Masrianto</title>
</head>

<body>


  <?= $this->include('layout/navbar'); ?>
  <?= $this->include('layout/mega-menu'); ?>

  <?= $this->renderSection('content'); ?>
  <div class="clearfix"></div>
  <!-- Footer -->
  <div class="container mt-3">
    <!-- footer 1 -->
    <!-- Footer -->
    <footer class="page-footer font-small" id="footer">

      <!-- Footer Elements -->
      <div class="container">

        <!-- Grid row-->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12 py-5">
            <div class="mb-5 flex-center">

              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
              <!--Pinterest-->
              <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
              </a>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> Stream Solutions.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- endfooter 1 -->
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

        <!-- <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.5
        </div> -->
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
  <script src="/js/script-menu.js"></script>
  <script src="/js/mega-menu.js"></script>
</body>

</html>