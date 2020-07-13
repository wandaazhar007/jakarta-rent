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

  function profileUser($id)
  {
    $data['title']      = $this->session->userdata('nama');
    $data['breadcumb']  = $this->session->userdata('nama');
    $data['contents']   = 'profile_user';
    $data['getProfileUser'] = $this->p->getProfileUser($id);
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
    $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|trim|is_unique[tb_user_admin.no_hp]', [
      'required'    => '*No handphone wajib diisi',
      'is_unique'   => '*No handphone sudah terdaftar'
    ]);
    $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
      'required'    => '*Bidang user wajib diisi'
    ]);
    $this->form_validation->set_rules('user_access', 'Hak akses', 'required', [
      'required'    => '*Hak akses user wajib diisi'
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
      $no_hp        = htmlspecialchars($this->input->post('no_hp', true));
      $email        = htmlspecialchars($this->input->post('email', true));
      $bidang       = htmlspecialchars($this->input->post('bidang', true));
      $user_access  = htmlspecialchars($this->input->post('user_access', true));
      $password     = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);

      $uploadGambar   = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/';
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
        'no_hp'       => $no_hp,
        'password'    => $password,
        'bidang'      => $bidang,
        'user_access' => $user_access,
        'password'    => $password,
        'date_created' => time(),
        'active'      => 'tidak aktif',
        'foto'        => $uploadGambar
      ];

      if (!function_exists('random_bytes')) {
        function random_bytes($length = 6)
        {
          $characters = '0123456789';
          $characters_length = strlen($characters);
          $output = '';
          for ($i = 0; $i < $length; $i++)
            $output .= $characters[rand(0, $characters_length - 1)];

          return $output;
        }
      }
      $token = base64_encode(random_bytes(32));
      $dataToken = [
        'nama'              => $nama,
        'email'             => $email,
        'token'             => $token,
        'date_created'      => time()
      ];
      $this->wandalibs->_sendEmail($token, 'verify');
      $this->db->insert('form_token', $dataToken);
      $this->db->insert('tb_user_admin', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Berhasil.</b>Silahkan cek email ' . $email . ' untuk proses verifikasi
    </div>');
      redirect('user');
    }
  }
}
