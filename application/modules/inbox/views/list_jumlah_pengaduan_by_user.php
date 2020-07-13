<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-6 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row">

    <div class="card">
      <div class="card-header border-0">
        <h3 class="card-title">
          <a href="#" onclick="window.history.back()" class="text-tosca"><i class="fa fa-arrow-alt-circle-left" style="font-size: 30px;"></i> <span style="position: absolute; margin-left: 10px;"></span></a>
          Kembali ke pesan
        </h3>
        <div class="card-tools">
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fas fa-download"></i>
          </a>
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fas fa-bars"></i>
          </a>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
          <thead>
            <tr>
              <th>No</th>
              <th>Pesan</th>
              <th>Bidang</th>
              <th>Tanggal Masuk</th>
              <th>Tanggal Forward</th>
              <th>Tanggal Dibalas</th>
              <th>Tanggal Selesai</th>
              <th>Rata-rata Waktu</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($getAllPesanByEmail as $i) :
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td>
                  <?php echo $i['inbox'] ?>
                </td>
                <td><?php echo $i['bidang'] ?></td>
                <td>
                  <?php echo date('d F Y', $i['tgl_masuk']) ?>
                  <small class="text-success mr-1">
                    <i class="fa fa-clock"></i>
                    <?php echo date('h:i:s', $i['tgl_masuk']) ?>
                  </small>
                </td>
                <td>
                  <?php
                  if ($i['tgl_forward'] == null) {
                    echo '<span class="text-danger"> Belum Diforward</span>';
                  } else {
                    echo '' . date('d F Y', $i['tgl_forward']) . '
                      <small class="text-success mr-1">
                        <i class="fa fa-clock"></i>
                        ' . date('h:i:s', $i['tgl_forward']) . '
                      </small>';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if ($i['tgl_balas'] == null) {
                    echo '<span class="text-danger"> Belum Dibalas</span>';
                  } else {
                    echo '' . date('d F Y', $i['tgl_balas']) . '
                      <small class="text-success mr-1">
                        <i class="fa fa-clock"></i>
                        ' . date('h:i:s', $i['tgl_balas']) . '
                      </small>';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  if ($i['tgl_selesai'] == null) {
                    echo '<span class="text-danger"> Belum Selesai</span>';
                  } else {
                    echo '' . date('d F Y', $i['tgl_selesai']) . '
                      <small class="text-success mr-1">
                        <i class="fa fa-clock"></i>
                        ' . date('h:i:s', $i['tgl_selesai']) . '
                      </small>';
                  }
                  ?>
                </td>
                <td>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>