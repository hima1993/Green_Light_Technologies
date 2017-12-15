<?php

class Service_Model extends CI_Model{

public function getServices(){


		$res=$this->db->query("SELECT * FROM services");

		return $res->result();


	}

public function deleteData($tblName,$where){
      return $this->db->delete($tblName,$where);
    }

}