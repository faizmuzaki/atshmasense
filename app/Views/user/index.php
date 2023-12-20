<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="user-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-stethoscope" aria-hidden="true"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Checkup</h4>
            </div>
            <div class="card-body">
              <?= count($history) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="balance-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Rules</h4>
            </div>
            <div class="card-body">
              <?= count($rule) ?>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="sales-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Disease</h4>
            </div>
            <div class="card-body">
              <?= count($disease) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h4>Last Detection</h4>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th>#</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                  </tr>
                  <?php
                  $i = 1;
                  if ($last_history == null) { ?>
                    <tr>
                      <td colspan="2">
                        <strong>Belum ada riwayat deteksi</strong>
                      </td>
                    </tr>
                    <?php } else {
                    foreach ($last_history as $last) {
                    ?>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td class="font-weight-600"><?= $last['symptoms_ask'] ?></td>
                        <td><?= $last['symptoms_answer'] ?></td>
                      </tr>
                  <?php }
                  } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card gradient-bottom">
            <div class="card-header">
              <h4>Top 5 Articles</h4>
            </div>
            <div class="card-body" id="top-5-scroll">
              <ul class="list-unstyled list-unstyled-border">
                <?php
                foreach ($articles['article'] as $article) { ?>
                  <li class="media">
                    <img class="mr-3 rounded" width="55" src="<?= $article['image'] ?>" alt="product">
                    <div class="media-body">
                      <div class="media-title"><a href="<?= base_url('user/article/' . $article['id']) ?>"><?= $article['title'] ?></a></div>
                      <div class="mt-1">
                        <div class="budget-price">
                          <div class="budget-price-square bg-primary" data-width="64%"></div>
                          <div class="budget-price-label"></div>
                        </div>
                        <div class="budget-price">
                          <div class="budget-price-square bg-danger" data-width="43%"></div>
                          <div class="budget-price-label"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>
<?= $this->endSection('content') ?>