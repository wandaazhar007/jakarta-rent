<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-6 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="card card-info">
      <div class="card-header bg-tosca">
      </div>
      <div class="col-md-12">
        <div class="card-body">
          <form role="form" action="<?php echo base_url('trans/tambahTransaksi') ?>" method="post" enctype="multipart/form-data">
            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Nama User</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama User" value="<?php echo set_value('nama') ?>">
                <small class="text-danger"><?php echo form_error('nama') ?></small>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Nama Mobil</label>
                <select name="mobil_id" class="form-control select2" style="width: 100%;">
                  <option></option>
                  <?php
                  if (!empty($getAllDataMobil)) {
                    foreach ($getAllDataMobil as $i) {
                  ?>
                      <option value="<?= $i['mobil_id']  ?>"><?= $i['nama'] ?></option>
                  <?php }
                  } ?>
                </select>
                <small class="text-danger"><?php echo form_error('mobil_id') ?></small>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Jenis Order</label>
                <select name="mobil_id" class="form-control select2" style="width: 100%;">
                  <option></option>
                  <option value="1">Mobil Saja</option>
                  <option value="2">Mobil dan Supir</option>
                </select>
                <small class="text-danger"><?php echo form_error('mobil_id') ?></small>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Jenis Order</label>
                <input type="text" name="jenis_order" class="form-control" placeholder="Masukan Jenis Order" value="<?php echo set_value('jenis_order') ?>">
                <small class="text-danger"><?php echo form_error('jenis_order') ?></small>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Tanggal Order</label>
                <input type="date" name="order_date" class="form-control" placeholder="Masukan Tanggal Order" value="<?php echo set_value('order_date') ?>">
                <small class="text-danger"><?php echo form_error('order_date') ?></small>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Tanggal Sewa</label>
                <input type="date" name="start_date" class="form-control" placeholder="Masukan Tanggal Sewa" value="<?php echo set_value('start_date') ?>">
                <small class="text-danger"><?php echo form_error('start_date') ?></small>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Tanggal Kembali</label>
                <input type="date" name="end_date" class="form-control" placeholder="Masukan Tanggal Kembali" value="<?php echo set_value('end_date') ?>">
                <small class="text-danger"><?php echo form_error('end_date') ?></small>
              </div>
            </div>


            <div class="col-sm-12">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Upload Foto</label>
                <input type="file" name="foto" class="" placeholder="">
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="card card-info ml-2">
      <div class="card-header bg-tosca">
      </div>
      <div class="col-md-12">
        <div class="card-body">
          <div class="col-sm-12">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Nama User</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama User" value="<?php echo set_value('nama') ?>">
              <small class="text-danger"><?php echo form_error('nama') ?></small>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Nama Mobil</label>
              <select name="mobil_id" class="form-control select2" style="width: 100%;">
                <option></option>
                <?php
                if (!empty($getAllDataMobil)) {
                  foreach ($getAllDataMobil as $i) {
                ?>
                    <option value="<?= $i['mobil_id']  ?>"><?= $i['nama'] ?></option>
                <?php }
                } ?>
              </select>
              <small class="text-danger"><?php echo form_error('mobil_id') ?></small>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Jenis Order</label>
              <select name="mobil_id" class="form-control select2" style="width: 100%;">
                <option></option>
                <option value="1">Mobil Saja</option>
                <option value="2">Mobil dan Supir</option>
              </select>
              <small class="text-danger"><?php echo form_error('mobil_id') ?></small>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Upload Foto</label>
              <input type="file" name="foto" class="" placeholder="">
            </div>
          </div>
          <div class="col-sm-12">
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