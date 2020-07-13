<?php defined('BASEPATH') or exit('no direct script access allowed');

class Peminjaman extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->library('wandalibs');
    $this->load->model('m_peminjaman', '_model');
  }

  function index()
  {
    $data['title']                    = 'Jakarta Rent | List Peminjaman';
    $data['breadcumb']                = 'List Peminjaman';
    $data['contents']                 = 'list_peminjaman';
    $data['getAllData']               = $this->_model->getAllData();
    $this->load->view('templates/core', $data);
  }

  function getDataById()
  {
    $pinjam_id = htmlspecialchars($this->input->post('pinjam_id', true));
    $query = $this->_model->getDataById($pinjam_id);

    if (isset($pinjam_id) and !empty($pinjam_id)) {
      $output = '';
      foreach ($query as $i) {
        $output .= '
        <table class="table-modal-forward">
        <tr>
          <td width="100px">Nama</td>
          <td width="50px">:</td>
          <td width="400px"></td>
        </tr>
        <tr>
          <td width="100px">Tipe</td>
          <td width="50px">:</td>
          <td width="400px"></td>
        </tr>
        <tr>
          <td width="100px">Transmisi</td>
          <td width="50px">:</td>
          <td width="400px"></td>
        </tr>
        <tr>
          <td width="100px">Tahun</td>
          <td width="50px">:</td>
          <td width="400px"></td>
        </tr>
        <tr>
          <td width="100px">Harga</td>
          <td width="50px">:</td>
          <td width="400px"></td>
        </tr>
      </table>
      ';
      }
      echo $output;
    } else {
      echo '<p class="text-center text-danger">Data tidak ditemukan</p>';
    }
  }
}
