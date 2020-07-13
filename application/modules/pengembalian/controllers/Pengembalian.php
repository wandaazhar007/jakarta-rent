<?php defined('BASEPATH') or exit('no direct script access allowed');

class Pengembalian extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->library('wandalibs');
  }

  function index()
  {
    $data['title']                    = 'List Pengembalian';
    $data['breadcumb']                = 'List Pengembalian';
    $data['contents']                 = 'list_pengembalian';
    $this->load->view('templates/core', $data);
  }
}
