<?php
class Futbol extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e erişmemizi sağlar
				$this->load->helper(array('form','url'));
				$this->load->model('main_Model'); // model tanımlaması
				if (!$this->session->userdata('login_giris'))
					{ 
						redirect(base_url()."admin/login");
					}

        }
		public function index()
		{
			$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
		$query=$this->db->get("futbol"); // spor tablosunu veritabanından çek
		$data["veri"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle	
			
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/spor/futbol/futbol_liste',$data);
		$this->load->view('admin/footer');
		}
		public function ekle()
		{$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/futbol/futbol_ekle');
			$this->load->view('admin/footer');

		}
		public function kaydet()
		{
		$data=array(
			'baslik' => $this->input->post('baslik'),
			'keywords' => $this->input->post('keywords'),
			'aciklama' => $this->input->post('aciklama'),
			'text' => $this->input->post('text')
		);
		$sonuc=$this->main_Model->insert_data("futbol",$data);

		if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Futbol haberi başarıyla eklendi.");
					redirect(base_url()."admin/futbol");
				}else{
					$this->session->set_flashdata("sonuc","Yükleme sırasında hata oluştu !");
					redirect(base_url()."admin/futbol");
				}
		
		}
		public function sil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM futbol WHERE id='.$Id);
			$this->db->query('DELETE FROM futbolyorumlar WHERE haberId='.$Id);
			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Futbol haberi silme başarılır.");
					redirect(base_url()."admin/futbol");
				}else{
					$this->session->set_flashdata("sonuc","Yükleme sırasında hata oluştu !");
					redirect(base_url()."admin/futbol");
				}
		}
		public function duzenle($Id)
		{
		 $query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
         $query = $this->db->get_where("futbol",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
		 
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/futbol/futbol_duzenle',$data);
			$this->load->view('admin/footer');
			
		}
		public function guncelle($Id)
		{
			$data=array(
			'baslik' => $this->input->post('baslik'),
			'keywords' => $this->input->post('keywords'),
			'aciklama' => $this->input->post('aciklama'),
			'text' => $this->input->post('text')
			);
			$sonuc=$this->main_Model->update_data("futbol",$data,$Id);
			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Futbol haberi güncelleme başarılır.");
					redirect(base_url()."admin/futbol");
				}else{
					$this->session->set_flashdata("sonuc","Yükleme sırasında hata oluştu !");
					redirect(base_url()."admin/futbol");
				}
			
		}
		public function resimekle($Id)
		{$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
			$data["Id"]=$Id;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/futbol/futbol_resim',$data);
			$this->load->view('admin/footer');
		}
		public function resim_upload($Id)
		{		
				//resim upload ayarları
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çağır
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/spor/futbol/futbol_resim', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanına kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name 
						);
					
						// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
						$this->main_Model->update_data("futbol",$data,$Id); //  fonksiypnua dataları id ile  gönder
						
						
						redirect(base_url()."admin/futbol");
				}
		}
}//Main
?>