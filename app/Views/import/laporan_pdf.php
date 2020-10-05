<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

  <title>laporan PDF</title>
</head>

<body>
  <div class="container">
    <h3 class="text-center text-danger">Laporan PDF Hasil Import</h3>
    <table class="table table-hover display data" id="table_id">
      <thead>
        <tr>
          <th>No</th>
          <th>ID</th>
          <th>Nama</th>
          <!-- <th>Tempat</th> -->
          <th>Jenis Kelamin</th>
          <!-- <th>Level</th> -->
          <!-- <th>Foto</th> -->
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($pdf as $m => $row) { ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $row['noreg']; ?></td>
          <td><?= $row['nama']; ?></td>
          <!-- <td><//?= $row['tmplahir']; ?></td> -->
          <!-- <td><//?= $row['tgllahir']; ?></td> -->
          <td><?= $row['jenkel']; ?></td>
          <!-- <td><//?= $row['reglevelid']; ?></td> -->
          <!-- <td><//?= $row['foto']; ?></td> -->
        </tr>
        <?php }; ?>
      </tbody>
    </table>
  </div>
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