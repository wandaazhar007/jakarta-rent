<?php defined('BASEPATH') or exit('No direct script allowed');
class M_peminjaman extends CI_Model
{
  function getAllData()
  {
    return $this->db->query("SELECT * FROM `tb_pengembalian`")->result_array();
  }
}
