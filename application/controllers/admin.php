<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function admin_login()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/admin_index','',true);
        $this->load->view('dashboard',$data);
    }

    public function add_student()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/add_student','',true);
        $this->load->view('dashboard',$data);  
    }

    public function manage_student()
    {   
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/manage_student','',true);
        $this->load->view('dashboard',$data);  
    }
    public function edit_admin()
    {   
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/edit_admin','',true);
        $this->load->view('dashboard',$data);  
    }
}
