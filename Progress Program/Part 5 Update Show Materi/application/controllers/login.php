<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		//$this->load->view('V_login');
        $this->load->view('splashscreen');
	}

    function bukaLogin(){
        $this->load->view('V_Login');
    }

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

    function bukaDashboard(){
        $this->load->view('dashboard');
    }

    public function lihatData(){
        $dataHadits = $this->m_login->ambilData();//Menyimpan hasil dari fungsi ambilData di M_Index pada variable dataHadits;

        $data['hadits'] =$dataHadits;

        $this->load->view('Halaman_utama',$data);
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
        redirect();
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
        "isi" => $is];

        //echo "<pre>";
        //print_r($data);
        //exit();
        $this->m_login->updateData($data,$id);
        redirect();
    }

    public function deleteData($id)
    {
        $this->m_login->deleteData($id);
        redirect();
    }
}