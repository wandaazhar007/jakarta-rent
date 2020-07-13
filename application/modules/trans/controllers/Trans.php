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
    $order_id = $this->input->post('order_id');
    // $order_id = 7;
    $data['title']    = 'List Transaksi';
    $data['contents'] = 'list_transaksi';
    $data['getAllTransaksi']  = $this->_model->getAllTransaksi();
    // var_dump($order_id);
    // die;


    $this->load->view('templates/core', $data);
  }

  function cancelTrans($order_id)
  {
    // $this->db->update('tb_order', ['order_id', $order_id]);
    // $this->db->update('tb_transaksi', ['order_id', $order_id]);
    $this->session->set_flashdata('flash', 'dicancel');
    redirect('trans');
  }

  function getHistoryTrans()
  {
    // $order_id = $this->input->post('order_id');
    $order_id = 7;
    if (isset($order_id) and !empty($order_id)) {
      $records = $this->_model->getHistoryTrans($order_id);
      $output = '';

      foreach ($records as $i) {
        $output .= '
        <div class="">
        <table class="table-modal-forward">
          <tr>
            <td width="150px">Nama Pelanggan</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['nama_user'] . '</td>
          </tr>
          <tr>
            <td width="150px">Email</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['email'] . '</td>
          </tr>
          <tr>
            <td width="150px" style="margin-top: 0; postion: absolute;">Nama Mobil</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['nama_mobil'] . '</td>
          </tr>
          <tr>
            <td width="150px">Harga</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['harga'] . '</td>
          </tr>
          <tr>
            <td width="150px">Tanggal Order</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['order_date'] . '</td>
          </tr>
          <tr>
            <td width="150px">Tanggal Kembali</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['start_date'] . '</td>
          </tr>
          <tr>
            <td width="150px">Tanggal Kembali</td>
            <td width="50px">:</td>
            <td width="400px">' . $i['end_date'] . '</td>
          </tr>
        </table>
      </div>
        ';
      }
      echo $output;
    } else {
      echo 'not founds';
    }
  }

  function confirmHapus()
  {
  }
}
