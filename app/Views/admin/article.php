<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Posts</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">All Posts</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Posts</h2>
      <p class="section-lead">
        You can manage all posts, such as editing, deleting and more.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card mb-0">
            <div class="card-body">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="<?= base_url('/admin/article/create') ?>">Add New</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Posts</h4>
            </div>
            <div class="card-body">
              <div class="clearfix mb"></div>
              <div class="table-responsive">
                <?= view('Myth\Auth\Views\_message_block') ?>

                <table class="table table-striped">
                  <tr>
                    <th class="text-center pt-2">
                      <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                      </div>
                    </th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Created At</th>
                    <th>Status</th>
                  </tr>
                  <?php
                  foreach ($article['article'] as $article) {
                  ?>
                    <tr>
                      <td>
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                          <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td><?= $article['title'] ?>
                        <div class="table-links text-center d-flex justify-content-start align-items-center">
                          <a href="<?= base_url('/user/article/' . $article['id']) ?>">View</a>
                          <div class="bullet"></div>
                          <a href="<?= base_url('/admin/article/' . $article["id"] . '/edit') ?>">Edit</a>
                          <div class="bullet"></div>
                          <form id="deleteForm<?= $article['id'] ?>" action="<?= base_url('admin/article/' . $article['id']) ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button class="btn btn-link text-red" style="color: red; margin-left: -13px; background: none; border: none;" onclick="confirmDelete(event, <?= $article['id'] ?>)">
                              <i class=" text-danger" aria-hidden="true"></i>
                              Trash
                            </button>
                          </form>
                        </div>
                      </td>

                      <td>
                        <a href="#">
                          <img alt="image" src="<?= base_url('assets/img/avatar/avatar-5.png') ?>" class="rounded-circle" width="35" data-toggle="title" title="">
                          <div class="d-inline-block ml-1">Admin</div>
                        </a>
                      </td>
                      <td><?= $article['created_at'] ?></td>
                      <td>
                        <div class="badge badge-primary">Published</div>
                      </td>
                    </tr>
                  <?php } ?>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
  function confirmDelete(event, articleId) {
    var confirmDelete = confirm("Are you sure you want to delete this article?");

    if (!confirmDelete) {
      event.preventDefault();
      return false;
    }
  }
</script>
<?= $this->endSection('content') ?>