<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class User extends \FAT\Core\HttpClient {
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

    public function get_admin(){
        return $this->get('/v1/users');
    }

    public function detail_admin($id){

        return $this->get('/v1/users/'.$id);
    }

    public function add_admin($data){
        return $this->post('/v1/users/admin', $data);
    }

    public function confirm_admin($name, $password){

        $body = array(
            'name' => $name,
            'password' => $password
        );

        return $this->post('/v1/users/admin', $body);
    }

    public function activation_admin($user_id, $access_account)
    {
        $body = array(
            'access_account' => $access_account
        );

        return $this->put('/v1/users/' . $user_id, $body);
    }

    public function edit_admin($id, $tipe, $email){
        $body = array(
            'role' => $tipe,
            'email' => $email
        );

        return $this->put('/v1/users/'.$id.'/', $body);
    }

    public function reinvite($id){
        return $this->post('/v1/users/' . $id . '/reinvite');
    }

    public function me(){
        return $this->get('/v1/me');
    }

    public function update_profile($params){
        return $this->put('/v1/me', $params);
    }

    public function banks(){
        return $this->get('/v1/banks');
    }

    public function update_password($params){
        return $this->put('/v1/me/password', $params);
    }

    public function notifications($filter=false)
    {
        if ($filter) {
            return $this->get('/v1/notifications',$filter);
        } else {
            return $this->get('/v1/notifications');
        }
    }

    public function detail_notification($id)
    {
        return $this->get('/v1/notifications/'.$id);
    }

    public function update_notification($data)
    {
        return $this->put('/v1/notifications/'.$data['id'],$data);
    }
}