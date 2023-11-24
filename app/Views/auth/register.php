<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>&mdash; Asthmasense</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/modules/fontawesome/css/all.min.css') ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/jquery-selectric/selectric.css') ?>">

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
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <!-- <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div> -->

            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>

              <div class="card-body">
                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= url_to('register') ?>" method="post">
                  <?= csrf_field() ?>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name" class="d-block">First Name</label>
                      <input type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name" class="d-block">Last Name</label>
                      <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
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
  <script src="<?= base_url('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') ?>"></script>
  <script src="<?= base_url('assets/modules/jquery-selectric/jquery.selectric.min.js') ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/js/page/auth-register.js') ?>"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>