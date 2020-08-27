<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Fakultas_Model', 'fakultas');
        $this->load->model('Auth_Model', 'auth');
    }

    public function index()
    {
        $data['title'] = 'Dashboard &mdash; Fakultas';
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['user'] = $this->auth->getWhere('user', $S_UserId);
        $data['countUser'] = $this->fakultas->getNumWhere('user', ['role' => 'FAKULTAS']);
        $data['countFti'] = $this->fakultas->getNumWhere('dokumen', ['kelompok_dokumen' => 'FTI']);
        $data['countSi'] = $this->fakultas->getNumWhere('dokumen', ['kelompok_dokumen' => 'SI']);
        $data['countIk'] = $this->fakultas->getNumWhere('dokumen', ['kelompok_dokumen' => 'IK']);
        $data['countDokumen'] = $this->fakultas->getNum('dokumen');
        $data['latestReportByAll'] = $this->fakultas->getAllByDesc('dokumen', 'tgl_dokumen_masuk', 'DESC', 50);

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/fakultas_sidebar', $data);
        $this->load->view('Fakultas/index', $data);
        $this->load->view('templates/footer');
    }
}
