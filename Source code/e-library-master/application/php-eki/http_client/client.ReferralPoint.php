<?php
namespace FAT\HTTPClient;

if ( ! defined('RSA')) exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ReferralPoint extends \FAT\Core\HttpClient {

    public function __construct($access_token = null){
        parent::__construct($access_token);
    }

    public function total_point()
    {
        return $this->get('/v1/referrals');
    }

    public function referral_point_list()
    {
        return $this->get('/v1/referrals/mutations');
    }

    public function save_claim_point($data)
    {
        $data = array(
            "institution_id" => $data['institution_id'],
            "status" => 'waiting',
            "value" => $data['claim_value'],
            // "claim_type" => $data['claim_type'],
            "claim_type" => 'transfer',
            "user_id" => $_SESSION['me']['user']['id']
        );

        return $this->post('/v1/referrals/claims', $data);
    }

    public function referral_claim_list($filter=false)
    {
        return $this->get('/v1/referrals/claims', $filter);
    }

    /**
     * Claim confirmation
     *
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function claim_confirmation($data)
    {
        return $this->put('/v1/referrals/claims/'.$data['id'], $data);
    }
}