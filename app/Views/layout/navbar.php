<header>
  <!-- nav -->
  <div class="row">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Masrianto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
            <a class="nav-link" href="<?= base_url('/dashboard'); ?>">Dashboard</a>
            <a class="nav-link" href="<?= base_url('/data'); ?>">Data Tamu</a>
            <a class="nav-link" href="<?= base_url('/category'); ?>">Action</a>
          </div>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?= base_url('/category'); ?>">Category</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?= base_url('/lakip'); ?>">Data Lakip</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- end nav -->
</header>