<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'User Profile';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }
}
