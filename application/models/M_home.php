<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function input($data)
    {
        $this->db->insert('tbl_penyebaran', $data);
    }

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebaran');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    public function detail_data($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebaran');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_penyebaran', $data);
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_penyebaran', $data);
    }

}