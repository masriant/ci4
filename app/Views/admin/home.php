<!-- Main content disini-->
<section class="content">

  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">CPU Traffic</span>
            <span class="info-box-number">
              10
              <small>%</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Sales</span>
            <span class="info-box-number">760</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">New Members</span>
            <span class="info-box-number">2,000</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">
                  <strong>Sales: 01 Jan 2019 - <?= date('d M Y'); ?></strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <!-- <div class="col-md-4">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p> -->

              <!-- <div class="progress-group">
                  Add Products to Cart
                  <span class="float-right"><b>160</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div> -->
              <!-- /.progress-group -->

              <!-- <div class="progress-group">
                  Complete Purchase
                  <span class="float-right"><b>310</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div> -->

              <!-- /.progress-group -->
              <!-- <div class="progress-group">
                  <span class="progress-text">Visit Premium Page</span>
                  <span class="float-right"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div> -->

              <!-- /.progress-group -->
              <!-- <div class="progress-group">
                  Send Inquiries
                  <span class="float-right"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div> -->
              <!-- /.progress-group -->
              <!-- </div> -->
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">$35,210.43</h5>
                  <span class="description-text">TOTAL REVENUE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">$10,390.90</h5>
                  <span class="description-text">TOTAL COST</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">$24,813.53</h5>
                  <span class="description-text">TOTAL PROFIT</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">1200</h5>
                  <span class="description-text">GOAL COMPLETIONS</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->




        <!-- solid sales graph -->
        <div class="card bg-gradient-info">
          <div class="card-header border-0">
            <h3 class="card-title">
              <i class="fas fa-th mr-1"></i>
              Sales Graph
            </h3>

            <div class="card-tools">
              <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas class="chart" id="line-chart"
              style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
          <div class="card-footer bg-transparent">
            <div class="row">
              <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                  data-fgColor="#39CCCC">

                <div class="text-white">Mail-Orders</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                  data-fgColor="#39CCCC">

                <div class="text-white">Online</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                  data-fgColor="#39CCCC">

                <div class="text-white">In-Store</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->


      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </div><!-- /.Container -->

</section><!-- endkonten disini "content"  -->








<!-- <//?= $this->extend('layout/admin/content'); ?> -->


<!-- <//?= $this->section('content'); ?> -->
<!-- Main content -->
<!-- konten disini  -->
<!-- <section class="content"> -->

<!-- <//?= $this->renderSection('content'); ?> -->

<!-- </section> -->
<!-- konten disini  -->
<!-- /.content -->
<!-- <//?= $this->endSection(); ?> -->













<!-- <div class="container">
  <div class="row">
    <div class="col">
      <h1>Dashboard!</h1>

    </div>
  </div>
</div> -->