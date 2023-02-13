<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model"); //load model siswa
    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = "List Data siswa";
        //ambil fungsi getAll untuk menampilkan semua data siswa
        $data["data_siswa"] = $this->siswa_model->getAll();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        //load view index.php pada folder views/siswa
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    //method add digunakan untuk menampilkan form tambah data siswa
    public function add()
    {
        $siswa = $this->siswa_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($siswa->rules()); //menerapkan rules validasi pada siswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada siswa_model
        if ($validation->run()) {
            $siswa->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data siswa berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("siswa");
        }
        $data["title"] = "Tambah Data siswa";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('siswa/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('siswa');

        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data siswa berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("siswa");
        }
        $data["title"] = "Edit Data siswa";
        $data["data_siswa"] = $siswa->getById($id);
        if (!$data["data_siswa"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('siswa/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->siswa_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data siswa berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}