<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- Artikel -->
      <div class="container-fluid from-blog">
        <div class=row>
          <div class="hidden-xs hidden-sm col-md-2"></div>
          <div class=col-md-8>
            <div class=height40></div>
            <h2 class=text-center>Artikel Terbaru dari Blog</h2>
            <div class=height40></div>
            <div class=row>
              <?php foreach ($komik as $m) : ?>
              <div class="col-sm-4 col-md-4">
                <a href="/home/<?= $m['slug']; ?>" class="hidden-xs from-blog-thumbnail"
                  style="background-image:url('/img/transparent300x150.png')"><img class="img-responsive btn-block"
                    src="/img/<?= $m['sampul']; ?>"></a>
                <div class="height10 hidden-xs"></div>
                <h3><a href="/home/<?= $m['slug']; ?>"><?= $m['judul']; ?></a>
                </h3>
              </div>
              <?php endforeach; ?>
            </div>
            <div class=height40></div>
          </div>
          <div class="hidden-xs hidden-sm col-md-2"></div>
        </div>
      </div>
      <!-- EndArtikel -->
    </div>
  </div>
  <!-- Row -->
  <div class="text-center bgf6f6f6 bgnoise container-fluid offer3">
    <div class=row>
      <div class="hidden-xs hidden-sm col-md-2"></div>
      <div class=col-md-8>
        <h3><a href=# data-target=#freetrialform data-toggle=modal>Ya, Saya Mau Coba Kelas Gratis</a></h3>
        <div class=height10></div>
        <p class=lead>Daftarkan diri anda untuk mendapatkan tiket kelas gratis.
        <div class=height20></div>
        <button class="btn btn-success" type=button data-target=#freetrialform data-toggle=modal>Daftar Free
          Trial</button>
        <div class=height20></div>
        <p>Atau hubungi kami di <a href=tel:085315448868>085315448868</a>
          <br><i aria-hidden=true class="fa fa-envelope-o"></i> <a href=mailto:info@lakipcenter.com>info<i
              aria-hidden=true class="fa fa-at"></i>lakipcenter.com</a>
      </div>
      <div class="hidden-xs hidden-sm col-md-2"></div>
    </div>
  </div>
</div>
<!-- container -->
</div>

<?= $this->endSection(); ?>