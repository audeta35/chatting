<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	function getAll($where="")
	{
		if($where) $this->db->where($where);
		return $this->db->get("user");
	}
}
