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
          <a class="nav-link" href="<?= base_url('/dashboard'); ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/dashboard2'); ?>">Dashboard 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/admin'); ?>">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/komik'); ?>">Komik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/blog'); ?>">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/orang'); ?>">Orang</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-expanded="false">
            Home
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('/home'); ?>">Home</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/home/blog'); ?>">Blog</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/home/profile'); ?>">Profile</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/home/contact'); ?>">Contact</a></li>
          </ul>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="</?= base_url('/home/profile'); ?>">Profile</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="</?= base_url('/home/contact'); ?>">Contact</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="</?= base_url('/pages/contact'); ?>">Contact</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="</?= base_url('/pages/about'); ?>">About</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('/pages'); ?>">Home</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/pages/contact'); ?>">Contact</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/pages/about'); ?>">About</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div><!-- container -->
</nav>