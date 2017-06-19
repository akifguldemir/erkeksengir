<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e erişmemizi sağlar
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('Admin_Model');
        }
		public function index()
		{
			$this->load->view('admin/login_form');
		
		}
		
	public function login_ol()
	{
		$email=$this->input->post('email');
		$sifre=$this->input->post('password');
		
		$result = $this->Admin_Model->login($email,$sifre);
		if($result) {
				// Kullanıcı var ise bilgileri diziye aktarılıyor
				$sess_array = array();
				foreach($result as $row) {
                 $sess_array = array(
				 'Id' => $row->Id,				
				 'email' => $row->email,
				 'adsoy' => $row->adsoy
				 );
                 // Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktarılıoyor
                 $this->session->set_userdata('login_giris', $sess_array);
				 
				 redirect(base_url()."admin/home");
			
				 
                 }
          		return TRUE;
          } 
		  else 
		  {
            $this->session->set_flashdata("login_hata","Geçersiz Email yada Şifre");   
          		
			$this->load->view('admin/login_form');
			
            return FALSE;
          }
		
	}		
		public function logout()
		{
		 $this->session->unset_userdata('login_giris');
         $this->session->sess_destroy();
         redirect(base_url()."admin/login");
		}
	
		  

			
		
}//Main
?>