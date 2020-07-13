<?php defined('BASEPATH') or exit('no direct script access allowed');

class Mobil extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->library('wandalibs');
  }

  function index()
  {
    $data['title']                    = 'List Mobil';
    $data['breadcumb']                = 'List Mobil';
    $data['contents']                 = 'list_mobil';
    $this->load->view('templates/core', $data);
  }
}
