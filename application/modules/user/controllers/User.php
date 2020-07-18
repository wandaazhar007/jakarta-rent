<?php defined('BASEPATH') or exit('no direct script access allowed');

class User extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('M_user', 'p');
    $this->load->library('form_validation');
    // $this->wandalibs->_checkLoginSession();
  }

  function index()
  {
    $email = $this->session->userdata('email');
    // $email = htmlspecialchars($this->input->post('email', true));
    // var_dump($email);
    // die;
    $data['title']      = 'User';
    $data['breadcumb']  = 'Pengguna';
    $data['contents']   = 'list_user';
    $data['getAllUser'] = $this->p->getAllUser();
    $data['lastLogin'] = $this->wandalibs->_lastLoginUserById($email);
    $this->load->view('templates/core', $data);
  }

  function profileUser($user_id)
  {
    $data['title']      = $this->session->userdata('nama');
    $data['breadcumb']  = $this->session->userdata('nama');
    $data['contents']   = 'profile_user';
    $data['getProfileUser'] = $this->p->getProfileUser($user_id);
    $this->load->view('templates/core', $data);
  }

  function insertUser()
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required'    => '*Nama lengkap wajib diisi'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_user_admin.email]', [
      'required'    => '*Email wajib diisi',
      'valid_email' => '*Email tidak valid',
      'is_unique'   => '*Email sudah terdaftar'
    ]);
    $this->form_validation->set_rules('telepon', 'No Handphone', 'required|trim|is_unique[tb_user_admin.no_hp]', [
      'required'    => '*No handphone wajib diisi',
      'is_unique'   => '*No handphone sudah terdaftar'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', [
      'required'    => '*Password wajib diisi',
      'min_length'  => '*Password minimal 6 karakter',
      'matches'     => '*Password tidak sama'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password]', [
      'required'    => '*Password wajib diisi',
      'min_length'  => '*Password minimal 6 karakter',
      'matches'     => '*Password tidak sama'
    ]);

    if ($this->form_validation->run() == false) {

      $data['title']      = 'Form Tambah User';
      $data['breadcumb']  = 'Form Tambah User';
      $data['contents']   = 'form_add_user';

      $this->load->view('templates/core', $data);
    } else {
      $nama         = htmlspecialchars($this->input->post('nama', true));
      $telepon      = htmlspecialchars($this->input->post('telepon', true));
      $email        = htmlspecialchars($this->input->post('email', true));
      $password     = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);

      $uploadGambar   = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/profile-user/';
        $config['allowed_types']    = 'gif|jpg|png|pdf';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      } else {
        $uploadGambar = 'default-avatar.png';
      }

      $data = [
        'nama'        => $nama,
        'email'       => $email,
        'telepon'     => $telepon,
        'password'    => $password,
        'tgl_input'   => date('Y-m-d H:i:s'),
        'foto'        => $uploadGambar
      ];

      $this->db->insert('tb_user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Yeay!.</b>Berhasil, Data user sudah disimpan
    </div>');
      redirect('user');
    }
  }
}
