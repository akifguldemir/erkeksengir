<?php
class Fitness extends CI_Controller {

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
			$query=$this->db->get(" fitness"); // spor tablosunu veritabanından çek
			$data["veri"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle	
				
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/fitness/fitness_liste',$data);
			$this->load->view('admin/footer');
		}
		public function ekle()
		{$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/fitness/fitness_ekle');
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
		$sonuc=$this->main_Model->insert_data("fitness",$data);

		if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Fitness haberi başarıyla eklendi.");
					redirect(base_url()."admin/fitness");
				}else{
					$this->session->set_flashdata("sonuc","Yükleme sırasında hata oluştu !");
					redirect(base_url()."admin/fitness");
				}
		
		}
		public function sil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM  fitness WHERE id='.$Id);
			$this->db->query('DELETE FROM fitnessyorumlar WHERE haberId='.$Id);
			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Fitness silme başarılıdır.");
					redirect(base_url()."admin/fitness");
				}else{
					$this->session->set_flashdata("sonuc","Yükleme sırasında hata oluştu !");
					redirect(base_url()."admin/fitness");
				}
		}
		public function duzenle($Id)
		{
		 $query1 = $this->db->query('select * from admin_uye'); 
		 $data["adminbilgi"]=$query1->result();
         $query = $this->db->get_where(" fitness",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
		 
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/fitness/fitness_duzenle',$data);
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
			$sonuc=$this->main_Model->update_data(" fitness",$data,$Id);
			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Fitness güncelleme başarılıdır.");
					redirect(base_url()."admin/fitness");
				}else{
					$this->session->set_flashdata("sonuc","Yükleme sırasında hata oluştu !");
					redirect(base_url()."admin/fitness");
				}
			
		}
		public function resimekle($Id)
		{$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
			$data["Id"]=$Id;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/fitness/fitness_resim',$data);
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

                        $this->load->view('admin/spor/fitness/fitness_resim', $error);
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
						$this->main_Model->update_data(" fitness",$data,$Id); //  fonksiypnua dataları id ile  gönder
						
						redirect(base_url()."admin/fitness");
				}
		}
}//Main
?>