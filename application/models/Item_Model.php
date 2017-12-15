<?php

class Item_Model extends CI_Model{



	public function getMaxserviceid(){

		$max = $this->db->query("select max(service_id) as maxServeid from services")->row()->maxServeid;

		return $max;


	}


	public function getMaxItemid(){

		$max = $this->db->query("select max(item_id) as maxItemid from purchasing_items")->row()->maxItemid;

		return $max;


	}


	public function getItems(){


		$res=$this->db->query("SELECT * FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id");

		return $res->result();


	}







}