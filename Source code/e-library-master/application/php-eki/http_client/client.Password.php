<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Password extends \FAT\Core\HttpClient {

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function forget($data)
    {
        return $this->put('/v1/password/forget',$data);
    }

    public function validation($data)
    {
        return $this->get('/v1/password/validation',$data);
    }

    public function reset($data)
    {
        return $this->put('/v1/password/reset',$data);
    }
}