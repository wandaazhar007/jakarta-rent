<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-6 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <span class="text-muted one-da-text-tosca"><?php echo $title ?></span>
          <a href="<?php echo base_url('trans/tambahTransaksi') ?>"><button class="btn btn-tosca btn-sm float-right"><i class="fa fa-plus"></i>&nbsp; Tambah Transaksi</button></a>
        </div>
        <div class="card-body table-responsive p-3">
          <table id="example1" class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Penyewa</th>
                <th>Mobil</th>
                <th>Alamat</th>
                <th>Pembayaran</th>
                <th>Tipe Order</th>
                <th>Status Pembayaran</th>
                <th style="width: 200px;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($getAllTransaksi as $i) :
              ?>
                <tr>
                  <td><small><?php echo $no++ ?></small></td>
                  <td><small><?php echo $i['nama_user'] ?></small></td>
                  <td><small><?php echo $i['nama_mobil'] ?></small></td>
                  <td><small><?php echo $i['kota'] . ' ' . $i['alamat'] ?></small></td>
                  <td>
                    <?php
                    if ($i['metode_pembayaran'] == 1) {
                      echo '<small>Cash</small>';
                    } else {
                      echo '<small>Trans</small>';
                    }
                    echo ' | ';

                    if ($i['status'] == 0) {
                      echo '<small class="text-danger"><i class="fa fa-spinner fa-spin"></i> Belum Lunas</small>';
                    } elseif ($i['status'] == 1) {
                      echo '<small class="text-success"><i class="fa fa-check-square"></i> Lunas</small>';
                    } else {
                      echo '<small class="text-danger"><i class="fa fa-window-close"> Dibatalkan</i></small>';
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    if ($i['jenis_order'] == 1) {
                      echo '<small>Mobil Saja</small>';
                    } else {
                      echo '<small>Mobil dan Supir</small>';
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    if ($i['status'] == 0) {
                      echo '<small class="text-danger"><i class="fa fa-spinner fa-spin"></i> Belum Lunas</small>';
                    } elseif ($i['status'] == 1) {
                      echo '<small class="text-success"><i class="fa fa-check-square"></i> Lunas</small>';
                    } else {
                      echo '<small class="text-danger"><i class="fa fa-window-close"> Dibatalkan</i></small>';
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    if ($i['status'] == 0) {
                      //Jika status nya belum lunas
                      echo '
                    <button class="btn btn-primary btn-xs view_data" id="' . $i['order_id'] . '"><i class="fa fa-search"></i> Rincian</button>
                    <button class="btn btn-success btn-xs confirm_transaksi" id="' . $i['order_id'] . '"><i class="fa fa-edit"></i> Konfirmasi</button>
                    <button class="btn btn-danger btn-xs confirm_delete" id="' . $i['order_id'] . '"><i class="fa fa-window-close"></i> Cancel</button>
                    ';
                    } elseif ($i['status'] == 1) {
                      //Jika status nya lunas
                      echo '
                    <button class="btn btn-primary btn-xs view_data" id="' . $i['order_id'] . '"><i class="fa fa-search"></i> Rincian</button>
                    <button class="btn btn-success btn-xs" id="' . $i['order_id'] . '" disabled><i class="fa fa-check"></i> Konfirmasi</button>
                    <button class="btn btn-danger btn-xs confirm_delete" id="' . $i['order_id'] . '"><i class="fa fa-window-close"></i> Cancel</button>
                    ';
                    } else {
                      //Jika status nya cancel
                      echo '
                    <button class="btn btn-primary btn-xs view_data" id="' . $i['order_id'] . '"><i class="fa fa-search"></i> Rincian</button>
                    <button class="btn btn-success btn-xs" id="' . $i['order_id'] . '" disabled><i class="fa fa-check"></i> Konfirmasi</button>
                    <button class="btn btn-danger btn-xs" id="' . $i['order_id'] . '" disabled><i class="fa fa-window-close"></i> Cancel</button>
                    ';
                    }
                    ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal History transaksi -->
<div class="modal fade" id="modal_history_transaksi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-tosca">
        <h4 class="modal-title"> <i class="fa fa-envelope"></i> History Transaksi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="result_history_transaksi"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Konfirmasi transaksi -->
<div class="modal fade" id="modal_confirm_transaksi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-tosca">
        <h4 class="modal-title"> <i class="fa fa-envelope"></i> Konfirmasi Transaksi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="result_confirm_transaksi"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal History transaksi -->
<div class="modal fade" id="modal_confirm_delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h4 class="modal-title"> <i class="fa fa-envelope"></i> Cancel Transaksi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="result_confirm_delete" class="justify-content-center"></div>
        </div>
      </div>
    </div>
  </div>
</div>