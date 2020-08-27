<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = 'Dashboard Admin';
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['user'] = $this->auth->getWhere('user', $S_UserId);
        $data['countUser'] = $this->admin->getNumWhere('user', ['role' => 'FAKULTAS']);
        $data['countFti'] = $this->admin->getNumWhere('dokumen', ['kelompok_dokumen' => 'FTI']);
        $data['countSi'] = $this->admin->getNumWhere('dokumen', ['kelompok_dokumen' => 'SI']);
        $data['countIk'] = $this->admin->getNumWhere('dokumen', ['kelompok_dokumen' => 'IK']);
        $data['countDokumen'] = $this->admin->getNum('dokumen');
        $data['latestReportByAll'] = $this->admin->getAllByDesc('dokumen', 'tgl_dokumen_masuk', 'DESC', 50);

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('templates/footer');
    }
}
