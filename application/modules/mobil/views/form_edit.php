<div class="row justify-content-center">
  <div class="col-4 col-sm-4 col-md-4 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="card card-info">
      <div class="card-header bg-tosca">
        <h3 class="card-title"><i class="fa fa-car"></i> Form Edit Mobil</h3>
      </div>
      <div class="col-md-12">
        <div class="card-body">
          <form role="form" action="<?php echo base_url('mobil/updateMobil') ?>" method="post" enctype="multipart/form-data">
            <?php foreach ($getDataById as $i) : ?>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Nama</label>
                  <input type="hidden" name="nama" class="form-control" value="<?php echo $i['mobil_id'] ?>">
                  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Mobil" value="<?php echo $i['nama'] ?>">
                  <small class="text-danger"><?php echo form_error('nama') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Tahun Kendaraan</label>
                  <input type="text" name="tahun" class="form-control" placeholder="Masukan Tahun Kendaraan" value="<?php echo set_value('tahun') ?>">
                  <small class="text-danger"><?php echo form_error('tahun') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Transmisi</label>
                  <select class="form-control" style="width: 100%;" name="transmisi">
                    <option></option>
                    <option value="manual">Manual</option>
                    <option value="matic">Matic</option>
                  </select>
                  <small class="text-danger"><?php echo form_error('transmisi') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Jenis Mobil</label>
                  <select class="form-control" style="width: 100%;" name="jenis">
                    <option></option>
                    <option value="1">Minivan</option>
                    <option value="2">Sedan</option>
                  </select>
                  <small class="text-danger"><?php echo form_error('jenis') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Jumlah Kursi</label>
                  <select class="form-control" style="width: 100%;" name="kursi">
                    <option></option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                  </select>
                  <small class="text-danger"><?php echo form_error('kursi') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Jumlah Pintu</label>
                  <select class="form-control" style="width: 100%;" name="pintu">
                    <option></option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                  </select>
                  <small class="text-danger"><?php echo form_error('pintu') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Jumlah Air Bag</label>
                  <select class="form-control" style="width: 100%;" name="air_bag">
                    <option></option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                  </select>
                  <small class="text-danger"><?php echo form_error('air_bag') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Harga Mobil</label>
                  <input type="text" name="harga" id="price" class="form-control" placeholder="Rp.">
                  <small class="text-danger"><?php echo form_error('harga') ?></small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group input-group-sm">
                  <label class="text-sm mb-0">Alamat</label>
                  <select class="form-control" style="width: 100%;" name="alamat_id">
                    <option></option>
                    <?php
                    if (!empty($getAlamat)) {
                      foreach ($getAlamat as $i) {
                    ?>
                        <option value="<?= $i['alamat_id']  ?>"><?= $i['kota'] ?></option>
                    <?php }
                    } ?>
                  </select>
                  <small class="text-danger"><?php echo form_error('alamat_id') ?></small>
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
            <?php endforeach; ?>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>