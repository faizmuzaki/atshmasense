<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Article</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Article</div>
      </div>
    </div>

    <h2 class="section-title">Article</h2>
    <div class="row">
      <?php
      foreach ($article['article'] as $article) { ?>

        <div class="col-12 col-md-4 col-lg-4">
          <article class="article article-style-c">
            <div class="article-header">
              <div class="article-image" data-background="<?= $article['image'] ?>">
              </div>
            </div>
            <div class="article-details">
              <div class="article-category"><a href="#">Article</a>
                <div class="bullet"></div> <a href="#"><?= $article['created_at'] ?></a>
              </div>
              <div class="article-title">
                <h2><a href="<?= base_url('/user/article/' . $article['id']) ?>"><?= $article['title'] ?></a></h2>
              </div>
              <div>
                <p>
                  <!-- adafa -->

                </p>
              </div>
              <div class="article-user">
                <img alt="image" src="<?= base_url('assets/img/avatar/avatar-1.png') ?>">
                <div class="article-user-details">
                  <div class="user-detail-name">
                    <a href="#">Admin</a>
                  </div>
                  <div class="text-job">Asthmasense</div>
                </div>
              </div>
            </div>
          </article>
        </div>
      <?php } ?>
    </div>
  </section>
</div>

<?= $this->endSection('content') ?>