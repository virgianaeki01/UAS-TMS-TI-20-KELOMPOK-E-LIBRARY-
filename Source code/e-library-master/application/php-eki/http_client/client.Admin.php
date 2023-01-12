<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Admin extends \FAT\Core\HttpClient {

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function sign_up($params){
        $body = array(
            'institution_type' => $params['institution_type'],
            'partner_type' => $params['partner_type'],
            'institution_name' => $params['institution_name'],
            'address' => $params['address'],
            'legal_entity_form' => $params['legal_entity_form'],
            'name' => $params['name'],
            'email' => $params['email'],
            'password' => $params['password'],
            'phone_number' => $params['phone_number'],
            'information_source' => $params['information_source']
        );

        return $this->post('/v1/users', $body);
    }

    public function activate($activation_token){
        $body = array(
            'activation_token' => $activation_token
        );

        return $this->put('/v1/users/activation', $body);
    }

    public function me(){
        return $this->get('/v1/me');
    }

    public function admin(){
        return $this->get('/v1/me');
    }
}