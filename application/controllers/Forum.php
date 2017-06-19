<?php
class Forum extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e eriþmemizi saðlar
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('main_Model');

        }
		public function gezi()
		{
			$query1 = $this->db->query('select * from sondakika '); 
			$data["sondakika"]=$query1->result(); 
			$this->db->select('*');
			$this->db->from('fgezi');			
			$query= $this->db->get();
			$data['gezibaslik'] = $query->result(); 

			$query2 = $this->db->query('select * from fgeziyorum  group by konuId '); 			
			$data["sonileti"]=$query2->result();

			$this->load->view('forum/gezi',$data);
		}
		public function gezibaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fgezi",$data);
			redirect(base_url()."forum/gezi");
						
			
		}
		public function gezidetay($Id)
		{	
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fgeziyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fgeziyorum'] = $query->result(); 
			
			$this->db->select('*');
			$this->db->from('fgezi');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fgezi'] = $query2->result(); 
			
			$query1= $this->db->get_where("fgeziyorum",array("id"=>$Id )); 
			$data['verigezi'] = $query1->result();		
			$data['id'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			}	

			$data['gezidonId']=$Id;


			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);

			$this->load->view('forum/gezidetay',$data);
		}
		public function geziyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fgeziyorum",$data);
			redirect(base_url()."forum/gezidetay/".$Id);
		}
			public function geziyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/gezi', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id
										
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fgeziyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/gezidetay/".$Id);
						
				}
		}
		public function gezidavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => gezidetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/gezidetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/gezidetay/".$konuId);
			}


		}
		public function spor()
		{	
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fspor');			
			$query= $this->db->get();
			$data['sporbaslik'] = $query->result(); 		
			

			$query2 = $this->db->query('select * from fsporyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();

			$this->load->view('forum/spor',$data);
		}
		
		public function sporbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fspor",$data);
			redirect(base_url()."forum/spor");
						
			
		}
		public function spordetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fsporyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fsporyorum'] = $query->result(); 
			
			$this->db->select('*');
			$this->db->from('fspor');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fspor'] = $query2->result(); 
			
			$query1= $this->db->get_where("fsporyorum",array("id"=>$Id )); 
			$data['verispor'] = $query1->result();		
			$data['id'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			}	

			$data['spordonId']=$Id;


			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);

			$this->load->view('forum/spordetay',$data);
		
			
		}
		public function sporyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fsporyorum",$data);
			redirect(base_url()."forum/spordetay/".$Id);
		}
			public function sporyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/spor', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fsporyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/spordetay/".$Id);
						
				}
		}
		public function spordavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => spordetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/spordetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/spordetay/".$konuId);
			}


		}
		public function teknoloji()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fteknoloji');			
			$query= $this->db->get();
			$data['teknolojibaslik'] = $query->result();

			$query2 = $this->db->query('select * from fteknolojiyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/teknoloji',$data);
		}
		public function teknolojibaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fteknoloji",$data);
			redirect(base_url()."forum/teknoloji");
						
			
		}
		public function teknolojidetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fteknolojiyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fteknolojiyorum'] = $query->result(); 
			
			$this->db->select('*');
			$this->db->from('fteknoloji');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fteknoloji'] = $query2->result(); 
			
			$query1= $this->db->get_where("fteknolojiyorum",array("id"=>$Id )); 
			$data['veriteknoloji'] = $query1->result();		
			$data['id'] = $Id;
			$data['teknolojidonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			}

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/teknolojidetay',$data);
			
		}
		public function teknolojiyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fteknolojiyorum",$data);
			redirect(base_url()."forum/teknolojidetay/".$Id);
		}
			public function teknolojiyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/teknoloji', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fteknolojiyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/teknolojidetay/".$Id);
						
				}
		}
		public function teknolojidavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => teknolojidetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/teknolojidetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/teknolojidetay/".$konuId);
			}


		}
		public function gundem()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fgundem');			
			$query= $this->db->get();
			$data['gundembaslik'] = $query->result();

			$query2 = $this->db->query('select * from fgundemyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/gundem',$data);
		}
		public function gundembaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fgundem",$data);
			redirect(base_url()."forum/gundem");
						
			
		}
		public function gundemdetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fgundemyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fgundemyorum'] = $query->result(); 
			
			$this->db->select('*');
			$this->db->from('fgundem');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fgundem'] = $query2->result();
			
			$query1= $this->db->get_where("fgundemyorum",array("id"=>$Id )); 
			$data['verigundem'] = $query1->result();		
			$data['id'] = $Id;

			$data['gundemdonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/gundemdetay',$data);
			
		}
		public function gundemyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fgundemyorum",$data);
			redirect(base_url()."forum/gundemdetay/".$Id);
		}
			public function gundemyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/gundem', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id		
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fgundemyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/gundemdetay/".$Id);
						
				}
		}
		public function gundemdavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => gundemdetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/gundemdetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/gundemdetay/".$konuId);
			}


		}
		public function siyaset()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fsiyaset');			
			$query= $this->db->get();
			$data['siyasetbaslik'] = $query->result();

			$query2 = $this->db->query('select * from fsiyasetyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/siyaset',$data);
		}
		public function siyasetbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fsiyaset",$data);
			redirect(base_url()."forum/siyaset");
						
			
		}
		public function siyasetdetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fsiyasetyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fsiyasetyorum'] = $query->result(); 
			
			$this->db->select('*');
			$this->db->from('fsiyaset');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fsiyaset'] = $query2->result();
			
			$query1= $this->db->get_where("fsiyasetyorum",array("id"=>$Id )); 
			$data['verisiyaset'] = $query1->result();		
			$data['id'] = $Id;
			$data['siyasetdonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/siyasetdetay',$data);
			
		}
		public function siyasetyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fsiyasetyorum",$data);
			redirect(base_url()."forum/siyasetdetay/".$Id);
		}
			public function siyasetyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/siyaset', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fsiyasetyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/siyasetdetay/".$Id);
						
				}
		}
		public function siyasetdavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => siyasetdetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/siyasetdetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/siyasetdetay/".$konuId);
			}


		}
		public function dunya()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fdunya');			
			$query= $this->db->get();
			$data['dunyabaslik'] = $query->result();

			$query2 = $this->db->query('select * from fdunyayorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/dunya',$data);
		}
		public function dunyabaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fdunya",$data);
			redirect(base_url()."forum/dunya");
						
			
		}
		public function dunyadetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fdunyayorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fdunyayorum'] = $query->result(); 
			
			$this->db->select('*');
			$this->db->from('fdunya');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fdunya'] = $query2->result();
			
			$query1= $this->db->get_where("fgeziyorum",array("id"=>$Id )); 
			$data['veridunya'] = $query1->result();		
			$data['id'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			}

			$data['dunyadonId'] = $Id;

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/dunyadetay',$data);
			
		}
		public function dunyayorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fdunyayorum",$data);
			redirect(base_url()."forum/dunyadetay/".$Id);
		}
			public function dunyayorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/dunya', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id		
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fdunyayorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/dunyadetay/".$Id);
						
				}
		}
		public function dunyadavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => dunyadetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/dunyadetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/dunyadetay/".$konuId);
			}


		}
		public function ekonomi() {
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fekonomi');			
			$query= $this->db->get();
			$data['ekonomibaslik'] = $query->result();

			$query2 = $this->db->query('select * from fekonomiyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/ekonomi',$data);
		}
		public function ekonomibaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fekonomi",$data);
			redirect(base_url()."forum/ekonomi");
						
			
		}
		public function ekonomidetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fekonomiyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fekonomiyorum'] = $query->result(); 
			
			$this->db->select('*');
			$this->db->from('fekonomi');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fekonomi'] = $query2->result();
			
			$query1= $this->db->get_where("fgeziyorum",array("id"=>$Id )); 
			$data['verigezi'] = $query1->result();		
			$data['id'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			}

			$data['ekonomidonId'] = $Id; 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/ekonomidetay',$data);
		
		}
		public function ekonomiyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fekonomiyorum",$data);
			redirect(base_url()."forum/ekonomidetay/".$Id);
		}
			public function ekonomiyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/ekonomi', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fekonomiyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/ekonomidetay/".$Id);
						
				}
		}
		public function ekonomidavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => ekonomidetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/ekonomidetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/ekonomidetay/".$konuId);
			}


		}
		public function yatirim()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fyatirim');			
			$query= $this->db->get();
			$data['yatirimbaslik'] = $query->result();

			$query2 = $this->db->query('select * from fyatirimyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/yatirim',$data);
		}
		public function yatirimbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fyatirim",$data);
			redirect(base_url()."forum/yatirim");
						
			
		}
		public function yatirimdetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fyatirimyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fyatirimyorum'] = $query->result(); 
				
			$this->db->select('*');
			$this->db->from('fyatirim');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fyatirim'] = $query2->result();
			
			$query1= $this->db->get_where("fyatirimyorum",array("id"=>$Id )); 
			$data['veriyatirim'] = $query1->result();		
			$data['id'] = $Id;
			$data['yatirimdonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/yatirimdetay',$data);
			
		}
		public function yatirimyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fyatirimyorum",$data);
			redirect(base_url()."forum/yatirimdetay/".$Id);
		}
			public function yatirimyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/yatirim', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fyatirimyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/yatirimdetay/".$Id);
						
				}
		}
		public function yatirimdavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => yatirimdetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/yatirimdetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/yatirimdetay/".$konuId);
			}


		}
		public function oyun()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('foyun');			
			$query= $this->db->get();
			$data['oyunbaslik'] = $query->result();

			$query2 = $this->db->query('select * from foyunyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/oyun',$data);
		}
		public function oyunbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("foyun",$data);
			redirect(base_url()."forum/oyun");
						
			
		}
		public function oyundetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('foyunyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['foyunyorum'] = $query->result(); 
				
			$this->db->select('*');
			$this->db->from('foyun');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['foyun'] = $query2->result();
			
			
			$query1= $this->db->get_where("foyunyorum",array("id"=>$Id )); 
			$data['verioyun'] = $query1->result();		
			$data['id'] = $Id;

			$data['oyundonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/oyundetay',$data);
			
		}
		public function oyunyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("foyunyorum",$data);
			redirect(base_url()."forum/oyundetay/".$Id);
		}
			public function oyunyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/oyun', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id		
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("foyunyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/oyundetay/".$Id);
						
				}
		}
		public function oyundavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => oyundetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/oyundetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/oyundetay/".$konuId);
			}


		}
		public function bahis()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fbahis');			
			$query= $this->db->get();
			$data['bahisbaslik'] = $query->result();

			$query2 = $this->db->query('select * from fbahisyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/bahis',$data);
		}
		public function bahisbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fbahis",$data);
			redirect(base_url()."forum/bahis");
						
			
		}
		public function bahisdetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fbahisyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fbahisyorum'] = $query->result(); 
				
			$this->db->select('*');
			$this->db->from('fbahis');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fbahis'] = $query2->result();
			
			
			$query1= $this->db->get_where("fbahisyorum",array("id"=>$Id )); 
			$data['veribahis'] = $query1->result();		
			$data['id'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			}

			$data['bahisdonId'] = $Id;

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/bahisdetay',$data);
			
		}
		public function bahisyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fbahisyorum",$data);
			redirect(base_url()."forum/bahisdetay/".$Id);
		}
			public function bahisyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/bahis', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fbahisyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/bahisdetay/".$Id);
						
				}
		}
		public function bahisdavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => bahisdetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/bahisdetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/bahisdetay/".$konuId);
			}


		}
		public function tv()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('ftv');			
			$query= $this->db->get();
			$data['tvbaslik'] = $query->result();

			$query2 = $this->db->query('select * from ftvyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/tv',$data);
		}
		public function tvbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("ftv",$data);
			redirect(base_url()."forum/tv");
						
			
		}
		public function tvdetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('ftvyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['ftvyorum'] = $query->result(); 
				
			$this->db->select('*');
			$this->db->from('ftv');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['ftv'] = $query2->result();
			
			$query1= $this->db->get_where("ftvyorum",array("id"=>$Id )); 
			$data['veritv'] = $query1->result();		
			$data['id'] = $Id;
			$data['tvdonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/tvdetay',$data);
			
		}
		public function tvyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("ftvyorum",$data);
			redirect(base_url()."forum/tvdetay/".$Id);
		}
			public function tvyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/tv', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("ftvyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/tvdetay/".$Id);
						
				}
		}
		public function tvdavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => tvdetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/tvdetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/tvdetay/".$konuId);
			}


		}
		public function sinema()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fsinema');			
			$query= $this->db->get();
			$data['sinemabaslik'] = $query->result();

			$query2 = $this->db->query('select * from fsinemayorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/sinema',$data);
		}
		public function sinemabaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fsinema",$data);
			redirect(base_url()."forum/sinema");
						
			
		}
		public function sinemadetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fsinemayorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fsinemayorum'] = $query->result(); 
			
				
			$this->db->select('*');
			$this->db->from('fsinema');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fsinema'] = $query2->result();
			
			$query1= $this->db->get_where("fsinemayorum",array("id"=>$Id )); 
			$data['verisinema'] = $query1->result();		
			$data['id'] = $Id;
			$data['sinemadonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			}
			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/sinemadetay',$data);
			
		}
		public function sinemayorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fsinemayorum",$data);
			redirect(base_url()."forum/sinemadetay/".$Id);
		}
			public function sinemayorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/sinema', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fsinemayorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/sinemadetay/".$Id);
						
				}
		}
		public function sinemadavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => sinemadetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/sinemadetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/sinemadetay/".$konuId);
			}


		}
		public function kitap()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fkitap');			
			$query= $this->db->get();
			$data['kitapbaslik'] = $query->result();

		
						
			$this->load->view('forum/kitap',$data);
		}
		public function kitapbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fkitap",$data);
			redirect(base_url()."forum/kitap");
						
			
		}
		public function kitapdetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fkitapyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fkitapyorum'] = $query->result(); 
			
				
			$this->db->select('*');
			$this->db->from('fkitap');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fkitap'] = $query2->result();
			
			$query1= $this->db->get_where("fkitapyorum",array("id"=>$Id )); 
			$data['verikitap'] = $query1->result();		
			$data['id'] = $Id;

			$data['kitapdonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/kitapdetay',$data);
			
		}
		public function kitapyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fkitapyorum",$data);
			redirect(base_url()."forum/kitapdetay/".$Id);
		}
			public function kitapyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/kitap', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id		
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fkitapyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/kitapdetay/".$Id);
						
				}
		}
		public function kitapdavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => kitapdetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/kitapdetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/kitapdetay/".$konuId);
			}


		}
		public function otomobil()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fotomobil');			
			$query= $this->db->get();
			$data['otomobilbaslik'] = $query->result();

			$query2 = $this->db->query('select * from fotomobilyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/otomobil',$data);
		}
		public function otomobilbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fotomobil",$data);
			redirect(base_url()."forum/otomobil");
						
			
		}
		public function otomobildetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fotomobilyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fotomobilyorum'] = $query->result(); 
			
				
			$this->db->select('*');
			$this->db->from('fotomobil');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fotomobil'] = $query2->result();
			
			
			$query1= $this->db->get_where("fotomobilyorum",array("id"=>$Id )); 
			$data['veriotomobil'] = $query1->result();		
			$data['id'] = $Id;

			$data['otomobildonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/otomobildetay',$data);
			
		
		}
		public function otomobilyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fotomobilyorum",$data);
			redirect(base_url()."forum/otomobildetay/".$Id);
		}
			public function otomobilyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/otomobil', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id	
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fotomobilyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/otomobildetay/".$Id);
						
				}
		}
		public function otomobildavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => otomobildetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/otomobildetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/otomobildetay/".$konuId);
			}


		}
		public function saglik()
		{
			$query1 = $this->db->query('select * from sondakika '); // haberler tablasonu veritananýndan çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
			$this->db->select('*');
			$this->db->from('fsaglik');			
			$query= $this->db->get();
			$data['saglikbaslik'] = $query->result();

			$query2 = $this->db->query('select * from fsaglikyorum  order by id desc limit 0, 1'); 			
			$data["sonileti"]=$query2->result();
						
			$this->load->view('forum/saglik',$data);
		}
		public function saglikbaslikac()
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'acanuyeId' => $_session->Id,
				'acanuyeadsoy' => $_session->adsoy,
				'baslik' => $this->input->post('baslik'),			
			);
			$this->main_Model->insert_data("fsaglik",$data);
			redirect(base_url()."forum/saglik");
						
			
		}
		public function saglikdetay($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('fsaglikyorum');
			$this->db->where('konuId',$Id);
			$query= $this->db->get();				
			$data['fsaglikyorum'] = $query->result(); 
				
			$this->db->select('*');
			$this->db->from('fsaglik');
			$this->db->where('Id',$Id);
			$query2= $this->db->get();				
			$data['fsaglik'] = $query2->result();
			
			$query1= $this->db->get_where("fsaglikyorum",array("id"=>$Id )); 
			$data['verisaglik'] = $query1->result();		
			$data['id'] = $Id;
			$data['saglikdonId'] = $Id;

			if($this->session->logged_in){
															
				$this->db->select('*');
				$this->db->from('arkadaslik');
				$this->db->where('kimId',$_session->Id);
				$querydavet= $this->db->get();				
				$data['davet'] = $querydavet->result(); 
			} 

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_forumdurum("bildirimler",$data1,$Id);
			$this->load->view('forum/saglikdetay',$data);
			
		}
		public function saglikyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'konuId'=> $Id
			);
			$this->main_Model->insert_data("fsaglikyorum",$data);
			redirect(base_url()."forum/saglikdetay/".$Id);
		}
			public function saglikyorumresimkaydet($Id)
		{		
				$_session=$this->session->userdata('logged_in');
				$data['id'] = $Id;
				//resim upload ayarlarý
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '0';
                $config['max_width']            = '2048';
                $config['max_height']           = '2048';
				
				 $this->load->library('upload', $config); // upload kütüphansini çaðýr
				 
				 if ( ! $this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('forum/saglik', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanýna kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'yapanimg' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'yorum' => $this->input->post('yorum'),	
							'konuId'=> $Id		
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("fsaglikyorum",$data); //  fonksiyonuna datalarý id ile  gönder
						
						redirect(base_url()."forum/saglikdetay/".$Id);
						
				}
		}
		public function saglikdavet($konuId,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kisiId,				
				'paylasimId' => $konuId,
				'durum' => 0,
				'cesit' =>forum,
				'link' => saglikdetay
			);

			$sonuc=$this->main_Model->insert_data("bildirimler",$data);

			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Davetiniz başarıyla gönderilmiştir.");
				redirect(base_url()."forum/saglikdetay/".$konuId);

			}
			else
			{
				$this->session->set_flashdata("sonuc","Davet gönderilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
				redirect(base_url()."forum/saglikdetay/".$konuId);
			}


		}
		public function gezipaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fgeziyorum WHERE id='.$Id);
			redirect(base_url()."forum/gezidetay/".$donId);
		}
		public function gezibasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fgezi WHERE id='.$Id);
			$this->db->query('DELETE FROM fgeziyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/gezi");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/gezi");
				}
		}
		public function sporpaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fsporyorum WHERE id='.$Id);
			redirect(base_url()."forum/spordetay/".$donId);
		}
		public function sporbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fspor WHERE id='.$Id);
			$this->db->query('DELETE FROM fsporyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/spor");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/spor");
				}
		}
		public function bahispaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fbahisyorum WHERE id='.$Id);
			redirect(base_url()."forum/bahisdetay/".$donId);
		}
		public function bahisbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fbahis WHERE id='.$Id);
			$this->db->query('DELETE FROM fbahisyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/bahis");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/bahis");
				}
		}
		public function dunyapaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fdunyayorum WHERE id='.$Id);
			redirect(base_url()."forum/dunyadetay/".$donId);
		}
		public function dunyabasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fdunya WHERE id='.$Id);
			$this->db->query('DELETE FROM fdunyayorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/dunya");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/dunya");
				}
		}
		public function ekonomipaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fekonomiyorum WHERE id='.$Id);
			redirect(base_url()."forum/ekonomidetay/".$donId);
		}
		public function ekonomibasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fekonomi WHERE id='.$Id);
			$this->db->query('DELETE FROM fekonomiyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/ekonomi");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/ekonomi");
				}
		}
		public function gundempaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fgundemyorum WHERE id='.$Id);
			redirect(base_url()."forum/gundemdetay/".$donId);
		}
		public function gundembasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fgundem WHERE id='.$Id);
			$this->db->query('DELETE FROM fgundemyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/gundem");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/gundem");
				}
		}
		public function kitappaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fkitapyorum WHERE id='.$Id);
			redirect(base_url()."forum/kitapdetay/".$donId);
		}
		public function kitapbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fkitap WHERE id='.$Id);
			$this->db->query('DELETE FROM fkitapyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/kitap");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/kitap");
				}
		}
		public function otomobilpaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fotomobilyorum WHERE id='.$Id);
			redirect(base_url()."forum/otomobildetay/".$donId);
		}
		public function otomobilbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fotomobil WHERE id='.$Id);
			$this->db->query('DELETE FROM fotomobilyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/otomobil");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/otomobil");
				}
		}
		public function oyunpaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM foyunyorum WHERE id='.$Id);
			redirect(base_url()."forum/oyundetay/".$donId);
		}
		public function oyunbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM foyun WHERE id='.$Id);
			$this->db->query('DELETE FROM foyunyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/oyun");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/oyun");
				}
		}
		public function saglikpaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fsaglikyorum WHERE id='.$Id);
			redirect(base_url()."forum/saglikdetay/".$donId);
		}
		public function saglikbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fsaglik WHERE id='.$Id);
			$this->db->query('DELETE FROM fsaglikyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/saglik");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/saglik");
				}
		}
		public function sinemapaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fsinemayorum WHERE id='.$Id);
			redirect(base_url()."forum/sinemadetay/".$donId);
		}
		public function sinemabasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fsinema WHERE id='.$Id);
			$this->db->query('DELETE FROM fsinemayorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/sinema");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/sinema");
				}
		}
		public function siyasetpaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fsiyasetyorum WHERE id='.$Id);
			redirect(base_url()."forum/siyasetdetay/".$donId);
		}
		public function siyasetbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fsiyaset WHERE id='.$Id);
			$this->db->query('DELETE FROM fsiyasetyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/siyaset");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/siyaset");
				}
		}
		public function teknolojipaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fteknolojiyorum WHERE id='.$Id);
			redirect(base_url()."forum/teknolojidetay/".$donId);
		}
		public function teknolojibasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fteknoloji WHERE id='.$Id);
			$this->db->query('DELETE FROM fteknolojiyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/teknoloji");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/teknoloji");
				}
		}
		public function tvpaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM ftvyorum WHERE id='.$Id);
			redirect(base_url()."forum/tvdetay/".$donId);
		}
		public function tvbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM ftv WHERE id='.$Id);
			$this->db->query('DELETE FROM ftvyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/tv");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/tv");
				}
		}
		public function yatirimpaylasimsil($Id,$donId)
		{	
			$this->db->query('DELETE FROM fyatirimyorum WHERE id='.$Id);
			redirect(base_url()."forum/yatirimdetay/".$donId);
		}
		public function yatirimbasliksil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM fyatirim WHERE id='.$Id);
			$this->db->query('DELETE FROM fyatirimyorum WHERE konuId='.$Id);

			if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Konu başlığı silinmiştir.");
					redirect(base_url()."forum/yatirim");
				}else{
					$this->session->set_flashdata("sonuc","Silme sırasında hata oluştu !");
					redirect(base_url()."forum/yatirim");
				}
		}

}//Main
?>