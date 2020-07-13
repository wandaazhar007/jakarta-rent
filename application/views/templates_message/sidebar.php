<div class="col-md-3">
  <a href="<?php echo base_url('compose') ?>" class="btn btn-tosca btn-block mb-3"><i class="fa fa-edit"></i> Tulis Pesan</a>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Folders</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item active">
          <a href="<?php echo base_url('inbox') ?>" class="nav-link">
            <i class="fas fa-inbox"></i> Pesan Masuk
            <span class="badge bg-primary float-right">12</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('outbox') ?>" class="nav-link">
            <i class="far fa-envelope"></i> Pesan Keluar
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i> Drafts
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>