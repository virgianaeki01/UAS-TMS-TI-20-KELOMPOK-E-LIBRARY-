<?php
  Class m_book extends CI_Model
  {
    function show_book(){
      return $this->db->get('tb_book');
    }

    function detail_book($id){
      $this->db->where('book_id',$id);
      $query = $this->db->get('tb_book');
      return $query;
    }

    function add_book($data, $table)
    {
      $this->db->insert($table,$data);
    }

    // function upload_img()
    // {
    //   $config1['upload_path'] = './asset/uploads/';
    //   $config1['allowed_types'] = 'gif|jpg|png|jpeg';
    //   $config1['encrypt_name'] = true;
    
    //   $this->load->library('upload', $config1);
    //   $this->upload->do_upload()
    //       echo "<script>alert('File Harus Gambar');</script>";
    //   }else{
    //       $this->form_validation->set_rules($config);
    //       if ($this->form_validation->run() == TRUE)
    //       {
    //         $img_name = $this->upload->data('file_name');
    //         $data = array(
    //           'title' => $data['title'],
    //           'author' => $data['author'],
    //           'year' => $data['year'],
    //           'description' => $data['description'],
    //           'img_name' => $img_name
    //         );
    //         $this->m_book->add_book($data, 'tb_book');
    //         redirect(base_url('book'));
    //       }
    //     }
    // }

    function edit_book($data,$table,$id){
      $this->db->where("book_id",$id);
      $x = $this->db->update($table,$data);
    }

  }
?>