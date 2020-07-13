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
    </div>

    <div class="card-body p-0">
      <div class="mailbox-controls">
        <div class="float-right text-muted" style="font-size: 12px;">
          Total <?php echo $getAllInbox['total_rows'] ?> Pesan
        </div>
      </div>
      <div class="table-responsive mailbox-messages">
        <!-- load view -->
        <?php $this->load->view('view') ?>
      </div>
    </div>
    <div class="card-footer p-0 mb-3">
      <div class="mailbox-controls">
        <div class="float-right text-muted" style="font-size: 12px;">
          Total Pesan Masuk <?php echo $getAllInbox['total_rows'] ?> Pesan
        </div>
      </div>
    </div>
    <?php echo $getAllInbox['pagination'] ?>
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