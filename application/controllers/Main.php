<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//load model
		$this->load->model('user_model');
		
		if($this->session->userdata('id')>=1)
		{
			redirect(base_url()."dashboard/");
		}
		else
		{	
			
			if($this->session->userdata('id')) {
			//user is logged in
			//load dashboard here
			} else {
			
			//login page
			$data = array(
				"error_msg" => "",
				"username" => "",
				"password" => ""
			);

			if($this->input->post('is_post')) {
				
				$data["username"] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
				
			

				$query = $this->user_model->login($data['username'], $data['password']);
				$row = $query->row();

				if(isset($row)) {
					$this->session->set_userdata('id', $row->id);
					$this->session->set_userdata('username', $row->username);
					$this->session->set_userdata('full_name', $row->last_name.", ".$row->first_name."  ".$row->middle_name);
					$this->session->set_userdata('site_id', $row->site_id);
					$this->session->set_userdata('role_id', $row->role_id);
					
					
					
					redirect(base_url().'dashboard');
				} else {
					$data['error_msg'] = 'Sorry we could not verify your username and password';
				}
			}

			$this->load->view('login', $data);
			}
		}
	}

	public function logout() {
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('full_name');
		$this->session->unset_userdata('site_id');
		$this->session->unset_userdata('role_id');
		redirect("/main");
	}
	
	
}
