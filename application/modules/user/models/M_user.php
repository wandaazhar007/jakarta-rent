<?php
class M_user extends CI_Model
{

  function getAllUser()
  {
    return $this->db->query("SELECT
    tb_user_admin.*
      FROM
        tb_user_admin
      ORDER BY
        `tb_user_admin`.`id` ASC")->result_array();
  }
  function getProfileUser($id)
  {
    return $this->db->query("SELECT * FROM `tb_user_admin` WHERE `id` = '$id'")->result_array();
  }

  function countLogin($email)
  {
    return $this->db->query("SELECT
    tb_user_admin.*, 
    history_login.date_created as `last_login`,
    history_login.email
      FROM
        tb_user_admin
        INNER JOIN
        history_login
        ON 
          tb_user_admin.email = history_login.email
          WHERE history_login.email = '$email'
      ORDER BY
        tb_user_admin.id ASC")->result_array();
  }
}
