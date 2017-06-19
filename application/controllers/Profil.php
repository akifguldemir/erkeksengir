<?php
class Profil extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e erişmemizi sağlar
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('main_Model');
        }
        public function mailgonder()
        {
        	$query=$this->db->get("emailayarlar");
			$data['veri']=$query->result();

        	$config['protocol'] = 'smtp';
		    $config['smtp_host'] = $data["veri"][0]->smtpserver; 
		    $config['smtp_port'] = $data["veri"][0]->smtpport;
		    $config['smtp_user'] = $data["veri"][0]->smtpemail; // gmail adresiniz
		    $config['smtp_pass'] = $data["veri"][0]->password; // gmail giriş parolanız
		    $config['charset'] = 'utf-8';
		    $config['mailtype'] = 'html';
		    $config['newline'] = "\r\n";

			$this->load->library('email', $config); // email sınıfını yukarıdaki ayarlar ile yüklüyoruz

		    $this->email->from('akifguldemir@gmail.com', 'Akif Güldemir'); // Gönderen, yani sizin bilgileriniz
		    $this->email->to('akifguldemir@gmail.com'); // alıcı e-posta adresi
		    $this->email->subject('Test'); // Konu
		    $this->email->message('Test amaçlı gönderilen e-posta içeriği'); // İçerik
		 
		    $send=$this->email->send();

			if($send)
				{
					echo "E-mail gönderildi.";
				}
			else
				{
					echo "Hata var";
					echo $this->email->print_debugger();
				}
        }
		public function index()
		{
			
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle		
			
			$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where('kime_Id',$_session->Id );
			$this->db->order_by('tarih',"desc");
			$query3= $this->db->get();
			
			$data["profilpaylasim"]=$query3->result(); 
						
			
			$this->db->select("*");
			$this->db->from("paylasimyorum");
			$this->db->order_by('tarih',"desc");
			$query4=$this->db->get();

			$data['paylasimyorum']=$query4->result();
			
			$this->db->select('*');
			$this->db->from('bildirimler');
			$this->db->where('kimeId',$_session->Id );
			$query21= $this->db->get();	
			
			$data['bildirim']=$query21->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('bildirimler');
			$this->db->where('cesit','begen');
			$queryz= $this->db->get();	
			
			$data['begeniler']=$queryz->result();

					
			$this->load->view('profil',$data);
		}
		
		public function paylasimkaydet(){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'paylasim' => $this->input->post('paylasim'),
				'cesit' => kendine,
				'kime_Id' => $this->input->post('kime_Id')	
			);
			$this->main_Model->insert_data("paylasimlar",$data);
			redirect(base_url()."profil");
		}
		
		 public function paylas(){
        	$paylasim=$this->input->post('paylasim');
        	$uye_ID=$this->input->post('uye_ID');
        	$uye_adsoy=$this->input->post('uye_adsoy');
        	$Id=$this->input->post('Id');
        	$result=$this->main_Model->paylas($paylasim,$uye_ID,$uye_adsoy,$Id);
        	echo json_encode($result);
        }
        public function paylas1(){
        	$paylasim=$this->input->post('paylasim');
        	$uye_ID=$this->input->post('uye_ID');
        	$uye_adsoy=$this->input->post('uye_adsoy');
        	$link=$this->input->post('link');
        	$Id=$this->input->post('Id');
        	$result=$this->main_Model->paylas1($paylasim,$uye_ID,$uye_adsoy,$link,$Id);
        	echo json_encode($result);
        }
		
		public function paylas2(){
        	$paylasim=$this->input->post('paylasim');
        	$uye_ID=$this->input->post('uye_ID');
        	$uye_adsoy=$this->input->post('uye_adsoy');
        	$paylasimimg=$this->input->post('paylasimimg');
        	$Id=$this->input->post('Id');
        	$result=$this->main_Model->paylas1($paylasim,$uye_ID,$uye_adsoy,$paylasimimg,$Id);
        	echo json_encode($result);
        }
		public function paylas3(){
        	$paylasim=$this->input->post('paylasim');
        	$uye_ID=$this->input->post('uye_ID');
        	$uye_adsoy=$this->input->post('uye_adsoy');
        	$video=$this->input->post('video');
        	$Id=$this->input->post('Id');
        	$result=$this->main_Model->paylas1($paylasim,$uye_ID,$uye_adsoy,$video,$Id);
        	echo json_encode($result);
        }
		public function paylasimkaydetlink(){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$link=$this->input->post('link');
			$link1=substr($link,32,11);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'paylasim' => $this->input->post('paylasim'),
				'link' => $link1,
				'kime_Id' => $this->input->post('kime_Id')	
			);
			$this->main_Model->insert_data("paylasimlar",$data);
			redirect(base_url()."profil");
		}

		public function paylasimkaydetresim()
		{		
				$_session=$this->session->userdata('logged_in');
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

                        $this->load->view('profil', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload dilen verinin veritabanına kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'paylasimimg' => $file_name,
							'uye_ID' => $_session->Id,
							'uye_img' => $_session->img,
							'uye_adsoy' => $_session->adsoy,
							'paylasim' => $this->input->post('paylasim'),
							'kime_Id' => $this->input->post('kime_Id')	
							
								
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("paylasimlar",$data); //  fonksiyonuna dataları id ile  gönder
						
						redirect(base_url()."profil");
						
				}
		}
		public function resimekle($Id)
		{
			$_session=$this->session->userdata['logged_in'];
			$data["$_session->Id"]=$Id;
			
			$this->db->select('img');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id);
			$query= $this->db->get();				
			$data['profilresim'] = $query->result();	
			
			$this->load->view('profilresim',$data);
			
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

                        $this->load->view('profil', $error);
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
						$data1=array(
						   
							'kimimg' => $file_name 
						);
						$data2=array(
						   
							'kimiimg' => $file_name 
						);
						$data3=array(
						   
							'uye_img' => $file_name 
						);
						$data4=array(
						   
							'yapanimg' => $file_name 
						);
						$data5=array(
						   
							'kimimg' => $file_name 
						);
						$data6=array(
						   
							'kimimg' => $file_name 
						);
						$data6=array(
						   
							'kimimg' => $file_name 
						);
						$data7=array(
						   
							'yapanimg' => $file_name 
						);
					
						
						$this->main_Model->updatearkkimresim_data("arkadaslik",$data1,$Id);
						$this->main_Model->updatearkkimiresim_data("arkadaslik",$data2,$Id);
						$this->main_Model->updatepaylasimlar_data("paylasimlar",$data3,$Id);
						$this->main_Model->updatepaylasimyorum_data("paylasimyorum",$data4,$Id);
						$this->main_Model->updatebildirimler_data("bildirimler",$data5,$Id);
						$this->main_Model->updatemesajlar_data("mesajlar",$data6,$Id);
						$this->main_Model->updategalyorumresim_data("galeriyorumlar",$data7,$Id);
						$this->main_Model->update_data("uyeler",$data,$Id); //  fonksiyonuna dataları id ile  gönder
						
						redirect(base_url()."profil");
				}
		}
		
		public function profilhesapayar()
		{	
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id);
			$query= $this->db->get();				
			$data['profilresim'] = $query->result();
			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id);
			$query1= $this->db->get();				
			$data['profilbilgi'] = $query1->result();

			$this->db->select('*');
			$this->db->from('mesajlar');
			$this->db->where('kimeId',$_session->Id);
			$this->db->where('durum',0 );
			$query22= $this->db->get();	
			
			$data['mesajbildirim']=$query22->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();
			
			$this->load->view('profilhesapayar',$data);
		}
		
		public function guncelle($Id)
		{

			$this->load->library("form_validation");
			$this->form_validation->set_rules("email","E-Posta","required|trim|valid_email|is_unique[uyeler.email]");
			$this->form_validation->set_rules("kullaniciadi","Kullanıcı Adı","required|trim||is_unique[uyeler.kullaniciadi]");

			if($this->form_validation->run() == TRUE)
			{
				$this->db->select('email');
			$this->db->from('uyeler');
			$this->db->where('Id',$Id);
			$queryh=$this->db->get();
			$data['gunHat']=$queryh->result();
			$email=$data['gunHat'][0]->email;

			 $data=array(
				'adsoy' => $this->input->post('adsoy'),
				'kullaniciadi' => $this->input->post('kullaniciadi'),
				'dogumtarihi' => $this->input->post('dogumtarihi'),
				'telefon' => $this->input->post('telefon'),
				'meslek' => $this->input->post('meslek'),
				'hakkinda' => $this->input->post('hakkinda')
				);

			 	$data1=array(
				'kimad' => $this->input->post('adsoy')
				
				);
				$data2=array(
				'kimiad' => $this->input->post('adsoy')
				
				);
				$data3=array(
				'uye_adsoy' => $this->input->post('adsoy')
				
				);
				$data4=array(
				'yapanad' => $this->input->post('adsoy')
				
				);
				$data5=array(
				'kimAd' => $this->input->post('adsoy')
				
				);
				$data6=array(
				'kimad' => $this->input->post('adsoy')
				
				);


				$this->main_Model->updatearkkimresim_data("arkadaslik",$data1,$Id);
				$this->main_Model->updatearkkimiresim_data("arkadaslik",$data2,$Id);
				$this->main_Model->updatepaylasimlar_data("paylasimlar",$data3,$Id);
				$this->main_Model->updatepaylasimyorum_data("paylasimyorum",$data4,$Id);
				$this->main_Model->updatebildirimler_data("bildirimler",$data5,$Id);
				$this->main_Model->updatemesajlar_data("mesajlar",$data6,$Id);



				$sonuc=$this->main_Model->update_data("uyeler",$data,$Id);
				
				if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Bilgileriniz başarıyla güncellenmiştir.");

					$query=$this->db->get("emailayarlar");
					$data['veri']=$query->result();

		        	$config['protocol'] = 'smtp';
				    $config['smtp_host'] = $data["veri"][0]->smtpserver; 
				    $config['smtp_port'] = $data["veri"][0]->smtpport;
				    $config['smtp_user'] = $data["veri"][0]->smtpemail; // gmail adresiniz
				    $config['smtp_pass'] = $data["veri"][0]->password; // gmail giriş parolanız
				    $config['charset'] = 'utf-8';
				    $config['mailtype'] = 'html';
				    $config['newline'] = "\r\n";

					$this->load->library('email', $config); // email sınıfını yukarıdaki ayarlar ile yüklüyoruz


					$mesaj=$this->input->post("mesaj")."<br>";
					$mesaj.=$data["veri"][0]->adi."<br><br>";
					$mesaj.="Ad ve Soyad: ".$this->input->post('adsoy')."<br>";
					$mesaj.="Kullanıcı Adı: ".$this->input->post('kullaniciadi')."<br>";
					$mesaj.="Şifre: ".$this->input->post('sifre')."<br>";
					$mesaj.="Telefon: ".$this->input->post('telefon')."<br>";
					$mesaj.="Meslek: ".$this->input->post('meslek')."<br>";
					$mesaj.="Hakkında: ".$this->input->post('hakkinda')."<br>";
				    $this->email->from($data["veri"][0]->smtpemail, $data["veri"][0]->adi); // Gönderen, yani sizin bilgileriniz
				    $this->email->to($email); // alıcı e-posta adresi
				    $this->email->subject('Profil Bilgileri Güncelleme'); // Konu
				    $this->email->message($mesaj); // İçerik
				 
				    $send=$this->email->send();

					redirect(base_url()."profil/profilhesapayar");
				}else{
					$this->session->set_flashdata("sonuchata","Güncelleme sırasında hata oluştu !");
					redirect(base_url()."profil/profilhesapayar");
				}
			}else
			{
				$this->session->set_flashdata("sonuchata","Bu kullanıcı adı veya email ile hesap zaten alınmış !");
				redirect(base_url()."profil/profilhesapayar");
			}
				
			
			 
			
			
		}
		public function sifreguncelle($Id)
		{

				
		

			$this->db->select('sifre');
			$this->db->from('uyeler');
			$this->db->where('Id',$Id);
			$queryh1=$this->db->get();
			$data['gunHatsif']=$queryh1->result();
			$eskisifre=$data['gunHatsif'][0]->sifre;
			$yenisifre=$this->input->post('ysifre');

			if($eskisifre != $this->input->post('esifre'))
			{
					$this->session->set_flashdata("sonuc","Lütfen bilgileriniz doğru giriniz !");
			}else{
				 $data=array(
				
				'sifre' => $this->input->post('ysifre'),
				
				);


				$sonuc=$this->main_Model->update_data("uyeler",$data,$Id);
				
				if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Şifreniz başarıyla güncellenmiştir.");

					$this->db->select('email');
					$this->db->from('uyeler');
					$this->db->where('Id',$Id);
					$queryh=$this->db->get();
					$data['gunHat']=$queryh->result();
					$email=$data['gunHat'][0]->email;

					$query=$this->db->get("emailayarlar");
					$data['veri']=$query->result();

		        	$config['protocol'] = 'smtp';
				    $config['smtp_host'] = $data["veri"][0]->smtpserver; 
				    $config['smtp_port'] = $data["veri"][0]->smtpport;
				    $config['smtp_user'] = $data["veri"][0]->smtpemail; // gmail adresiniz
				    $config['smtp_pass'] = $data["veri"][0]->password; // gmail giriş parolanız
				    $config['charset'] = 'utf-8';
				    $config['mailtype'] = 'html';
				    $config['newline'] = "\r\n";

					$this->load->library('email', $config); // email sınıfını yukarıdaki ayarlar ile yüklüyoruz


					$mesaj=$this->input->post("mesaj")."<br>";
				
					$mesaj.="Yeni şifreniz: ".$yenisifre."<br>";
					$mesaj.="Ip: ".$this->input->ip_address()."<br>";
					
				    $this->email->from($data["veri"][0]->smtpemail, $data["veri"][0]->adi); // Gönderen, yani sizin bilgileriniz
				    $this->email->to($email); // alıcı e-posta adresi
				    $this->email->subject('Şifre Güncelleme'); // Konu
				    $this->email->message($mesaj); // İçerik
				 
				    $send=$this->email->send();

					redirect(base_url()."profil/profilhesapayar");
				}else{
					$this->session->set_flashdata("sonuc","Güncelleme sırasında hata oluştu !");
					redirect(base_url()."profil/profilhesapayar");
				}
			 
			}
			
			
		}
		public function galeri()
		{	
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('galeri');
			$this->db->where('uye_ID',$_session->Id);
			$this->db->order_by('tarih',"desc");
			$query= $this->db->get();
			
			$data['galeri']=$query->result();

			$this->db->select('*');
			$this->db->from('mesajlar');
			$this->db->where('kimeId',$_session->Id);
			$this->db->where('durum',0 );
			$query22= $this->db->get();	
			
			$data['mesajbildirim']=$query22->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$this->db->select('*');
			$this->db->from('galeriyorumlar');
			$this->db->order_by('tarih','desc');
			$queryg= $this->db->get();	
			
			$data['galeriyorumlar']=$queryg->result();

			$this->load->view('galeri',$data);
			
		
		}
		public function galeriresimekle()
		{
			
			$this->load->view('galeriresim');
			
		}
		public function galeriresim_upload()
		{		
				$_session=$this->session->userdata('logged_in');
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

                        $this->load->view('galeri', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanına kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'img' => $file_name,
							'uye_ID' => $_session->Id,
							'adsoy' => $_session->adsoy,
							'sahipimg' => $_session->img,
							'yorum' => $this->input->post('yorum')

							
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("galeri",$data); //  fonksiyonuna dataları id ile  gönder
						
						redirect(base_url()."profil/galeri");
						
				}
		}
		public function paylasimsil($Id)
		{
			$this->db->query('DELETE FROM paylasimlar WHERE id='.$Id);
			$this->db->query('DELETE FROM paylasimyorum WHERE paylasimId='.$Id);
			redirect(base_url()."profil");
		}
		public function paylasimsilark($Id)
		{
			$this->db->query('DELETE FROM paylasimlar WHERE id='.$Id);
			$this->db->query('DELETE FROM paylasimyorum WHERE paylasimId='.$Id);
			redirect(base_url()."profil/arkadaspaylasimlari");
		}
		public function paylasimsil1($Id,$DonId)
		{
			$this->db->query('DELETE FROM paylasimlar WHERE id='.$Id);
			$this->db->query('DELETE FROM paylasimyorum WHERE paylasimId='.$Id);
			redirect(base_url()."profil/ybnprofil/".$DonId);
		}
		public function  galeridetay($Id)
		{
			$_session=$this->session->userdata('logged_in');

			$this->db->select('*');
			$this->db->from('galeri');
			$this->db->where('Id',$Id);
			$query= $this->db->get();		
			
			$data['galeridetay'] = $query->result(); //Sonuçları $data değişkenine ata

			$this->db->select('*');
			$this->db->from('galeriyorumlar');
			$this->db->where('fotoId',$Id);			
			$query1= $this->db->get();
						
			$data['galeriyorum'] = $query1->result();

			$this->db->select('*');
			$this->db->from('mesajlar');
			$this->db->where('kimeId',$_session->Id);
			$this->db->where('durum',0 );
			$query22= $this->db->get();	
			
			$data['mesajbildirim']=$query22->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();
			
			$this->load->view('galeridetay',$data);
			
		}
		public function  ybngaleridetay($Id)
		{
			$_session=$this->session->userdata('logged_in');

			$this->db->select('*');
			$this->db->from('galeri');
			$this->db->where('Id',$Id);
			$query= $this->db->get();

			$data['ybngaleridetay'] = $query->result();	

			$this->db->select('*');
			$this->db->from('galeriyorumlar');
			$this->db->where('fotoId',$Id);			
			$query1= $this->db->get();
						
			$data['galeriyorum'] = $query1->result();	

			$this->db->select('uye_ID');
			$this->db->from('galeri');
			$this->db->where('Id',$Id );
			$where_clause = $this->db->get_compiled_select();
			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where("`Id` IN ($where_clause)", NULL, FALSE);
			$query2= $this->db->get();
			$data['profilbilgi']=$query2->result();
			
			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where("`Id` IN ($where_clause)", NULL, FALSE);
			$this->db->where('kimId',$_session->Id);

			$query2 = $this->db->get();
			$data['arkadaslik'] = $query2->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$querya= $this->db->get();	
			
			$data['profilhakkimda']=$querya->result();



			$this->load->view('ybngaleridetay',$data);
		}
		public function galeriyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yapanimg' => $_session->img,
				'yorum' => $this->input->post('yorum'),
				'fotoID'=>$Id,
				'kime_Id'=>$_session->Id
			);
			$this->main_Model->insert_data("galeriyorumlar",$data);
			redirect(base_url()."profil/galeri");
		}
		public function ybngaleriyorumkaydet($Id)
		{

			$_session=$this->session->userdata('logged_in');
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yapanimg' => $_session->img,
				'yorum' => $this->input->post('yorum'),
				'fotoID'=>$Id
				
			);
			$data1=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' =>$this->input->post('kimeId'),
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $Id,
				'durum' => 0,
				'cesit' => galeriyorum
			);
			$git=$this->input->post('kimeId');
			$this->main_Model->insert_data("bildirimler",$data1);
			$this->main_Model->insert_data("galeriyorumlar",$data);
			redirect(base_url()."profil/ybngaleri/".$git);
		}
		public function ybngaleriyorumkaydet1($Id,$donId)
		{

			$_session=$this->session->userdata('logged_in');
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yapanimg' => $_session->img,
				'yorum' => $this->input->post('yorum'),
				'fotoID'=>$Id
				
			);
			$data1=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' =>$this->input->post('kimeId'),
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $Id,
				'durum' => 0,
				'cesit' => galeriyorum
			);

			$this->main_Model->insert_data("bildirimler",$data1);
			$this->main_Model->insert_data("galeriyorumlar",$data);
			redirect(base_url()."profil/bgaleri/".$Id.'/'.$donId);
		}
		public function fotoyorumsil($Id)
		{
			$this->db->query('DELETE FROM galeriyorumlar WHERE id='.$Id);
			redirect(base_url()."profil/galeri");
		}
		public function fotoyorumsil1($Id,$donId)
		{
			$don=$this->input->post('don');
			$this->db->query('DELETE FROM galeriyorumlar WHERE id='.$Id);
			redirect(base_url()."profil/bgaleri/".$don.'/'.$donId);
		}
		public function fotosil($Id)
		{
			$this->db->query('DELETE FROM galeri WHERE id='.$Id);
			$this->db->query('DELETE FROM galeriyorumlar WHERE fotoId='.$Id);
			redirect(base_url()."profil/galeri");
		}
		
		/*public function galeriyorum($Id)
		{
			$this->db->select('*');
			$this->db->from('galeriyorumlar');
			$this->db->where('fotoId',$Id);			
			$query1= $this->db->get();
			
			
			$data['galeriyorum'] = $query1->result();
			$this->load->view('galeri',$data);
		}*/
		public function ybnprofil($uye_ID)
		{	
			$_session=$this->session->userdata('logged_in');

			$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where('kime_Id',$uye_ID);
			$this->db->order_by('tarih',"desc");
			$query3= $this->db->get();
			
			$data["profilpaylasim"]=$query3->result(); 

			$this->db->select('*');
			$this->db->from('bildirimler');
			$this->db->where('cesit','begen');
			$queryz= $this->db->get();	
			
			$data['begeniler']=$queryz->result();
			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$uye_ID);
			$query1= $this->db->get();				
			$data['profilbilgi'] = $query1->result();
			
			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimiId',$uye_ID);
			$this->db->where('kimId',$_session->Id);

			$query2 = $this->db->get();
			$data['arkadaslik'] = $query2->result();
			
			$this->db->select("*");
			$this->db->from("paylasimyorum");
			$this->db->order_by('tarih',"desc");
			//$this->db->where('kime_Id',$uye_ID);
			$query4=$this->db->get();
			$data['paylasimyorum']=$query4->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$data1=array(
					
				'durum' => 1
				);
			
			$this->main_Model->update_mesajdurum("bildirimler",$data1,$uye_ID);


			$this->load->view('ybnprofil',$data);
		}
		public function ybnpaylasimkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$payId=str_pad(mt_rand(10000, 999999), 6, '0', STR_PAD_LEFT);
			$data=array(
				'Id' =>$payId,
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'kime_Id' => $Id,
				'kime_ad' => $this->input->post('kime_ad'),
				'paylasim' => $this->input->post('paylasim'),
				'cesit' => baskasina				
			);
			$data1=array(
				

				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'paylasimId' => $payId,
				'kimeId' =>$Id,
				'durum' => 0,
				'cesit' => duvaraPaylasim
			);

			$this->main_Model->insert_data("bildirimler",$data1);
			$this->main_Model->insert_data("paylasimlar",$data);
			redirect(base_url()."profil/ybnprofil/".$Id);
		}
		public function ybnpaylasimkaydetlink($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			
			$link=$this->input->post('link');
			$link1=substr($link,32,11);	
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'uye_img' => $_session->img,
				'kime_Id' => $Id,
				'kime_ad' => $this->input->post('kime_ad'),
				'link' => $link1,
				'paylasim' => $this->input->post('paylasim')				
			);
			$this->main_Model->insert_data("paylasimlar",$data);
			redirect(base_url()."profil/ybnprofil/".$Id);
		}
		public function ybnpaylasimresimkaydet($Id)
		{	
				$_session=$this->session->userdata('logged_in');
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

                        $this->load->view('paylasimlar', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanına kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$data=array(
						   
							'paylasimimg' => $file_name,
							'uye_ID' => $_session->Id,
							'uye_adsoy' => $_session->adsoy,
							'uye_img' => $_session->img,
							'kime_ad' => $this->input->post('kime_ad'),
							'kime_Id' => $Id
							
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("paylasimlar",$data); //  fonksiyonuna dataları id ile  gönder
						
						redirect(base_url()."profil/ybnprofil/".$Id);
						
				}
		}
		public function bizeyazin()
		{
			
			
			
			if($this->session->userdata('logged_in'))
				{
			
					$_session=$this->session->userdata('logged_in');
					//print_r($_session);
					$data=array(
						'uye_ID' => $_session->Id,
						'uye_adsoy' => $_session->adsoy,
						'email' => $_session->email,
						'ip'=> $this->input->ip_address(),
						'mesaj' => $this->input->post('mesaj')				
					);
					$sonuc=$this->main_Model->insert_data("bizeyazin",$data);
					
					if($sonuc)
					{
						$this->session->set_flashdata("sonuc","Mesajınız başarıyla iletildi.En kısa sürede tarafınıza geri dönüş yapılacaktır.");
						redirect(base_url()."home");
					}
					else{
						$this->session->set_flashdata("sonuc","Mesajınız iletilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
						redirect(base_url()."home");
					}
					
					
			
				}
				else
				{
					
					$data=array(
						
						'uye_adsoy' => $this->input->post('adsoy'),
						'email' => $this->input->post('email'),
						'ip'=> $this->input->ip_address(),
						'mesaj' => $this->input->post('mesaj')				
					);
					$sonuc=$this->main_Model->insert_data("bizeyazin",$data);
					
					if($sonuc)
					{
						$this->session->set_flashdata("sonuc","Mesajınız başarıyla iletildi.En kısa sürede tarafınıza geri dönüş yapılacaktır.");
						redirect(base_url()."home");
					}
					else{
						$this->session->set_flashdata("sonuc","Mesajınız iletilirken bir hata oluştu.Lütfen tekrar deneyiniz.");
						redirect(base_url()."home");
					}
					
				
					
				}
		}
		public function ybngaleri($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('galeri');
			$this->db->where('uye_ID',$Id);
			$this->db->order_by('tarih',"desc");
			$query= $this->db->get();	
			$data['ybngaleri'] = $query->result();
			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$Id);
			$query1= $this->db->get();				
			$data['profilbilgi'] = $query1->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$this->db->select('*');
			$this->db->from('galeriyorumlar');
			$this->db->order_by('tarih','desc');
			$queryg= $this->db->get();	
			
			$data['galeriyorumlar']=$queryg->result();

			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimiId',$Id);
			$this->db->where('kimId',$_session->Id);

			$query2 = $this->db->get();
			$data['arkadaslik'] = $query2->result();

			$this->load->view('ybngaleri',$data);
			
		}
		public function ybnarkadaslik($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$Id);
			$query1= $this->db->get();				
			$data['profilbilgi'] = $query1->result();

			


			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimiId',$Id);
			$queryt1= $this->db->get();
			
			$data['takipedenler']=$queryt1->result();
			
			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimId',$Id);
			$queryt2= $this->db->get();
			
			$data['takipedilenler']=$queryt2->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();
			
			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimiId',$Id);
			$this->db->where('kimId',$_session->Id);

			$query2 = $this->db->get();
			$data['arkadaslik'] = $query2->result();
					
			$this->load->view('ybnarkadaslik',$data);
			
		}
		public function takipet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'kimId' => $_session->Id,
				'kimad' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimiId' => $this->input->post('kimiId'),
				'kimiad' => $this->input->post('kimiad'),
				'kimiimg' => $this->input->post('kimiimg')
														
			);
			$data1=array(
					
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $Id,
				'durum' => 0,
				'cesit' => takip
				);
			
			$this->main_Model->insert_data("bildirimler",$data1);
			$this->main_Model->insert_data("arkadaslik",$data);
			redirect(base_url()."profil/ybnprofil/".$Id);
		}	
			
		public function takipsil($Id)
		{
			$this->db->query('DELETE FROM arkadaslik WHERE id='.$Id);
			redirect(base_url()."profil");
		}	
		public function arkadaslik()
		{
			$_session=$this->session->userdata('logged_in');

			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimiId',$_session->Id);
			$query= $this->db->get();
			
			$data['takipedenler']=$query->result();
			
			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimId',$_session->Id);
			$query1= $this->db->get();
			
			$data['takipedilenler']=$query1->result();

			$this->db->select('*');
			$this->db->from('mesajlar');
			$this->db->where('kimeId',$_session->Id);
			$this->db->where('durum',0 );
			$query22= $this->db->get();	
			
			$data['mesajbildirim']=$query22->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$querya= $this->db->get();	
			
			$data['profilhakkimda']=$querya->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();
			
			$this->load->view('arkadaslik',$data);
		}		
		public function mesajlar()
		{
						
			$_session=$this->session->userdata('logged_in');
			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id);
			$query5=$this->db->get();

			$data["cek"]=$query5->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id);
			$query6=$this->db->get();

			$data["kisi"]=$query6->result();
			
			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimId',$_session->Id);
			$query4= $this->db->get();
			$data['ark']=$query4->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('cekId');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id);
			$querya= $this->db->get();	
			
			$data['kimle']=$querya->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$data['kimle'][0]->cekId);
			$queryb= $this->db->get();	
			
			$data['kimlemesaj']=$queryb->result();


			$this->load->view('mesajlar',$data);
		}	
		public function ybncekId($kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			$data=array(
					'cekId' => $kisiId
																							
				);

				$dgId=$kisiId;

				$data1=array(
					'durum' => 1
																							
				);

				$this->main_Model->update_mesajdurum("mesajlar",$data1,$dgId);
				$this->main_Model->update_data("uyeler",$data,$_session->Id);

				redirect(base_url()."profil/mesajlar");
		
		}		
		public function mesajkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);	

				$result = $this->main_Model->mesajkaydet($Id);
				$msg['success'] = false;
				$msg['type'] = 'add';
				if($result){
					$msg['success'] = true;
				}
				echo json_encode($msg);
		}		
		public function mesajkaydetresim()
		{		
				$_session=$this->session->userdata('logged_in');

				$this->db->select('cekId');
				$this->db->from('uyeler');
				$this->db->where('Id',$_session->Id);
				$querya= $this->db->get();	
				
				$data['cek']=$querya->result();
				$cek=$data['cek'][0]->cekId;

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

                        $this->load->view('profil', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						//upload dilen verinin veritabanına kaydedilmesi
						$upload_data = $this->upload->data(); 
						
						$file_name =   $upload_data['file_name'];
						
						
						$field = array(
							'kimId' => $_session->Id,
							'kimad' => $_session->adsoy,
							'kimimg' => $_session->img,
							'img' => $file_name,
							'kimeId' => $cek
						);

						$field1=array(
							'durum' => 1
																										
								);
						$this->main_Model->updatemesajlar_data('mesajlar',$field1,$cek);
						$this->main_Model->insert_data("mesajlar",$field); //  fonksiyonuna dataları id ile  gönder
						
						redirect(base_url()."profil/mesajlar");
						
				}
		}
		public function mesajat($Id)
		{
			$_session=$this->session->userdata('logged_in');			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$Id);			
			$query3= $this->db->get();
			$data['kisi']=$query3->result();

			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimId',$_session->Id);
			$query4= $this->db->get();
			$data['ark']=$query4->result();
			
			
			$this->load->view('mesajat',$data);
		}	
		public function arkadaspaylasimlari()
		{
			$_session=$this->session->userdata('logged_in');
			
			$this->db->select('kimiId');
			$this->db->from('arkadaslik');
			$this->db->where('kimId',$_session->Id );
			$where_clause = $this->db->get_compiled_select();
			
			$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where("`kime_Id` IN ($where_clause)", NULL, FALSE);
			$this->db->order_by('tarih',"desc");
			$query= $this->db->get();
			$data['arkadaspaylasimlari']=$query->result();

			$this->db->select('*');
			$this->db->from('bildirimler');
			$this->db->where('cesit','begen');
			$queryz= $this->db->get();	
			
			$data['begeniler']=$queryz->result();
			
			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$this->db->select("*");
			$this->db->from("paylasimyorum");
			$this->db->order_by('tarih',"desc");
			$query4=$this->db->get();
			$data['paylasimyorum']=$query4->result();

			$this->db->select('*');
			$this->db->from('mesajlar');
			$this->db->where('kimeId',$_session->Id);
			$this->db->where('durum',0 );
			$query22= $this->db->get();	
			
			$data['mesajbildirim']=$query22->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();
			
			$this->load->view('arkadaspaylasimlari',$data);
		}	
		public function profil2(){

			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle		
						
			/*$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where('uye_ID',$_session->Id );
			
			$query4 = $this->db->get_compiled_select();

			// Query #5

			$this->db->select('*');
			$this->db->from('ybnpaylasimlar');
			$this->db->where('kime_Id',$_session->Id );
			$query5 = $this->db->get_compiled_select();

			// Merge both query results
			
			
			$query3 =$this->db->query($query4 . ' UNION ' . $query5   );*/
			
			$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where('kime_Id',$_session->Id );
			$this->db->order_by('tarih',"desc");
			$query3= $this->db->get();
			
			$data["profilpaylasim"]=$query3->result(); 
						
			
			
			$this->load->view('profil2',$data);
		}

    	 public function masajlarigoster(){
        	$result=$this->main_Model->masajlarigoster();
        	echo json_encode($result);
        }
        public function solmasajlarigoster(){
        	$result=$this->main_Model->solmasajlarigoster();
        	echo json_encode($result);
        }
         public function mesajlarkisiler(){
        	$result=$this->main_Model->mesajlarkisiler();
        	echo json_encode($result);
        }
         public function bildirimgoster(){
        	$result=$this->main_Model->bildirimgoster();
        	echo json_encode($result);
        }
         public function galeribildirimgoster(){
        	$result=$this->main_Model->galeribildirimgoster();
        	echo json_encode($result);
        }
         public function mesajbildirim(){
        	$result=$this->main_Model->mesajbildirim();
        	echo json_encode($result);
        }
         public function bildirimgeldi(){
        	$result=$this->main_Model->bildirimgeldi();
        	echo json_encode($result);
        }
        public function forumbildirimgoster(){
        	$result=$this->main_Model->forumbildirimgoster();
        	echo json_encode($result);
        }
        public function paybegen(){
        	$Id=$this->input->post('Id');
        	$kimeId=$this->input->post('kimeId');
        	$result=$this->main_Model->paybegen($Id,$kimeId);
        	echo json_encode($result);
        }
        public function CekIdKaydet($cekId){
			$_session=$this->session->userdata('logged_in');

			$data=array(
				'cekId' => $this->input->post('cekId')
																						
			);

			$dgId=$this->input->post('cekId');

			$data1=array(
				'durum' => 1
																						
			);

			$this->main_Model->update_mesajdurum("mesajlar",$data1,$dgId);
			$this->main_Model->update_data("uyeler",$data,$_session->Id);
			redirect(base_url()."profil/mesajlar");
		}
		public function CekIdKaydet1($cekId){
			$_session=$this->session->userdata('logged_in');

			$data=array(
				'cekId' => $this->input->post('cekId')
																						
			);

			$dgId=$cekId;

			$data1=array(
				'durum' => 1
																						
			);

			$this->main_Model->update_mesajdurum("mesajlar",$data1,$dgId);
			$this->main_Model->update_data("uyeler",$data,$_session->Id);
			redirect(base_url()."profil/mesajlar");
		}	
		public function paylasimyorumkaydet($kime_Id)
		{


			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'kime_Id' => $kime_Id,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			if($kime_Id!=$_session->Id)
			{
				$data1=array(
					
					'kimId' => $_session->Id,
					'kimAd' => $_session->adsoy,
					'kimimg' => $_session->img,
					'kimeId' => $kime_Id,
					'yorum' => $this->input->post('yorum'),
					'paylasimId' => $this->input->post('paylasimId'),
					'durum' => 0,
					'cesit' => payyorum
				);
			
				$this->main_Model->insert_data("bildirimler",$data1);
			}
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil/ybnprofil/".$kime_Id);

		}
		public function paylasimyorumkaydet2($kime_Id)
		{

			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'kime_Id' => $kime_Id,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			if($kime_Id!=$_session->Id)
			{
				$data1=array(
					
					'kimId' => $_session->Id,
					'kimAd' => $_session->adsoy,
					'kimimg' => $_session->img,
					'kimeId' => $kime_Id,
					'yorum' => $this->input->post('yorum'),
					'paylasimId' => $this->input->post('paylasimId'),
					'durum' => 0,
					'cesit' => payyorum
				);

				$this->main_Model->insert_data("bildirimler",$data1);
			}
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil");

		}
		public function paylasimyorumkaydet4($uye_ID)
		{

			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'kime_Id' => $uye_ID,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			if($uye_ID!=$_session->Id)
			{
				$data1=array(
					
					'kimId' => $_session->Id,
					'kimAd' => $_session->adsoy,
					'kimimg' => $_session->img,
					'kimeId' => $uye_ID,
					'yorum' => $this->input->post('yorum'),
					'paylasimId' => $this->input->post('paylasimId'),
					'durum' => 0,
					'cesit' => payyorum
				);

				$this->main_Model->insert_data("bildirimler",$data1);
			}
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil");

		}
		public function paylasimyorumkaydet5($uye_ID)
		{

			$_session=$this->session->userdata('logged_in');
			$donId=$this->input->post('donId');
			//print_r($_session);
			$data=array(
				'kime_Id' => $uye_ID,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			if($uye_ID!=$_session->Id)
			{
				$data1=array(
					
					'kimId' => $_session->Id,
					'kimAd' => $_session->adsoy,
					'kimimg' => $_session->img,
					'kimeId' => $uye_ID,
					'yorum' => $this->input->post('yorum'),
					'paylasimId' => $this->input->post('paylasimId'),
					'durum' => 0,
					'cesit' => payyorum
				);

				$this->main_Model->insert_data("bildirimler",$data1);
			}
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil/ybnprofil/".$donId);

		}
		public function paylasimyorumkaydet3($kime_Id)
		{

			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'kime_Id' => $kime_Id,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			if($kime_Id!=$_session->Id)
			{
				$data1=array(
					
					'kimId' => $_session->Id,
					'kimAd' => $_session->adsoy,
					'kimimg' => $_session->img,
					'kimeId' => $kime_Id,
					'yorum' => $this->input->post('yorum'),
					'paylasimId' => $this->input->post('paylasimId'),
					'durum' => 0,
					'cesit' => payyorum
				);

				$this->main_Model->insert_data("bildirimler",$data1);
			}
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil/arkadaspaylasimlari");

		}
		public function paylasimyorumkaydet33($uye_ID)
		{

			$_session=$this->session->userdata('logged_in');
			$donId=$this->input->post('donId');
			//print_r($_session);
			$data=array(
				'kime_Id' => $uye_ID,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			if($kime_Id!=$_session->Id)
			{
				$data1=array(
					
					'kimId' => $_session->Id,
					'kimAd' => $_session->adsoy,
					'kimimg' => $_session->img,
					'kimeId' => $uye_ID,
					'yorum' => $this->input->post('yorum'),
					'paylasimId' => $this->input->post('paylasimId'),
					'durum' => 0,
					'cesit' => payyorum
				);

				$this->main_Model->insert_data("bildirimler",$data1);
			}
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil/arkadaspaylasimlari");

		}
		public function paylasimyorumsil2($Id)
		{
			$this->db->query('DELETE FROM paylasimyorum WHERE id='.$Id);
			redirect(base_url()."profil");
		}
		public function paylasimyorumsil4($Id,$donId)
		{
			$donId=$this->input->post('don');
			$this->db->query('DELETE FROM paylasimyorum WHERE id='.$Id);
			redirect(base_url()."profil/b1/".$donId.'/'.$donId);

		}
		public function paylasimyorumsil($Id)
		{
			$this->db->query('DELETE FROM paylasimyorum WHERE id='.$Id);
			redirect(base_url()."profil");
		}
		public function paylasimyorumsil3($Id)
		{
			$this->db->query('DELETE FROM paylasimyorum WHERE id='.$Id);
			redirect(base_url()."profil/arkadaspaylasimlari");
		}

		public function galeriyorumsil1($Id)
		{
			$this->db->query('DELETE FROM galeriyorumlar WHERE id='.$Id);
			redirect(base_url()."profil/galeri");
		}
		public function galeriyorumsil2($Id,$git)
		{
			$this->db->query('DELETE FROM galeriyorumlar WHERE id='.$Id);
			redirect(base_url()."profil/ybngaleri/".$git);
		}
		public function paylasimduzenle($Id)
		{
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle	
			
			$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where('Id',$Id );
			$query2= $this->db->get();
			
			$data["profilpaylasim"]=$query2->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$this->load->view('paylasimduzenle',$data);

			
		}
		public function paylasimduzenle1($Id,$kisiId)
		{
			$_session=$this->session->userdata('logged_in');
			
			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$kisiId);
			$query1= $this->db->get();				
			$data['profilbilgi'] = $query1->result();

			$this->db->select('*');
			$this->db->from('arkadaslik');
			$this->db->where('kimiId',$kisiId);
			$this->db->where('kimId',$_session->Id);

			$query22 = $this->db->get();
			$data['arkadaslik'] = $query22->result();

			$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where('Id',$Id );
			$query2= $this->db->get();
			
			$data["profilpaylasim"]=$query2->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();

			$this->load->view('paylasimduzenle1',$data);

			
		}
		public function paylasimguncelle($Id){
		$_session=$this->session->userdata('logged_in');
		//print_r($_session);
		$data=array(
			
			'paylasim' => $this->input->post('paylasim')
		);
		$sonuc=$this->main_Model->update_data("paylasimlar",$data,$Id);
		
		
		if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Paylaşımınız başarıyla güncellenmiştir.");
				redirect(base_url()."profil");
			}else{
				$this->session->set_flashdata("sonuc","Güncelleme sırasında hata oluştu !");
				redirect(base_url()."profil");
			}
				
		}
		public function paylasimguncelle1($Id,$donId){
		$_session=$this->session->userdata('logged_in');
		//print_r($_session);
		$data=array(
			
			'paylasim' => $this->input->post('paylasim')
		);
		$sonuc=$this->main_Model->update_data("paylasimlar",$data,$Id);
		
		
		if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Paylaşımınız başarıyla güncellenmiştir.");
				redirect(base_url()."profil/ybnprofil/".$donId);
			}else{
				$this->session->set_flashdata("sonuc","Güncelleme sırasında hata oluştu !");
				redirect(base_url()."profil/ybnprofil/".$donId);
			}
				
		}
		public function bildirimler()
		{
			$_session=$this->session->userdata('logged_in');
			
			/*$this->db->select('*');
			$this->db->from('bildirimler');
			$this->db->where('kimeId',$_session->Id );
			$this->db->order_by('tarih',"desc");

			$query21= $this->db->get();	
			
			$data['bildirim']=$query21->result(); */

			$this->load->view('bildirimler'/*,$data*/);

		}
		public function b1($Id,$git)
		{	
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('paylasimlar');
			$this->db->where('Id',$Id);
			$query= $this->db->get();	
			
			$data['paylasim']=$query->result(); 

			$this->db->select("*");
			$this->db->from("paylasimyorum");
			$this->db->order_by("tarih","desc");
			$query1=$this->db->get();
			$data['paylasimyorum']=$query1->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$query1= $this->db->get();	
			
			$data['profilhakkimda']=$query1->result();


			$this->db->select('*');
			$this->db->from('bildirimler');
			$this->db->where('cesit','begen');
			$this->db->where('paylasimId',$Id);
			$queryz= $this->db->get();	
			
			$data['begeniler']=$queryz->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$data['donId']=$git;

			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_data("bildirimler",$data1,$git);


			$this->load->view('b1',$data);

		}
		public function bgaleri($Id,$git)
		{	
			$_session=$this->session->userdata('logged_in');
			$this->db->select('*');
			$this->db->from('galeri');
			$this->db->where('Id',$Id);
			$query= $this->db->get();	
			
			$data['galeri']=$query->result(); 

			$this->db->select("*");
			$this->db->from("galeriyorumlar");
			$this->db->where('fotoId',$Id);	
			$this->db->order_by('tarih',"desc");		
			$query1=$this->db->get();
			$data['galeriyorum']=$query1->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$queryy= $this->db->get();	
			
			$data['kisiler']=$queryy->result();

			$this->db->select('*');
			$this->db->from('uyeler');
			$this->db->where('Id',$_session->Id );
			$queryv= $this->db->get();	
			
			$data['profilhakkimda']=$queryv->result();

			$data['donId']=$git;



			$data1=array(
				
				'durum' => 1
			);

			$this->main_Model->update_data("bildirimler",$data1,$git);


			$this->load->view('bgaleri',$data);

		}
		public function bildirimsil($Id)
		{
			$this->db->query('DELETE FROM bildirimler WHERE id='.$Id);
			redirect(base_url()."profil/bildirimler");
		}
		public function paylasimyorumkaydet6($kime_Id,$donId)
		{

			$_session=$this->session->userdata('logged_in');
			$don=$this->input->post('paylasimId');
			//print_r($_session);
			$data=array(
				'kime_Id' => $kime_Id,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			$data1=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $kime_Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),
				'durum' => 0
			);

			$this->main_Model->insert_data("bildirimler",$data1);
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil/b1/".$don.'/'.$donId);

		}
		public function paylasimyorumkaydet7($uye_ID,$donId)
		{

			$_session=$this->session->userdata('logged_in');
			$don=$this->input->post('paylasimId');
			//print_r($_session);
			$data=array(
				'kime_Id' => $uye_ID,
				'yapanId' => $_session->Id,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),	
				'yapanad' => $_session->adsoy,
				'yapanimg' => $_session->img																					
			);
			$data1=array(
				
				'kimId' => $_session->Id,
				'kimAd' => $_session->adsoy,
				'kimimg' => $_session->img,
				'kimeId' => $uye_ID,
				'yorum' => $this->input->post('yorum'),
				'paylasimId' => $this->input->post('paylasimId'),
				'durum' => 0
			);

			$this->main_Model->insert_data("bildirimler",$data1);
			$this->main_Model->insert_data("paylasimyorum",$data);
			redirect(base_url()."profil/b1/".$don.'/'.$donId);

		}
		public function begenmekaydet($Id)
		{

			$result=$this->main_Model->begenmekaydet($Id);
        	echo json_encode($result);

		}
		
		public function add_video()
		{
			$_session=$this->session->userdata('logged_in');

	        if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
	            unset($config);
	            $date = date("ymd");
	            $configVideo['upload_path'] = './uploads';
	            $configVideo['max_size'] = '2000000000000000';
	            $configVideo['allowed_types'] = 'avi|flv|3gp|mp4|wmv|mp3';
	            $configVideo['overwrite'] = FALSE;
	            $configVideo['remove_spaces'] = TRUE;
	            $video_name = $date.$_FILES['video']['name'];
	            $configVideo['file_name'] = $video_name;

	            $this->load->library('upload', $configVideo);
	            $this->upload->initialize($configVideo);
	            if (!$this->upload->do_upload('video')) {
	                
	            } 
	            else 
	            {

	               		$data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanına kaydedilmesi
						$videoDetails = $this->upload->data(); 
						
						$file_name =   $videoDetails['file_name'];
						
						
						$data=array(
						   
							'video' => $file_name,
							'uye_ID' => $_session->Id,
							'uye_adsoy' => $_session->adsoy,
							'uye_img' => $_session->img,
							'kime_Id' => $_session->Id,
							'paylasim' => $this->input->post('paylasim')
							
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("paylasimlar",$data); //  fonksiyonuna dataları id ile  gönder
						
						redirect(base_url()."profil");


	            }
	        }
   		}
   		public function add_video1($Id)
		{
			$_session=$this->session->userdata('logged_in');

	        if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
	            unset($config);
	            $date = date("ymd");
	            $configVideo['upload_path'] = './uploads';
	            $configVideo['max_size'] = '2000000000000000';
	            $configVideo['allowed_types'] = 'avi|flv|3gp|mp4|wmv|mp3';
	            $configVideo['overwrite'] = FALSE;
	            $configVideo['remove_spaces'] = TRUE;
	            $video_name = $date.$_FILES['video']['name'];
	            $configVideo['file_name'] = $video_name;

	            $this->load->library('upload', $configVideo);
	            $this->upload->initialize($configVideo);
	            if (!$this->upload->do_upload('video')) {
	                
	            } 
	            else 
	            {

	               		$data = array('upload_data' => $this->upload->data());
						//upload edilen verinin veritabanına kaydedilmesi
						$videoDetails = $this->upload->data(); 
						
						$file_name =   $videoDetails['file_name'];
						
						
						$data=array(
						   
							'video' => $file_name,
							'uye_ID' => $_session->Id,
							'uye_adsoy' => $_session->adsoy,
							'uye_img' => $_session->img,
							'kime_Id' => $Id,
							'paylasim' => $this->input->post('paylasim')
							
							
						);
					
						// Data dizisine yüklenen verileri models deki ilgili fonksiyona gönderme
						$this->main_Model->insert_data("paylasimlar",$data); //  fonksiyonuna dataları id ile  gönder
						
						redirect(base_url()."profil/ybnprofil/".$Id);


	            }
	        }
   		}
   		public function sifremiunuttum()
   		{
   			$email=$this->input->post('email');
   			
			$this->db->select('sifre');
			$this->db->from('uyeler');
			$this->db->where('email',$email);
			$query=$this->db->get();
			$data['sifre']=$query->result();
		
			$query=$this->db->get("emailayarlar");
			$data['veri']=$query->result();

        	$config['protocol'] = 'smtp';
		    $config['smtp_host'] = $data["veri"][0]->smtpserver; 
		    $config['smtp_port'] = $data["veri"][0]->smtpport;
		    $config['smtp_user'] = $data["veri"][0]->smtpemail; // gmail adresiniz
		    $config['smtp_pass'] = $data["veri"][0]->password; // gmail giriş parolanız
		    $config['charset'] = 'utf-8';
		    $config['mailtype'] = 'html';
		    $config['newline'] = "\r\n";

			$this->load->library('email', $config); // email sınıfını yukarıdaki ayarlar ile yüklüyoruz


			$mesaj=$this->input->post("mesaj")."<br>";
			$mesaj.=$data["veri"][0]->adi."<br>";
			$mesaj.="Şifreniz: ".$data["sifre"][0]->sifre."<br>";
		    $this->email->from($data["veri"][0]->smtpemail, $data["veri"][0]->adi); // Gönderen, yani sizin bilgileriniz
		    $this->email->to($email); // alıcı e-posta adresi
		    $this->email->subject('Şifre hatırlatma'); // Konu
		    $this->email->message($mesaj); // İçerik
		 
		    $send=$this->email->send();


			if($send)
			{
				$this->session->set_flashdata("sonuc","E-mail adresinize şifreniz gönderilmiştir.");
				redirect(base_url()."home");
			}else
			{
				$this->session->set_flashdata("sonuc","Güncelleme sırasında hata oluştu !");
				redirect(base_url()."home");
			}

			

   		}
   		public function hatalilogin()
   		{
   			$this->load->view('hatalilogin');
   		}


}//Main
?>