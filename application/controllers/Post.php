<?php
    class Post extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Post_model');
        }

        public function baca(){
            $data2['judul'] = "Isi Data";
            $data = $this->Post_model->bacaDatabase();
            $isi['isi'] = $data;
            $this->load->view('templates/header',$data2);
            $this->load->view('post/baca',$isi);
            $this->load->view('templates/footer');
        }

        public function tambah(){
            $data['judul'] = "Tambah Post";

            $this->load->view('templates/header',$data);
            $this->load->view('post/tambah');
            $this->load->view('templates/footer');
        }

        public function prosesTambah(){
            $this->Post_model->tambahPost();
            echo "Sukses menambahkan";
        }

        public function update($id){
            $data['judul'] = "Tambah Post";
            $data['post'] = $this->Post_model->getPostById($id);
            $this->load->view('templates/header',$data);
            $this->load->view('post/update',$data);
            $this->load->view('templates/footer');
        }

        public function prosesUpdate($id){
            $this->Post_model->updatePost($id);
            echo "Sukses di update";
        }
    }
?>