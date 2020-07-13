<?php defined('BASEPATH') or exit('no direct script access allowed');

class Mobil extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->library('wandalibs');
    $this->load->model('m_mobil', '_model');
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
        <a href="' . $this->_deleteById($mobil_id) . '">
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

  function _deleteById($mobil_id)
  {
    // $this->db->update('tb_order', ['order_id', $order_id]);
    // $this->db->update('tb_transaksi', ['order_id', $order_id]);
    $this->session->set_flashdata('flash', 'dicancel');
    // redirect('trans');
  }

  function getFotoMobil($mobil_id)
  {
    $data['getFotoMobil'] = $this->_model->getFotoMobil($mobil_id);

    $this->load->view('detail_foto_mobil', $data);
  }
}
