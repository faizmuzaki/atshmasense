<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Form Rule</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Show Rule</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Show Rule</h2>
      <p class="section-lead">
        Show Symptons Of Disease.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form action="<?= url_to('admin/rule') ?>" method="post">
              <?= csrf_field() ?>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Rule Code</th>
                      <th scope="col">Disease</th>

                      <th scope="col">Symptons</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($showRule as $rules) {
                    ?>
                      <tr>
                        <td><?= $rules['rule_code'] ?></td>
                        <td><?= $rules['type_name'] ?></td>
                        <td><?= $rules['all_symptoms'] ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Rule</h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rule Code</th>
                    <th scope="col">Symptons Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($rule as $rule) {
                  ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $rule['rule_code'] ?></td>
                      <td><?= '[' . $rule['symptoms_code'] . '] - ' . $rule['symptoms_name'] ?></td>
                      <td>
                        <a href="<?= base_url('/admin/rule/' . $rule['rule_code'] . '/' . $rule['symptoms_code']) ?>" class="btn btn-warning">Edit</a>
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