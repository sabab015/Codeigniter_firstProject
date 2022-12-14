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

    public function add_student()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/add_student', '', true);
        $this->load->view('dashboard', $data);
    }

    public function manage_student()
    {
        $data = array();
        $data["all_student_info"] = $this->admin_model->all_student_info();
        $data['admin_main_content'] = $this->load->view('pages/manage_student', $data, true);
        $this->load->view('dashboard', $data);
    }

    public function edit_student($student_id)
    {
        $data = array();
        $data["all_student_info_by_id"] = $this->admin_model->all_student_info_by_id($student_id);
        $data['admin_main_content'] = $this->load->view('pages/edit_student', $data, true);
        $this->load->view('pages/edit_student', $data);
    }

    public function update_student()
    {
        $this->admin_model->update_student_info();
        $sdata = array();
        $sdata['message'] = "updated successfully";
        $this->session->set_userdata($sdata);
        redirect("manage-student");
    }

    public function delete_student($student_id)
    {
        $this->admin_model->delete_student_by_id($student_id);
        $sdata = array();
        $sdata['message'] = "deleted successfully";
        $this->session->set_userdata($sdata);
        redirect("manage-student");
    }

    public function save_admin()
    {
        $this->admin_model->save_admin_info();
        $sdata = array();
        $sdata["message"] = "Admin added successfully";
        $this->session->set_userdata($sdata);
        redirect("manage-student");
    }

    public function manage_admin()
    {
        $data = array();
        $data["all_admin_info"] = $this->admin_model->all_admin_info();
        $data['admin_main_content'] = $this->load->view('pages/manage_admin', $data, true);
        $this->load->view('dashboard', $data);
    }
}
