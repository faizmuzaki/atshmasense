<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Form Disease</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Create Disease</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create Disease</h2>
      <p class="section-lead">
        Generating a new disease type.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form action="<?= url_to('admin/disease') ?>" method="post">
              <?= csrf_field() ?>
              <div class="card-body">
                <div class="form-group">
                  <label>Type Code</label>
                  <input type="text" class="form-control" name="type_code" placeholder="Type Code" value="<?= old('type_code') ?>">
                </div>
                <div class="form-group">
                  <label>Type Name</label>
                  <input type="text" class="form-control" name="type_name" placeholder="Type Name" value="<?= old('type_name') ?>">
                </div>
                <div class="form-group">
                  <label>Type Description</label>
                  <input type="text" class="form-control" name="type_description" placeholder="Type Description" value="<?= old('type_description') ?>">
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
              <h4>Disease Type</h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type Code</th>
                    <th scope="col">Type Name</th>
                    <th scope="col">Type Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($disease as $disease) {
                  ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $disease['type_code'] ?></td>
                      <td><?= $disease['type_name'] ?></td>
                      <td><?= $disease['type_description'] ?></td>
                      <td>
                        <a href="<?= base_url('/admin/disease/' . $disease['id']) ?>" class="btn btn-warning">Edit</a>
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