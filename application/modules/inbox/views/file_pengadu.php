<div class="row">
  <?php foreach ($getFilePengadu as $u) : ?>
    <div class="col-md-9">
      <div class="card card-outline">
        <div class="card-header" style="background-color: #009999; color:#fff">
          <h3 class="card-title"> <a href="#" onclick="window.history.back()" style="color: #fff;"><i class="fa fa-arrow-alt-circle-left" style="font-size: 30px;"></i> <span style="position: absolute; margin-left: 10px;"><?php echo $u['email'] ?></span></a></h3>
          <div class="card-tools">
            <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <img src="<?php echo base_url('assets/img/file-pengaduan/') . $u['file_pengadu'] ?>" alt="" style="width: 702px;">
        </div>
      </div>
    </div>
  <?php endforeach; ?>


  <?php foreach ($getProfileUser as $i) : ?>
    <div class="col-md-3">
      <div class="card card-widget widget-user">
        <div class="widget-user-header btn-tosca">
          <h3 class="widget-user-username"><?php echo $i['nama'] ?></h3>
          <h5 class="widget-user-desc"><?php //echo $i['email'] 
                                        ?></h5>
        </div>
        <div class="widget-user-image">
          <img class="img-circle elevation-2" src="<?php echo base_url('assets/img/profile-user/') . $i['foto'] ?>" alt="User Avatar">
        </div>
        <p class="text-center mt-5 text-sm font-italic text-muted">Mulai Terdaftar <?php echo date('d F Y', $i['date_created']) ?></p>
        <div class="dropdown-divider"></div>
        <div class="card-footer" style="margin-top: -30px;">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <h6 class="text-muted">Total Jumlah Pengaduan <?php echo $i['nama'] ?></h6>
                <span class="text-muted"><?php echo $getJumlahPengaduanByEmail ?> Pengaduan</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>