<?php defined('BASEPATH') or exit('No direct script access allowed');
class M_mobil extends CI_Model
{
  function getAllData()
  {
    return $this->db->query("SELECT * FROM `tb_mobil` ORDER BY `mobil_id` DESC")->result_array();
  }

  function getDataById($mobil_id)
  {
    return $this->db->query("SELECT * FROM `tb_mobil` WHERE `mobil_id` = '$mobil_id'")->result_array();
  }

  function getFotoMobil($mobil_id)
  {
    return $this->db->query("SELECT `tb_mobil`.`foto` FROM `tb_mobil` WHERE `tb_mobil`.`mobil_id` = '$mobil_id'")->result_array();
  }
}
