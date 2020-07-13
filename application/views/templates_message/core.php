<!DOCTYPE html>
<html>

<head>
  <?php echo $this->load->view('templates/header') ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed layout-footer-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php echo $this->load->view('templates/navbar') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php echo $this->load->view('templates/sidebar') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <img src="<?php echo base_url() ?>/assets/img/logo-rsu.png" alt="" style="width: 100px;">
              <h6 class="one-da-text-tosca" style="display: inline; margin-left: 20px;"><?php echo $title ?></h6>
            </div>
            <div class="col-sm-12" style="margin-top: -50px;">
              <span class="float-right"><?php echo $this->session->flashdata('message') ?></span>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <?php $this->load->view('templates_message/sidebar') ?>

          <!-- /.col -->
          <div class="col-md-9">
            <?php $this->load->view($contentsMessage) ?>
            <!-- /.card -->
          </div>
        </div>
      </section>
      <!-- /.col -->
    </div>

    <?php echo $this->load->view('templates/footer') ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php echo $this->load->view('templates/wandaScript') ?>
</body>

</html>