<div class="col-6 col-sm-3 col-md-3 text-center" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
  <?php echo $this->session->flashdata('message'); ?>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card" style="padding: 20px;">
        <div class="card-header">
          <span class="text-muted one-da-text-tosca" style="margin-left: -20px;"><?php echo $title ?></span>
          <a href="<?php echo base_url('user/insertUser') ?>"><button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i>&nbsp; Tambah User</button></a>
        </div>
        <div class="card-body table-responsive p-0" style="padding: 20px;">
          <table class="table table-hover text-nowrap" id="tabel_list_user">
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
<div class="modal fade" id="modal_edit_user">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-tosca">
        <h5 class="modal-title"> <i class="fa fa-fw fa-user"></i>&nbsp;Detail User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="result_edit_user"></div>
        </div>
      </div>
    </div>
  </div>
</div>