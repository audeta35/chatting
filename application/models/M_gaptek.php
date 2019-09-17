<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class M_gaptek extends CI_Model {

    public function get_where($table, $record)
    {
      return $this->db->get_where($table, $record);
    }

    public function get_query($query)
    {
      return $this->db->query($query);
    }

    public function insert($table, $data)
    {
      $this->db->insert($table, $data);
    }
  }
