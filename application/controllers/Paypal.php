<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Paypal extends CI_Controller
{
    function  __construct(){
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('product');
    }

    function success(){
        //get the transaction data
        $paypalInfo = $this->input->get();

        $data['item_number'] = $paypalInfo['item_number'];
        $data['txn_id'] = $paypalInfo["tx"];
        $data['payment_amt'] = $paypalInfo["amt"];
        $data['currency_code'] = $paypalInfo["cc"];
        $data['status'] = $paypalInfo["st"];

        //pass the transaction data to view
        $this->load->view('paypal/success', $data);
    }

    function cancel(){
        $this->load->view('paypal/cancel');
    }

    function ipn(){
        //paypal return transaction details array
        $paypalInfo    = $this->input->post();

        $data['user_id'] = $paypalInfo['custom'];

        $data['invoice_value'] = $paypalInfo["mc_gross"];
        $data['invoice_date'] =date('y-m-d');

        $data['payement_status']    = $paypalInfo["payment_status"];

        $paypalURL = $this->paypal_lib->paypal_url;
        $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);

        //check whether the payment is verified
        if(preg_match("/VERIFIED/i",$result)){
            //insert the transaction data into the database
            $this->product->insertTransaction($data);
        }
    }
}