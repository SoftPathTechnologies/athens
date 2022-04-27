<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['countries']		=	$this->crud_model->get_all_countries();
		$data['speakers']		=	$this->crud_model->get_speakers();

		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/index');
		$this->load->view('Layouts/footer');
	}

	public function sign_in()
	{
		$this->load->view('Pages/sign-in');
	}

	public function error()
	{
		$this->load->view('Pages/error');
	}

	public function send_message()
	{
		$this->email_model->send_message();
		redirect(base_url(), 'refresh');
	}

	public function email()
	{
		$this->load->view('Emails/admin');
	}

	function confirm_login(){
		$email    = $this->input->post('email',TRUE);
		$password = $this->input->post('password',TRUE);
		$user_status = $this->crud_model->validate($email,$password);
	
		if($user_status == 'admin'){
			redirect('admin/dashboard');        
		}
		else{
			$this->session->set_flashdata('flash_error' , 'Incorrect Email Address or Password');
			redirect(base_url('admin'));
		}
	
	}

	function confirm_registration(){
		//Check form
		$this->form_validation->set_rules(
			'fullname',
			'Fullname',
			'required|min_length[5]|max_length[50]',
			array(
				'required'      => 'You have not provided %s.',
				'min_length'    => 'Your name should be more than 5 Characters Long!',
				'max_length'    => 'Your name should not be more than 50 Characters Long!'
			)
		);
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
		if ($this->form_validation->run()=== FALSE) {	
			$error_message = "";
			if(form_error('fullname')){
				$error_message = form_error('fullname');
			}else{
				if(form_error('email')){
					$error_message = form_error('email');
				}
			}
			$this->session->set_flashdata('flash_error' , $error_message);
			redirect(base_url(), 'refresh');
		}
		else{
			$reg_code	=	"";
			$plan		=	$this->input->post('plan');
			$email		=	$this->input->post('email');
			$fullname	=	$this->input->post('fullname');
			$payment 	=	$this->input->post('payment');
			$amount 	=	0;
			
			if($payment == "Pay Online"){
				$reg_code	=	strtoupper(random_string('alnum', 10)); 
			}
		
			if($plan == "Virtual"){
				$amount = 150;
			}else{
				$amount = 955;
			}

			$data['encrypted_id']	=	random_string('alnum', 100); 
			$data['fullname']		=	$fullname;
			$data['plan']			=	$this->input->post('plan');
			$data['amount']			=	$amount;
			$data['email']			=	$email;
			$data['reg_code']		=	$reg_code;
			$data['organization']	=	$this->input->post('organization');
			$data['designation']	=	$this->input->post('designation');
			$data['country']		=	$this->input->post('country');
			$data['payment_type']	=	$payment;
			$data['date']			=	date('F jS, Y');
			
			//Send Email to User 
			$array = array('fullname' => $fullname, 'amount' => $amount, 
			'payment_type' => $payment, 'plan' => $plan, 'reg_code' => $reg_code); 
			$this->session->set_userdata($array);
			if($payment == "Pay Online"){
				$this->email_model->send_message1($email);
			}else{
				$this->email_model->send_message2($email);
			}
			
			$this->session->unset_userdata($array);

			$this->db->insert('users', $data);

			$this->session->set_flashdata('flash_message' , 'Registration Successful. Please Check your Email to complete the process.');
			redirect(base_url());
		}
	}


	public function check_payment_type(){
		$type = $this->input->post('paymentType'); 
		$output = "";
		if($type == "Direct Bank Transfer"){
			$output ='<h4 class="p-4">Bank Payment Details will be forwarded to your Email Address. Please Check your Email Inbox after Registration</h4><button type="submit" class="text-center btn-fill size-md border-radius-5 color-yellow">Confirm Registration</button>';
			echo $output;
		}elseif($type == "Pay Online"){
			$output = '<button id="proceed" class="text-center btn-fill size-md border-radius-5 color-yellow">Proceed to Payment</button>';
			echo $output;
		}else{
			echo "";
		}		
	}
}
