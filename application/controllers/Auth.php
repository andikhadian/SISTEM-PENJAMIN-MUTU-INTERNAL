<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_Model', 'auth');
    }

    public function index()
    {
        $data['title'] = "Login";
        if ($this->session->userdata('username')) {
            if ($this->session->userdata('role') == 'ADMIN') {
                redirect('Admin/Dashboard');
            } elseif ($this->session->userdata('role') == 'FAKULTAS') {
                redirect('Fakultas/Dashboard');
            }
        }
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Anda Harus Mengisi Username'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Anda Harus Mengisi Password'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = [
            'username' => $this->input->post('username')
        ];
        $password = $this->input->post('password');

        $user = $this->auth->getWhere('user', $username);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'user_id' => $user['user_id'],
                    'username' => $user['username'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($password == 'passwordbawaan') {
                    $this->session->set_flashdata('message', '
                        <div class="hero bg-primary text-white mb-4">
                          <div class="hero-inner">
                            <h2>Selamat Bergabung, ' . $user['nama_user'] . '</h2>
                            <p class="lead">Sebelum kamu menggunakan sistem ini, Silahkan ubah password bawaan anda untuk keamanan akun.</p>
                            <div class="mt-4">
                              <a href="' . base_url('Auth/passwordbaru/') . $user['username'] . '" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-key"></i> Ubah Password</a>
                            </div>
                          </div>
                        </div>
                        ');
                    if ($user['role'] == 'ADMIN') {
                        redirect('Admin/Dashboard');
                    } elseif ($user['role'] == 'FAKULTAS') {
                        redirect('Fakultas/Dashboard');
                    }
                } else {
                    if ($user['role'] == 'ADMIN') {
                        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Selamat Datang<strong> ' . $user['nama_user'] . '</strong> ! Saat ini Anda masuk sebagai  <strong>Admin</strong>. Tutup pesan ini jika sudah paham
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button></div>');
                        redirect('Admin/Dashboard');
                    } elseif ($user['role'] == 'FAKULTAS') {
                        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Selamat Datang<strong> ' . $user['nama_user'] . '</strong> ! Saat ini Anda masuk sebagai <strong>Fakultas</strong>. Tutup pesan ini jika sudah paham
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button></div>');
                        redirect('Fakultas/Dashboard');
                    }
                }
            } else {
                $this->session->set_flashdata('message', ' 
                <div class="alert alert-danger">
                  Password Anda salah, Silahkan di cek kembali
                </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', ' 
            <div class="alert alert-danger">
              Username anda tidak terdaftar
            </div>');
            redirect('Auth');
        }
    }

    public function passwordbaru($username)
    {
        $data['title'] = "Password Baru &mdash; SPMI";
        $data['username'] = $username;

        $this->form_validation->set_rules('password1', 'New Password', 'trim|required|min_length[5]|matches[password2]', [
            'required' => 'Anda harus mengisi password',
            'min_length' => 'Password anda minimal 5 karakter',
            'matches' => 'Password anda tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[5]|matches[password1]', [
            'required' => 'Anda harus mengisi konfirmasi password',
            'matches' => 'Password anda tidak sama'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Auth/Passwordbaru', $data);
        } else {
            $username = $this->input->post('username');
            $password1 = $this->input->post('password1');

            $data = [
                'password' => password_hash($password1, PASSWORD_DEFAULT)
            ];
            $A_username = [
                'username' => $username,
            ];
            $this->auth->update('user', $data, $A_username);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password anda berhasil diganti. Silahkan login.</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', ' 
        <div class="alert alert-success">
          Anda berhasil logout!
        </div>');
        redirect('Auth');
    }
}
