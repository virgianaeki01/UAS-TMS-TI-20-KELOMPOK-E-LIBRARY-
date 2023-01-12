<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class book extends CI_Controller {
	function __construct(){
        parent::__construct();      
        $this->load->model('m_book');
        $this->load->library('Http');
    }

	public function index()
	{

		$response = $this->http->get("localhost:8080/v1/users");

        $users = json_decode($response)->content->users;
		// var_dump($users);
		// exit;
        
		$data['users'] = $users;
		$data['book'] = $this->m_book->show_book()->result();
		$view['title'] = "E-Library | Book";
	   	$view['menu'] = "book";
	   	$view['isi'] = $this->load->view('v_book',$data, TRUE);
		$this->load->view('v_main', $view);
	}

    public function detail()
    {
        $id = $this->input->get("id", true);

        $response = $this->http->get("localhost:8080/v1/users/".$id);
        $users = json_decode($response)->content;
        // var_dump($users);
		// exit;

		// $data['query'] = $this->m_book->detail_book($id);
		// $data['book_id'] = $data['query']->row()->book_id;
		// $data['title_book'] = $data['query']->row()->title;
		// $data['author'] = $data['query']->row()->author;
		// $data['year'] = $data['query']->row()->year;
		// $data['description'] = $data['query']->row()->description;
		// $data['img_name'] = $data['query']->row()->img_name;

        $data['book_id'] = $users->id;
		$data['title_book'] = $users->name;
		$data['author'] = $users->dob;
		$data['year'] = $users->dob;
		$data['description'] = $users->created_at;
		$data['img_name'] = "";

		// variable main
		$view['title'] = "E-Library | Book";
	   	$view['menu'] = "book";
	   	$view['isi'] = $this->load->view('v_bookdetail',$data, TRUE);
		$this->load->view('v_main', $view);
    }
    
    public function edit_book()
    {
        if($this->session->userdata("loggedin")=="true")
		{
			$view['title'] = "E-Library | Edit Book";
	    	$view['menu'] = "book";

            $id = $this->input->get("id", true);
            // $data['query'] = $this->m_book->detail_book($id);

            $response = $this->http->get("localhost:8080/v1/users/".$id);
            $users = json_decode($response)->content;

            $data['title'] = $this->input->post('title');
            $data['author'] = $this->input->post('author');
			$data['year'] = $this->input->post('year');
            $data['description'] = $this->input->post('description');

            if(!isset($_POST['submit']))
            {
				// $data['title'] = $data['query']->row()->title;
				// $data['author'] = $data['query']->row()->author;
				// $data['year'] = $data['query']->row()->year;
				// $data['description'] = $data['query']->row()->description;
                
                $data['title'] = $users->name;
                $data['author'] = $users->dob;
                $data['year'] = $users->dob;
                $data['description'] = $users->created_at;
			}
            $config = array(
                array(
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    )
                ),
                array(
                    'field' => 'author',
                    'label' => 'Author',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    )
                )
            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == TRUE)
            {
                // $idd = $data['query']->row()->book_id;
                // $data = array(
                //     'title' => $data['title'],
                //     'author' => $data['author'],
                //     'year' => $data['year'],
                //     'description' => $data['description']
                // );
                // $this->m_book->edit_book($data, 'tb_book', $idd);

                // asdasdasd
                // $id = $this->input->get("id", true);
                // $data['query'] = $this->m_book->detail_book($id);

                // $response = $this->http->get("localhost:8080/v1/users/".$id);
                // $users = json_decode($response)->content;

                // $data['title'] = $this->input->post('title');
                // $data['author'] = $this->input->post('author');
                // $data['year'] = $this->input->post('year');
                // $data['description'] = $this->input->post('description');

            
                $data = array(
                    'name' => $data['title'],
                    'dob' => $data['author']
                );

                // var_dump($data);
                // exit;
                // $this->m_book->edit_book($data, 'tb_book', $idd);
                
                $response = $this->http->put("localhost:8080/v1/users/".$id, json_encode($data));
                // =======

                //$this->session->set_flashdata('msg','<strong>Berhasil! </strong>Data berhasil diupdate.');
                redirect(base_url()."book");
            }

	    	$view['isi'] = $this->load->view('v_bookedit', $data, TRUE);
			$this->load->view('v_main', $view);
		}
		else
		{
			redirect(base_url()."main/login");
		}
    }

	public function add_book()
	{
		$view['title'] = "E-Library | Add Book";
	    $view['menu'] = "book";

        
	    $title = $this->input->post('title');
	    $author = $this->input->post('author');
	    $year = $this->input->post('year');
        $description = $this->input->post('description');
	    $img_dname = $this->input->post('birthday');
	    $data = array(
            'title' => $title,
            'author' => $author,
            'year' => $year,
            'description' => $description
        );  
     
        if($this->input->post('submit')){
            $config = array(
                array(
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    )
                ),
                array(
                    'field' => 'author',
                    'label' => 'Author',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => '%s must be filled.',
                    )
                )
            );  

            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == TRUE)
            {

                $data = array(
                    'name' => $data['title'],
                    'dob' => $data['author']
                );

                $response = $this->http->post("localhost:8080/v1/users", json_encode($data));

                // $this->m_book->add_book($data, 'tb_book');
                redirect(base_url('book')); 
                
            }
        }

        $view['isi'] = $this->load->view('v_bookadd', $data, TRUE);
		$this->load->view('v_main', $view);
    }

    public function delete()
    {
        $id = $this->input->get("id", true);

        $response = $this->http->delete("localhost:8080/v1/users/".$id);
        redirect(base_url('book')); 
        
    }
}
