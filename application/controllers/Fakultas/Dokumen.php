<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
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
        $pemilik = $this->input->get('pemilik');
        $jenis = $this->input->get('jenis');
        if ($pemilik == NULL) {
            $title = '';
        } else {
            $title = '(' . $pemilik . '/' . $jenis . ')';
        }
        $data['isi_get'] = $title;
        $data['title'] = 'Lihat Dokumen SPMI ' . $title;
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['user'] = $this->auth->getWhere('user', $S_UserId);
        $data['num_dokumen_fti'] = $this->admin->getNumWhere('dokumen', ['pemilik_dokumen' => 'FTI']);
        $data['num_dokumen_si'] = $this->admin->getNumWhere('dokumen', ['pemilik_dokumen' => 'SI']);
        $data['num_dokumen_ik'] = $this->admin->getNumWhere('dokumen', ['pemilik_dokumen' => 'IK']);
        $data['dokumen'] = $this->admin->getWhere('dokumen', ['pemilik_dokumen' => $pemilik, 'jenis_dokumen' => $jenis])->result_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/fakultas_sidebar', $data);
        $this->load->view('Fakultas/Dokumen/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat($pemilik, $jenis)
    {
        $data['title'] = 'Dokumen SPMI ' . $pemilik . ' (' . $jenis . ')';
        $S_UserId = [
            'user_id' => $this->session->userdata('user_id')
        ];
        $data['user'] = $this->auth->getWhere('user', $S_UserId);
        $data['dokumen'] = $this->admin->getWhere('dokumen', ['pemilik_dokumen' => $pemilik, 'jenis_dokumen' => $jenis])->result_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/fakultas_sidebar', $data);
        $this->load->view('Fakultas/Dokumen/lihat', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id, $pemilik_dokumen, $jenis_dokumen, $format_dokumen, $file_dokumen)
    {
        unlink(FCPATH . 'assets/Documents/' . $pemilik_dokumen . '/' . $jenis_dokumen . '/' . $format_dokumen . '/' . $file_dokumen);
        $this->admin->delete('dokumen', ['dokumen_id' => $id]);
        $this->session->set_flashdata('notif', 'Dihapus');
        redirect('Admin/Dokumen/lihat/' . $pemilik_dokumen . '/' . $jenis_dokumen);
    }
}
