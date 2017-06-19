<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e erişmemizi sağlar
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('Admin_Model');
				if (!$this->session->userdata('login_giris'))
					{ 
						redirect(base_url()."admin/login");
					}

        }
		public function index()
		{	
		
			$query = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query->result(); 
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/content');
			$this->load->view('admin/footer');
		}
		public function bizeyazin()
		{	
		
			$query = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query->result();
			
			$query1 = $this->db->query('select * from bizeyazin'); 
			$data["bizeyazin"]=$query1->result(); 
			
			
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/bizeyazin',$data);
			$this->load->view('admin/footer');
		}
		public function bizeyazincevap()
		{	
			$email=$this->input->post('email');
			$mesaj=$this->input->post("mesaj");

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
		    $this->email->from($data["veri"][0]->smtpemail, $data["veri"][0]->adi); // Gönderen, yani sizin bilgileriniz
		    $this->email->to($email); // alıcı e-posta adresi
		    $this->email->subject('Mesaj'); // Konu
		    $this->email->message($mesaj); // İçerik
		 
		    $send=$this->email->send();


			if($send)
			{
				$this->session->set_flashdata("sonuc","E-mail gönderildi.");
				redirect(base_url()."admin/home/bizeyazin");
			}else
			{
				$this->session->set_flashdata("sonuc","Hata oluştu !");
				redirect(base_url()."admin/home/bizeyazin");
			}

		
			
			
		}
		public function emailayarlar()
		{
			$query = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query->result();

			$query1 = $this->db->query('select * from emailayarlar'); 
			$data["veri"]=$query1->result();
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/emailayarlar');
			$this->load->view('admin/footer');
		}
		public function emailayarlarguncelle()
		{
			$data=array (
				'adi'=> $this->input->post('adi'),
				'keywords'=> $this->input->post('keywords'),
				'aciklama'=> $this->input->post('aciklama'),
				'name'=> $this->input->post('name'),
				'smtpserver'=> $this->input->post('smtpserver'),
				'smtpport'=> $this->input->post('smtpport'),
				'smtpemail'=> $this->input->post('smtpemail'),
				'password'=> $this->input->post('password'),
				'adres'=> $this->input->post('adres'),
				'sehir'=> $this->input->post('sehir'),
				'tel'=> $this->input->post('tel'),
				'email'=> $this->input->post('email'),
				'iletisim'=> $this->input->post('iletisim'),
				'facebook'=> $this->input->post('facebook'),
				'twitter'=> $this->input->post('twitter'),
				'instagram'=> $this->input->post('instagram')
				
				
			);
			
			$this->Admin_Model->update_data("emailayarlar",$data,1);
			redirect(base_url()."admin/home/emailayarlar");
		}
		public function uyeler()
		{	
			$query = $this->db->query('select * from admin_uye'); 
			$data["adminbilgi"]=$query->result();

			$query = $this->db->query('select * from uyeler'); 
			$data["Siteuyeler"]=$query->result();
			
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/uyeler',$data);
			$this->load->view('admin/footer');
		}
		public function bizeyazinsil($Id)
		{
			$sonuc=$this->db->query('DELETE FROM bizeyazin WHERE id='.$Id);
			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Silme işlemi başarılıdır.");
				redirect(base_url()."admin/home/bizeyazin");
			}else
			{
				$this->session->set_flashdata("sonuc","Hata oluştu !");
				redirect(base_url()."admin/home/bizeyazin");
			}
			
		}
		public function sosyaluyesil($Id)
		{
			
			$sonuc=$this->db->query('DELETE FROM uyeler WHERE id='.$Id);
			if($sonuc)
			{
				$this->session->set_flashdata("sonuc","Üye silme işlemi başarılıdır.");
				redirect(base_url()."admin/home/uyeler");
			}else
			{
				$this->session->set_flashdata("sonuc","Hata oluştu !");
				redirect(base_url()."admin/home/uyeler");
			}
			
		}
}
?>