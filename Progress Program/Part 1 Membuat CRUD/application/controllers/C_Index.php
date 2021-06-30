<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Index extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Index');
	}

    public function index()
    {
        $dataHadits = $this->M_Index->ambilData();//Menyimpan hasil dari fungsi ambilData di M_Index pada variable dataHadits;

        $data['hadits'] =$dataHadits;

        $this->load->view('V_Index',$data);

    }

    public function tambahData()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = ["id" => $id,
        "judul" => $judul,
        "isi" => $isi ];

        $this->M_Index->tambahData($data);
        redirect();
    }

    public function editData($id)
    {
        $data['hadits_edit']= $this->M_Index->ambilDataById($id);
        $this->load->view('V_Edit',$data);
    }

    public function updateData($id)
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = ["id" => $id,
        "judul" => $judul,
        "isi" => $is];

        //echo "<pre>";
        //print_r($data);
        //exit();
        $this->M_Index->updateData($data,$id);
        redirect();
    }

    public function deleteData($id)
    {
        $this->M_Index->deleteData($id);
        redirect();
    }
}