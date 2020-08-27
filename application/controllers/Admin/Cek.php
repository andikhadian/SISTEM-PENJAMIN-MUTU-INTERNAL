<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Admin_Model', 'admin');
        $this->load->model('Auth_Model', 'auth');
    }

    public function index()
    {
        $data['title'] = 'Cek Password';
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['user'] = $this->auth->getWhere('user', $S_UserId);

        $this->form_validation->set_rules('password', 'password', ['required'], [
            'required' => 'Anda harus mengisi password dokumen'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('Admin/Cek/index', $data);
            $this->load->view('templates/footer');
        } else {
            $password = $this->input->post('password');

            // ! UNTUK PASSWORD DOKUMEN
            $password_default = 'password123';

            if ($password == $password_default) {
                redirect('Admin/Dokumen');
            } else {
                $this->session->set_flashdata('notif', 'wrong_password');
                redirect('Admin/Cek');
            }
        }
    }
}
