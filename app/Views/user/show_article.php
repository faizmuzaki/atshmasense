<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Article</div>
      </div>
    </div>
    <div class="section-body">
      <header class="masthead">
        <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
              <div class="post-heading">
                <img src="<?= $article['image'] ?>" alt="" style="width: 600px; height: 300px">
                <h3 class="subheading mt-2 mb-2"><?= $article['title'] ?></h3>
                <span class="meta">
                  Posted by
                  <a href="#!">Admin</a>
                  <?= $article['created_at'] ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Post Content-->
      <article class="mb-4">
        <div class="container px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
              <p class="mt-3 mb-5" style="text-align: justify;"><?= $article['content'] ?></p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>
</div>

<?= $this->endSection('content') ?>