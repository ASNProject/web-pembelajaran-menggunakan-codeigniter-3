<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

        $this->load->model('m_login');
	}
 
	function index(){
		$dataHadits = $this->m_login->ambilData();//Menyimpan hasil dari fungsi ambilData di M_Index pada variable dataHadits;

         $data['hadits'] =$dataHadits;

        $this->load->view('V_Index', $data);
	}

    public function lihatData()
    {
        $dataHadits = $this->m_login->ambilData();//Menyimpan hasil dari fungsi ambilData di M_Index pada variable dataHadits;

         $data['hadits'] =$dataHadits;

        $this->load->view('Halaman_Utama', $data);
    }

    public function tambahData()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = ["id" => $id,
        "judul" => $judul,
        "isi" => $isi ];

        $this->m_login->tambahData($data);
        redirect(base_url("admin"));
    }

    public function editData($id)
    {
        $data['hadits_edit']= $this->m_login->ambilDataById($id);
        $this->load->view('V_Edit',$data);
    }

    public function updateData($id)
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = ["id" => $id,
        "judul" => $judul,
        "isi" => $isi];

        //echo "<pre>";
        //print_r($data);
        //exit();
        $this->m_login->updateData($data,$id);
        redirect(base_url("admin"));
    }

    public function deleteData($id)
    {
        $this->m_login->deleteData($id);
        redirect(base_url("admin"));
    }

}