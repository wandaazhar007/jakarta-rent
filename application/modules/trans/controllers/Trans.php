<?php defined('BASEPATH') or exit('No direct script access allowed');
class Trans extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_trans', 'p');
    $this->load->library('datatables');
  }

  function index()
  {
    $data['title']    = 'List Transaksi';
    $data['contents'] = 'list_transaksi';
    $data['getAllTransaksi']  = $this->p->getAllTransaksi();

    $this->load->view('templates/core', $data);
  }

  function cancelTrans($order_id)
  {
    // $this->db->update('tb_order', ['order_id', $order_id]);
    // $this->db->update('tb_transaksi', ['order_id', $order_id]);
    $this->session->set_flashdata('flash', 'dicancel');
    redirect('trans');
  }

  function getDetail()
  {
    $order_id = $this->input->post('order_id');
    if (isset($idPesan) and !empty($order_id)) {
      $records = $this->p->getFormForwar($order_id);
      $output = '';
      foreach ($records as $i) {
        $output .= '';
      }
      echo $output;
    } else {
      echo 'not founds';
    }
  }
}
