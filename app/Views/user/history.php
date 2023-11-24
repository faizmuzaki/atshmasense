<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Page History.</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Check History</div>
      </div>
    </div>

    <div class="section-body">
      <h4 class="section-lead text-center">
        History.
      </h4>

      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-9">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Result Test</th>
                    <th scope="col">Checkup Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($history as $history) {
                  ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $history['disease'] ?></td>
                      <td><?= $history['created_at'] ?></td>
                      <td>
                        <a href="<?= base_url('/user/history/' . $history['history_code']) ?>" class="btn btn-primary">Detail</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection('content') ?>