<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Fakultas_Model', 'fakultas');
        $this->load->model('Auth_Model', 'auth');
    }

    public function index()
    {
        $data['title'] = 'Profil Saya';
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['user'] = $this->auth->getWhere('user', $S_UserId);

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/fakultas_sidebar', $data);
        $this->load->view('Fakultas/Profil/index', $data);
        $this->load->view('templates/footer');
    }
}
