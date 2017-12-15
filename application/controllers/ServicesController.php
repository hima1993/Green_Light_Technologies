<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class ServicesController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->model('Service_Model');
    }

public function MngAddservices(){

      

         $serviceDetail['serviceData'] = $this->Service_Model->getServices();

        $this->load->view('serviceMng',$serviceDetail);

    }

public function deleteService(){
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('service_id'=> $id);
            $this->Service_Model->deleteData('service',$where_arr);    
        }
        $serviceDetail['serviceData'] = $this->User_Model->getData($tablename='service');
        $this->load->view('serviceMng',$serviceDetail);
    }



 }