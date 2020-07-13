<?php defined('BASEPATH') or exit('No direct script access allowed');

class Outbox extends MX_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_outbox', 'p');
  }

  function index()
  {
    if ($this->session->userdata('bidang') == 'promkes') {
      $data['title']            = 'Layanan Pengaduan';
      $data['contentsMessage']  = 'list_outbox';
      $data['getAllOutbox']      = $this->p->getAllOutboxPromkes();

      $this->load->view('templates_message/core', $data);
    } else {
      $bidang = $this->session->userdata('bidang');
      $data['title']            = 'Layanan Pengaduan';
      $data['contentsMessage']  = 'list_outbox';
      $data['getAllOutbox']      = $this->p->getAllOutbox($bidang);

      $this->load->view('templates_message/core', $data);
    }
  }
}
