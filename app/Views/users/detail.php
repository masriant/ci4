<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <!-- Box Comment -->
        <div class="card card-widget">
          <div class="card-header">
            <div class="user-block">
              <img class="img-circle" src="<?= base_url(); ?>/assets/vendor/dist/img/user1-128x128.jpg"
                alt="User Image">
              <span class="username"><a href="#"><?= $user['nama']; ?>.</a></span>
              <span class="description">Shared publicly - <?= $user['updated_at']; ?></span>
            </div>
            <!-- /.user-block -->
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                <i class="far fa-circle"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- post text -->
            <p><?= $user['nama']; ?></p>

            <p><?= $user['nama']; ?>.</p>

            <!-- Attachment -->
            <div class="attachment-block clearfix">
              <img class="attachment-img" src="<?= base_url(); ?>/assets/vendor/dist/img/photo1.png"
                alt="Attachment Image">

              <div class="attachment-pushed">
                <h4 class="attachment-heading"><a href="https://www.lakipcenter.com/">generator</a></h4>

                <div class="attachment-text">
                  <?= $user['nama']; ?>... <a href="#">more</a>
                </div>
                <!-- /.attachment-text -->
              </div>
              <!-- /.attachment-pushed -->
            </div>
            <!-- /.attachment-block -->

            <!-- Social sharing buttons -->
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
            <!-- <span class="float-right text-muted">45 likes - 2 comments</span> -->
          </div>

          <div class="card-footer">
            <?= csrf_field(); ?>
            <a href="/dashboard/users/edit/<?= $user['slug']; ?>" class="btn btn-outline-warning btn-xs"
              onclick="return confirm('Anda tidak mempunyai akses mengedit halaman ini, silahkan tekan batal.')"><i
                class="fas fa-user-edit">Edit</i></a>
            <a href="/dashboard/user" class="btn btn-outline-info btn-xs"><i class="fas fa-users">
                Back to Daftar</i></a>

          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->






    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</section><!-- /.content -->