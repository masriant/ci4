<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <!-- <div class="container-fluid"> -->
    <a class="navbar-brand" href="#">Masrianto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/pages'); ?>">Pages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/home'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/home/profile'); ?>">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/home/contact'); ?>">Contact</a>
        </li>

      </ul>
    </div>
  </div><!-- container -->
</nav>