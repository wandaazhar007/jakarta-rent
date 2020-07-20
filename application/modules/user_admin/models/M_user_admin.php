<?php
class M_user_admin extends CI_Model
{

  function getAllUser()
  {
    return $this->db->query("SELECT * FROM `tb_user_admin` ORDER BY `tb_user_admin`.`id` DESC")->result_array();
  }

  function datatables_getAllTableUserAdmin()
  {
    $column_order   = ['id', 'nama'];
    $column_search  = ['id', 'nama'];
    $def_order      = ['id' => 'desc'];

    $this->sql_user_admin();
    $this->query_datatables($column_order, $column_search, $def_order);
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result_array();
  }

  function sql_user_admin()
  {
    $this->db->select("id,nama,no_hp,foto,email,date_created,user_access", false)
      ->from("tb_user_admin");
    $this->db->order_by("id", "desc");
  }

  function query_datatables($column_order, $column_search, $def_order)
  {
    $i = 0;
    foreach ($column_search as $item) {
      if ($_POST['search']['value']) {
        if ($i === 0) {
          $this->db->group_start();
          $this->db->like($item, $_POST['search']['value']);
        } else {
          $this->db->or_like($item, $_POST['search']['value']);
        }

        if (count($column_search) - 1 == $i)
          $this->db->group_end();
      }
      $i++;
    }

    if (isset($_POST['order'])) {
      $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } else if (isset($order)) {
      $order = $def_order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  public function countAll()
  {
    $this->sql_user_admin();
    return $this->db->count_all_results();
  }

  function countFiltered()
  {
    $column_order       = ['id', 'nama', 'no_hp'];
    $column_search      = [
      'id',
      'nama',
      'email'
    ];
    $def_order          = ['id' => 'asc'];

    $this->sql_user_admin();
    $this->query_datatables($column_order, $column_search, $def_order);
    $query = $this->db->get();
    return $query->num_rows();
  }

  function getFotoProfile($id)
  {
    return $this->db->query("SELECT * FROM `tb_user_admin` WHERE `tb_user_admin`.`id` = '$id'")->result_array();
  }

  function countLogin($email)
  {
    return $this->db->query("SELECT
    `tb_user_admin`.*, 
    `history_login`.`date_created` as `last_login`,
    `history_login`.`email`
      FROM
        tb_user_admin
        INNER JOIN
        `history_login`
        ON 
          `tb_user_admin`.`email` = `history_login`.`email`
          WHERE `history_login`.`email` = '$email'
      ORDER BY
        `tb_user_admin_`.`id` ASC")->result_array();
  }

  function getFormEdit($id)
  {
    $this->db->select('*');
    $this->db->where('id', $id);
    $res2 = $this->db->get('tb_user_admin')->result_array();
    return $res2;
  }
}
