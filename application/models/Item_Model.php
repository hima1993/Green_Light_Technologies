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


    public function getMaxInvoiceid(){

        $max = $this->db->query("select max(invoice_id) as maxInvoiceid from invoice")->row()->maxInvoiceid;

        return $max;


    }


    public function getItems(){


        $res=$this->db->query("SELECT * FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id");

        return $res->result();


    }


    public function getItemsfirst4(){


        $res=$this->db->query("SELECT * FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id limit 4");

        return $res->result();


    }


    public function getNextfour(){


        $res=$this->db->query("SELECT * FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id limit 4,4");


        return $res->result();

    }


    public function getNextfouragain(){


        $res=$this->db->query("SELECT * FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id limit 8,12");


        return $res->result();

    }


    public function getitembyId($id){


        $res=$this->db->query("SELECT * FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id and purchasing_items.item_id = $id");

        return $res->result_array();
    }


    public function getserviceIdbyItemId($id){


        $res=$this->db->query("SELECT services.service_id as servId FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id and purchasing_items.item_id = $id")->row()->servId;

        return $res;
    }



    public function getcartid(){



        $res = $this->db->query("SELECT max(cart_id) as cartId from cart ")->row()->cartId;


        return $res;
    }



    public function getcart($id){



        $res=$this->db->query("SELECT * from services Left join purchasing_items ON services.service_id = purchasing_items.services_service_id LEFT JOIN services_has_cart ON services.service_id = services_has_cart.services_service_id LEFT JOIN cart ON services_has_cart.cart_cart_id = cart.cart_id WHERE cart.customer_customer_id = $id");

        return $res->result_array();





    }


    public function deleteItemfromCart($cartId,$servId,$custId){


        $res = $this->db->query("DELETE FROM services_has_cart WHERE cart_cart_id = $cartId and services_service_id = $servId");

        $res1 = $this->db->query("DELETE FROM cart WHERE cart_id = $cartId and customer_customer_id= $custId");




    }



    public function addtoHistory($id){

        $date = date('y-m-d');



        $this->db->query("INSERT INTO History ( 
						      item_id,
						      customer_id,
						      image, 
						      purchase_date, 
						     price )
						  SELECT purchasing_items.item_id,$id,purchasing_items.image,'$date',services.price from services Left join purchasing_items ON services.service_id = purchasing_items.services_service_id LEFT JOIN services_has_cart ON services.service_id = services_has_cart.services_service_id LEFT JOIN cart ON services_has_cart.cart_cart_id = cart.cart_id WHERE cart.customer_customer_id = $id");











    }





    public function getcart1Id(){



        $res=$this->db->query("SELECT cart.cart_id from services Left join purchasing_items ON services.service_id = purchasing_items.services_service_id LEFT JOIN services_has_cart ON services.service_id = services_has_cart.services_service_id LEFT JOIN cart ON services_has_cart.cart_cart_id = cart.cart_id WHERE cart.customer_customer_id = 1 ");

        return $res->result();




    }


    public function deleteq($data){



        $this->db->query("DELETE from services_has_cart where cart_cart_id in ($data)");


        $this->db->query("DELETE from cart where cart_id  in ($data)");
    }



    public function searchCategory($search_data){



        $this->db->select('Item_Category, item_id');
        $this->db->like('Item_Category', $search_data);

        return $this->db->get('purchasing_items', 10)->result();

    }



    public function searchLedsign($cat){


        $res=$this->db->query("SELECT * FROM services,purchasing_items WHERE services.service_id = purchasing_items.services_service_id and purchasing_items.Item_Category = '$cat' limit 6");

        return $res->result();




    }



    public function getServices(){


        $res=$this->db->query("SELECT * FROM services,other_services WHERE services.service_id = other_services.services_service_id");

        return $res->result();


    }



    public function updateData($tablename, $data_arr, $where_arr) {


        $this->db->update($tablename, $data_arr, $where_arr);

    }


    public function deleteData($tblName,$where){
        return $this->db->delete($tblName,$where);
    }



    public function getItemCatById($id){


        $res=$this->db->query("SELECT Item_Category as ItemCat FROM `purchasing_items` WHERE item_id =$id")->row()->ItemCat;

        return $res;




    }













}