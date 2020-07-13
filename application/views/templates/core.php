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
              <h5><?php echo $title ?></h5>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php echo $this->load->view($contents) ?>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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