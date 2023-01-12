<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Auth extends \FAT\Core\HttpClient {
    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function authenticate($email, $password){
        $body = array(
            'email' => $email,
            'password' => $password,
            'grant_type' => 'password'
        );

        return $this->post('/oauth/token', $body);
    }
}