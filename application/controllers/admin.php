<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function admin_login()
    {
        $email_address = $this->input->post("email_address", true);
        $password = $this->input->post("password", true);
        $this->load->model("admin_model");
        $result = $this->admin_model->admin_model_info($email_address, $password);
        $sdata = array();

        if ($result) {
            $sdata["admin_id"] = $result->admin_id;
            $sdata["admin_name"] = $result->admin_name;
            $this->session->set_userdata($sdata);
            redirect("dashboard");
        } else {
            $sdata["message"] = "Your Email or Password is Invalid";
            $this->session->set_userdata($sdata);
            redirect(base_url());
        }
    }

    public function add_student()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/add_student', '', true);
        $this->load->view('dashboard', $data);
    }

    public function manage_student()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/manage_student', '', true);
        $this->load->view('dashboard', $data);
    }

    public function edit_admin()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/edit_admin', '', true);
        $this->load->view('dashboard', $data);
    }

    public function dashboard()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/admin_index', '', true);
        $this->load->view('dashboard', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata["message"] = "Logout successfully";
        $this->session->set_userdata($sdata);
        redirect(base_url());
    }

    public function save_student()
    {
        $this->admin_model->save_student_info();
        $sdata = array();
        $sdata["message"] = "Data uploaded successfully";
        $this->session->set_userdata($sdata);
        redirect("add-student");
    }
}
