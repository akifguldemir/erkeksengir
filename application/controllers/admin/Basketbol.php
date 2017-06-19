<?php
class Basketbol extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e erişmemizi sağlar
				$this->load->helper(array('form','url'));
				$this->load->model('main_Model'); // model tanımlaması
        }
		public function index()
		{
			$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
		$query=$this->db->get("basketbol"); // spor tablosunu veritabanından çek
		$data["veri"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle	
			
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/spor/basketbol/basketbol_liste',$data);
		$this->load->view('admin/footer');
		}
		public function ekle()
		{$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/basketbol/basketbol_ekle');
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
		$sonuc=$this->main_Model->insert_data("basketbol",$data);

		if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Basketbol haberi başarıyla eklendi.");
					redirect(base_url()."admin/basketbol");
				}else{
					$this->session->set_flashdata("sonuc","Yükleme sırasında hata oluştu !");
					redirect(base_url()."admin/basketbol");
				}
		
		}
		public function sil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM basketbol WHERE id='.$Id);
			$this->db->query('DELETE FROM basketbolyorumlar WHERE haberId='.$Id);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Basketbol silme işlemi başarılıdır.");
				redirect(base_url()."admin/basketbol");
			}else
			{
				$this->session->set_flashdata("sonuc","Hata oluştu !");
				redirect(base_url()."admin/basketbol");
			}
			
		}
		public function duzenle($Id)
		{
		 $query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
         $query = $this->db->get_where("basketbol",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
		 
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/basketbol/basketbol_duzenle',$data);
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
			$sonuc=$this->main_Model->update_data("basketbol",$data,$Id);
			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Basketbol güncelleme işlemi başarılıdır.");
				redirect(base_url()."admin/basketbol");
			}else
			{
				$this->session->set_flashdata("sonuc","Hata oluştu !");
				redirect(base_url()."admin/basketbol");
			}
			
			
		}
		public function resimekle($Id)
		{$query1 = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query1->result();
			$data["Id"]=$Id;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/spor/basketbol/basketbol_resim',$data);
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

                        $this->load->view('admin/spor/basketbol/basketbol_resim', $error);
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
						$this->main_Model->update_data("basketbol",$data,$Id); //  fonksiypnua dataları id ile  gönder
						
						redirect(base_url()."admin/basketbol");
				}
		}
}//Main
?>