<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Masterppn extends \FAT\Core\HttpClient{

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function single_masterppn($id){
        return $this->get('/v1/master_ppns/'.$id);
    }

    public function all_masterppn($filter = array()){
        if (!empty($filter)) {
            return $this->get('/v1/master_ppns', $filter);
        }

        return $this->get('/v1/master_ppns/');
    }

    public function save_masterppn($data){
        return $this->post('/v1/master_ppns/', $data);
    }

    public function update_masterppn($id, $data){
        return $this->put('/v1/master_ppns/'.$id, $data);
    }

    public function delete_masterppn($id = 0)
    {
        return $this->delete('/v1/master_ppns/'.$id);
    }

    public function active_masterppn($effective_date) {
        return $this->get('/v1/master_ppns/active_ppn', $effective_date);
    }
}