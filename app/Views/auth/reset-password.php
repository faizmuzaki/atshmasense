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
            <div class="login-brand">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Reset Password</h4>
              </div>

              <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <form action="<?= url_to('reset-password') ?>" method="post">
                  <div class="form-group">
                    <label for="token"><?= lang('Auth.token') ?></label>
                    <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
                    <div class="invalid-feedback">
                      <?= session('errors.token') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email"><?= lang('Auth.email') ?></label>
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    <div class="invalid-feedback">
                      <?= session('errors.email') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Reset Password
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Asthmasense 2023
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