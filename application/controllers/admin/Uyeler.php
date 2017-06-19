<?php
class Uyeler extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e erişmemizi sağlar
				$this->load->helper(array('form','url'));
				$this->load->model('Admin_Model'); // model tanımlaması
				if (!$this->session->userdata('login_giris'))
					{ 
						redirect(base_url()."admin/login");
					}

        }
		public function index()
		{
		$query=$this->db->get("admin_uye"); // uyeler tablasonu veritananından çek
		$data["veri"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle	
		
		$query1 = $this->db->query('select * from admin_uye'); 
		$data["adminbilgi"]=$query1->result();	
			
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/admin/admin_liste',$data);
		$this->load->view('admin/footer');
		}
		public function ekle()
		{	
			$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/admin/admin_ekle');
			$this->load->view('admin/footer');

		}
		public function kaydet()
		{
			
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'telefon' => $this->input->post('telefon'),
			'sifre' => $this->input->post('sifre')
		);
		$this->Admin_Model->insert_data("admin_uye",$data);
		redirect(base_url()."admin/uyeler");
		}
		public function sil($Id)
		{
			$this->db->query('DELETE FROM admin_uye WHERE id='.$Id);
			redirect(base_url()."admin/uyeler");
		}
		public function duzenle($Id)
		{
		 $query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
         $query = $this->db->get_where("admin_uye",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
		 
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/admin/admin_duzenle',$data);
			$this->load->view('admin/footer');
			
		}
		public function guncelle($Id)
		{
			$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'telefon' => $this->input->post('telefon'),
			'sifre' => $this->input->post('sifre')
			);
			$this->Admin_Model->update_data("admin_uye",$data,$Id);
			redirect(base_url()."admin/uyeler");
			
		}
}//Main
?>