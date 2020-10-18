<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="container py-4">
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
      <h1 class="display-4 font-italic"><?= $lakip['judul']; ?>.</h1>
      <p class="lead my-3"><?= $lakip['description']; ?>. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
</div>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">


      <div class="blog-post">
        <h2 class="blog-post-title"><?= $lakip['judul']; ?></h2>
        <p class="blog-post-meta"><?= $lakip['created_at']; ?> by <a href="#"><?= $lakip['penulis']; ?></a></p>

        <p><?= $lakip['judul']; ?>.</p>
        <hr>

        <p><?= $lakip['description']; ?>.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <h3><?= $lakip['penulis']; ?></h3>
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          <?= $lakip['judul']; ?>
        </h3>
        <ul>
          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
          <li>Donec id elit non mi porta gravida at eget metus.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p><?= $lakip['penerbit']; ?>.</p>
        <ol>
          <li>Vestibulum id ligula porta felis euismod semper.</li>
          <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
          <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
        </ol>
        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
      </div><!-- /.blog-post -->

      <!-- pagination -->
      <hr>
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary" href="/category" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>
      <!-- end-pagination -->

    </div><!-- /.blog-main -->

    <!-- sidebar -->
    <?= $this->include('layout/sidebar'); ?>
    <!-- end-sidebar -->

  </div><!-- /.row -->
</main><!-- /.container -->
<?= $this->endSection(); ?>