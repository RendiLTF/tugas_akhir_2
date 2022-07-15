<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pimpinan_model');
        $this->load->model('Karyawan_model');
        $this->load->model('Kriteria_model');
        $this->load->model('Peringkat_model');
        $this->load->model('Hasil_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $data['hasil'] = $this->Pimpinan_model->hitungTotalHasil();
        $this->load->view('templates/pimpinan_header', $data);
        $this->load->view('templates/pimpinan_sidebar', $data);
        $this->load->view('templates/pimpinan_topbar', $data);
        $this->load->view('pimpinan/index', $data);
        $this->load->view('templates/pimpinan_footer', $data);
    }

    public function kelola_hasil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tb_hasil'] = $this->db->get('tb_hasil')->result_array();
        $data['tb_ranking'] = $this->db->get('tb_ranking')->result_array();
        $data['title'] = 'Kelola Bonus';
        $data['peringkat'] = $this->Peringkat_model->getPeringkat();
        $this->load->view('templates/pimpinan_header', $data);
        $this->load->view('templates/pimpinan_sidebar', $data);
        $this->load->view('templates/pimpinan_topbar', $data);
        $this->load->view('pimpinan/kelola_hasil', $data);
        $this->load->view('templates/pimpinan_footer', $data);
    }

    public function tambah_hasil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Tambah Hasil';
        $this->form_validation->set_rules('hasil', 'hasil', 'required');
        $this->form_validation->set_rules('min_nilai_yi', 'min_nilai_yi', 'required');
        $this->form_validation->set_rules('max_nilai_yi', 'max_nilai_yi', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('id_user', 'id_user', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/pimpinan_header', $data);
            $this->load->view('templates/pimpinan_sidebar', $data);
            $this->load->view('templates/pimpinan_topbar', $data);
            $this->load->view('pimpinan/tambah_hasil', $data);
            $this->load->view('templates/pimpinan_footer', $data);
        } else {
            $hasil = $this->input->post('hasil');
            $min_nilai_yi = $this->input->post('min_nilai_yi');
            $max_nilai_yi = $this->input->post('max_nilai_yi');
            $email = $this->input->post('email');
            $id_user = $this->input->post('id_user');

            $data = array(
                'hasil' => str_replace(".", "", $hasil),
                'min_nilai_yi' => $min_nilai_yi,
                'max_nilai_yi' => $max_nilai_yi,
                'email' => $email,
                'id_user' => $id_user,
            );
            $this->db->insert('tb_hasil', $data);
            redirect('pimpinan/kelola_hasil');
        }
    }

    public function ubah_hasil($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tb_hasil'] = $this->Pimpinan_model->getDataHasilById($id);
        $data['title'] = 'Ubah Hasil';
        $this->form_validation->set_rules('hasil', 'hasil', 'required');
        $this->form_validation->set_rules('min_nilai_yi', 'min_nilai_yi', 'required');
        $this->form_validation->set_rules('max_nilai_yi', 'max_nilai_yi', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/pimpinan_header', $data);
            $this->load->view('templates/pimpinan_sidebar', $data);
            $this->load->view('templates/pimpinan_topbar', $data);
            $this->load->view('pimpinan/ubah_hasil', $data);
            $this->load->view('templates/pimpinan_footer');
        } else {
            $id = $this->input->post('id');
            $hasil = $this->input->post('hasil');
            $min_nilai_yi = $this->input->post('min_nilai_yi');
            $max_nilai_yi = $this->input->post('max_nilai_yi');
            $email = $this->input->post('email');

            $data = array(
                'hasil' => str_replace(".", "", $hasil),
                'min_nilai_yi' => $min_nilai_yi,
                'max_nilai_yi' => $max_nilai_yi,
                'email' => $email
            );

            $this->Pimpinan_model->editDataHasil($id, $data);
            redirect('pimpinan/kelola_hasil');
        }
    }

    public function delete_hasil($id)
    {
        $this->Pimpinan_model->deleteDataHasil($id);
        redirect('pimpinan/kelola_hasil');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';
        $this->load->view('templates/pimpinan_header', $data);
        $this->load->view('templates/pimpinan_sidebar', $data);
        $this->load->view('templates/pimpinan_topbar', $data);
        $this->load->view('pimpinan/profile', $data);
        $this->load->view('templates/pimpinan_footer', $data);
    }

    public function edit_profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile';
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/pimpinan_header', $data);
            $this->load->view('templates/pimpinan_sidebar', $data);
            $this->load->view('templates/pimpinan_topbar', $data);
            $this->load->view('pimpinan/edit_profile', $data);
            $this->load->view('templates/pimpinan_footer', $data);
        } else {
            foreach ($_POST as $key => $value) {
                $$key = $value;
            }
            $config = array(
                'upload_path' => "./assets/img/profile/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'file_name' => 'fotoUpdate' . $name . '-' . date('Y-m-d'),
                'overwrite' => TRUE,
                'max_size' => "15048000",
                'max_height' => "3000",
                'max_width' => "3000"
            );
            if (!empty($_FILES["image"]["name"])) {
                $this->load->library('upload', $config, 'uploadIMG');
                $this->uploadIMG->initialize($config);
                $this->uploadIMG->do_upload('image');
                $image = $this->uploadIMG->data("file_name");
            } else {
                $image = $old_img;
            }

            $data = array(
                'id' => $id,
                'name' => $name,
                'email' => $email,
                'image' => $image,

            );
            $this->Pimpinan_model->editDataProfile($id, $data);
            redirect('pimpinan/profile');
        }
    }

    public function print()
    {
        $data['record_print'] = $this->Peringkat_model->getPeringkat();
        $this->load->view('pimpinan/print_laporan', $data);
    }
}
