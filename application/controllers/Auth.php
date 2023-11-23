<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('templat/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templat/auth_footer');
    }

    public function registration()
    {
        // Check for form validation
        if ($this->form_validation->run() == true) { // Access the form_validation property
            $this->load->view('templat/auth_header');
            $this->load->view('auth/registration');
            $this->load->view('templat/auth_footer');
        } else {
            echo 'data berhasil ditambahkan';
        }
    }
}
