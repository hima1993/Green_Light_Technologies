<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Other extends CI_Controller {



	public function GoAbout(){

		$this->load->view("aboutus");
	}

	public function GoDelivery(){


		$this->load->view("delivery");

	}

	public function GoOther(){

		$this->load->view("otherDetail");

	}


}