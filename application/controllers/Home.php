<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e erişmemizi sağlar
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('main_Model'); // model tanımlaması
				$this->load->model('Employee_m');
        }
		public function index()
		{
			
			
			$query1 = $this->db->query('select * from sondakika  order by tarih desc'); // haberler tablasonu veritananından çek
			$data["sondakika"]=$query1->result(); // Sorgu sonucu gelen verileri data ya yükle
				
			$this->load->view('content',$data);

		}
		
		public function haberler()
		{
			$query = $this->db->query('select * from haberler order by tarih desc '); // haberler tablasonu veritananından çek
			$data["verihaber"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle
			
		
			
			
			$this->load->view('contenthaber',$data);
		
		}
		public function spor()
		{
			
		
		
			$this->load->view('contentspor');
	
			
		}
		public function muzik()
		{
			$query = $this->db->query('select * from muzik  order by tarih desc'); // haberler tablasonu veritananından çek
			$data["verimuzik"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle
			
			
			$this->load->view('contentmuzik',$data);

			
			
			
		}
		public function saglik()
		{
			$query = $this->db->query('select * from saglik  order by tarih desc'); // haberler tablasonu veritananından çek
			$data["verisaglik"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle
			
			
			$this->load->view('contentsaglik',$data);
		
		}
		public function moda()
		{	
			
			$query = $this->db->query('select * from moda  order by tarih desc'); // haberler tablasonu veritananından çek
			$data["verimoda"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle
			
			$_session=$this->session->userdata('logged_in');
			$this->load->view('contentmoda',$data);

			
		}
		public function otomobil()
		{	
			
			$query = $this->db->query('select * from otomobil  order by tarih desc'); // haberler tablasonu veritananından çek
			$data["veriotomobil"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle
			
			
			$this->load->view('contentotomobil',$data);

			
		}
		public function teknoloji()
		{	
			
			$query = $this->db->query('select * from teknoloji  order by tarih desc'); // haberler tablasonu veritananından çek
			$data["veriteknoloji"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle
			
			
			$this->load->view('contentteknoloji',$data);

			
		}
		public function oyun()
		{	
			
			$query = $this->db->query('select * from oyun  order by tarih desc'); // haberler tablasonu veritananından çek
			$data["verioyun"]=$query->result(); // Sorgu sonucu gelen verileri data ya yükle
			
			
			$this->load->view('contentoyun',$data);

			
		}
		public function register()
		{
			
			$this->load->view('register');
		
		}
		public function login()
		{
		
			$this->load->view('login');
		
		}
	
		
		public function kaydet()
		{
			
			$this->load->library("form_validation");
			$this->form_validation->set_rules("email","E-Posta","required|trim|valid_email|is_unique[uyeler.email]");

			if($this->form_validation->run() == FALSE)
			{
				
				$this->session->set_flashdata("sonuchata","Bu email ile hesap zaten alınmış !");
				redirect(base_url()."home/register");
					
			}
			else
			{ 

				$Id=str_pad(mt_rand(10000, 999999), 6, '0', STR_PAD_LEFT);
					$data=array(
						'Id' => $Id,
						'adsoy' => $this->input->post('adsoy'),
						'kullaniciadi' => $this->input->post('kullaniciadi'),
						'sifre' => $this->input->post('sifre'),
						'meslek' => $this->input->post('meslek'),
						'dogumtarihi' => $this->input->post('dogumtarihi'),
						'email' => $this->input->post('email'),
						'telefon' => $this->input->post('telefon'),
						'ip'=> $this->input->ip_address(),
						'cekId' => 0

					);

			
					$sonuc=$this->main_Model->insert_data("uyeler",$data);
				
		
				if($sonuc)
				{
					$this->session->set_flashdata("sonuc","Başarıyla kayıt oldunuz.Giriş yapabilirsiniz.");

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

					$mesaj.="E-mail: ".$this->input->post('email')."<br>";
					$mesaj.="Şifre: ".$this->input->post('sifre')."<br>";
					$mesaj.="Eğlenceli vakit geçirmeniz dileğiyle :) "."<br>";
				    $this->email->from($data["veri"][0]->smtpemail, $data["veri"][0]->adi); // Gönderen, yani sizin bilgileriniz
				    $this->email->to($this->input->post('email')); // alıcı e-posta adresi
				    $this->email->subject('Erkeksen Gir üyeliğiniz başarıyla oluşturulmuştur.'); // Konu
				    $this->email->message($mesaj); // İçerik
				 
				    $send=$this->email->send();

					if($send)
						{
							redirect(base_url()."home/register");
							
						}
					else
						{
							echo "Hata var";
							echo $this->email->print_debugger();
						}
						
				}
			else
				{
					$this->session->set_flashdata("sonuchata","Kayıt sırasında bir hata oluştu.Lütfen tekrar deneyiniz.");
					redirect(base_url()."home/register");
				}
			}



					

		
		}
		public function anasayfayorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=>$Id
			);
			$this->main_Model->insert_data("anasayfayorumlar",$data);
			redirect(base_url()."home/icerikdetayanasayfa/".$Id);
		}
		public function icerikdetayanasayfa($Id)
		{	
			
			$this->db->select('*');
			$this->db->from('anasayfayorumlar');
			$this->db->where('haberId',$Id);
			$query1= $this->db->get();	
			$query = $this->db->get_where("haberler",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
			$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
			$data['verianasayfayorum'] = $query1->result();			
			$data['id'] = $Id;
			
		$this->load->view('icerik_detay',$data);
			
		}
		public function teknolojiyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=>$Id
			);
			$this->main_Model->insert_data("teknolojiyorumlar",$data);
			redirect(base_url()."home/icerikdetayteknoloji/".$Id);
		}
		public function icerikdetayteknoloji($Id)
		{
			$this->db->select('*');
			$this->db->from('teknolojiyorumlar');
			$this->db->where('haberId',$Id);
			$query1= $this->db->get();	
			$query = $this->db->get_where("teknoloji",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
			$data['veri'] = $query->result();	
			$data['veriteknolojiyorum'] = $query1->result();			
			$data['id'] = $Id;
			
		$this->load->view('icerik_detayteknoloji',$data);
			
		}
		public function saglikyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("saglikyorumlar",$data);
			redirect(base_url()."home/icerikdetaysaglik/".$Id);
		}
		public function icerikdetaysaglik($Id)
		{
			$this->db->select('*');
			$this->db->from('saglikyorumlar');
			$this->db->where('haberId',$Id);
			$query1= $this->db->get();	
			$query = $this->db->get_where("saglik",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
			$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
			$data['verisaglikyorum'] = $query1->result();			
			$data['id'] = $Id;
			
			$this->load->view('icerik_detaysaglik',$data);
			
		}
		///////////////////////
		public function oyunyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("oyunyorumlar",$data);
			redirect(base_url()."home/icerikdetayoyun/".$Id);
		}
		public function icerikdetayoyun($Id)
		{
			$this->db->select('*');
			$this->db->from('oyunyorumlar');
			$this->db->where('haberId',$Id);
			$query1= $this->db->get();	
			$query = $this->db->get_where("oyun",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
			$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
			$data['verioyunyorum'] = $query1->result();			
			$data['id'] = $Id;
			
			$this->load->view('icerik_detayoyun',$data);
			
		}
		//////////////////////
		public function muzikyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=>$Id
			);
			$this->main_Model->insert_data("muzikyorumlar",$data);
			redirect(base_url()."home/icerikdetaymuzik/".$Id);
		}
		public function icerikdetaymuzik($Id)
		{
			$this->db->select('*');
			$this->db->from('muzikyorumlar');
			$this->db->where('haberId',$Id);
			$query1= $this->db->get();
			$query = $this->db->get_where("muzik",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
			$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
			$data['verimuzikyorum'] = $query1->result();			
			$data['id'] = $Id;	
			
			$this->load->view('icerik_detaymuzik',$data);
			
		}
		public function modayorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("modayorumlar",$data);
			redirect(base_url()."home/icerikdetaymoda/".$Id);
		}
		public function icerikdetaymoda($Id)
		{									
			$this->db->select('*');
			$this->db->from('modayorumlar');
			$this->db->where('haberId',$Id);
			$query1= $this->db->get();
			$query= $this->db->get_where("moda",array("id"=>$Id )); 
			$data['veri'] = $query->result();	
			$data['verimodayorum'] = $query1->result();			
			$data['id'] = $Id;
			
		$this->load->view('icerik_detaymoda',$data);
			
		}
		public function otomobilyorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=>$Id
			);
			$this->main_Model->insert_data("otomobilyorumlar",$data);
			redirect(base_url()."home/icerikdetayotomobil/".$Id);
		}
		
		public function icerikdetayotomobil($Id)
		{
			$this->db->select('*');
			$this->db->from('otomobilyorumlar');
			$this->db->where('haberId',$Id);
			$query1= $this->db->get();
			$query = $this->db->get_where("otomobil",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
			$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
			$data['veriotomobilyorum'] = $query1->result();			
			$data['id'] = $Id;
			
		$this->load->view('icerik_detayotomobil',$data);
			
		}
		public function haberleryorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("haberleryorumlar",$data);
			redirect(base_url()."home/icerikdetayhaberler/".$Id);
		}
		public function icerikdetayhaberler($Id)
		{
			$query = $this->db->get_where("haberler",array("id"=>$Id)); 
	        $data['veri'] = $query->result(); 

	        $query = $this->db->get_where("haberleryorumlar",array("haberId"=>$Id)); 
	        $data['verihaberleryorum'] = $query->result();
				
			$this->load->view('icerik_detayhaberler',$data);
				
		}	
				
		//sondakika
		public function icerikdetaysondakika($Id)
		{
			$query = $this->db->get_where("sondakika",array("id"=>$Id)); 
	        $data['veri'] = $query->result(); 

	        $query = $this->db->get_where("sondakikayorumlar",array("haberId"=>$Id)); 
	        $data['sondakikayorum'] = $query->result();
				
			$this->load->view('icerik_detaysondakika',$data);
				
		}	
		public function sondakikayorumkaydet($Id){
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("sondakikayorumlar",$data);
			redirect(base_url()."home/icerikdetaysondakika/".$Id);
		}
		public function sondakikayorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM sondakikayorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetaysondakika/".$haberId);
		}
		public function oyunyorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM oyunyorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetayoyun/".$haberId);
		}
		//Futbol	
		public function icerikdetayfutbol($Id)
		{
			
			$query = $this->db->get_where("futbol",array("id"=>$Id)); 
	        $data['veri'] = $query->result(); 

	        $query = $this->db->get_where("futbolyorumlar",array("haberId"=>$Id)); 
	        $data['futbolyorum'] = $query->result();
				
			$this->load->view('icerik_detayfutbol',$data);
			
		}
		public function futbolyorumkaydet($Id)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("futbolyorumlar",$data);
			redirect(base_url()."home/icerikdetayfutbol/".$Id);
		}
		public function futbolyorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM futbolyorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetayfutbol/".$haberId);
		}
		//Basketbol
		public function icerikdetaybasketbol($Id)
		{
			
			$query = $this->db->get_where("basketbol",array("id"=>$Id)); 
	        $data['veri'] = $query->result(); 

	         $query = $this->db->get_where("basketbolyorumlar",array("haberId"=>$Id)); 
	        $data['basketbolyorum'] = $query->result();
				
			$this->load->view('icerik_detaybasketbol',$data);
			
		}
		public function basketbolyorumkaydet($Id)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("basketbolyorumlar",$data);
			redirect(base_url()."home/icerikdetaybasketbol/".$Id);
		}
		public function basketbolyorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM basketbolyorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetaybasketbol/".$haberId);
		}
		//Voleybol
		public function icerikdetayvoleybol($Id)
		{
			
			$query = $this->db->get_where("voleybol",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
	        $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata

	        $query = $this->db->get_where("voleybolyorumlar",array("haberId"=>$Id)); 
	        $data['voleybolyorum'] = $query->result();
				
			$this->load->view('icerik_detayvoleybol',$data);
			
		}
		public function voleybolyorumkaydet($Id)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("voleybolyorumlar",$data);
			redirect(base_url()."home/icerikdetayvoleybol/".$Id);
		}
		public function voleybolyorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM voleybolyorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetayvoleybol/".$haberId);
		}
		//Fitness
		public function icerikdetayfitness($Id)
		{
			
			$query = $this->db->get_where("fitness",array("id"=>$Id)); 
	        $data['veri'] = $query->result(); 

	        $query = $this->db->get_where("fitnessyorumlar",array("haberId"=>$Id)); 
	        $data['fitnessyorum'] = $query->result();
			
			$this->load->view('icerik_detayfitness',$data);
			
		}
		public function fitnessyorumkaydet($Id)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("fitnessyorumlar",$data);
			redirect(base_url()."home/icerikdetayfitness/".$Id);
		}
		public function fitnessyorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM fitnessyorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetayfitness/".$haberId);
		}
		//Motor
		public function icerikdetaymotor($Id)
		{
			
			$query = $this->db->get_where("motor",array("id"=>$Id)); 
			$data['veri'] = $query->result(); 

			$query = $this->db->get_where("motoryorumlar",array("haberId"=>$Id)); 
	        $data['motoryorum'] = $query->result();
			
			$this->load->view('icerik_detaymotor',$data);
			
		}
		public function motoryorumkaydet($Id)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("motoryorumlar",$data);
			redirect(base_url()."home/icerikdetaymotor/".$Id);
		}
		public function motoryorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM motoryorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetaymotor/".$haberId);
		}
		//Diğer
		public function icerikdetaydiger($Id)
		{
			
			$query = $this->db->get_where("diger",array("id"=>$Id)); 
			$data['veri'] = $query->result(); 

			$query = $this->db->get_where("digeryorumlar",array("haberId"=>$Id)); 
	        $data['digeryorum'] = $query->result();
			
			$this->load->view('icerik_detaydiger',$data);
			
		}
		public function digeryorumkaydet($Id)
		{
			$_session=$this->session->userdata('logged_in');
			//print_r($_session);
			$data=array(
				'uye_ID' => $_session->Id,
				'uye_adsoy' => $_session->adsoy,
				'yorum' => $this->input->post('yorum'),
				'yapanimg' => $_session->img,
				'haberId'=> $Id
			);
			$this->main_Model->insert_data("digeryorumlar",$data);
			redirect(base_url()."home/icerikdetaydiger/".$Id);
		}
		public function digeryorumsil($Id,$haberId)
		{
			$this->db->query('DELETE FROM digeryorumlar WHERE id='.$Id);
			redirect(base_url()."home/icerikdetaydiger/".$haberId);
		}
		///////
		public function girisyap()
		{
			
		
			
			$this->load->view('girisyap');
			
		}
		public function forum()
		{
			
			$this->load->view('forum');
			
		}
		public function denemeajax()
		{
			
			$query = $this->db->get("sum"); 
			$data['sum'] = $query->result();


			$this->load->view('denemeajax',$data);
			
		}


		//Ajax Denemeleri

		public function hello()
		{
			$fullname=$this->input->post('fullname');
			echo 'Hello '.$fullname;	
						
		}
		public function sum()
		{
			$number1=$this->input->post('number1');
			$number2=$this->input->post('number2');
			
			$data=array(
				
				'number1' => $this->input->post('number1'),
				'number2' => $this->input->post('number2')
				
			);
			$this->main_Model->insert_data("sum",$data);

			echo $number1 + $number2 ;
						
		}
		 function denemeajax2()
        {	
        	$this->load->view('layout/header');        	
        	$this->load->view('denemeajax2');
        	$this->load->view('layout/footer');
        }
        public function showAllEmployee(){
        	$result=$this->Employee_m->showAllEmployee();
        	echo json_encode($result);
        }
        
        public function addEmployee(){
		$result = $this->Employee_m->addEmployee();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editEmployee(){
		$result=$this->Employee_m->editEmployee();
		echo json_encode($result);
	
	}
	public function updateEmployee(){
		$result = $this->Employee_m->updateEmployee();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function deleteEmployee(){
		$result = $this->Employee_m->deleteEmployee();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

		//Ajax Denemeleri	
		
	public function haberyorumsil($Id,$haberId)
	{
		$this->db->query('DELETE FROM haberleryorumlar WHERE id='.$Id);
		redirect(base_url()."home/icerikdetayhaberler/".$haberId);
	}
	public function teknolojiyorumsil($Id,$haberId)
	{
		$this->db->query('DELETE FROM teknolojiyorumlar WHERE id='.$Id);
		redirect(base_url()."home/icerikdetayteknoloji/".$haberId);
	}
	public function saglikyorumsil($Id,$haberId)
	{
		$this->db->query('DELETE FROM saglikyorumlar WHERE id='.$Id);
		redirect(base_url()."home/icerikdetaysaglik/".$haberId);
	}
	public function muzikyorumsil($Id,$haberId)
	{
		$this->db->query('DELETE FROM muzikyorumlar WHERE id='.$Id);
		redirect(base_url()."home/icerikdetaymuzik/".$haberId);;
	}
	public function otomobilyorumsil($Id,$haberId)
	{
		$this->db->query('DELETE FROM otomobilyorumlar WHERE id='.$Id);
		redirect(base_url()."home/icerikdetayotomobil/".$haberId);
	}
	public function modayorumsil($Id,$haberId)
	{
		$this->db->query('DELETE FROM modayorumlar WHERE id='.$Id);
		redirect(base_url()."home/icerikdetaymoda/".$haberId);
	}
	
	
	public function futbol()
	{
		$this->db->select('*');
		$this->db->from('futbol');
		$this->db->order_by('tarih','desc');
		$query= $this->db->get();	
		$data['futbol']=$query->result();

		$this->load->view('futbol',$data);
		
	}
	public function basketbol()
	{
		$this->db->select('*');
		$this->db->from('basketbol');
		$this->db->order_by('tarih','desc');
		$query= $this->db->get();	
		$data['basketbol']=$query->result();

		$this->load->view('basketbol',$data);
		
	}
	public function voleybol()
	{
		$this->db->select('*');
		$this->db->from('voleybol');
		$this->db->order_by('tarih','desc');
		$query= $this->db->get();	
		$data['voleybol']=$query->result();

		$this->load->view('voleybol',$data);
		
	}
	public function fitness()
	{
		$this->db->select('*');
		$this->db->from('fitness');
		$this->db->order_by('tarih','desc');
		$query= $this->db->get();	
		$data['fitness']=$query->result();

		$this->load->view('fitness',$data);
		
	}	
	public function motor()
	{
		$this->db->select('*');
		$this->db->from('motor');
		$this->db->order_by('tarih','desc');
		$query= $this->db->get();	
		$data['motor']=$query->result();

		$this->load->view('motor',$data);
		
	}	
	public function diger()
	{
		$this->db->select('*');
		$this->db->from('diger');
		$this->db->order_by('tarih','desc');
		$query= $this->db->get();	
		$data['diger']=$query->result();

		$this->load->view('diger',$data);
		
	}	
		
		
}//Main
?>