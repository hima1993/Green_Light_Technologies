<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class ItemsController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->model('Item_Model');
        $this->load->library('paypal_lib');
    }


    public function adminAdditems(){

        $this->load->view('adminAddItem.php');

    }


    public function deleteItemfromCart(){




        $itemId = $_POST["itemId"];
        $cartId = $_POST["cartId"];


        $serviceId = $this->Item_Model->getserviceIdbyItemId((int)$itemId);


        $id = $this->session->userData('loggerid');


        $loggerid = $this->User_Model->getCustomerIdbyUserId((int)$id);



        $this->Item_Model->deleteItemfromCart((int)$cartId,(int)$serviceId,(int)$loggerid);









    }



    public function showCart(){






        $id = $this->session->userData('loggerid');


        $loggerid = $this->User_Model->getCustomerIdbyUserId((int)$id);




        $cartDetails['cartData'] = $this->Item_Model->getcart((int)$loggerid);




        $this->load->view('cart.php',$cartDetails);








    }


    public function buy(){


        $amount = $_POST["total"];

        $id = $this->session->userData('loggerid');


        $loggerid = $this->User_Model->getCustomerIdbyUserId((int)$id);


        $max = $this->Item_Model->getcart1Id();

        $stack = array();

        for ($i=0; $i < sizeof($max) ; $i++) {

            $car =  $max[$i]->cart_id ;


            array_push($stack, $car);

        }

        $array = implode(",", $stack);


        $this->Item_Model->deleteq($array);






        $data['customer_customer_id'] = $loggerid;

        $data['invoice_value'] = $amount;
        $data['invoice_date'] =date('y-m-d');

        $data['payement_status']    = "success";


        $this->User_Model->insertData($tablename="invoice",$data);

        $maxid = $this->Item_Model->addtoHistory((int)$loggerid);




        //Set variables for paypal form
        $returnURL = base_url().'paypal/success'; //payment success url
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
        //get particular product data



        $userID = $loggerid; //current user id
        $logo = base_url().'assets/images/codexworld-logo.png';

        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        //$this->paypal_lib->add_field('item_name', $product['name']);
        $this->paypal_lib->add_field('custom', $userID);
        //$this->paypal_lib->add_field('item_number',  $product['id']);
        $this->paypal_lib->add_field('amount', $amount);
        $this->paypal_lib->image($logo);




        $this->paypal_lib->paypal_auto_form();






    }


    public function adminAddService(){

        $this->load->view('adminAddService.php');

    }

    public function MngAdditems(){



        $itemDetail['itemData'] = $this->Item_Model->getItems();

        $this->load->view('itemMng',$itemDetail);

    }



    public function MngAddservice(){



        $itemDetail['serviceData'] = $this->Item_Model->getServices();

        $this->load->view('adminMngService',$itemDetail);

    }















    public function AddItems(){


        $config['upload_path'] = './uploads';
        $config['allowed_types'] = '*';


        $this->load->library('upload',$config);


        $this->upload->do_upload('file_name');

        $file_name = $this->upload->data();


        $itemCat = $_POST["ItemCategory"];



        $maxid = 0;



       



        $service_array = array(


            'price'                     => $_POST['itemPrice'],
            'service_name'                 => $_POST['itemName'],
            'details'               => $_POST['itemDetails'],


        );




        $this->User_Model->insertData($tablename="services",$service_array);
         $maxid = $this->Item_Model->getMaxserviceid();


        if($itemCat == 'LED Sign Boards'){




            $item_array = array(

                'services_service_id'                 => $maxid ,

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

                'services_service_id'                 => $maxid ,

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

                'services_service_id'                 => $maxid ,

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

                'services_service_id'                 => $maxid ,

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


    public function viewItem(){


        $id = $_POST["id"];


        $data["itemdetails"] = $this->Item_Model->getitembyId((int)$id);

        echo json_encode(array("data"=>$data));




    }


    public function addtocart(){


        $loggerId = $_POST["id"];

        $itemId = $_POST["itemId"];


        $customId = $this->User_Model->getCustomerIdbyUserId((int)$loggerId);


        $serviceId = $this->Item_Model->getserviceIdbyItemId((int)$itemId);



        $cart_array = array(

            'customer_customer_id'                 => $customId ,

        );



        $this->User_Model->insertData($tablename="cart",$cart_array);


        $cartId = $this->Item_Model->getcartid();






        $servcart_array = array(

            'services_service_id'                 =>  $serviceId ,


            'cart_cart_id'                 => $cartId,


        );




        $this->User_Model->insertData($tablename="services_has_cart", $servcart_array);



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






    public function searchList(){




        $search_data = $this->input->post('search_data');

        $result = $this->Item_Model->searchCategory($search_data);

        if (!empty($result))
        {
            foreach ($result as $row):

                $cat = $row->Item_Category;

                if($cat == "LED Sign Boards"){
                    echo "<li><a href='".base_url()."index.php/ItemsController/GoLed'>" . $row->Item_Category . "</a></li>";

                }



                elseif ($cat == "Car Audio Systems") {


                    echo "<li><a href='".base_url()."index.php/ItemsController/GoCarAudi'>" . $row->Item_Category . "</a></li>";

                }elseif ($cat == "CCTV Camera Systems") {


                    echo "<li><a href='".base_url()."index.php/ItemsController/GoCCTV'>" . $row->Item_Category . "</a></li>";

                }elseif ($cat == "Vehicle Security Systems") {


                    echo "<li><a href='".base_url()."index.php/ItemsController/GovehiSec'>" . $row->Item_Category . "</a></li>";

                }




            endforeach;
        }
        else
        {
            echo "<li> <em> Not found ... </em> </li>";
        }




    }


    public function GoLed(){


        $itemDetail['itemData'] = $this->Item_Model->searchLedsign("LED Sign Boards");
        //$itemDetail['itemData1'] = $this->Item_Model->getNextfour();
        //$itemDetail['itemData2'] = $this->Item_Model->getNextfouragain();

        $this->load->view('ledSignBoards',$itemDetail);

    }


    public function GoCarAudi(){


        $itemDetail['itemData'] = $this->Item_Model->searchLedsign("Car Audio Systems");
        //$itemDetail['itemData1'] = $this->Item_Model->getNextfour();
        //$itemDetail['itemData2'] = $this->Item_Model->getNextfouragain();

        $this->load->view('carAudi',$itemDetail);

    }



    public function GoCCTV(){


        $itemDetail['itemData'] = $this->Item_Model->searchLedsign("CCTV Camera Systems");
        //$itemDetail['itemData1'] = $this->Item_Model->getNextfour();
        //$itemDetail['itemData2'] = $this->Item_Model->getNextfouragain();

        $this->load->view('cctvItems',$itemDetail);

    }


    public function GovehiSec(){


        $itemDetail['itemData'] = $this->Item_Model->searchLedsign("Vehicle Security Systems");
        //$itemDetail['itemData1'] = $this->Item_Model->getNextfour();
        //$itemDetail['itemData2'] = $this->Item_Model->getNextfouragain();

        $this->load->view('vehisec',$itemDetail);

    }


    public function Gospecial(){


        $itemDetail['itemData'] = $this->Item_Model->searchLedsign("LED Sign Boards");
        //$itemDetail['itemData1'] = $this->Item_Model->getNextfour();
        //$itemDetail['itemData2'] = $this->Item_Model->getNextfouragain();

        $this->load->view('ledSignBoardsspecial',$itemDetail);

    }



    public function updateItem(){




        $itemId = $this->input->post('UserID');



        $where_arr = array('item_id'=>$itemId);


        $serviceId = $this->Item_Model->getserviceIdbyItemId((int)$itemId);




        $config['upload_path']='./uploads';
        $config['allowed_types']='*';
        $this->load->library('upload',$config);
        $this->upload->do_upload('file_name');
        $file_name=$this->upload->data();








        $item_array = array(

            'services_service_id'                 => $serviceId,

            'image'                     => $file_name['file_name'],


            'supplier_name'                   => $_POST['supp'],

            'Item_Category'                =>   $_POST['ItemCategory'],
        );


        $this->Item_Model->updateData('purchasing_items',$item_array , $where_arr);



        $where_arr1 = array('service_id'=>$serviceId);




        $service_array = array(


            'price'                     => $_POST['price'],
            'service_name'                 => $_POST['title'],
            'details'               => $_POST['phone'],


        );



        $this->Item_Model->updateData('services',$service_array , $where_arr1);

        $itemDetail['itemData'] = $this->Item_Model->getItems();

        $this->load->view('itemMng',$itemDetail);



    }



    public function deleteItem(){





        foreach($_POST['checkbox'] as $id){


            $serviceId = $this->Item_Model->getserviceIdbyItemId((int)$id);
            $where_arr = array('item_id'=>$id);

            $itemcat = $this->Item_Model->getItemCatById((int)$id);

            if($itemcat == "LED Sign Boards"){

                $where_arr2 = array('purchasing_items_item_id'=>$id);
                $this->Item_Model->deleteData('led_sign_boards',$where_arr2);




            }elseif($itemcat == "Car Audio Systems"){

                $where_arr2 = array('purchasing_items_item_id'=>$id);
                $this->Item_Model->deleteData('car_audio_system',$where_arr2);




            }elseif($itemcat == "Vehicle Security Systems"){

                $where_arr2 = array('purchasing_items_item_id'=>$id);
                $this->Item_Model->deleteData('vehicle_security_system',$where_arr2);




            }elseif($itemcat == "CCTV Camera Systems"){

                $where_arr2 = array('purchasing_items_item_id'=>$id);
                $this->Item_Model->deleteData('cctv_camera',$where_arr2);




            }



            $this->Item_Model->deleteData('purchasing_items',$where_arr);

            $where_arr1 = array('service_id'=>$serviceId);
            $this->Item_Model->deleteData('services',$where_arr1);


        }


        $itemDetail['itemData'] = $this->Item_Model->getItems();

        $this->load->view('itemMng',$itemDetail);



    }



    public function searchGo(){


        $cat = $this->input->post('items');





        if($cat=="LED SIGN BOARDS"){

            redirect("ItemsController/GoLed");





        }elseif($cat=="CAR AUDIO SYSTEMS") {



            redirect("ItemsController/GoCarAudi");




        }elseif ($cat=="CCTV CAMERA SYSTEMS") {


            redirect("ItemsController/GoCCTV");






        }elseif($cat=="VEHICLE SECURITY SYSTEMS") {


            redirect("ItemsController/GovehiSec");




        }









    }
















}
