<?php


class chart_model extends CI_Model{




    public function getMonthwiseCust(){


        $query = $this->db->query("SELECT COUNT(*) AS 'Nocust', MONTH(enrole_date) AS 'mon' FROM customer WHERE YEAR(enrole_date) = '2017' GROUP BY MONTH(enrole_date)");


        $result = $query->result_array();

        return $result;




    }



    public function getMonthwisesales(){


        $query = $this->db->query("SELECT COUNT(*) AS 'Nocust', MONTH(invoice_date) AS 'mon' FROM invoice WHERE YEAR(invoice_date) = '2017' GROUP BY MONTH(invoice_date)");


        $result = $query->result_array();

        return $result;




    }



    public function getItemscount($name,$id){


        $query = $this->db->query("SELECT COUNT($id) as count from $name");

        $result = $query->result_array();

        return $result;




    }




}