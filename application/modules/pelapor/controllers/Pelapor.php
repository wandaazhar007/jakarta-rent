<?php defined('BASEPATH') or exit('no direct script access allowed');

class Pelapor extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_pelapor', 'p');
    $this->load->library('form_validation');
    $this->load->library('datatables');
    // $this->wandalibs->_checkLoginSession();
  }

  function index()
  {
    $data['title']              = 'Data Pelapor';
    $data['contents']           = 'list_pelapor';
    $data['getAllDataPelapor']  = $this->p->getAllDataPelapor();

    $this->load->view('templates/core', $data);
  }

  function getDetailPelaporResult()
  {
    $skduData = $this->input->post('skduData');
    if (isset($skduData) and !empty($skduData)) {
      $records = $this->m_f_skdu->get_search_skdu($skduData);
      $output = '';

      foreach ($records->result_array() as $row) {
        $output .= '
        <form role="form" action="' . base_url('user/insertUser') . '" method="post">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="' . $row['nama'] . '">
              <small class="text-danger">' . form_error('nama') . '</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Email</label>
              <input type="text" name="email" class="form-control" placeholder="Email" value="' . $row['email'] . '">
              <small class="text-danger">' . form_error('email') . '</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">No Handphone</label>
              <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" value="' . $row['no_hp'] . '">
              <small class="text-danger">' . form_error('no_hp') . '</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Hak Akses</label>
              <input type="text" name="user_access" class="form-control" placeholder="Hak Akses">
              <small class="text-danger">' . form_error('user_access') . '</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password">
              <small class="text-danger">' . form_error('password') . '</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Ulangi Password</label>
              <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
              <small class="text-danger">' . form_error('password2') . '</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Upload Foto</label>
              <input type="file" name="foto" class="" placeholder="">
            </div>
          </div>
          <div class="modal-footer pull-right">
            <button type="submit" class="btn btn-tosca btn-outline-light">Simpan</button>
          </div>
        </div>
      </form>  
        ';
      }
      echo $output;
    } else {
      echo 'not found';
    }
  }

  function detail($id)
  {
    $data['title']              = 'Data Pelapor';
    $data['contents']           = 'list_pelapor';
    $data['getAllPelaporById']  = $this->p->getAllPelaporById($id);

    $this->load->view('templates/core', $data);
  }

  function getFotoProfile($id)
  {
    $data['title']    = $this->session->userdata('nama');
    // $data['contents'] = 'detail_foto_profile';
    $data['getFotoProfile'] = $this->p->getFotoProfile($id);

    $this->load->view('detail_foto_profile', $data);
  }

  function getAllTablePelapor()
  {

    $list = $this->p->datatables_getAllTablePelapor();
    $getAllDataPelapor = $this->p->getAllDataPelapor();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $value) {
      foreach ($getAllDataPelapor as $u) :
        $foto =  '<a href="' . base_url('pelapor/getFotoProfile/') . $value['id'] . '" data-toggle="lightbox"><img src="' . base_url() . 'assets/img/profile-user/' . $value['foto'] . '" style="width: 50px; height: 50px;"></a>';

        if ($this->session->userdata('user_access') == 'user') {
          $queryAction = '<a href="#">
      <button class="btn btn-xs btn-info" id="tombol-edit" data-toggle="modal" data-target="#modal-secondary"><i class="fa fa-edit"></i>&nbsp;Edit</button>
      </a>';
        } else {
          $queryAction = '<a href="#">
        <button class="btn btn-xs btn-info view_data" id="' . $u['id'] . '"><i class="fa fa-edit"></i>&nbsp;Edit</button>
        </a>';
        }
      endforeach;


      $row = array();
      $row[] = $no++;
      $row[] = $value['nama'];
      $row[] = $value['no_hp'];
      $row[] = $value['email'];
      $row[] = $foto;
      $action = $queryAction;
      $row[] = $action;
      $data[] = $row;
    }
    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->p->countAll(),
      "recordsFiltered" => $this->p->countFiltered(),
      "data" => $data
    );
    echo json_encode($output);
  }
}
