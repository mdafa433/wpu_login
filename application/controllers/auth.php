<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
         $data['title'] = 'login page' ;
        $this->load->view('templates/auth_header' ,$data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }
    public function registration()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'email ini sudah pernah terdaftar blok'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
            'matches'=> 'Password dont match!',
            'min_length'=> 'Password to short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');


        if ($this->form_validation->run() == false){
            $data['title'] = 'wpu user registration'; 
            $this->load->view('templates/auth_header');
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');

        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'dafault.jpg',
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()

                


             ] ;
             $this->db->insert('user', $data);
             $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">selamat akun lu udah berhasil di buat.tolong login wir</div>');
             redirect('auth');
        }
    }

}