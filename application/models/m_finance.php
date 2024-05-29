<?php
class m_finance extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('finance');
        return $query->result_array();
    }

    public function add_data($data)
    {
        return $this->db->insert('finance', $data);
    }
}
