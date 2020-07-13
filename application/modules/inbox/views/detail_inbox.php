<div class="row">
  <?php foreach ($getPesanById as $u) : ?>
    <div class="col-md-9">
      <form action="<?php echo base_url('inbox/balasPesan') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $u['id'] ?>" name="id">
        <div class="card card-outline">
          <div class="card-header" style="background-color: #009999; color:#fff">
            <h3 class="card-title"><a href="#" onclick="window.history.back()" style="color: #fff;"><i class="fa fa-arrow-alt-circle-left" style="font-size: 30px;"></i> <span style="position: absolute; margin-left: 10px;"></span></a></h3>
            <div class="card-tools">
              <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
              <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
            </div>
          </div>

          <div class="card-body p-0">
            <div class="mailbox-read-info">
              <h6 class="text-muted">From: <?php echo $u['email'] ?>
                <span class="mailbox-read-time float-right"><?php echo date('d F Y | h:i:s', $u['tgl_masuk']) ?></span></h6>
            </div>

            <div class="mailbox-read-message">
              <p><?php echo $u['pesan_masuk'] ?></p>
            </div>

            <div class="form-group ml-4">
              <div class="btn btn-default">
                <?php
                if ($u['file_pengadu'] == 'no-image.png') {
                  echo '<i class="fas fa-paperclip"></i><small>&nbsp; &nbsp; ' . $u['email'] . ' tidak melampirkan file</small>';
                } else {
                  echo '
                  <a href="' . base_url('inbox/filePengadu/') . $u['file_pengadu'] . '">
                    <img src="' . base_url('assets/img/file-pengaduan/') . $u['file'] . '" width="100px">
                    </a>';
                }
                ?>
              </div>
            </div>


            <div class="card-body">
              <div class="mailbox-read-info">
                <h5><?php //echo $u['subject'] 
                    ?></h5>
                <h6 class="text-muted">From: RSU Kota Tangsel
                  <span class="mailbox-read-time float-right"><?php echo date('d F Y | h:i:s', $u['tgl_balas']) ?></span></h6>
              </div>
              <div class="form-group">
                <textarea id="compose-textarea" name="pesan_keluar" class="form-control" style="height: 300px"><?php echo $u['pesan_keluar'] ?></textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default">
                  <?php
                  if ($u['file'] != 'no-image.png') {
                    echo '
                      <a href="' . base_url('inbox/fileTerkirim/') . $u['file'] . '">
                        <img src="' . base_url('assets/img/file-pengaduan/') . $u['file'] . '" width="100px">
                      </a>';
                  } else {
                    echo '<i class="fas fa-paperclip"></i>
                      <input type="file" name="foto">';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>

          <?php
          // $tes = time();
          // $tes2 = date('Y M D');
          // echo date('d F Y h:i:s', $tes);
          // echo '<br>';
          // echo $tes;
          $tgl_masuk    = date('d F Y', $u['tgl_masuk']);
          $tgl_balas    = date('d F Y', $u['tgl_balas']);

          $jam_masuk    = date('his', $u['tgl_masuk']);
          $jam_balas    = date('his', $u['tgl_balas']);
          // var_dump($jam_balas);
          // die;
          // $date1        = date_create($tgl_balas);
          // $date2        = date_create($tgl_masuk);
          // $dateJam1     = date_create($jam_masuk);
          // $dateJam2 = date_create($jam_balas);
          // $jam_masuk = date_create($jam_masuk);
          // $jam_balas = date_create($jam_balas);
          // $diff = date_diff($date1, $date2);
          // $diffJam = date_diff($dateJam2, $dateJam1);
          // echo $diff->format("Pesan ini dibalas dalam %a Hari ");
          // echo $diffJam->format("%h Jam");
          echo '<span class="text-danger">Pesan ini dibalas dalam ' . $this->wandalibs->selisihWaktuBalasByDay($tgl_masuk, $tgl_balas) . ' Hari ';
          echo  $this->wandalibs->selisihWaktuBalasByHour($jam_masuk, $jam_balas) . ' Jam</span>';
          //echo $this->wandalibs->selisihWaktuBalasByHour($jam_balas, $jam_masuk) . ' Jam';
          ?>
          <div class="card-footer">
            <div class="float-right">
              <?php
              if ($u['pesan_keluar'] == null) {
                echo '<button type="submit" class="btn btn-default"><i class="fas fa-reply"></i> Balas</button>';
              } else {
                echo '<button type="button" class="btn btn-danger swalButtonSudahDibalas"><i class="fas fa-reply"></i> Balas</button>';
              }
              ?>
            </div>
            <button type="button" class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
          </div>
        </div>
      </form>
    </div>
  <?php endforeach; ?>


  <?php foreach ($getProfileUser as $i) : ?>
    <div class="col-md-3">
      <div class="card card-widget widget-user">
        <div class="widget-user-header btn-tosca">
          <h5 class="widget-user-username"><?php echo $i['nama'] ?></h5>
          <h6 class="widget-user-desc"><?php echo $i['email'] ?></h6>
        </div>
        <div class="widget-user-image">
          <a href="<?php echo base_url('pelapor/getFotoProfile/') . $i['id'] ?>" data-toggle="lightbox">
            <img class="img-circle elevation-2" src="<?php echo base_url('assets/img/profile-user/') . $i['foto'] ?>" style="width: 90px;">
          </a>
        </div>
        <p class="text-center mt-5 text-sm font-italic text-muted">Mulai Terdaftar <?php echo date('d F Y', $i['date_created']) ?></p>
        <div class="dropdown-divider"></div>
        <div class="card-footer" style="margin-top: -30px;">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <h6 class="text-muted">Total Jumlah Pengaduan <?php echo $i['nama'] ?></h6>
                <a href="<?php echo base_url('inbox/getAllPesanByEmail/') . $i['email'] ?>">
                  <span class="badge badge-success"><?php echo $getJumlahPengaduanByEmail ?> Pengaduan &nbsp; <i class="fa fa-search"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>



<!-- Modal Form Forward -->
<div class="modal fade" id="modal_forward">
  <div class="modal-dialog">
    <div class="modal-content bg-tosca">
      <div class="modal-header">
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
    <div class="modal-content bg-tosca">
      <div class="modal-header">
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