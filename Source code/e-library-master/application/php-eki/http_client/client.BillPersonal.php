<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class BillPersonal extends \FAT\Core\HttpClient {

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function bill_list()
    {
        return $this->get('/v1/bill_personal');
    }

    public function detail($id)
    {
        return $this->get('/v1/bill_personal/'.$id);
    }

    public function upload_payment_proof($data)
    {
        return $this->post('/v1/bill_personal/'.$data['bill_personal_id'].'/confirmation', $data);
    }

    public function manual_confirm_file($id)
    {
        return $this->get('/v1/bill_personal/'.$id.'/confirmation_file');
    }
}