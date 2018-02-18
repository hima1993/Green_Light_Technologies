<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Users extends CI_Controller {



    function __construct(){
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->model('Item_Model');
    }


    public function index()
    {



        $itemDetail['itemData'] = $this->Item_Model->getItemsfirst4();
        $itemDetail['itemData8'] = $this->Item_Model->getNextfour();
        $itemDetail['itemData9'] = $this->Item_Model->getNextfouragain();


        $this->load->view('home.php',$itemDetail);

    }



    public function loginchk(){






        $res = $this->User_Model->verifylog($this->input->post('email'),$this->input->post('password'));

        if($res !== false){

            $loggerbit = $res[0]->valid_bit;

            if($loggerbit == 0){



                $name = $res[0]->first_name;
                $id = $res[0]->user_id;



                $the_session = array("loggername"=>$name,"loggerid"=>$id);
                $this -> session -> set_userdata($the_session);

                $this->load->view("adminHome");

            }
            else{




                $name = $res[0]->first_name;

                $id = $res[0]->user_id;




                $the_session = array("loggername"=>$name,"loggerid"=>$id);
                $this -> session -> set_userdata($the_session);


                redirect("Users");


            }


        }

        else{
            echo "
                <div>
                <center>
                    <h1 style='color: #9f191f'>Wrong Username or Password</h1>
                    <h3 style='color: #398439'>Try again!</h3>
                 </center>
                 </div>
                 ";
            $this->load->view('login_view');
        }




    }


    public function goBack(){


        $this->load->view('transaction_view1');


    }

    public function GoReg(){


        $this->load->view('registerForm');


    }


    public function GoUserMng(){



        $data['userData'] = $this->User_Model->getData($tablename='user');
        $this->load->view("UserMng",$data);



    }



    public function RegCustomer(){




        $user_array = array(

            'title'                  => $_POST['Title'],
            'first_name'                  => $_POST['Fname'],
            'last_name'               => $_POST['Lname'],
            'email'               => $_POST['Email'],
            'password'               => md5($_POST['Password']),
            'valid_bit'            => 1

        );


        $this->User_Model->insertData($tablename="system_users", $user_array);

        $userId = $this->User_Model->getmaxUserId();







        $customer_array = array(


            'dob'               =>date('Y-m-d', strtotime($_POST['Dob'])),
            'address_line1'               => $_POST['Address1'],
            'addressline_2'               => $_POST['Address2'],
            'city'               => $_POST['City'],
            'postal_code'               => $_POST['Zip'],
            'additional_info'               => $_POST['textArea'],
            'phone_number'               => $_POST['phone'],
            'enrole_date'               => date('y-m-d'),
            'system_users_user_id'    => $userId



        );

        $res=$this->User_Model->insertData($tablename="customer",$customer_array);

        redirect('/Users');










    }

    public function AdminRegCustomer(){




        $customer_array = array(

            'title'                  => $_POST['Title'],
            'firstname'                  => $_POST['Fname'],
            'lastname'               => $_POST['Lname'],
            'email'               => $_POST['Email'],
            'password'               => $_POST['Password'],
            'date_of_birth'               =>date('Y-m-d', strtotime($_POST['Dob'])),
            'address_line1'               => $_POST['Address1'],
            'address_line2'               => $_POST['Address2'],
            'city'               => $_POST['City'],
            'postal_code'               => $_POST['Zip'],
            'additional_information'               => $_POST['textArea'],
            'phone'               => $_POST['phone'],
            'enrolled_date'               => date('y-m-d'),
            'valid_bit'               => 1,


        );

        $res=$this->User_Model->insertData($tablename="user",$customer_array);

        redirect('/Users/adminAdduser');










    }


    public function signout(){
        session_unset();
        redirect(base_url()); //redirect to login
    }

    public function adminAddUser(){

        $this->load->view('adminAddUser');


    }

    public function deleteUser(){
        foreach($_POST['checkbox'] as $id){
            $where_arr = array('user_id'=> $id);
            $this->User_Model->deleteData('user',$where_arr);
        }
        $custDetail['userData'] = $this->User_Model->getData($tablename='user');
        $this->load->view('userMng',$custDetail);
    }


    public function updateUser(){

        $where_arr = array('user_id'=>$this->input->post('UserID'));

        $data = array(
            'title' => $this->input->post('title'),
            'firstname' => $this->input->post('Fname'),
            'lastname' => $this->input->post('Lname'),
            'address_line1' => $this->input->post('Address1'),
            'address_line2' => $this->input->post('Address2'),
            'city' => $this->input->post('City'),
            'phone' => $this->input->post('phone'),
        );
        $this->User_Model->updateData('user',$data, $where_arr);

        $data['userData'] = $this->User_Model->getData($tablename='user');
        $this->load->view("userMng",$data);
    }



    public function goAdmin(){


         $this->load->view("adminhome");
    }



}