<?php

use FontLib\Table\Type\post;

defined('BASEPATH') or exit('no direct script access allowed');

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

  function rincian($order_id)
  {
    $data['title']    = 'Detail Peminjaman';
    $data['contents'] = 'detail_peminjaman';
    $data['getDataById']    = $this->_model->getDataById($order_id);

    $this->load->view('templates/core', $data);
  }

  function konfirmasi($order_id)
  {
    $data['title']    = 'Detail Peminjaman';
    $data['contents'] = 'konfirmasi';
    $data['getDataById']    = $this->_model->getDataById($order_id);

    $this->load->view('templates/core', $data);
  }

  function updateKonfirmasi()
  {
    $order_id   = htmlspecialchars($this->input->post('order_id', true));
    $konfirmasi = htmlspecialchars($this->input->post('konfirmasi', true));
    $this->db->set('relasi_tabel', $konfirmasi);
    $this->db->where('order_id', $order_id);
    $this->db->update('order_id');
  }
}
