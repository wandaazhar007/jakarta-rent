<?php defined('BASEPATH') or exit('no direct script access allowed');

class Peminjaman extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->library('wandalibs');
  }

  function index()
  {
    $data['title']                    = 'List Peminjaman';
    $data['breadcumb']                = 'List Peminjaman';
    $data['contents']                 = 'list_peminjaman';
    $this->load->view('templates/core', $data);
  }
}
