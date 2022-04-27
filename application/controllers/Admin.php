<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('admin_login') === TRUE) {
			redirect(base_url('admin/dashboard'));
		}

		redirect(base_url('admin'));
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata('logged_in');
		redirect(base_url('admin'), 'refresh');    
	  }

	public function dashboard()
	{
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$data['page_title']	=	"Dashboard";
		$data['countries']		=	$this->crud_model->get_all_countries();

		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/dashboard');
		$this->load->view('Admin/footer');
	}

	public function admins()
	{
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');
		
		$data['page_title']	=	"Admins";
		$data['admin']		=	$this->crud_model->get_admins();


		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/admins');
		$this->load->view('Admin/footer');
	}

	public function speakers()
	{
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');
		
		$data['page_title']		=	"Speakers";
		$data['speakers']		=	$this->crud_model->get_speakers();


		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/speakers');
		$this->load->view('Admin/footer');
	}

	public function participants()
	{
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$data['page_title']			=	"Event Participants";
		$data['participants']		=	$this->crud_model->get_participants();

		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/participants');
		$this->load->view('Admin/footer');
	}

	public function approve_payments()
	{
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$data['page_title']			=	"Payment Approval";
		$data['participants']		=	$this->crud_model->get_payment_pending_participants();

		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/payment-approval');
		$this->load->view('Admin/footer');
	}

	public function payments()
	{
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$data['page_title']			=	"Payments";
		$data['participants']		=	$this->crud_model->get_confirmed_participants();

		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/payments');
		$this->load->view('Admin/footer');
	}

	public function confirm_payment(){
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$user_id 	=	$this->input->post('user_id');
		$reg_code	=	strtoupper(random_string('alnum', 10)); 

		$this->db->where('encrypted_id', $user_id); 
		$this->db->update('users', array('reg_code' => $reg_code, 'approved_by' => 
	$this->session->userdata('admin_name')));

		//Send Email to Participant 
		$participant = $this->db->get_where('users', array('encrypted_id' => $user_id)); 
		$email		=	$participant->row()->email;
		$fullname	=	$participant->row()->fullname;

		//Send Email to User 
		$array = array('fullname' => $fullname, 'reg_code' => $reg_code); 
		$this->session->set_userdata($array);

		$this->email_model->send_message3($email);

		$this->session->unset_userdata($array);
		echo  1;
	}

	public function delete_admin(){
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$user_id 	=	$this->input->post('id');

		$this->db->where('encrypted_id', $user_id); 
		$this->db->delete('admin');

		echo  1;
	}

	public function delete_speaker(){
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$user_id 	=	$this->input->post('id');

		$this->db->where('encrypted_id', $user_id); 
		$this->db->delete('speakers');

		echo  1;
	}

	public function add_admin(){
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$password			=	random_string('alnum', 8); 
		$email				=	$this->input->post('email'); 

		if($this->crud_model->check_admin_email($email) > 0){
			$this->session->set_flashdata('flash_error' , 'An Admin with this Email address already exists');
			redirect(base_url('admin/admins'), 'refresh');
		}else{
			$data['admin_email']		=	$email;
			$data['admin_password']		=	md5($password); 
			$data['admin_name']			=	$this->input->post('fullname');
			$data['date_joined']		=	date('F jS, Y | h:i:A');
			$data['encrypted_id'] 		=	random_string('alnum', 100); 

			// Send Email to Admin
			$array = array('user_fullname' => $data['fullname'], 'user_password' => $password, 'user_email' => $data['admin_email']); 
			$this->session->set_userdata($array);
			$this->email_model->send_admin_email($data['admin_email']);
			$this->session->unset_userdata($array); 
			
			$this->db->insert('admin', $data);

			$this->session->set_flashdata('flash_message' , 'System Admin Added Successfully');
			redirect(base_url('admin/admins'), 'refresh');
		}
	}

	public function invite_participant(){
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');

		$email				=	$this->input->post('email');

		$this->email_model->send_invite_email($email);

		$this->session->set_flashdata('flash_message', 'Invitation SentSuccessfully');
		redirect(base_url('admin/dashboard'), 'refresh');

	}

	public function add_speaker(){
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');
			$name 					=	$this->input->post('fullname');

			//Check if Name Exists 
			if($this->crud_model->check_speaker_name($name) > 0){
				$this->session->set_flashdata('flash_error' , 'This Speaker has Already being Added');
				redirect(base_url('admin/speakers'), 'refresh');
			}else{
				$data['encrypted_id']	=	random_string('alnum', 100);
				$data['name']			=	$name;
				$data['portfolio']		=	$this->input->post('portfolio');
				$data['added_by']		=	$this->session->userdata('admin_name');
				$data['date']			=	date('F jS, Y | h:i:A');

				$this->db->insert('speakers', $data);
				$insert_id = $this->db->insert_id(); 

				move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/speakers_image/' . $insert_id . '.jpg');

				$this->session->set_flashdata('flash_message' , 'Event Speaker Successfully');
				redirect(base_url('admin/speakers'), 'refresh');
			}
		
	}

	
	public function register_participant(){
		if ($this->session->userdata('admin_login') != TRUE)
		redirect(base_url(), 'refresh');
			
		//Check form
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|valid_email|is_unique[users.email]',
			array(
				'required'      => 'Please Provide a Valid Email Address',
				'valid_email' 	=> 'Please Provide a Valid Email Address', 
				'is_unique'		=> 'A User with this Email Address Already Exists'
			)
		);
		if ($this->form_validation->run() === FALSE) {
			$error_message = "";

			if (form_error('email')) {
				$error_message = form_error('email');
			}

			$this->session->set_flashdata('flash_error', $error_message);
			redirect(base_url('admin/dashboard'), 'refresh');
		}
		else{
			$plan		=	$this->input->post('plan');
			$email		=	$this->input->post('email');
			$fullname	=	$this->input->post('fullname');
			$payment 	=	$this->input->post('payment');
			$amount 	=	0;
			if ($plan == "Virtual") {
				$amount = 150;
			} else {
				$amount = 955;
			}
		
			$data['encrypted_id']	=	random_string('alnum', 100); 
			$data['fullname']		=	$fullname;
			$data['plan']			=	$this->input->post('plan');
			$data['amount']			=	$amount;
			$data['email']			=	$email;
			$data['organization']	=	$this->input->post('organization');
			$data['designation']	=	$this->input->post('designation');
			$data['country']		=	$this->input->post('country');
			$data['payment_type']	=	$payment;
			$data['date']			=	date('F jS, Y');
			
			//Send Email to User 
			$array = array('fullname' => $fullname, 'amount' => $amount, 
			'payment_type' => $payment, 'plan' => $plan); 
			$this->session->set_userdata($array);
		
			$this->email_model->send_message2($email);
			
			$this->session->unset_userdata($array);

			$this->db->insert('users', $data);

			$this->session->set_flashdata('flash_message' , 'Registration Successful. Ask Participant to check Email to complete the process.');
			redirect(base_url('admin/dashboard'));
		}
		
	}



	
}
