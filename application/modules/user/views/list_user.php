<div class="col-6 col-sm-3 col-md-3 text-center" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
  <?php echo $this->session->flashdata('message'); ?>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
          <?php foreach ($getAllUser as $i) : ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  <?php //echo $i['user_access'] 
                  ?>
                </div>
                <div class="dropdown-divider mb-3"></div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $i['nama'] ?></b></h2>
                      <input type="hidden" value="<?php echo $i['email'] ?>" name="nama">
                      <div class="dropdown-divider mb-3"></div>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small mt-2"><span class="fa-li"><i class="fas fa-phone"></i></span> <?php echo $i['telepon'] ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?php echo base_url('assets/img/profile-user/') . $i['foto'] ?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="<?php echo base_url('user/profileUser/') . $i['user_id'] ?>" class="btn btn-sm btn-tosca">
                      <i class="fas fa-user"></i> Lihat Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
          </ul>
        </nav>
      </div>
      <?php $this->load->view('templates/fab') ?>
      <!-- /.card-footer -->
    </div>
  </div>
</div>


<div class="modal fade" id="modal-add-user">
  <div class="modal-dialog">
    <div class="modal-content bg-secondary">
      <div class="modal-header">
        <h4 class="modal-title"> <i class="fa fa-user-alt"></i> Tambah User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <form role="form" action="<?php echo base_url('user/insertUser') ?>" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                  <small class="text-danger"><?php echo form_error('nama') ?></small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Email">
                  <small class="text-danger"><?php echo form_error('email') ?></small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">No Handphone</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="No Handphone">
                  <small class="text-danger"><?php echo form_error('no_hp') ?></small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Hak Akses</label>
                  <input type="text" name="user_access" class="form-control" placeholder="Hak Akses">
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
              <div class="modal-footer pull-right">
                <button type="submit" class="btn btn-tosca btn-outline-light">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>