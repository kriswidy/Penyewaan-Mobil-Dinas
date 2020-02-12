<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{
    public function __construct() // load model
    {
        parent::__construct();
        $this->load->model("kendaraan_model");
        $this->load->library('form_validation');

        //path simpan
        $config['upload_path'] = './assets/upload/product';
        //format
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '1000000000';
        $config['max_width']  = '10240';
        $config['max_height']  = '7680';
        $this->load->library('upload', $config);
    }

    public function index()
    {
        $data["kendaraan"] = $this->kendaraan_model->getAll();
        $this->load->view("admin/kendaraan/list", $data);
    }

    public function add_kendaraan()
    {
        $this->load->view("admin/kendaraan/new_form");
    }

    public function add()
    {
        $kendaraan = $this->kendaraan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kendaraan->rules());

        if ($validation->run() == 'true') {
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $kendaraan->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('Kendaraan/', 'refresh');
            }
        } else {
            $this->add_kendaraan();
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kendaraan');

        $kendaraan = $this->kendaraan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kendaraan->rules());

        if ($validation->run()) {
            $kendaraan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kendaraan"] = $kendaraan->getById($id);
        if (!$data["kendaraan"]) show_404();

        $this->load->view("admin/kendaraan/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->kendaraan_model->delete($id)) {
            redirect(site_url('admin/kendaraan'));
        }
    }
}
