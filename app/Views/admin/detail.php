<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Hi, <?= $users->username ?></h2>
      <p class="section-lead">
        Change information about user on this page.
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="<?= base_url('assets/img/avatar/avatar-1.png') ?>" class="rounded-circle profile-widget-picture">

            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name"><?= $users->username ?> <div class="text-muted d-inline font-weight-normal">
                  <div class="slash"></div> <?= ($users->active == 1) ? ($users->active ? 'Active' : 'Not Active') : 'not active' ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="POST" action="<?= base_url('/admin/user/' . $users->id) ?>">
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-12">
                    <label>Username</label>
                    <input type="text" class="form-control" value="<?= $users->username ?>" required="" name="username">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" value="<?= $users->email ?>" required="" name="email">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <input type="hidden" name="_method" value="PUT">
                  <?= csrf_field() ?>
                  <button class="btn btn-primary">Save Changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?= $this->endSection('content') ?>