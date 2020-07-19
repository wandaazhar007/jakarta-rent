<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-6 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Rincian</h3>
        </div>
        <!-- /.card-header -->
        <?php foreach ($getDataById as $i) : ?>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="position-relative p-3 bg-gray" style="height: 180px">
                  <div class="ribbon-wrapper">
                    <div class="ribbon bg-primary">
                      Rincian
                    </div>
                  </div>
                  <h5 style="margin-bottom: -20px;"> <?php echo $i['nama_user'] ?></h5> <br />
                  <table>
                    <tr>
                      <td><small>Tanggal Peminjaman</small></td>
                      <td><small>:</small></td>
                      <td><small><?php echo $i['start_date'] ?></small></td>
                    </tr>
                    <tr>
                      <td><small>Tanggal Pengembalian</small></td>
                      <td><small>:</small></td>
                      <td><small><?php echo $i['end_date'] ?></small></td>
                    </tr>
                    <tr>
                      <td><small>Alamat</small></td>
                      <td><small>:</small></td>
                      <td><small><?php echo $i['alamat'] ?></small></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="col-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Foto</h3>
        </div>
        <!-- /.card-header -->
        <?php foreach ($getDataById as $i) : ?>
          <div class="card-body">
            <div class="row justify-content-center">
              <img src="<?php echo base_url('assets/img/mobil/') . $i['foto'] ?>" alt="" width="500px">
            </div>
          </div>
        <?php endforeach; ?>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

  </div>
</div>