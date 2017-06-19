<?php
class Error extends CI_Controller {

       public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper(array('form','url'));
			
        }
		public function index()
		{
			
			
		}

		public function ci404()
		{
			$this->output->set_status_header('404');
			$this->load->view("not_found");
		}
		
		
				
}//Main
?>