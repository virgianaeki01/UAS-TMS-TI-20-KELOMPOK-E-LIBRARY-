<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Transaction extends \FAT\Core\HttpClient {

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function purchase_order_list($filter = array())
    {
        if (!empty($filter)) {
            return $this->get('/v1/purchase_orders', $filter);
        }

        return $this->get('/v1/purchase_orders');
    }

    public function pitch_book_list()
    {
        // add validation list pitchbook not referral
        $data['po'] = true;
        $data['po_waiting'] = true;

        return $this->get('/v1/pitch_books', $data);
    }

    public function save_purchase_order($data)
    {
        return $this->post('/v1/purchase_orders', $data);
    }

    /**
     * Get list of bills
     *
     * @return stdClass formalized response
     */
    public function bill_list()
    {
        return $this->get('/v1/bills');
    }

    public function bill_detail($id)
    {
        return $this->get('/v1/bills/'.$id);
    }

    public function upload_payment_proof($data)
    {
        return $this->post('/v1/bills/'.$data['bill_id'].'/confirmation', $data);
    }

    public function manual_confirm_file($id)
    {
        return $this->get('/v1/bills/'.$id.'/confirmation_file');
    }

    public function faktur_pajak_file($id)
    {
        return $this->get('/v1/bills/'.$id.'/faktur_pajak_file');
    }
    
    /**
     * Get summary of product
     */
    public function summary($pitch_book_id, $product)
    {
        $param['product'] = $product;

        return $this->get('/v1/pitch_books/'.$pitch_book_id.'/bills/summary', $param);
    }
}