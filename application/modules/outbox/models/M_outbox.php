<?php

class M_outbox extends CI_Model
{
  function getAllOutboxPromkes()
  {
    return $this->db->query("SELECT 
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_keluar`, 70) as `outbox`, `pesan`.`tgl_masuk` 
                            FROM `pesan`
                            WHERE `pesan`.`pesan_keluar` IS NOT NULL
                            ORDER BY `id` 
                            DESC")->result_array();
  }

  function getAllOutbox($bidang)
  {
    return $this->db->query("SELECT 
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_keluar`, 70) as `outbox`, `pesan`.`tgl_masuk` 
                            FROM `pesan` WHERE `pesan`.`bidang` = '$bidang' 
                            ORDER BY `id` 
                            DESC")->result_array();
  }
}
