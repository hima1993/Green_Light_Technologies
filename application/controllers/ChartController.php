<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class ChartController extends CI_Controller{

    function __construct(){
        parent::__construct();


        $this->load->model('chart_model');
        $this->load->model('User_Model');
        $this->load->model('Item_Model');

        $this->load->library('pagination');

    }



    public function linechart(){


        $data2['custNum'] = $this->chart_model->getMonthwiseCust();

        echo json_encode(array("data2"=>$data2));


    }


    public function pieChart(){

        $data['led'] = $this->chart_model->getItemscount("led_sign_boards","led_sign_boards_id");
        $data['carAudio'] = $this->chart_model->getItemscount("car_audio_system","car_audio_system_id");
        $data['vehiSec'] = $this->chart_model->getItemscount("vehicle_security_system","vehicle_security_system_id");
        $data['cctv'] = $this->chart_model->getItemscount("cctv_camera","cctv_camera_id");


        echo json_encode(array("data"=>$data));







    }


    public function barchart(){


        $data2['custNum1'] = $this->chart_model->getMonthwisesales();

        echo json_encode(array("data2"=>$data2));


    }







}
