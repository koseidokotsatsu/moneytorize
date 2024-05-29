<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_finance');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['finances'] = $this->m_finance->get_all();
        $data['title'] = 'Money Management';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('doublem/index', $data);
        $this->load->view('template/footer');
    }
    public function add()
    {
        $data = [
            'category' => $this->input->post('category'),
            'nominal' => $this->input->post('nominal'),
            'type' => $this->input->post('type'),
            'detail' => $this->input->post('detail'),
            'date' => $this->input->post('date')
        ];

        $this->m_finance->add_data($data);
        redirect('finance');
    }
}
