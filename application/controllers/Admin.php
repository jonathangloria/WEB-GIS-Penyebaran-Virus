<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller { // Nama kelas harus sama dengan nama file

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title'=>'Pemetaan Penyebaran Virus',
            'pemetaan'=>$this->m_home->tampil_data(),
            'isi'=>'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function input()
    {
        $this->form_validation->set_rules('nama_wilayah', 'Nama Wilayah', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('nama_virus', 'Nama Virus', 'required');
        
        $config['upload_path'] = './template/assets/foto';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size'] = 128;
        $config['file_name'] = 'image-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload', $config);

        if(@$_FILES['foto']['name'] != null){
            if (!$this->upload->do_upload('foto'))
            {
                $this->session->set_flashdata('error', 'Gagal upload!');
            }
            else
            {
                $foto=$this->upload->data('file_name');
            }
        }

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'=>'Input Data Penyebaran Virus',
                'isi'=>'v_input'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_wilayah'=>$this->input->post('nama_wilayah'),
                'provinsi'=>$this->input->post('provinsi'),
                'kabupaten'=>$this->input->post('kabupaten'),
                'kecamatan'=>$this->input->post('kecamatan'),
                'nama_virus'=>$this->input->post('nama_virus'),
                'jml_korban'=>$this->input->post('jml_korban'),
                'jml_meninggal'=>$this->input->post('jml_meninggal'),
                'jml_sembuh'=>$this->input->post('jml_sembuh'),
                'latitude'=>$this->input->post('latitude'),
                'longitude'=>$this->input->post('longitude'),
                'radius'=>$this->input->post('radius'),
                'warna'=>$this->input->post('warna'),
                'foto'=>$foto
            );
            $this->m_home->input($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan.');
            redirect('admin/input');
        }
    }
}