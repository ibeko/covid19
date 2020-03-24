<?php 

class Pruebasmodel extends CI_Model{
 
	 public function getAll()
	 {
	 	return $this->db->order_by('SIRKET_KODU', 'DESC')->get("BSAT008")->result();
	 	//return $this->db->get("OLAYLAR", 100)->result();
	 }

	  public function insert($data =array())
    {
        return $this->db->insert("member", $data);
    }
    public function get($where)
    {
        return $this->db->where($where)->get("member")->row();
    }

    public function update($where, $data)
    {
    	return $this->db->where($where)->update("member", $data);
    }

    public function delete($id)
    {
    	return $this->db->delete('member', $id); 
    }


}