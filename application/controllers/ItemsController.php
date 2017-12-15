<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class ItemsController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->model('Item_Model');
    }


	public function adminAdditems(){

		$this->load->view('adminAddItem.php');

	} 


    public function adminAddService(){

        $this->load->view('adminAddService.php');

    } 

    public function MngAdditems(){

      

         $itemDetail['itemData'] = $this->Item_Model->getItems();

        $this->load->view('itemMng',$itemDetail);

    } 


	public function AddItems(){


                $config['upload_path'] = './uploads';
                $config['allowed_types'] = '*';
                

                $this->load->library('upload',$config);
               

                $this->upload->do_upload('file_name');

                $file_name = $this->upload->data();


                $itemCat = $_POST["ItemCategory"];



                $maxid = 0;



                $maxid = $this->Item_Model->getMaxserviceid();



                $service_array = array(

                    
                    'price'                     => $_POST['itemPrice'],
                    'service_name'                 => $_POST['itemName'],
                    'details'               => $_POST['itemDetails'],
                   

            );




                $this->User_Model->insertData($tablename="services",$service_array);


            if($itemCat == 'LED Sign Boards'){


                

            $item_array = array(

                    'services_service_id'                 => $maxid+1 ,
                    
                    'image'                     => $file_name['file_name'],
                    
                   
                    'supplier_name'                   => $_POST['supplier'],

                    'Item_Category'                =>   $itemCat, 
            );

            $this->User_Model->insertData($tablename="purchasing_items",$item_array);


             $maxitemid = $this->Item_Model->getMaxItemid();



              $leditem_array = array(

                    'purchasing_items_item_id'                 => $maxitemid ,
                    
                    
            );


            

             $this->User_Model->insertData($tablename="led_sign_boards",$leditem_array);


            $this->load->view('adminAddItem.php');


        }



        if($itemCat == 'Car Audio Systems'){


                

            $item_array = array(

                    'services_service_id'                 => $maxid+1 ,
                    
                    'image'                     => $file_name['file_name'],
                    
                   
                    'supplier_name'                   => $_POST['supplier'],

                    'Item_Category'                =>   $itemCat, 
            );

            $this->User_Model->insertData($tablename="purchasing_items",$item_array);


             $maxitemid = $this->Item_Model->getMaxItemid();



              $Caritem_array = array(

                    'purchasing_items_item_id'                 => $maxitemid ,
                    
                    
            );


            

             $this->User_Model->insertData($tablename="car_audio_system",$Caritem_array);


            $this->load->view('adminAddItem.php');


        }


         if($itemCat == 'CCTV Camera Systems'){


                

            $item_array = array(

                    'services_service_id'                 => $maxid+1 ,
                    
                    'image'                     => $file_name['file_name'],
                    
                   
                    'supplier_name'                   => $_POST['supplier'],

                    'Item_Category'                =>   $itemCat, 
            );

            $this->User_Model->insertData($tablename="purchasing_items",$item_array);


             $maxitemid = $this->Item_Model->getMaxItemid();



              $CCTVitem_array = array(

                    'purchasing_items_item_id'                 => $maxitemid ,
                    
                    
            );


            

             $this->User_Model->insertData($tablename="cctv_camera",$CCTVitem_array);


            $this->load->view('adminAddItem.php');


        }


        if($itemCat == 'Vehicle Security Systems'){


                

            $item_array = array(

                    'services_service_id'                 => $maxid+1 ,
                    
                    'image'                     => $file_name['file_name'],
                    
                   
                    'supplier_name'                   => $_POST['supplier'],

                    'Item_Category'                =>   $itemCat, 
            );

            $this->User_Model->insertData($tablename="purchasing_items",$item_array);


             $maxitemid = $this->Item_Model->getMaxItemid();



              $vehiitem_array = array(

                    'purchasing_items_item_id'                 => $maxitemid ,
                    
                    
            );


            

             $this->User_Model->insertData($tablename="vehicle_security_system",$vehiitem_array);


            $this->load->view('adminAddItem.php');


        }
     



    }


    public function addService(){


           $config['upload_path'] = './uploads';
                $config['allowed_types'] = '*';
                

                $this->load->library('upload',$config);
               

                $this->upload->do_upload('file_name');

                $file_name = $this->upload->data();





                $maxid = 0;



                $maxid = $this->Item_Model->getMaxserviceid();

               



                $service_array = array(

                    
                    'price'                     => $_POST['itemPrice'],
                    'service_name'                 => $_POST['itemName'],
                    'details'               => $_POST['servDetails'],
                   

            );




                $this->User_Model->insertData($tablename="services",$service_array);




            $serv_array = array(

                    'services_service_id'                 => $maxid+1 ,
                    
                    'image'                     => $file_name['file_name'],
                    
                   
                    

                    'service_provider'                =>   $_POST['supplier'], 
            );

            $this->User_Model->insertData($tablename="other_services",$serv_array);
            $this->load->view('adminAddService.php');



    }


   public function deleteItem(){
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('item_id'=> $id);
            $this->User_Model->deleteData('item',$where_arr);    
        }
        $itemDetail['itemData'] = $this->User_Model->getData($tablename='item');
        $this->load->view('itemMng',$itemDetail);
    }


    


}
