<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }

        $this->load->model('m_login');
    }

    function index()
    {
        $dataHadits = $this->m_login->ambilData(); //Menyimpan hasil dari fungsi ambilData di M_Index pada variable dataHadits;

        $data['hadits'] = $dataHadits;

        $this->load->view('V_Index', $data);
    }

    //controller kuis

    public function quizdisplay()
    {
        $this->load->model('m_login');
        $this->data['pertanyaan'] = $this->m_login->getPertanyaan();
        $this->load->view('mulai_kuis', $this->data);
    }

    public function jawabs()
    {
        $this->load->view('jawab');
    }


    //controller materi dll

    public function lihatData()
    {
        $dataHadits = $this->m_login->ambilData(); //Menyimpan hasil dari fungsi ambilData di M_Index pada variable dataHadits;

        $data['hadits'] = $dataHadits;

        $this->load->view('Halaman_Utama', $data);
    }
    public function lihatNilai(){
        $dataNilai = $this->m_login->ambilNilai();
        $data['nilai']=$dataNilai;
        $this->load->view('V_nilai',$data);
    }

    public function tambahData()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = [
            "id" => $id,
            "judul" => $judul,
            "isi" => $isi
        ];

        $this->m_login->tambahData($data);
        redirect(base_url("admin"));
    }

    public function tambahSoal()
    {
        $id_soal = $this->input->post('id_soal');
        $soal = $this->input->post('soal');
        $a = $this->input->post('a');
        $b = $this->input->post('b');
        $c = $this->input->post('c');
        $d = $this->input->post('d');
        $kcn_jawaban = $this->input->post('kcn_jawaban');
        $aktif = $this->input->post('aktif');

        $data = [
            "id_soal" => $id_soal,
            "soal" => $soal,
            "a" => $a,
            "b" => $b,
            "c" => $c,
            "d" => $d,
            "kcn_jawaban" => $kcn_jawaban,
            "aktif" => $aktif
        ];
        $this->m_login->tambahSoal($data);
        redirect(base_url("admin"));
    }

    public function tambahNilai()
    {
        $ids = $this->input->post('ids');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $nilai = $this->input->post('nilai');

        $data = [
            "id" => $ids,
            "nama" => $nama,
            "kelas" => $kelas,
            "nilai" => $nilai
        ];

        $this->m_login->tambahNilai($data);
        redirect(base_url("admin"));
    }
    public function tambahIdentitas()
    {
        $ids = $this->input->post('ids');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');

        $data = [
            "ids" => $ids,
            "nama" => $nama,
            "kelas" => $kelas
        ];

        $this->session->set_data($data);
    }

    public function editData($id)
    {
        $data['hadits_edit'] = $this->m_login->ambilDataById($id);
        $this->load->view('V_Edit', $data);
    }

    public function bukaData($id)
    {
        $data['hadits_buka'] = $this->m_login->ambilDataById($id);
        $this->load->view('Materi', $data);
    }

    public function updateData($id)
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = [
            "id" => $id,
            "judul" => $judul,
            "isi" => $isi
        ];

        //echo "<pre>";
        //print_r($data);
        //exit();
        $this->m_login->updateData($data, $id);
        redirect(base_url("admin"));
    }

    public function deleteData($id)
    {
        $this->m_login->deleteData($id);
        redirect(base_url("admin"));
    }
}
