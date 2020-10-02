<!-- <div class="container">
  <div class="row">
    <div class="col">
      <h1>Hello, About!</h1>

    </div>
  </div>
</div> -->
<?= $this->extend('layout/template-mega-menu'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 justify-content-center">

  <div class="row text-center">
    <div class="col-6 col-sm-4 waves-light d-flex justify-content-center align-items-center">
      <h1 class="font-weight-bold mb-0" id="time"></h1>
    </div>
    <div class="col-6 col-sm-4 waves-light d-flex justify-content-center align-items-center">
      <div>
        <i class="fas fa-stopwatch fa-4x"></i>
        <p class="font-weight-bold mt-2 mb-0">6:00</p>
      </div>
    </div>
    <div class="col col-sm-4 waves-light">
      <p class="mt-3 text-left font-weight-bold fa-lg" id="month"></p>
      <p class="font-weight-bold text-right fa-4x" id="day"></p>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-6 col-sm-3 waves-light d-flex justify-content-center align-items-center">
      <div>
        <i class="fab fa-twitter fa-4x mb-2"></i>
        <p class="font-weight-bold mb-0">Twitter</p>
      </div>
    </div>
    <div class="col-6 col-sm-3 waves-light d-flex justify-content-center align-items-center">
      <div>
        <i class="fab fa-youtube fa-4x mb-2"></i>
        <p class="font-weight-bold mb-0">YouTube</p>
      </div>
    </div>
    <div class="col col-sm-6 waves-light d-flex justify-content-center align-items-center">
      <div>
        <p class="font-weight-bold fa-2x">Schedule</p>
        <p class="font-weight-bold">10:00 - 11:00 Meeting with CEO</p>
        <p class="font-weight-bold mb-0"><i class="fas fa-plus-circle"></i> Add new</p>
      </div>
    </div>
  </div>

  <div class="row text-center">
    <div class="col waves-light d-flex justify-content-center align-items-center">
      <div>
        <i class="fas fa-calculator fa-4x mb-2"></i>
        <p class="font-weight-bold mb-0">Calculator</p>
      </div>
    </div>
    <div class="col waves-light d-flex justify-content-center align-items-center">
      <div>
        <i class="fab fa-instagram fa-4x mb-2"></i>
        <p class="font-weight-bold mb-0">Instagram</p>
      </div>
    </div>
    <div class="col waves-light d-flex justify-content-center align-items-center">
      <div>
        <i class="fas fa-calendar-alt fa-4x mb-2"></i>
        <p class="font-weight-bold mb-0">Calendar</p>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>