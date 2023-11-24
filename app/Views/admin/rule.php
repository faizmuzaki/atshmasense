<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Form Rule</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Create Rule</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create Rule</h2>
      <p class="section-lead">
        Generating a new Rule.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form action="<?= url_to('admin/rule') ?>" method="post">
              <?= csrf_field() ?>
              <div class="card-body">
                <div class="form-group">
                  <label>Rule Code</label>
                  <input type="text" class="form-control" name="rule_code" placeholder="Rule Code" value="<?= old('rule_code') ?>">
                </div>
                <div class="form-group">
                  <label>Symptoms Name</label>
                  <select class="form-control" aria-label="Default select example" name="id_symptoms">
                    <option value="" selected disabled>Choose Symptoms</option>
                    <?php
                    foreach ($symptoms as $item) {
                    ?>
                      <option value="<?= $item['symptoms_code'] ?>"><?= '[' . $item['symptoms_code'] . '] ' ?><?= $item['symptoms_name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Disease Types</label>
                  <select class="form-control" aria-label="Default select example" name="id_type">
                    <option value="" selected disabled>Choose Disease</option>
                    <?php
                    foreach ($disease as $item) {
                    ?>
                      <option value="<?= $item['type_code'] ?>"><?= '[' . $item['type_code'] . '] ' ?><?= $item['type_name'] ?></option>
                    <?php } ?>
                  </select>
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
              <h4>Rule</h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rule Code</th>
                    <th scope="col">Type Name</th>
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
                      <td><?= $rule['type_name'] ?></td>
                      <td>
                        <a href="<?= base_url('/admin/show/' . $rule['rule_code']) ?>" class="btn btn-warning">Edit</a>
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