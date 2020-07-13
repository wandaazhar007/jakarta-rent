<?php

class M_inbox extends CI_Model
{

  // function getAllInboxPromkes()
  // {
  //   return $this->db->query("SELECT 
  //                           `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar` , `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai` 
  //                           FROM `pesan` 
  //                           WHERE `pesan`.`pesan_masuk` IS NOT NULL
  //                           ORDER BY `pesan`.`id` 
  //                           DESC")->result_array();
  // }

  function getAllInboxPenunjang()
  {
    return $this->db->query("SELECT
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar` , `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai` 
                            FROM `pesan` 
                            WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`bidang` = 'penunjang'
                            ORDER BY `pesan`.`id` 
                            DESC")->result_array();
  }

  function getAllInboxKeperawatan()
  {
    return $this->db->query("SELECT
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar` , `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai` 
                            FROM `pesan` 
                            WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`bidang` = 'keperawatan'
                            ORDER BY `pesan`.`id` 
                            DESC")->result_array();
  }

  function getAllInboxYanmed()
  {
    return $this->db->query("SELECT
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar` , `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai` 
                            FROM `pesan` 
                            WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`bidang` = 'yanmed'
                            ORDER BY `pesan`.`id` 
                            DESC")->result_array();
  }


  function getAllInboxUmum()
  {
    return $this->db->query("SELECT
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar` , `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai` 
                            FROM `pesan` 
                            WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`bidang` = 'umum'
                            ORDER BY `pesan`.`id` 
                            DESC")->result_array();
  }

  function getFormForward($idPesan)
  {
    $this->db->select('*');
    $this->db->where('id', $idPesan);
    $res2 = $this->db->get('pesan')->result_array();
    return $res2;
  }

  function getHistoryForward($idPesan)
  {
    $this->db->select('*');
    $this->db->where('id', $idPesan);
    $res2 = $this->db->get('pesan')->result_array();
    return $res2;
  }

  function getPesanById($id)
  {
    return $this->db->query("SELECT `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`pesan_masuk`, `pesan`.`pesan_keluar`, `pesan`.`tgl_masuk`, `pesan`.`tgl_balas`, `pesan`.`subject`, `pesan`.`file`, `pesan`.`file_pengadu` FROM `pesan` WHERE `id` = '$id'")->result_array();
  }

  function getProfileUser($email)
  {
    return $this->db->query("SELECT `tb_user`.`id`, `tb_user`.`nama`, `tb_user`.`email`, `tb_user`.`no_hp`, `tb_user`.`date_created`, `tb_user`.`foto` FROM `tb_user` WHERE `email` = '$email'")->result_array();
  }

  function getJumlahPengaduanByEmail($email)
  {
    return $this->db->query("SELECT * FROM `pesan` WHERE `email` = '$email'")->num_rows();
  }

  function searchPesan($keyword)
  {
    return $this->db->query("SELECT 
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`
                            FROM `pesan`
                            WHERE `pesan`.`email` 
                            LIKE '%$keyword%'
                            OR `pesan`.`nama`
                            LIKE '%$keyword%'
                            OR `pesan`.`pesan_masuk`
                            LIKE '%$keyword%'
                            OR `pesan`.`bidang`
                            LIKE '%$keyword%'
                            OR `pesan`.`tgl_masuk`
                            LIKE '%$keyword%' ")->result_array();
  }

  function getFileTerkirim($file)
  {
    return $this->db->query("SELECT `pesan`.`file`, `pesan`.`nama`, `pesan`.`email` FROM `pesan` WHERE `file` = '$file'")->result_array();
  }
  function getFilePengadu($file)
  {
    return $this->db->query("SELECT `pesan`.`file_pengadu`, `pesan`.`nama`, `pesan`.`email` FROM `pesan` WHERE `file_pengadu` = '$file' LIMIT 1")->result_array();
  }


  function getAllInboxPromkes()
  {
    $this->load->library('pagination'); // Load library pagination

    $query = "SELECT 
              `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar` , `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai` 
              FROM `pesan` 
              WHERE `pesan`.`pesan_masuk` IS NOT NULL
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['num_links'] = 5;

    // Style Pagination
    // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap

    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    // End style pagination

    $this->pagination->initialize($config); // Set konfigurasi pagination

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']     = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); // Generate link pagination sesuai config diatas
    $data['inbox']     = $this->db->query($query)->result_array();

    return $data;
  }

  function getAllPesanByEmail($get_email)
  {
    return $this->db->query("SELECT 
                             `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 30) as `inbox`, `pesan`.`pesan_keluar` , `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai` 
                             FROM `pesan` 
                             WHERE `pesan`.`email` = '$get_email'
                             ORDER BY `pesan`.`id` 
                             DESC")->result_array();
  }
}
