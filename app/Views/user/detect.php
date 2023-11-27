<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Form Detect</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Start Detection</div>
      </div>
    </div>

    <div class="section-body">
      <h4 class="section-lead text-center">
        Start detect.
      </h4>

      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-7">
          <div class="card">
            <div class="card-body">

              <form action="<?= base_url('user/store/') ?>" method="post">
                <?= csrf_field() ?>
                <?php
                $i = 1;
                foreach ($symptoms as $item) {
                ?>
                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label"><?= $i . ". " . $item['symptoms_name'] ?></label>
                    <div class="col-sm-12">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="age1<?= $i ?>" name="symptoms[<?= $item['symptoms_code'] ?>]" value="1">
                        <label class="form-check-label" for="age1<?= $i ?>">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="age2<?= $i ?>" name="symptoms[<?= $item['symptoms_code'] ?>]" value="0">
                        <label class="form-check-label" for="age2<?= $i ?>">No</label>
                      </div>
                    </div>
                  </div>
                <?php
                  $i++;
                }
                ?>
            </div>

            <div class="card-footer text-right">
              <button class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- <select class="form-control" aria-label="Default select example" name="symptoms[<?php //$item['symptoms_code'] 
                                                                                      ?>]" required>
                      <option value="" selected disabled>Choose Answer</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select> -->
<?= $this->endSection('content') ?>