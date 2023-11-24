<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Form Validation</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Create user</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create user</h2>
      <p class="section-lead">
        Generating a new user account.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form action="<?= url_to('register') ?>" method="post">
              <?= csrf_field() ?>
              <div class="card-body">
                <?= view('Myth\Auth\Views\_message_block') ?>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Password Confirmation</label>
                  <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                </div>
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
<?= $this->endSection('content') ?>