<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit User Data</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/admin/users/update/<?= $user['id']; ?>" role="form" method="POST"
            enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value="<?= (old('slug')) ? old('slug') : $user['slug'] ?>">
            <!-- <input type="hidden" name="sampulLama" value=""> -->
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                  id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $user['nama'] ?>" autofocus>
                <div class="invalid-feedback">
                  <?= $validation->getError('nama'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                  id="username" name="username" value="<?= (old('username')) ? old('username') : $user['username'] ?>"
                  autofocus>
                <div class="invalid-feedback">
                  <?= $validation->getError('username'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                  class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password"
                  name="password" value="<?= (old('password')) ? old('password') : $user['password'] ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('password'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="level">Select Level</label>
                <select class="form-control <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" id="level"
                  name="level">
                  <option value="<?= (old('level')) ? old('level') : $user['level'] ?>">
                    <?php
                    if ($user['level']) {
                      echo $user['level'];
                    } else {
                      echo "Select Level";
                    } ?>

                  </option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('level'); ?>
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="InputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="InputFile">
                    <label class="custom-file-label" for="InputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                  </div>
                </div>
              </div> -->

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <!-- <a href="/admin/users/<//?= $//user['slug']; ?>" class="btn btn-info">Back to Daftar</a> -->
              <a href="/admin/<?= $user['slug']; ?>" class="btn btn-info">Back to Daftar</a>
            </div>
          </form>
        </div><!-- /.card -->


      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.content -->