<?php
    class Post_model extends CI_Model{
        public function bacaDatabase(){
            return $this->db->get_where('posts')->result();
        }

        public function tambahPost(){
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi')
            );
            $this->db->insert('posts',$data);
        }

        public function updatePost($id){
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi')
            );
            $this->db->where('id_post',$id)
                        ->update('posts', $data);
        }
        
        public function getPostById($id){
            return $this->db->get_where('posts',array('id_post' => $id))->result();
        }
    }
?>