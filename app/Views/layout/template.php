<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="/css/main.css">
  <title><?= $title; ?> | Masrianto</title>
</head>

<body>
  <?= $this->include('layout/navbar'); ?>
  <!-- container -->
  <div class="container">
    <?= $this->renderSection('content'); ?>
    <div class="clearfix"></div>
  </div>
  <footer class="container fixed-bottom bg-light text-center">
    <p class="my-2"> <strong> LAKIP INSTITUTE by<a href="https://www.lakip.co.id">
          Masrianto</a></strong> All rights reserved.<br> &copy; 2018 - <?= date('Y') ?></p>
  </footer>
  <!-- end container -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  <script src="/js/script.js"></script>
</body>

</html>