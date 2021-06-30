<?php 

class M_login extends CI_Model{	

	function cek_login($table,$where)
    {		
		return $this->db->get_where($table,$where);
	}
    
    public function ambilData()
    {
        return $this->db->get('hadits')->result_array();
    }

    public function tambahData($data)
    {
        $this->db->insert('hadits',$data);
    }

    public function ambilDataById($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('hadits')->result_array();
    }

    public function updateData($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('hadits',$data);
    }

    public function deleteData($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('hadits');
    }
}