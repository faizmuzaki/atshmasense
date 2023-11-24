<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="user-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Users</h4>
            </div>
            <div class="card-body">
              <?= count($users) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="balance-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Rules</h4>
            </div>
            <div class="card-body">
              <?= count($rule) ?>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="sales-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Disease</h4>
            </div>
            <div class="card-body">
              <?= count($disease) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Users</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                <?php
                $i = 1;
                foreach ($users as $user) {
                ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td class="font-weight-600"><?= $user->username ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                      <a href="<?= base_url('/admin/user/' . $user->id) ?>" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<canvas id="myChart" height="1"></canvas>

<?= $this->endSection('content') ?>