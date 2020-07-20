  <div class="col-6 col-sm-3 col-md-3 text-center" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Form Tambah User</h3>
          </div>
          <div class="col-12">
            <div class="card-body">
              <form role="form" action="<?php echo base_url('user_admin/insertUserAdmin') ?>" method="post" enctype="multipart/form-data">
                <div class="col-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>">
                    <small class="text-danger"><?php echo form_error('nama') ?></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>">
                    <small class="text-danger"><?php echo form_error('email') ?></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">No Handphone</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" value="<?php echo set_value('no_hp') ?>">
                    <small class="text-danger"><?php echo form_error('no_hp') ?></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Hak Akses</label>
                    <select class="form-control" style="width: 100%;" name="user_access">
                      <option></option>
                      <option value="pengguna">Pengguna</option>
                      <option value="administrator">Administrator</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('user_access') ?></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <small class="text-danger"><?php echo form_error('password') ?></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Ulangi Password</label>
                    <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
                    <small class="text-danger"><?php echo form_error('password2') ?></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Upload Foto</label>
                    <input type="file" name="foto" class="" placeholder="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="modal-footer pull-right">
                    <button type="submit" class="btn btn-tosca btn-outline-light">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-8">
        <div class="card" style="padding: 20px;">
          <div class="card-header">
            <a href="<?php echo base_url('user_admin') ?>"><button class="btn btn-primary btn-sm float-left" style="margin-left: -20px;"><i class="fa fa-arrow-left"></i>&nbsp; Kembali ke list user admin</button></a>
            <span class="text-muted one-da-text-tosca float-right">Daflar nama user yang sudah terdaftar</span>
          </div>
          <div class="card-body table-responsive p-0" style="padding: 20px;">
            <table class="table table-hover text-nowrap" id="tabel_list_user_admin">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>No Handphone</th>
                  <th>Alamat Email</th>
                  <th>Foto</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal edit user -->
  <div class="modal fade" id="modal_edit_user_admin">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-tosca">
          <h5 class="modal-title"> <i class="fa fa-fw fa-user"></i>&nbsp;Detail User Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div id="result_edit_user_admin"></div>
          </div>
        </div>
      </div>
    </div>
  </div>