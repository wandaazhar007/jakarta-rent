<table class="table table-hover table-striped" id="data">
  <tbody>
    <?php foreach ($getAllInbox['inbox'] as $i) : ?>
      <tr>
        <td class="mailbox-name">
          <a href="#">
            <small>
              <?php
              if ($i['tgl_forward'] == null) {
                echo '
                          <i class="fa fa-share view_data" id="' . $i['id'] . '" style="color: red;" title="pesan dari ' . $i['email'] . ' belum di forward ke unit terkait. Klik disini untuk forward pesan"></i>
                        ';
              } else {
                echo '
                        <i class="fa fa-search-plus view_history_pesan" id="' . $i['id'] . '" style="color: green;" title="pesan dari ' . $i['email'] . ' sudah di forward ke bidang ' . $i['bidang'] . '. Klik disini untuk melihat history pesan"></i>
                        ';
              }
              ?>
            </small>
          </a>
        </td>
        <td class="mailbox-subject"><a href="<?php echo base_url('inbox/getPesanById/') . $i['id'] ?>" class="one-da-text-unlink" style="color: #009999;"><b><small><?php echo $i['email'] ?></small></b></a></td>
        <td><small><?php echo $i['inbox'] ?></small></td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date"><small><?php echo date('d F Y | H:i:s', $i['tgl_masuk']) ?></small></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>