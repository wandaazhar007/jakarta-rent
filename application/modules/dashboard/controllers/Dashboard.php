<?php defined('BASEPATH') or exit('no direct script access allowed');

class Dashboard extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    // $this->load->library('wadalibs')
    $this->wandalibs->_checkLoginSession();
  }

  function index()
  {
    $data['title']          = 'Jakarta Rent | Dashboard';
    $data['breadcumb']      = 'Dashboard';
    $data['contents']       = 'v_dashboard';
    $this->load->view('templates/core', $data);
  }


  function _restrict()
  {
    if (!empty($this->session->userdata('email'))) {
      // redirect('dashboard');
    } else {
      redirect('auth/login');
    }
  }
  function _isLoggedIn()
  {
    $email      = htmlspecialchars($this->input->post('email'), true);
    $query = $this->db->get_where('tb_user', ['email' => $email])->row_array();
    $data = [
      'id'        => $query['id'],
      'email'     => $query['email'],
      'name'      => $query['name'],
      'no_hp'     => $query['no_hp'],
    ];
    $this->session->set_userdata($data);
  }

  function blank()
  {
    $data['title']      = 'Blank';
    $data['contents']   = 'blank';
    $this->load->view('templates/core', $data);
  }
}
