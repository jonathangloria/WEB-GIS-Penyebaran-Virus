<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $data = array(
            'title'=>'Pemetaan Penyebaran Virus',
            'pemetaan'=>$this->m_home->tampil_data(),
            'isi'=>'v_home'
        );
        $this->load->view('layout/v_wrapper_guest', $data, FALSE);
    }

    public function data_penyebaran()
    {
        $data = array(
            'title'=>'Data Penyebaran Virus',
            'penyebaran'=>$this->m_home->tampil_data(),
            'isi'=>'v_data_penyebaran_g'
        );
        $this->load->view('layout/v_wrapper_guest', $data, FALSE);
    }

    public function polygon()
    {
        $data = array(
            'title'=>'Polygon',
            'isi'=>'v_polygon',
        );
        $this->load->view('layout/v_wrapper_guest', $data, FALSE);
    }

    public function carto()
    {
        $data = array(
            'title'=>'Carto Negara Jerman',
            'isi'=>'v_carto',
        );
        $this->load->view('layout/v_wrapper_guest', $data, FALSE);
    }

}