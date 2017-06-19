<?php
class main_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
          $this->load->helper('url');     
         $this->load->database();
		 $this->load->library("session");
      }
	  public function insert_data($tablo,$data)
	  {
		  if ($this->db->insert($tablo,$data)) 
		{
	    return true;
	  }
	  
	}
	public function update_data($tablo,$data,$Id)  
	{
		$this->db->where('id', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function updatearkkimresim_data($tablo,$data,$Id)  
	{
		$this->db->where('kimId', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function updatearkkimiresim_data($tablo,$data,$Id)  
	{
		$this->db->where('kimiId', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function updatepaylasimlar_data($tablo,$data,$Id)  
	{
		$this->db->where('uye_ID', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function updatepaylasimyorum_data($tablo,$data,$Id)  
	{
		$this->db->where('yapanId', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	
	public function updatebildirimler_data($tablo,$data,$Id)  
	{
		$this->db->where('kimId', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function updategalyorumresim_data($tablo,$data,$Id)  
	{
		$this->db->where('uye_ID', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function updatemesajlar_data($tablo,$data,$Id)  
	{
		$this->db->where('kimId', $Id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function update_mesajdurum($tablo,$data,$Id)  
	{
		$this->db->where('kimId', $Id);
		$this->db->update($tablo,$data);
		return true;
	} 
	public function update_forumdurum($tablo,$data,$Id)  
	{
		if($this->session->logged_in){
			$_session=$this->session->userdata('logged_in');
			$this->db->where('paylasimId', $Id);
			$this->db->where('kimeId', $_session->Id);
			
			$this->db->update($tablo,$data);
			return true;
		}
	}
	public function masajlarigoster(){
		
		$_session=$this->session->userdata('logged_in');
		/*$this->db->select('*');
		$this->db->from('mesajlar');
		$where = "(kimId='$_session->Id' ) OR (kimId='$Id' AND  kimeId='$_session->Id' )";
		$this->db->where($where);	
		$this->db->order_by('tarih','desc');	*/

		/*$query=$this->db->query('select cekid.cekId,mesajlar.* from cekid left join mesajlar on (mesajlar.kimId=4 and mesajlar.kimeId=cekid.cekId) or (mesajlar.kimId=cekid.cekId and mesajlar.kimeId=4)  ');	*/

		/*$this->db->select("cekid.cekId,mesajlar.*");
		$this->db->join("cekid","mesajlar.kimeId=cekid.cekId");
		$this->db->where("kimId",$_session->Id);
		$query1= $this->db->get_compiled_select("mesajlar");


		$this->db->select("cekid.cekId,mesajlar.*");
		$this->db->join("cekid","mesajlar.kimId=cekid.cekId");
		$this->db->where("kimeId",$_session->Id);
		$this->db->order_by("tarih",'desc');
		$query2= $this->db->get_compiled_select("mesajlar");

		$query =$this->db->query($query1 . ' UNION ' . $query2 );*/


		$this->db->select('*');
		$this->db->from('mesajlar');
		$this->db->order_by('tarih','desc');
		$query =$this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function solmasajlarigoster(){
		
		$_session=$this->session->userdata('logged_in');

		$this->db->select('cekId');
		$this->db->from('uyeler');
		$this->db->where('Id',$_session->Id);
		$queryCek=$this->db->get();
		$data['cekId']=$queryCek->result();
		$cekId=$data['cekId'][0]->cekId;
		
		$this->db->select('*');
		$this->db->from('mesajlar');
		$this->db->where('kimeId',$_session->Id);
		$this->db->where('kimId !=', $cekId);
		$this->db->order_by('tarih','desc');
		$this->db->limit(30);
		$query =$this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function mesajlarkisiler(){
		
		$_session=$this->session->userdata('logged_in');
		
		$this->db->select('*');
		$this->db->from('arkadaslik');
		$this->db->where('kimId',$_session->Id);
		$query= $this->db->get();
			
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function mesajkaydet($Id){

		$_session=$this->session->userdata('logged_in');

		$this->load->library("form_validation");
		$this->form_validation->set_rules("mesaj","Mesaj","required|trim");



		if($this->form_validation->run() == TRUE)
			{
					$this->db->select('cekId');
					$this->db->from('uyeler');
					$this->db->where('Id',$_session->Id);
					$queryk =$this->db->get();
					$data['cek']=$queryk->result();
					$cek=$data['cek'][0]->cekId;


					$field = array(
						'kimId' => $_session->Id,
							'kimad' => $_session->adsoy,
							'kimimg' => $_session->img,
							'kimeId' => $Id,
							'kimead' => $this->input->post('kimead'),
							'kimeimg' => $this->input->post('kimeimg'),
							'mesaj' => $this->input->post('mesaj')
						);

					$field1=array(
							'durum' => 1
																									
							);
						$this->main_Model->updatemesajlar_data('mesajlar',$field1,$cek);
						$this->db->insert('mesajlar', $field);
						if($this->db->affected_rows() > 0){
							return true;
						}else{
							return false;
						}

			}
			else{
				$this->session->set_flashdata("sonuchata","Bişeyler Yaz !");
			}

		
		}
		public function paybegen($Id,$kimeId)
		{

			$_session=$this->session->userdata('logged_in');

			$field = array(
					
					'kimId' => $_session->Id,
					'kimad' => $_session->adsoy,
					'kimimg' => $_session->img,
					'paylasimId' => $Id,
					'kimeId' => $kimeId,
					'durum' => 0,
					'cesit' => begen

					
				);

		
			$this->db->insert('bildirimler', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
		public function paylas($paylasim,$uye_ID,$uye_adsoy,$Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'kime_Id' => $_session->Id,
				'paylasim' => $paylasim,				
				'kimdenId' => $uye_ID,
				'kimdenAd' =>$uye_adsoy,
				'cesit' => alinti	
			);

			$data1=array(
						
						'kimId' => $_session->Id,
						'kimAd' => $_session->adsoy,
						'kimimg' => $_session->img,
						'kimeId' => $uye_ID,
						'paylasimId' => $Id,
						'durum' => 0,
						'cesit' => paylasma
					);
				
			$this->db->insert('bildirimler', $data1);
			$this->db->insert('paylasimlar', $data);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}

		
		}
		public function paylas1($paylasim,$uye_ID,$uye_adsoy,$link,$Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'kime_Id' => $_session->Id,
				'paylasim' => $paylasim,				
				'kimdenId' => $uye_ID,
				'link' => $link,
				'kimdenAd' =>$uye_adsoy,
				'cesit' => alinti	
			);
			$data1=array(
						
						'kimId' => $_session->Id,
						'kimAd' => $_session->adsoy,
						'kimimg' => $_session->img,
						'kimeId' => $uye_ID,
						'paylasimId' => $Id,
						'durum' => 0,
						'cesit' => paylasma
					);
				
			$this->db->insert('bildirimler', $data1);
			$this->db->insert('paylasimlar', $data);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}

		
		}
		public function paylas2($paylasim,$uye_ID,$uye_adsoy,$paylasimimg,$Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'kime_Id' => $_session->Id,
				'paylasim' => $paylasim,				
				'kimdenId' => $uye_ID,
				'paylasimimg' => $paylasimimg,
				'kimdenAd' =>$uye_adsoy,
				'cesit' => alinti	
			);
			$data1=array(
						
						'kimId' => $_session->Id,
						'kimAd' => $_session->adsoy,
						'kimimg' => $_session->img,
						'kimeId' => $uye_ID,
						'paylasimId' => $Id,
						'durum' => 0,
						'cesit' => paylasma
					);
				
			$this->db->insert('bildirimler', $data1);
			$this->db->insert('paylasimlar', $data);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}

		
		}
		public function paylas3($paylasim,$uye_ID,$uye_adsoy,$video,$Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'kime_Id' => $_session->Id,
				'paylasim' => $paylasim,				
				'kimdenId' => $uye_ID,
				'video' => $video,
				'kimdenAd' =>$uye_adsoy,
				'cesit' => alinti	
			);
			$data1=array(
						
						'kimId' => $_session->Id,
						'kimAd' => $_session->adsoy,
						'kimimg' => $_session->img,
						'kimeId' => $uye_ID,
						'paylasimId' => $Id,
						'durum' => 0,
						'cesit' => paylasma
					);
				
			$this->db->insert('bildirimler', $data1);
			$this->db->insert('paylasimlar', $data);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}

		
		}
	public function bildirimgoster(){
		
		$_session=$this->session->userdata('logged_in');
		
		$this->db->select('*');
		$this->db->from('bildirimler');
		$this->db->where('kimeId',$_session->Id);
		$this->db->order_by('tarih','desc');
		$query =$this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function mesajbildirim()
	{
		
		$_session=$this->session->userdata('logged_in');
		
		$this->db->select('*');
		$this->db->from('mesajlar');
		$this->db->where('kimeId',$_session->Id);
		$this->db->where('durum',0 );
		$query= $this->db->get();	
			
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function galeribildirimgoster()
	{
	
		$_session=$this->session->userdata('logged_in');

		$this->db->select('*');
		$this->db->from('bildirimler');
		$this->db->where('kimeId',$_session->Id);
		$this->db->order_by('tarih','desc');
		$query =$this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function forumbildirimgoster()
	{
	
		$_session=$this->session->userdata('logged_in');

		$this->db->select('*');
		$this->db->from('bildirimler');
		$this->db->where('kimeId',$_session->Id);
		$this->db->order_by('tarih','desc');
		$query =$this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function bildirimgeldi()
	{
		
		$_session=$this->session->userdata('logged_in');
		
		$this->db->select('*');
		$this->db->from('bildirimler');
		$this->db->where('kimeId',$_session->Id);
		$this->db->where('durum',0 );
		$query= $this->db->get();	
			
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function begenmekaydet($Id)

	{

			$_session=$this->session->userdata('logged_in');
					
				$data=array(
					
					'kimId' => $_session->Id,
					'kimAd' => $_session->adsoy,
					'kimimg' => $_session->img,
					'kimeId' => $_session->Id,
					'paylasimId' => $Id,
					'durum' => 0,
					'cesit' => begenme
				);
			
				$this->db->insert('bildirimler', $data);
				if($this->db->affected_rows() > 0){
					return true;
				}else{
					return false;
				}

	}

}//Main
?>
	