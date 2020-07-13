<!DOCTYPE html>
<html>

<head>
  <?php echo $this->load->view('templates/header') ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">

    <?php echo $this->load->view('templates/navbar') ?>
    <?php echo $this->load->view('templates/sidebar') ?>


    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <!-- <div class="row">
            <div class="col-sm-6">
              <h5><?php //echo $title 
                  ?></h5>
            </div>
          </div> -->
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php echo $this->load->view($contents) ?>
      </section>

    </div>

    <?php echo $this->load->view('templates/footer') ?>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <?php echo $this->load->view('templates/wandaScript') ?>
</body>

</html>