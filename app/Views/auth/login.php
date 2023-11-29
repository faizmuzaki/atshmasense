<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon" />

  <title>&mdash; Asthmasense</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/modules/fontawesome/css/all.min.css') ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap-social/bootstrap-social.css') ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary mt-5">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <?= view('Myth\Auth\Views\_message_block') ?>

              <div class="card-body">
                <form action="<?= url_to('login') ?>" method="post">
                  <?= csrf_field() ?>

                  <div class="form-group">
                    <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                    <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                    <div class="invalid-feedback">
                      <?= session('errors.login') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                      <?= session('errors.password') ?>
                    </div>
                    <div class="float-right mt-2 mb-2">
                      <a href="<?= base_url('/forgot') ?>" class="text-small">
                        Forgot Password?
                      </a>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-2 text-muted text-center">
              Don't have an account? <a href="<?= base_url('/register') ?>">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/modules/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/modules/popper.js') ?>"></script>
  <script src="<?= base_url('assets/modules/tooltip.js') ?>"></script>
  <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
  <script src="<?= base_url('assets/modules/moment.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/stisla.js') ?>"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>