<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Pitchbook extends \FAT\Core\HttpClient {

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function pitchbook($filter = array()){
        if(!empty($filter))
            return $this->get('/v1/pitch_books', $filter);

        return $this->get('/v1/pitch_books');
    }

    public function detail($data=false){
        return $this->get('/v1/pitch_books/'.$data['id'],$data);
    }

    public function save($data){
    	$body = array(
            'pitch_book' => $data
        );

        return $this->post('/v1/pitch_books/', $body);
    }
}