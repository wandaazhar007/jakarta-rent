<?php
class M_user extends CI_Model
{

  function getAllUser()
  {
    return $this->db->query("SELECT * FROM `tb_user` ORDER BY `tb_user`.`user_id` ASC")->result_array();
  }
  function getProfileUser($user_id)
  {
    return $this->db->query("SELECT * FROM `tb_user` WHERE `tb_user`.`user_id` = '$user_id'")->result_array();
  }

  function countLogin($email)
  {
    return $this->db->query("SELECT
    `tb_user`.*, 
    `history_login`.`date_created` as `last_login`,
    `history_login`.`email`
      FROM
        tb_user
        INNER JOIN
        `history_login`
        ON 
          `tb_user`.`email` = `history_login`.`email`
          WHERE `history_login`.`email` = '$email'
      ORDER BY
        `tb_user_`.`id` ASC")->result_array();
  }
}
