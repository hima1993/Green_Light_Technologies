<?php

class User_Model extends CI_Model{



	public function userAuth($userInfo){

		$this->db->select('email,password');
		$result = $this->db->get_where('system_users',$userInfo);



		if($result->num_rows == 1){
			$currentUser = $result->result_array()[0];

            $columnArray = array('user_id');



            //print_r($currentUser);
            //die();

            $data = $this->getData($tablename='user',$columns_arr =$columnArray , $where_arr =$currentUser);
            //return true;
            
		return  $data;
		}
		else{
			return false;
		}
	}


	public function verifylog($username,$password){


	    $this->db->where('email', $username);
    	$this->db->where('password', $password);
    	$q = $this->db->get('system_users');

       


				
		if($q->num_rows() == 1){


             return $q->result();

		

		
		}

		else{

			return false;

		}
	}

	public function getData($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {


		$limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';
                var_dump($orderby);
                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
					var_dump($orderbyString);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();
             
            return $query->result();
        }
    }



    //this method insert data into a given table
    function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }


    public function deleteData($tblName,$where){
      return $this->db->delete($tblName,$where);
    }


    public function updateData($tablename, $data_arr, $where_arr) {
        try {




            $this->db->update($tablename, $data_arr, $where_arr);
           
        } catch (Exception $err) {

            return $err->getMessage();
        }
    }

}