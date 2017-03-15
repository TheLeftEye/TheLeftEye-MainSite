<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('common/header');
		$this->load->view('welcome_message');
		$this->load->view('contact_us');
		$this->load->view('common/footer');
	}
	
	public function products(){
		$this->load->view('common/header');
		$this->load->view('products');
		$this->load->view('common/footer');
	}
	public function services(){
		$this->load->view('common/header');
		$this->load->view('services');
		$this->load->view('common/footer');
	}
	public function career(){
		$this->load->view('common/header');
		$this->load->view('career');
		$this->load->view('common/footer');
	}

	public function about(){
		$this->load->view('common/header');
		$this->load->view('about_us');
		$this->load->view('common/footer');
	}
	
	public function contact(){
		$this->load->view('common/header');
		$this->load->view('contact_us');
		$this->load->view('common/footer');
	}
	
	public function contact_submit(){
		$name = htmlentities($this->input->post("name"));
		$email = htmlentities($this->input->post("email"));
		$message = htmlentities($this->input->post("message"));
		
		$send_data = "
		$message<br><hr>
		Name: $name<br>
		Email: $email
		";
		
		$config = Array(
			'mailtype' => 'html',	
		);
		// Load Email Library
		$this->load->library('email', $config);
		
		$this->email->from('info@thelefteye.in', 'The left Eye');
		$this->email->to('support@thelefteye.in');
		
		$this->email->subject('The left eye. Query from '. $name);
		$this->email->message($send_data);
		
		// Send Email
		if($this->email->send()) 
			redirect(HTTP_BASE_URL."success");
		else 
			redirect(HTTP_BASE_URL."error");
	}
	
	public function career_submit(){
		$name = htmlentities($this->input->post("name"));
		$email = htmlentities($this->input->post("email"));
		$positions = $this->input->post("position");
		$phone = htmlentities($this->input->post("phone"));
		$address = htmlentities($this->input->post("address"));
		
		$config['upload_path'] = './uploads/'; 
		$config['allowed_types'] = 'doc|docx|pdf'; 
		$config['max_size']      = 2048; 
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('resume')) {
			redirect(HTTP_BASE_URL."error");
		}
		$data = $this->upload->data();
		$file = $data['full_path'];
		
		$send_data = "Careen Form Submition!<hr>Name: $name<br>Email: $email<br>Position(s): ";
		foreach ($positions as $position) {
			$send_data .= $position.", ";
		}
		$send_data = substr($send_data, 0, -2);
		
		$send_data .= "<br>Phone: ".$phone;
		$send_data .= "<br>Address: ".$address;
		
		$config = Array(
			'mailtype' => 'html',	
		);
		// Load Email Library
		$this->load->library('email', $config);
		
		$this->email->from('info@thelefteye.in', 'The left Eye');
		$this->email->to('support@thelefteye.in');
		
		$this->email->subject('The left eye. Job Request from '. $name);
		$this->email->message($send_data);
		$this->email->attach($file);
		// Send Email
		if($this->email->send()) 
			redirect(HTTP_BASE_URL."success");
		else 
			redirect(HTTP_BASE_URL."error");

	}
	
	
	public function success(){
		$this->load->view('common/header');
		$this->load->view('success');
	}
	public function error(){
		$this->load->view('common/header');
		$this->load->view('error');
	}
	
}
