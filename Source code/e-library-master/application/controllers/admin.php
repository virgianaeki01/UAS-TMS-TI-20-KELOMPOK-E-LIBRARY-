<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();      
        $this->load->model('m_admin');
        $this->load->model('m_main');
    }

	public function index()
	{
		if($this->session->userdata("level")=="0")
		{
			$view['title'] = "E-Library | Admin";
	    	$view['menu'] = "admin";

	    	$name = $this->input->post('name');
	    	$address = $this->input->post('address');
	    	$email = $this->input->post('email');
	    	$password = $this->input->post('password');
	    	$birthday = $this->input->post('birthday');
	    	$status = "0";
	    	$level = $this->input->post('level');
	    	$nowd = date("Y-m-d");
	    	$date = substr($nowd,2,2).substr($nowd,5,2);
	    	$getcd = $this->m_admin->count($date);
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

                $this->m_admin->add_user($data, 'tb_user');
                redirect(base_url()."operator");
            }

			$view['isi'] = $this->load->view('v_admin', $data, TRUE);
			$this->load->view('v_main', $view);
		}
		else
		{
			redirect(base_url()."main/login");
		}
	}//end of index func

	public function uplevel()
	{
		if($this->session->userdata("level") == "0")
		{
			$id = $this->input->get("id", true);
			$data['query'] = $this->m_admin->get_data($id);
			$lvl = $data['query']->row()->level;
			//$lvls = (int)$lvl -1;
			$lvl = (string)((int)$lvl-1);
			$data = array(
		        'level' => $lvl
			);
	        $this->m_admin->update_data($data, 'tb_user', $id);
	        redirect(base_url()."operator");
	    }
	    else
		{
			redirect(base_url()."main/login");
		}
	}

}//last bracket
