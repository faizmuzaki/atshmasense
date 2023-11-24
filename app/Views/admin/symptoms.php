<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Form Symptoms</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Create Symptoms</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create Symptoms</h2>
      <p class="section-lead">
        Generating a new symptoms type.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form action="<?= url_to('admin/symptoms') ?>" method="post">
              <?= csrf_field() ?>
              <div class="card-body">
                <div class="form-group">
                  <label>Symptoms Code</label>
                  <input type="text" class="form-control" name="symptoms_code" placeholder="Symptoms Code" value="<?= old('symptoms_code') ?>">
                </div>
                <div class="form-group">
                  <label>Symptoms Name</label>
                  <input type="text" class="form-control" name="symptoms_name" placeholder="Symptoms Name" value="<?= old('symptoms_name') ?>">
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Symptoms</h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Symptoms Code</th>
                    <th scope="col">Symptoms Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($symptoms as $symptoms) {
                  ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $symptoms['symptoms_code'] ?></td>
                      <td><?= $symptoms['symptoms_name'] ?></td>
                      <td>
                        <a href="<?= base_url('/admin/symptoms/' . $symptoms['id']) ?>" class="btn btn-warning">Edit</a>
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