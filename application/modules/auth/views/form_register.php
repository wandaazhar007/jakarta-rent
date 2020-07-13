<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/logo-jakarta-rent.png">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/toastr/toastr.min.css">
  <!-- oneda-cassading -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/one-da-css/one-da-cassading.css">
</head>

<body class="hold-transition register-page">
  <div class="col-12 col-sm-4 col-md-4" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
  <div class="register-box">
    <div class="one-da-login-logo">
      <div style="background-color: #13a9e2; width: 360px;" class="text-center mb-0">
        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/assets/img/logo-jakarta-rent.png" alt="" style="width: 30%;" class="mb-0"></a>
      </div>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <?php echo $this->session->flashdata('message'); ?>
        <p class="login-box-msg text-uppercase" style="color: #13a9e2; font-weight: bold;"><?php echo $title ?></p>
        <form action="<?php echo base_url('auth/registerUser') ?>" method="post">
          <div class="input-group mb-3 input-group-sm">
            <input type="text" name="nama" value="<?php echo set_value('nama') ?>" class="form-control" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('nama') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <input type="text" name="email" value="<?php echo set_value('email') ?>" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('email') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <select class="form-control" style="width: 100%;" name="bidang">
              <option>-Pilih Bidang-</option>
              <option value="pelayanan medis">Pelayanan Medis</option>
              <option value="penunjang">Penunjang</option>
              <option value="keperawatan">Keperawatan</option>
              <option value="umum">Umum</option>
              <option value="keuangan">Keuangan</option>
              <option value="costumer services">Costumer Services</option>
            </select>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('bidang') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('password') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <input type="password" name="password2" value="<?php echo set_value('password2') ?>" class="form-control" placeholder="Ulangi Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('password2') ?></small>



          <div class="row">
            <div class="col-8">
              <div class="icheck-primary input-group-sm">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                  <small class="text-muted">Saya setuju dengan <a href="#">Ketentuan</a></small>
                  <small class="text-danger font-italic"><?php echo form_error('terms') ?></small>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block one-da-btn-login btn-tosca">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-0 one-da-text-unlink" style="font-size: 14px;">Tidak bisa login? <a href="<?php echo base_url('auth/forgotPassword') ?>" class="one-da-text-unlink one-da-text-tosca" style="font-size: 14px;">Lupa password</a></p>
        <p class="mb-0 one-da-text-unlink" style="font-size: 14px;"> Sudah punya akun? <a href="<?php echo base_url('auth/login') ?>" class="one-da-text-unlink one-da-text-tosca">Login</a></p>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url() ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo base_url() ?>/assets/plugins/toastr/toastr.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>/assets/dist/js/adminlte.min.js"></script>
  <!-- Toast SweetAlert2-->
  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: true,
        timer: 5000
      });

      $('.wrongPassword').ready(function() {
        Toast.fire({
          type: 'error',
          title: 'Ups! Jika kamu masi belum bisa login. Silahkan hubungi administrator'
        })
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          type: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          type: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          type: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          type: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          type: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultFull').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });
      $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          image: '../../dist/img/user3-128x128.jpg',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
          class: 'bg-info',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });
  </script>

</body>

</html>