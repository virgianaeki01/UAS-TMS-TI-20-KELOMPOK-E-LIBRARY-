<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Institution extends \FAT\Core\HttpClient {

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function training_achievement($id){
        return $this->get('/v1/institutions/'.$id.'/badge');
    }

    public function update_institution($id, $params){
        return $this->put('/v1/institutions/' . $id, $params);
    }
}