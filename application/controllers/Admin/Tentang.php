<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
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
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['title'] = 'Tentang FTI';
        $data['user'] = $this->auth->getWhere('user', $S_UserId);

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('Admin/Tentang/index', $data);
        $this->load->view('templates/footer');
    }

    public function visi_misi()
    {
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['title'] = 'Visi - Misi';
        $data['user'] = $this->auth->getWhere('user', $S_UserId);

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('Admin/Tentang/visi_misi', $data);
        $this->load->view('templates/footer');
    }
    public function struktur_organisasi()
    {
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['title'] = 'Struktur Organisasi';
        $data['user'] = $this->auth->getWhere('user', $S_UserId);

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('Admin/Tentang/struktur_organisasi', $data);
        $this->load->view('templates/footer');
    }
}
