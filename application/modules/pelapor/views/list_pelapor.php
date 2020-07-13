<div class="col-12 col-sm-4 col-md-4" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
  <?php echo $this->session->flashdata('message'); ?>
</div>

<div class="card" style="padding: 20px;">
  <div class="card-body table-responsive p-0" style="padding: 20px;">
    <table class="table table-hover text-nowrap" id="tabel_list_pelapor">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap Pelapor</th>
          <th>No Handphone</th>
          <th>Alamat Email</th>
          <th>Foto</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>
    </table>
  </div>
</div>



<div class="modal fade" id="modal-secondary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="alert alert-danger alert-dismissible">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
          <i class="icon fa fa-check"></i><small><b>Maaf.</b> Hanya administrator yang bisa edit data pelapor</small>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-xs btn-outline-dark text-center" data-dismiss="modal"><small>Close</small></button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail Edit Pelapor -->
<div class="modal fade" id="modal-add-user">
  <div class="modal-dialog">
    <div class="modal-content bg-secondary">
      <div class="modal-header">
        <h4 class="modal-title"> <i class="fa fa-user-alt"></i> Edit Data Pelapor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body pelapor_result">

        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->