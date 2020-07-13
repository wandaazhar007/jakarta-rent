<?php defined('BASEPATH') or exit('No direct script access allowed');
class Trans extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_trans', '_model');
    $this->load->library('datatables');
  }

  function index()
  {
    $data['title']    = 'Jakarta Rent | List Transaksi';
    $data['contents'] = 'list_transaksi';
    $data['getAllTransaksi']  = $this->_model->getAllTransaksi();

    $this->load->view('templates/core', $data);
  }

  function getHistoryTrans()
  {
    $order_id = $this->input->post('order_id');
    if (isset($order_id) and !empty($order_id)) {
      $records = $this->_model->getHistoryTrans($order_id);
      $status = $records['0']['status'];
      // var_dump($status);
      // die;
      if ($status == 0) {
        $status = '
        <span class="btn btn-warning btn-xs"> Belum lunas</span>
        ';
      } elseif ($status == 1) {
        $status = '
        <span class="btn btn-success btn-xs"><i class="fa fa-check"></i> Sudah Lunas</span>
        ';
      } else {
        $status = '
        <span class="btn btn-danger btn-xs">Sudah Dicancel</span>
        ';
      }

      $output = '';

      foreach ($records as $i) {
        $output .= '
        <div class="">
        <table class="table-modal-forward">
          <tr>
            <td width="100px">Nama</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['nama_user'] . '</td>
          </tr>
          <tr>
            <td width="100px">Email</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['email'] . '</td>
          </tr>
          <tr>
            <td width="100px">Mobil</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['nama_mobil'] . '</td>
          </tr>
          <tr>
            <td width="100px">Harga</td>
            <td width="50px">:</td>
            <td width="400px">' . $this->wandalibs->_rupiah($i['harga']) . '&nbsp;' . $status . '</td>
          </tr>
        </table>
        <table class="table-modal-forward">
        <hr>
          <tr>
            <td width="100px">Waktu Order</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['order_date'] . '</td>
          </tr>
          <tr>
            <td width="100px">Mulai Sewa</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['start_date'] . '</td>
          </tr>
          <tr>
            <td width="100px">Pengembalian</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['end_date'] . '</td>
          </tr>
        </table>
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
    $order_id = $this->input->post('order_id');
    if (isset($order_id) and !empty($order_id)) {
      $records = $this->_model->getHistoryTrans($order_id);
      $output = '';

      foreach ($records as $i) {
        $output .= '
        <p class="text-danger text-center">Apakah Anda yakin akan menghapus data transaksi dari ' . $i['email'] . ' ?</p>
        <div class="text-center">
        <a href="' . $this->_cancelTrans($order_id) . '">
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

  function _cancelTrans($order_id)
  {
    // $this->db->update('tb_order', ['order_id', $order_id]);
    // $this->db->update('tb_transaksi', ['order_id', $order_id]);
    $this->session->set_flashdata('flash', 'dicancel');
    // redirect('trans');
  }

  function _getStatusTrans($status)
  {
    $email      = htmlspecialchars($this->input->post('email'), true);
    $query = $this->db->get_where('tb_user_admin', ['email' => $email])->row_array();
    $nama = $query['nama'];
    $status = $query['status'];
    var_dump($status);
    die;

    if ($status == 0) {
      echo '<span class="badge badge-warning"><i class="fa fa-spinner fa-spin"></i> Belum Lunas</span>';
    } elseif ($status == 1) {
      echo '<span class="badge badge-success-"><i class="fa fa-check-square"></i> Lunas</span>';
    } else {
      echo '<span class="badge badge-danger"><i class="fa fa-window-close"> Dibatalkan</i></span>';
    }
  }
}
