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



    public function GofeedBack(){


        $this->load->view("feedBack");




    }


    public function submitFeedBack(){

        $this->load->model('User_Model');




        $feed_array = array(


            'CustomerName'                     => $_POST['Lname'],
            'feedBack'                 => $_POST['textArea'],
            'date'               => date('y-m-d'),


        );




        $this->User_Model->insertData($tablename="feedback",$feed_array);
        $this->load->view("feedBack");




    }



    public function adminFeed(){


        $this->load->model('User_Model');


        $data["feedData"] =  $this->User_Model->getData("feedback");

        $this->load->view("adminFeedBack",$data);












    }



    public function GoDesLed(){


        $this->load->view("desled");



    }

    public function GoDesCar(){


        $this->load->view("descar");



    }

    public function GoDesvehi(){


        $this->load->view("desvehi");



    }

    public function GoDesOther(){


        $this->load->view("desother");



    }


    public function GoDescctv(){


        $this->load->view("descctv");



    }


}