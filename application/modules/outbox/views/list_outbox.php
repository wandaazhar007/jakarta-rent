<div class="row">
  <div class="card">
    <div class="card-header" style="background-color: #009999; color:#fff">
      <h3 class="card-title">Pesan Keluar</h3>

      <div class="card-tools">
        <form action="#" method="post">
          <div class="input-group input-group-sm">
            <input type="text" name="keyword" class="form-control" placeholder="Search Mail">
            <div class="input-group-append">
              <div class="btn" style="color: #fff;" type="submit">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="mailbox-controls">
        <!-- Check all button -->
        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
        </button>
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
        </div>
        <!-- /.btn-group -->
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
        <div class="float-right">
          1-50/200
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
          </div>
          <!-- /.btn-group -->
        </div>
        <!-- /.float-right -->
      </div>
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>

            <?php foreach ($getAllOutbox as $i) : ?>
              <tr>
                <td class="mailbox-name"><a href="#"><small><?php echo $i['email'] ?></small></a></td>
                <td class="mailbox-subject"><b><small><?php echo $i['nama'] ?></small></b></td>
                <td><small><?php echo $i['outbox'] ?></small></td>
                <td class="mailbox-attachment"></td>
                <td class="mailbox-date"><small><?php echo date('d F Y | H:i:s', $i['tgl_masuk']) ?></small></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <!-- /.table -->
      </div>
      <!-- /.mail-box-messages -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer p-0">
      <div class="mailbox-controls">
        <!-- Check all button -->
        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
        </button>
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
        </div>
        <!-- /.btn-group -->
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
        <div class="float-right">
          1-50/200
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
          </div>
          <!-- /.btn-group -->
        </div>
        <!-- /.float-right -->
      </div>
    </div>
  </div>
</div>