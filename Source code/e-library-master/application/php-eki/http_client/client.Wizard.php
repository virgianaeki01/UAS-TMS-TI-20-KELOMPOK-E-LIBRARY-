<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Wizard extends \FAT\Core\HttpClient {
    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function progress(){
        return $this->get('/v1/wizards');
    }

    public function history_activity(){
        return $this->get('/v1/wizards/history');
    }

    public function store_wizard_1($institution, $pic){
        $body = array(
            'pic' => $pic,
            'institution' => $institution
        );

        return $this->put('/v1/wizards/1', $body);
    }

    public function store_wizard_2($file){
        $body = array(
            'file' => $file
        );

        return $this->put('/v1/wizards/2', $body);
    }

    public function store_wizard_3($file){
        $body = array(
            'file' => $file
        );

        return $this->put('/v1/wizards/3', $body);
    }
}