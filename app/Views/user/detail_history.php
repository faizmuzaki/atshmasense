<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h6>Form Rule</h6>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url() ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Create Rule</div>
      </div>
    </div>

    <div class="section-body">
      <!-- <h4 class="section-lead text-center">
        Result test.
      </h4> -->

      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-10">
          <div class="card">
            <div class="card-body">
              <div class="col-12">
                <input class="btn btn-primary float-right mt-2 mb-5" id="printButton" type="button" value="Cetak Hasil" onclick="PrintDiv();">
              </div>
              <div id="divToPrint">
                <div class="watermark">
                  <div class="bg">&nbsp;</div>
                  <!-- <div class="title text-center mt-4 font-weight-bold" style="font-size: 14px;"><u>Hasil Test.</u></div> -->
                  <h4 class="text-center">Hasil Test</h4>
                  <div align="center">
                    <table class="tb_head" style="text-transform: uppercase; font-weight: bold;" width="100%">
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= user()->first_name . ' ' . user()->last_name ?></td>
                      </tr>
                      <tr>
                        <td width="150" valign="top">Email</td>
                        <td width="10" valign="top">:</td>
                        <td valign="top"><?= user()->email ?></td>
                      </tr>
                    </table>
                  </div>
                  <table class="table table-bordered mt-2 mb-2">
                    <tr>
                      <th>Pertanyaan</th>
                      <th>Jawaban</th>
                    </tr>
                    <?php
                    foreach ($history as $key => $value) {
                    ?>
                      <tr>
                        <td><?= $value['symptoms_ask'] ?></td>
                        <td><?= $value['symptoms_answer'] ?></td>
                      </tr>
                    <?php } ?>
                    <tr>
                      <td colspan="2">
                        <strong>Penyakit Yang Diderita : </strong>
                        <strong><?= $history[1]['disease'] ?></strong>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="<?= base_url('assets/js/assets.js') ?>"></script>

<?= $this->endSection('content') ?>