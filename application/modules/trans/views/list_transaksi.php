<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-6 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

<div class="container-fluid">
  <div class="row">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <div class="card-body table-responsive p-3">
        <table id="example1" class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Penyewa</th>
              <th>Nama Mobil</th>
              <th>Alamat</th>
              <th>metode Pembayaran</th>
              <th>Tipe Order</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($getAllTransaksi as $i) :
            ?>
              <input type="hidden" name="order_id" value="<?php echo $i['order_id'] ?>">
              <tr>
                <td><small><?php echo $no++ ?></small></td>
                <td><small><?php echo $i['nama_user'] ?></small></td>
                <td><small><?php echo $i['nama_mobil'] ?></small></td>
                <td><small><?php echo $i['kota'] . ' ' . $i['alamat'] ?></small></td>
                <td>
                  <?php
                  if ($i['metode_pembayaran'] == 1) {
                    echo '<small>Bayar Ditempat</small>';
                  } else {
                    echo '<small>Transfer</small>';
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
                    echo '
                    <button class="btn btn-success btn-xs view_data" id="' . $i['order_id'] . '"><i class="fa fa-search"></i> Rincian</button>
                    <a href="' . base_url('trans/cancelTrans/') . $i['order_id'] . '">
                    <button class="btn btn-danger btn-xs" id="btnCancel" class="btn-swal" data-cancel="' . $i['order_id'] . '"><i class="fa fa-window-close"></i> Cancel</button>
                    </a>';
                  } elseif ($i['status'] == 1) {
                    echo '
                    <button class="btn btn-success btn-xs view_data" id="' . $i['order_id'] . '"><i class="fa fa-search"></i> Rincian</button>
                    <a href="' . base_url('trans/cancelTrans/') . $i['order_id'] . '">
                    <button class="btn btn-danger btn-xs" id="btnCancel" class="btn-swal" data-cancel="' . $i['order_id'] . '"><i class="fa fa-window-close"></i> Cancel</button>
                    </a>
                    ';
                  } else {
                    echo '
                    <button class="btn btn-success btn-xs view_data" id="' . $i['order_id'] . '"><i class="fa fa-search"></i> Rincian</button>
                    <a href="' . base_url('trans/cancelTrans/') . $i['order_id'] . '">
                    <button class="btn btn-danger btn-xs" id="btnCancel" class="btn-swal" data-cancel="' . $i['order_id'] . '"><i class="fa fa-window-close"></i> Cancel</button>
                    </a>
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