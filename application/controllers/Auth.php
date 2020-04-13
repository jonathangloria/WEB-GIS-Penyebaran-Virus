<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('auth/v_login');
        }
        else{
            $this->_login();
        }
    $this->goToDefaultPage();
    }
   
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $tbl_user = $this->db->get_where('tbl_user',['username' => $username])->row_array();
        
        if($tbl_user){
            $password=$this->hash($password);
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $query = $this->db->get('tbl_user');
            if($query->num_rows()==1)
            {
                foreach ($query->result() as $row){
                    $data = [
                        'username' => $tbl_user['username'],
                        'role_id' => $tbl_user['role_id']
                    ];                    
                }
                $this->session->set_userdata($data);
                if($tbl_user['role_id'] == 1){
                    redirect('admin');
                } else{
                    redirect('operator');
                }
            }
            else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Wrong password!</div>');
                redirect('auth');                
            }
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> User is not registered!</div>');
            redirect('auth');
        }
    }

    public function hash($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }

    public function blocked()
    {
        $this->load->view('auth/v_blocked');
    }

    public function goToDefaultPage() {
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin');
        } else if ($this->session->userdata('role_id') == 2) {
            redirect('operator');
        } 
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert alert-succes" role="alert"> You have been logout!</div>');
        redirect('auth');
    }
}