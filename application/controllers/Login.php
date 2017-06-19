<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada database e eriþmemizi saðlar
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('login_Model'); // model tanýmlamasý
        }
		public function index()
		{
			
			
			$this->load->view('girisyap');

		}
		public function login_ol()
		{
			$email=$this->input->post('email');
			$sifre=$this->input->post('password');
			$result = $this->login_Model->login($email,$sifre);
			
			if($result) {
				// Kullanýcý var ise bilgileri diziye aktarýlýyor
				$sess_array = array();
				 $this->session->set_userdata('logged_in', $result[0]);
				//print_r( $result[0]);
				 redirect(base_url()."profil"); 
          }
          else{
   					$this->session->set_flashdata("sonuc","Hatalı e-mail veya şifre !");
					redirect(base_url()."profil/hatalilogin");
				
          }
		}		  
		public function logout()
			{
			 $this->session->unset_userdata('logged_in');
			 $this->session->sess_destroy();
			 redirect(base_url()."home");
		}
	
		
				
}//Main
?>