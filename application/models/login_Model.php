<?php
class login_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
      }
	  public function insert_data($tablo,$data)
	  {
		  if ($this->db->insert($tablo,$data)) // Spor tablosuna datalarý ekle
		{
	    return true;
	  }
	  
	}
	public function update_data($tablo,$data,$Id)  // Ýd si ve datasý gönderilen verileri günceller
	{
		$this->db->where('id', $Id);
		$this->db->update($tablo,$data);
		return true;
	} 
	public function login($email,$sifre)
	  {
		$this->db->select('*');
        $this->db->from('uyeler');
        $this->db->where('email', $email);
        $this->db->where('sifre', $sifre);
        $this->db->limit(1);
         
        
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
	  }
}//Main
?>
	