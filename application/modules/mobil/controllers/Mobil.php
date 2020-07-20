<?php

use FontLib\Table\Type\post;

defined('BASEPATH') or exit('no direct script access allowed');

class Mobil extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->library('wandalibs');
    $this->load->model('m_mobil', '_model');
    $this->load->library('form_validation');
  }

  function index()
  {
    $data['title']                    = 'Jakarta Rent | List Mobil';
    $data['breadcumb']                = 'List Mobil';
    $data['contents']                 = 'list_mobil';
    $data['getAllData']               = $this->_model->getAllData();
    $this->load->view('templates/core', $data);
  }

  function getDataById()
  {
    $mobil_id = htmlspecialchars($this->input->post('mobil_id', true));
    if (isset($mobil_id) and !empty($mobil_id)) {
      $query = $this->_model->getDataById($mobil_id);
      $output = '';
      foreach ($query as $i) {
        $output .= '
        <table class="table-modal-forward">
        <tr>
          <td width="100px">Nama</td>
          <td width="50px">:</td>
          <td width="400px">' . $i['nama'] . '</td>
        </tr>
        <tr>
          <td width="100px">Tipe</td>
          <td width="50px">:</td>
          <td width="400px">' . $i['tipe'] . '</td>
        </tr>
        <tr>
          <td width="100px">Transmisi</td>
          <td width="50px">:</td>
          <td width="400px">' . $i['transmisi'] . '</td>
        </tr>
        <tr>
          <td width="100px">Tahun</td>
          <td width="50px">:</td>
          <td width="400px">' . $i['tahun'] . '</td>
        </tr>
        <tr>
          <td width="100px">Harga</td>
          <td width="50px">:</td>
          <td width="400px">' . $this->wandalibs->_rupiah($i['harga']) . '</td>
        </tr>
      </table>
        <div class="text-center pt-3">
      <img src="' . base_url() . 'assets/img/mobil/' . $i['foto'] . '" style="width: 200px;" class="img-thumbnail">
      <a href="' . base_url('mobil/editMobil/') . $i['mobil_id'] . '">
        <button class="btn btn-tosca btn-sm btn-block mt-2"><i class="fa fa-edit"></i>&nbsp; Edit Mobil ' . $i['nama'] . '</button>
      </a>
        </div>  
      ';
      }
      echo $output;
    } else {
      echo '<p class="text-center text-danger">Data tidak ditemukan</p>';
    }
  }

  function showConfirmDelete()
  {
    $namaUser = $this->session->userdata('nama');
    $mobil_id = $this->input->post('mobil_id');
    if (isset($mobil_id) and !empty($mobil_id)) {
      $records = $this->_model->getDataById($mobil_id);
      $output = '';

      foreach ($records as $i) {
        $output .= '
        <p class="text-danger text-center">Apakah Anda yakin akan menghapus data mobil' . $i['nama'] . ' ?</p>
        <div class="text-center">
        <a href="' . $this->deleteById($mobil_id) . '">
          <button class="btn btn-success btn-sm mr-2"><i class="fa fa-check mr-2"></i>Iya</button>
        </a>
          <button class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-window-close mr-2"></i>Tidak</button>
        </div>
        ';
      }
      echo $output;
    } else {
      echo '<p class="text-center text-danger">Data tidak ditemukan</p>';
    }
  }

  function deleteById($mobil_id)
  {
    // $this->db->update('tb_order', ['order_id', $order_id]);
    // $this->db->update('tb_transaksi', ['order_id', $order_id]);
    // $this->session->set_flashdata('flash', 'dicancel');
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-check"></i><small><b>Yeay!.</b>Berhasil hapus</small>
  </div>');
    // redirect('trans');
  }

  function getFotoMobil($mobil_id)
  {
    $data['getFotoMobil'] = $this->_model->getFotoMobil($mobil_id);

    $this->load->view('detail_foto_mobil', $data);
  }

  function insertMobil()
  {
    $this->form_validation->set_rules('nama', 'Nama Mobil', 'required', [
      'required'      => '*Nama mobil harus diisi!'
    ]);
    $this->form_validation->set_rules('transmisi', 'Transmisi', 'required', [
      'required'      => '*Transmisi harus diisi'
    ]);
    $this->form_validation->set_rules('jenis', 'Jenis Mobil', 'required', [
      'required'      => '*Jenis mobil wajib diisi!'
    ]);
    $this->form_validation->set_rules('kursi', 'kursi', 'required', [
      'required'       => '*Jumlah kursi wajib diisi'
    ]);
    $this->form_validation->set_rules('pintu', 'Pintu', 'required', [
      'required'       => '*Jumlah kursi wajib diisi'
    ]);
    $this->form_validation->set_rules('air_bag', 'Jumlah Pintu', 'required', [
      'required'       => '*Jumlah kursi wajib diisi'
    ]);
    $this->form_validation->set_rules('alamat_id', 'Alamat', 'required', [
      'required'      => '*Alamat harus diisi!'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title']      = 'Jakarta Rent | Form Tambah Mobil';
      $data['contents']   = 'form_input';
      $data['getAlamat']  = $this->_model->getAlamat();

      $this->load->view('templates/core', $data);
    } else {
      $nama         = htmlspecialchars($this->input->post('nama', true));
      $transmisi    = htmlspecialchars($this->input->post('transmisi', true));
      $jenis        = htmlspecialchars($this->input->post('jenis', true));
      $kursi        = htmlspecialchars($this->input->post('kursi', true));
      $pintu        = htmlspecialchars($this->input->post('pintu', true));
      $harga        = htmlspecialchars($this->input->post('harga', true));
      $tahun        = htmlspecialchars($this->input->post('tahun', true));
      $alamat_id    = htmlspecialchars($this->input->post('alamat_id', true));

      $uploadGambar   = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/mobil';
        $config['allowed_types']    = 'gif|jpg|png|pdf';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      } else {
        $uploadGambar = 'default-avatar.png';
      }

      $data = [
        'nama'          => $nama,
        'transmisi'     => $transmisi,
        'jenis'         => $jenis,
        'kursi'         => $kursi,
        'pintu'         => $pintu,
        'harga'         => $harga,
        'tahun'         => $tahun,
        'foto'          => $uploadGambar,
        'alamat_id'     => $alamat_id
      ];

      $this->db->insert('tb_mobil', $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Yeay!.</b>data mobil berhasil disimpan
    </div>');
      redirect('mobil');
    }
  }

  function editMobil($mobil_id)
  {
    $data['title']      = 'Jakarta Rent | Form Tambah Mobil';
    $data['contents']   = 'form_edit';
    $data['getDataById'] = $this->_model->getDataById($mobil_id);
    $data['getAlamat']  = $this->_model->getAlamat();

    $this->load->view('templates/core', $data);
  }

  function updateMobil()
  {
    $this->form_validation->set_rules('nama', 'Nama Mobil', 'required', [
      'required'      => '*Nama mobil harus diisi!'
    ]);
    $this->form_validation->set_rules('transmisi', 'Transmisi', 'required', [
      'required'      => '*Transmisi harus diisi'
    ]);
    $this->form_validation->set_rules('jenis', 'Jenis Mobil', 'required', [
      'required'      => '*Jenis mobil wajib diisi!'
    ]);
    $this->form_validation->set_rules('kursi', 'kursi', 'required', [
      'required'       => '*Jumlah kursi wajib diisi'
    ]);
    $this->form_validation->set_rules('pintu', 'Pintu', 'required', [
      'required'       => '*Jumlah kursi wajib diisi'
    ]);
    $this->form_validation->set_rules('air_bag', 'Jumlah Pintu', 'required', [
      'required'       => '*Jumlah kursi wajib diisi'
    ]);
    $this->form_validation->set_rules('alamat_id', 'Alamat', 'required', [
      'required'      => '*Alamat harus diisi!'
    ]);

    if ($this->form_validation->run() == false) {
      // $data['title']      = 'Jakarta Rent | Form Tambah Mobil';
      // $data['contents']   = 'form_edit';
      // $data['getDataById'] = $this->_model->getDataById($mobil_id);
      // $data['getAlamat']  = $this->_model->getAlamat();
      $mobil_id     = htmlspecialchars($this->input->post('mobil_id', true));

      // $this->load->view('form_edit' . $mobil_id . '');
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Ups!.</b>Lengkapi data mobil
    </div>');



      redirect('' . $_SERVER['HTTP_REFERER'] . '');
    } else {
      $mobil_id     = htmlspecialchars($this->input->post('mobil_id', true));
      $nama         = htmlspecialchars($this->input->post('nama', true));
      $transmisi    = htmlspecialchars($this->input->post('transmisi', true));
      $jenis        = htmlspecialchars($this->input->post('jenis', true));
      $kursi        = htmlspecialchars($this->input->post('kursi', true));
      $pintu        = htmlspecialchars($this->input->post('pintu', true));
      $harga        = htmlspecialchars($this->input->post('harga', true));
      $tahun        = htmlspecialchars($this->input->post('tahun', true));
      $alamat_id    = htmlspecialchars($this->input->post('alamat_id', true));

      $query =  $this->db->get_where('tb_mobil', ['mobil_id' => $mobil_id])->row_array();

      $uploadGambar   = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/mobil';
        $config['allowed_types']    = 'gif|jpg|png|pdf';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      } else {
        $uploadGambar = $query['foto'];
      }

      $data = [
        'nama'          => $nama,
        'transmisi'     => $transmisi,
        'jenis'         => $jenis,
        'kursi'         => $kursi,
        'pintu'         => $pintu,
        'harga'         => $harga,
        'tahun'         => $tahun,
        'foto'          => $uploadGambar,
        'alamat_id'     => $alamat_id
      ];
      $this->db->where('mobil_id', $mobil_id);
      $this->db->update('tb_mobil', $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Yeay!.</b>data mobil berhasil disimpan
    </div>');
      redirect('mobil');
      // redirect('' . $_SERVER['HTTP_REFERER'] . '');
    }
  }
}
