<?php defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_inbox', 'p');
  }

  function index()
  {
    if ($this->session->userdata('user_access') == 'administrator') {
      $data['title']                  = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxPromkes();

      $this->load->view('templates_message/core', $data);
    } else {
      if ($this->session->userdata('user_access') == 'penunjang') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_inbox';
        $data['getAllInbox']            = $this->p->getAllInboxPenunjang();
        $this->load->view('templates_message/core', $data);
      }
    }
    if ($this->session->userdata('user_access') == 'keperawatan') {
      $data['title']                  = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxKeperawatan();
      $this->load->view('templates_message/core', $data);
    } else {
      if ($this->session->userdata('user_access') == 'yanmed') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_inbox';
        $data['getAllInbox']            = $this->p->getAllInboxYanmed();
        $this->load->view('templates_message/core', $data);
      }
    }
    if ($this->session->userdata('user_access') == 'umum') {
      $data['title']                  = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxUmum();
      $this->load->view('templates_message/core', $data);
    }
  }

  function getAllInboxPenunjang()
  {
    $bidang = $this->session->userdata('bidang');
    if ($bidang == 'penunjang' or $bidang = 'promkes') {
      $data['title']                    = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxPenunjang();

      $this->load->view('templates_message/core', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Maaf.</b>Anda tidak memiliki hak akses untuk melihat pesan ini
      </div>');
      redirect('dashboard');
    }
  }

  function getAllInboxYanmed()
  {
    $bidang = $this->session->userdata('bidang');
    if ($bidang == 'yanmed' or $bidang = 'promkes') {
      $data['title']                    = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxYanmed();

      $this->load->view('templates_message/core', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Maaf.</b>Anda tidak memiliki hak akses untuk melihat pesan ini
      </div>');
      redirect('dashboard');
    }
  }

  function getAllInboxKeperawatan()
  {
    $bidang = $this->session->userdata('bidang');
    if ($bidang == 'keperawatan' or $bidang = 'promkes') {
      $data['title']                    = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxKeperawatan();

      $this->load->view('templates_message/core', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Maaf.</b>Anda tidak memiliki hak akses untuk melihat pesan ini
      </div>');
      redirect('dashboard');
    }
  }

  function getAllInboxUmum()
  {
    $bidang = $this->session->userdata('bidang');
    if ($bidang == 'umum' or $bidang = 'promkes') {
      $data['title']                    = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxUmum();

      $this->load->view('templates_message/core', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Maaf.</b>Anda tidak memiliki hak akses untuk melihat pesan ini
      </div>');
      redirect('dashboard');
    }
  }

  function forwardPesan()
  {
    $id = htmlspecialchars($this->input->post('id', true));
    $bidang = htmlspecialchars($this->input->post('bidang', true));
    // $email  = htmlspecialchars($this->input->post('email', true));

    $data = [
      'bidang'      => $bidang,
      'tgl_forward' => time()
    ];
    $this->db->where('id', $id);
    $this->db->update('pesan', $data);
    $query = $this->db->get_where('pesan', ['id' => $id])->row_array();
    $bidangAlert = $query['bidang'];
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Berhasil.</b>Pesan sudah di forward ke bidang <b>' . $bidangAlert . ' </b>
    </div>');
    redirect('inbox');
  }

  function getHistoryForward()
  {
    $idPesan = $this->input->post('idPesan');
    if (isset($idPesan) and !empty($idPesan)) {
      $records = $this->p->getHistoryForward($idPesan);
      $output = '';
      foreach ($records as $i) {
        if ($i['tgl_balas'] == null) {
          $tgl_balas = 'Belum Dibalas';
        } else {
          $tgl_balas = date('d F Y | h:i:s', $i['tgl_balas']);
        }
        if ($i['tgl_selesai'] == null) {
          $tgl_selesai = 'Masih Dalam Proses';
        } else {
          $tgl_selesai = date('d F Y | h:i:s', $i['tgl_selesai']);
        }
        $output .= '
          <div class="">
            <table class="table-modal-forward">
              <tr>
                <td width="150px">Nama</td>
                <td width="50px">:</td>
                <td width="400px">' . $i['nama'] . '</td>
              </tr>
              <tr>
                <td width="150px">Email</td>
                <td width="50px">:</td>
                <td width="400px">' . $i['email'] . '</td>
              </tr>
              <tr>
                <td width="150px" style="margin-top: 0; postion: absolute;">Pesan</td>
                <td width="50px">:</td>
                <td width="400px">' . $i['pesan_masuk'] . '</td>
              </tr>
              <tr>
                <td width="150px">Status Proses</td>
                <td width="50px">:</td>
                <td width="400px">' . $i['status_proses'] . '</td>
              </tr>
              <tr>
                <td width="150px">Tanggal Masuk</td>
                <td width="50px">:</td>
                <td width="400px">' . date('d F Y | h:i:s', $i['tgl_masuk']) . '</td>
              </tr>
              <tr>
                <td width="150px">Tanggal Diforward</td>
                <td width="50px">:</td>
                <td width="400px">' . date('d F Y | h:i:s', $i['tgl_forward']) . '</td>
              </tr>
              <tr>
                <td width="150px">Tanggal Dibalas</td>
                <td width="50px">:</td>
                <td width="400px">' . $tgl_balas . '</td>
              </tr>
              <tr>
                <td width="150px">Tanggal Selesai</td>
                <td width="50px">:</td>
                <td width="400px">' . $tgl_selesai . '</td>
              </tr>
            </table>
          </div>
        ';
      }
      echo $output;
    } else {
      echo 'not founds';
    }
  }

  function getPesanById($id)
  {
    $query = $this->db->get_where('pesan', ['id' => $id])->row_array();
    $email = $query['email'];

    $data['title']                      = 'Layanan Pengaduan';
    $data['contentsMessage']            = 'detail_inbox';
    $data['getProfileUser']             = $this->p->getProfileUser($email);
    $data['getJumlahPengaduanByEmail']  = $this->p->getJumlahPengaduanByEmail($email);
    $data['getPesanById']               = $this->p->getPesanById($id);

    $this->load->view('templates_message/core', $data);
  }

  function searchPesan()
  {
    $keyword = htmlspecialchars($this->input->post('keyword', true));

    $data['title']              = $keyword;
    $data['contentsMessage']    = 'list_result';
    $data['searchPesan']        = $this->p->searchPesan($keyword);
    $this->load->view('templates_message/core', $data);
  }

  function balasPesan()
  {
    $id = htmlspecialchars($this->input->post('id', true));
    $pesan_keluar = htmlspecialchars($this->input->post('pesan_keluar', true));

    $uploadGambar   = $_FILES['foto']['name'];
    if ($uploadGambar) {
      $config['upload_path']      = './assets/img/file-pengaduan';
      $config['allowed_types']    = 'gif|jpg|png|pdf';
      $config['max_size']         = '2048';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto')) {
        $this->upload->data('file_name');
      } else {
        echo $this->upload->display_errors();
      }
    } else {
      $uploadGambar = 'no-image.png';
    }

    $data = [
      'pesan_keluar'  => $pesan_keluar,
      'file'          => $uploadGambar,
      'status_proses' => 'sedang diproses',
      'tgl_balas'     => time()
    ];

    $this->db->where('id', $id);
    $this->db->update('pesan', $data);
    // $this->wandalibs->_sendEmail('balas_inbox');
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Success.</b>Pesan sudah berhasil di balas
    </div>');
    redirect('inbox');
  }

  function fileTerkirim($file)
  {
    $query = $this->db->get_where('pesan', ['file' => $file])->row_array();
    $email = $query['email'];

    $data['title']                      = $this->input->post('nama');
    $data['contentsMessage']            = 'file_terkirim';
    $data['getProfileUser']             = $this->p->getProfileUser($email);
    $data['getJumlahPengaduanByEmail']  = $this->p->getJumlahPengaduanByEmail($email);
    $data['getFileTerkirim']            = $this->p->getFileTerkirim($file);

    $this->load->view('templates_message/core', $data);
  }

  function filePengadu($file)
  {
    $query = $this->db->get_where('pesan', ['file' => $file])->row_array();
    $email = $query['email'];

    $data['title']                      = $this->input->post('nama');
    $data['contentsMessage']            = 'file_pengadu';
    $data['getProfileUser']             = $this->p->getProfileUser($email);
    $data['getJumlahPengaduanByEmail']  = $this->p->getJumlahPengaduanByEmail($email);
    $data['getFilePengadu']             = $this->p->getFilePengadu($file);

    $this->load->view('templates_message/core', $data);
  }

  function getAllPesanByEmail($get_email)
  {
    // $get_email = $this->uri->segment(3);
    // var_dump($get_email);
    // die;
    $data['title']                = $this->session->userdata('email');
    $data['contents']             = 'list_jumlah_pengaduan_by_user';
    $data['getAllPesanByEmail']   = $this->p->getAllPesanByEmail($get_email);

    $this->load->view('templates/core', $data);
  }
}
