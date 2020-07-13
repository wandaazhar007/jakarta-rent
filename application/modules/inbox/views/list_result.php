<div class="row">
  <div class="card">
    <div class="card-header" style="background-color: #009999; color:#fff">
      <h3 class="card-title">Pesan Masuk</h3>
      <div class="card-tools">
        <form action="<?php echo base_url('inbox/searchPesan') ?>" method="post">
          <div class="input-group input-group-sm">
            <input type="text" name="keyword" class="form-control" placeholder="Cari Pesan Disini..">
            <div class="input-group-append">
              <div class="btn" style="color: #fff;" type="submit">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="mailbox-controls">
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
        <div class="float-right">
          1-50/200
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped" id="data">
          <tbody>
            <?php
            if (!empty($searchPesan)) {
              foreach ($searchPesan as $i) {
                if ($i['tgl_forward'] == null) {
                  echo '<tr>
                    <td class="mailbox-name">
                      <a href="#">
                        <small>
                          <i class="fa fa-share view_data" id="' . $i['id'] . '" style="color: red;" title="pesan dari ' . $i['email'] . ' belum di forward ke unit terkait. Klik disini untuk forward pesan"></i>
                        </small>
                      </a>
                    </td>
                    <td class="mailbox-subject"><a href="' . base_url('inbox/getPesanById/') . $i['id'] . '" class="one-da-text-unlink" style="color: #009999;"><b><small>' . $i['email'] . '</small></b></a></td>
                    <td><small>' . $i['inbox'] . '</small></td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><small>' . date('d F Y | H:i:s', $i['tgl_masuk']) . '</small></td>
                  </tr>';
                } else {
                  echo '<tr>
                  <td class="mailbox-name">
                    <a href="#">
                      <small>
                          <i class="fa fa-search-plus view_history_pesan" id="' . $i['id'] . '" style="color: green;" title="pesan dari ' . $i['email'] . ' sudah di forward ke bidang ' . $i['bidang'] . '. Klik disini untuk melihat history pesan"></i>
                      </small>
                    </a>
                  </td>
                  <td class="mailbox-subject"><a href="' . base_url('inbox/getPesanById/') . $i['id'] . '" class="one-da-text-unlink" style="color: #009999;"><b><small>' . $i['email'] . '</small></b></a></td>
                  <td><small>' . $i['inbox'] . '</small></td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date"><small>' . date('d F Y | H:i:s', $i['tgl_masuk']) . '</small></td>
                </tr>';
                }
              }
            } else {
              echo '<tr>
              <td class="mailbox-name">
                <a href="#">
                  <small>
                      <i class="fa fa-search-plus view_history_pesan" style="color: green;" title=""></i>
                  </small>
                </a>
              </td>
              <td class="mailbox-subject"><small></small></b></a></td>
              <td colspan="4">Keyword tidak ditemukan</td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td colspan="4"><small></small></td>
              <td class="mailbox-attachment"></td>
              <td class="mailbox-date"><small></small></td>
            </tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer p-0">
      <div class="mailbox-controls">
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
        <div class="float-right">
          1-50/200
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal Form Forward -->
<div class="modal fade" id="modal_forward">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-tosca">
        <h4 class="modal-title"> <i class="fa fa-envelope"></i> Forward Pesan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">

          <div id="result"></div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal History Forward -->
<div class="modal fade" id="modal_history_forward">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-tosca">
        <h4 class="modal-title"> <i class="fa fa-envelope"></i> History Pesan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">

          <div id="result_history_forward"></div>

        </div>
      </div>
    </div>
  </div>
</div>