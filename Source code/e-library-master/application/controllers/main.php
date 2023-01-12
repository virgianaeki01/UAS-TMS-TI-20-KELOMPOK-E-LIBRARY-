<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
	function __construct(){
        parent::__construct();      
        $this->load->model('m_main');
    }

	public function index()
	{

		// $this->load->library('Http');

		// $response = $this->http->get("localhost:8080/v1/users");
		// var_dump(json_decode($response,1));

		// var_dump("alik");
		// exit;

		if($this->session->userdata("loggedin")=="true")
		{
			$view['title'] = "E-Library | Home";
	    	$view['menu'] = "home";
	    	$view['isi'] = $this->load->view('v_home', '', TRUE);
			$this->load->view('v_main', $view);
		}
		else
		{
			redirect(base_url()."main/login");
		}
	}

	public function register()
	{
		if($this->session->userdata("loggedin")=="true")
		{
			redirect(base_url());
		}
		else
		{
			$view['title'] = "E-Library | Register";
	    	$view['menu'] = "home";

	    	$name = $this->input->post('name');
	    	$address = $this->input->post('address');
	    	$email = $this->input->post('email');
	    	$password = $this->input->post('password');
	    	$birthday = $this->input->post('birthday');
	    	$status = '0';
	    	$level = '2';
	    	$nowd = date("Y-m-d");
	    	$date = substr($nowd,2,2).substr($nowd,5,2);
	    	$getcd = $this->m_main->count($date);
	    	$count = $getcd->num_rows();
			$cd_user = $date.sprintf("%03d", ($count+1));
	    	$data = array(
                'name' => $name,
                'address' => $address,
                'email' => $email,
                'password' => $password,
                'birthday' => $birthday,
                'status' => $status,
                'level' => $level,
                'cd_user' => $cd_user,
                'regisdate' => $nowd
            );
            $config = array(
                array(
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    ),
                ),
                array(
                    'field' => 'address',
                    'label' => 'Address',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    ),
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    ),
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    ),
                ),
                array(
                    'field' => 'birthday',
                    'label' => 'Birthday',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    ),
                )
            );
	    	$this->form_validation->set_rules($config);
            if ($this->form_validation->run() == TRUE)
            {
                $data = array(
                	'name' => $data['name'],
               		'address' => $data['address'],
                	'email' => $data['email'],
                	'pass' => $data['password'],
                	'birthday' => $data['birthday'],
                	'status' => $data['status'],
                	'level' => $data['level'],
                	'cd_user' => $data['cd_user'],
                	'regisdate' => $data['regisdate']
                );

                $this->m_main->register($data, 'tb_user');
                redirect(base_url());
            }

	    	$view['isi'] = $this->load->view('v_register', $data, TRUE);
			$this->load->view('v_main', $view);
		}
	}

	public function login()
	{
		if($this->session->userdata("loggedin")=="true")
		{
			echo "dah";
			redirect(base_url());
		}
		else
		{
			$view['title'] = "E-Library | Login";
    		$view['menu'] = "home";
			$data2['email'] = $this->input->post("email",true);
			$data2['pass'] = $this->input->post("pass",true);
			$data2['gagal']="";

			$config = array(
	        array(
	                'field' => 'email',
	                'label' => 'Email',
	                'rules' => 'required',
	                'errors' => array(
	                        'required' => '%s wajib diisi.',
	                ),
	        ),
	        array(
	                'field' => 'pass',
	                'label' => 'Password',
	                'rules' => 'required',
	                'errors' => array(
	                        'required' => '%s wajib diisi.',
	                ),
	        	)
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == TRUE)
			{
				$cek_user = $this->m_main->login($data2['email'], $data2['pass']);
				if($cek_user->num_rows()>0)
				{
					$this->session->set_userdata("loggedin", "true");
					$this->session->set_userdata("level", $cek_user->row()->level);
					$this->session->set_userdata("name", $cek_user->row()->name);
					$this->session->set_userdata("id", $cek_user->row()->id);
					//echo "berhasil";
					redirect(base_url());
				}
				else
				{
					$data2['gagal']="Email atau password tidak ditemukan";
				}
			}

			$view['isi'] = $this->load->view('v_login', $data2, TRUE);
			$this->load->view('v_main', $view);
		}
		//$this->load->view('v_login');
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url()."main/login");
	}
}
