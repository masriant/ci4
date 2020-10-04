<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LAKIP | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor'); ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url(); ?>/home"><b>Admin</b>LAKIP</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Login</p>
        <!-- <div class="p-3"> -->
        <?= form_open('login/cekuser', ['class' => 'formlogin']) ?>
        <?= csrf_field(); ?>
        <!-- <form action="<//?= base_url('assets/vendor'); ?>/home" method="post"> -->

        <div class="form-group row">
          <div class="col-12">
            <input class="form-control" type="text" placeholder="Username" name="userid" id="userid" autofocus
              autocomplete="off">
            <div class="invalid-feedback errorUserID">
            </div>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-12">
            <input class="form-control" type="password" placeholder="Password" name="pass" id="pass">
            <div class="invalid-feedback errorPassword">
            </div>
          </div>
        </div>

        <!-- <div class="input-group mb-3">
          <input type="text" class="form-control" nama="userid" id="userid" placeholder="Username" autofocus>
          <div class="invalid-feedback errorUserID"></div>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="password" class="form-control" nama="pass" id="pass" placeholder="Password">
          <div class="invalid-feedback errorPassword"></div>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->

        <!-- <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div> -->

        <!-- <div class="form-group text-center row m-t-20">
            <div class="col-12">
              <button class="btn btn-danger btn-block waves-effect waves-light btnlogin" type="submit">Log
                In</button>
            </div>
          </div> -->
        <!-- /.col -->
        <div class="col">
          <button type="submit" class="btn btn-primary btn-block btnlogin">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <!-- </form> -->
      <?= form_close(); ?>



      <!-- </div> -->
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/vendor'); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/vendor'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/vendor'); ?>/dist/js/adminlte.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.formlogin').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: "post",
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: "json",
        beforeSend: function() {
          $('.btnlogin').prop('disabled', true);
          $('.btnlogin').html('<i class="fa fa-spin fa-spinner"></i>');
        },
        complete: function() {
          $('.btnlogin').prop('disabled', false);
          $('.btnlogin').html('Login');
        },
        success: function(response) {
          if (response.error) {
            if (response.error.userid) {
              $('#userid').addClass('is-invalid');
              $('.errorUserID').html(response.error.userid);
            } else {
              $('#userid').removeClass('is-invalid');
              $('.errorUserID').html('');
            }

            if (response.error.password) {
              $('#pass').addClass('is-invalid');
              $('.errorPassword').html(response.error.password);
            } else {
              $('#pass').removeClass('is-invalid');
              $('.errorPassword').html('');
            }
          }

          if (response.sukses) {
            window.location = response.sukses.link;
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(xhr.status + "\n" + xhr.responseText + "\n" +
            thrownError);
        }
      });
      return false;
    });
  });
  </script>
</body>

</html>