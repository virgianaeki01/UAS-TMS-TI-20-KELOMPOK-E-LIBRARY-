<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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
    }
    
	public function index()
	{
		if($this->session->userdata("loggedin")=="true")
		{
			$view['title'] = "E-Library | Profile";
	    	$view['menu'] = "profile";
	    	$view['isi'] = $this->load->view('v_profile', '', TRUE);
			$this->load->view('v_main', $view);
		}
		else
		{
			redirect(base_url()."main/login");
		}
	}
	
	public function profile()
	{
		if($this->session->userdata("loggedin")=="true")
		{
			$this->load->model('m_user');
			$view['title'] = "E-Library | Profile";
	    	$view['menu'] = "profile";

	    	$data['id'] = $this->session->userdata("id"); //untuk mengambil id dari session
            $data['query'] = $this->m_user->view_data($data['id']); //memanggil fungsi view data dari model m_user
            $data['cd_user'] = $data['query']->row()->cd_user; //mengambil hasil dari query dengan row cd_user
			$data['name'] = $data['query']->row()->name;
			$data['address'] = $data['query']->row()->address;
			$data['birthday'] = $data['query']->row()->birthday;
			$data['regisdate'] = $data['query']->row()->regisdate;
			$data['email'] = $data['query']->row()->email;

	    	$view['isi'] = $this->load->view('v_profile', $data, TRUE);
			$this->load->view('v_main', $view);
		}
		else
		{
			redirect(base_url()."main/login");
		}
	}

	public function update()
	{
		if($this->session->userdata("loggedin")=="true")
		{
			$this->load->model('m_user');
			$view['title'] = "E-Library | Update Profile";
	    	$view['menu'] = "profile";

	    	$data['id'] = $this->session->userdata("id"); //untuk mengambil id dari session
            $data['query'] = $this->m_user->view_data($data['id']); //memanggil fungsi view data dari model m_user

            $data['cd_user'] = $data['query']->row()->cd_user;
            $data['name'] = $this->input->post('name');
            $data['address'] = $this->input->post('address');
			$data['birthday'] = $this->input->post('birthday');
			$data['email'] = $this->input->post('email');
			$data['pass'] = $this->input->post('pass');

            if(!isset($_POST['submit']))
            {
				//$data['cd_user'] = $data['query']->row()->cd_user;
				$data['name'] = $data['query']->row()->name; //mengambil hasil dari query dengan row cd_user
				$data['address'] = $data['query']->row()->address;
				$data['birthday'] = $data['query']->row()->birthday;
				$data['email'] = $data['query']->row()->email;
				//$data['password'] = $data['query']->row()->password; 
			}
			$config = array(
            	array(
            	    'field' => 'name',
            	    'label' => 'Nama',
            	    'rules' => 'required',
            	    'errors' => array(
            	        'required' => '%s wajib diisi.',
            	    ),
            	),
            	array(
            	    'field' => 'address',
            	    'label' => 'Address',
            	    'rules' => 'required',
            	    'errors' => array(
            	        'required' => '%s wajib diisi.',
            	    ),
            	),
            	array(
            	    'field' => 'birthday',
            	    'label' => 'Birthday',
            	    'rules' => 'required',
            	    'errors' => array(
            	        'required' => '%s wajib diisi.',
            	    ),
            	),
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
                $idd = $data['query']->row()->id;
                
                $data = array(
					//'no' => $no,
					'name' => $data['name'],
					'address' => $data['address'],
					'birthday' => $data['birthday'],
					'email' => $data['email'],
					'pass' => $data['pass']
				);

                $this->m_user->update_data($data, 'tb_user', $idd);
                //$this->session->set_flashdata('msg','<strong>Berhasil! </strong>Data berhasil diupdate.');
                redirect(base_url()."user/profile");
            }

	    	$view['isi'] = $this->load->view('v_profileupdate', $data, TRUE);
			$this->load->view('v_main', $view);
		}
		else
		{
			redirect(base_url()."main/login");
		}
	}
}
