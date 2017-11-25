<?php 
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Smsapi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		
		$this->load->helper('url');

		
		$this->load->model('sms_model');
		

		//$this->output->enable_profiler(TRUE);

	}
    
	

        public function send_sms()
	{
			

 	$this->load->view('sms');
				
		
		
	}



       public function sms()
	{
			try{


				$this->form_validation->set_rules('sender_val', 'Sender', 'required');
				$this->form_validation->set_rules('recipiant_val', 'Reciepiant', 'trim|required');
				$this->form_validation->set_rules('message_val', 'Message', 'trim|required');
				if ($this->form_validation->run() === FALSE)
				{

					$this->load->view('sms_errors');

				}else
				{
					$sender = $this->input->post('sender_val');
					$recipients= $this->input->post('recipiant_val');
					$message = $this->input->post('message_val');					
					$url = $this->config->item('http_get_url');	
					$username = $this->config->item('username');
					$apikey = $this->config->item('api_key');

	  
	    			        $sendername = substr($sender, 0, 11);	    			
		    		        $flash = 0;
					    if (get_magic_quotes_gpc()) {
						$message = stripslashes($message);
					    }
					    $message = substr($message, 0, 160);

					$result = $this->sms_model->useHTTPGet($http_get_url, $username, $apikey, $flash, $sendername, $message, $recipients);
			     		echo $result;


				}

				

				

				
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}











}
