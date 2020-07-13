<?php
class M_pengembalian extends CI_Model
{
  function getAllData()
  {
    return $this->db->query("SELECT * FROM `tb_pengembalian`")->result_array();
  }
}
