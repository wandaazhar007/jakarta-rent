  <div class="col-6 col-sm-3 col-md-3 text-center" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
  <div class="container-fluid">
    <div class="card card-info">
      <div class="card-header" style="background-color: #009999;">
        <h3 class="card-title">Form Tambah User</h3>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <form role="form" action="<?php echo base_url('user/insertUser') ?>" method="post" enctype="multipart/form-data">
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>">
                <small class="text-danger"><?php echo form_error('nama') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>">
                <small class="text-danger"><?php echo form_error('email') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">No Handphone</label>
                <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" value="<?php echo set_value('no_hp') ?>">
                <small class="text-danger"><?php echo form_error('no_hp') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Bidang</label>
                <select class="form-control" style="width: 100%;" name="bidang">
                  <option></option>
                  <option value="pelayanan medis">Pelayanan Medis</option>
                  <option value="penunjang">Penunjang</option>
                  <option value="keperawatan">Keperawatan</option>
                  <option value="umum">Umum</option>
                  <option value="keuangan">Keuangan</option>
                  <option value="costumer services">Costumer Services</option>
                </select>
                <small class="text-danger"><?php echo form_error('bidang') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">User Akses</label>
                <select class="form-control" style="width: 100%;" name="user_access">
                  <option></option>
                  <option value="pengguna">Pengguna</option>
                  <option value="administrator">Administrator</option>
                  <option value="costumer services">Costumer Services</option>
                </select>
                <small class="text-danger"><?php echo form_error('user_access') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <small class="text-danger"><?php echo form_error('password') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Ulangi Password</label>
                <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
                <small class="text-danger"><?php echo form_error('password2') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Upload Foto</label>
                <input type="file" name="foto" class="" placeholder="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="modal-footer pull-right">
                <button type="submit" class="btn btn-tosca btn-outline-light">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/. container-fluid -->