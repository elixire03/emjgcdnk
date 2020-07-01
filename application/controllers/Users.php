<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function index()
	{
		//load model

		$this->load->model('user_model');
		if(($this->session->userdata('role_id')==3)||($this->session->userdata('id')==""))
		{
			redirect(base_url()."main/logout");
		}
		
		
		
		else
		{
			

		$user_site_id = $this->session->userdata('site_id');
		$data['users_list'] = $this->user_model->users_list();
		$data['sites_list'] = $this->user_model->sites_list();
		$data['role_id_list'] = $this->user_model->role_id_list();
		if($this->input->post('is_user_save')=='yes'):
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$last_name = $this->input->post('last_name');
			$first_name = $this->input->post('first_name');
			$middle_name = $this->input->post('middle_name');
			$sites_id = $this->input->post('sites_id');
			$role_id = $this->input->post('role_id');
			$created_by_id = $this->session->userdata('id');
			$date_created = date('Y-m-d');
			$status = 'in-active';
			

			$insert_add = array("username"=>$username,
								"password"=>"PASSWORD(".$password.")",
								"last_name"=>$last_name,
								"first_name"=>$first_name,
								"middle_name"=>$middle_name,
								"sites_id"=>$sites_id,
								"role_id"=>$role_id,
								"created_by_id"=>$created_by_id,
								);

			$this->user_model->insert_add($username,$password,$last_name,$first_name,$middle_name, $sites_id,$role_id,$created_by_id,$date_created,$status);
		


		endif;

		if($this->input->post('is_user_edit')=='yes'):
			$user_id= $this->input->post('user_id');
			$edited_by_id= $this->session->userdata('id');
			$date_edited = date('Y-m-d');
			$username = $this->input->post('edit_username');
			$password = $this->input->post('edit_password');
			$last_name = $this->input->post('edit_last_name');
			$first_name = $this->input->post('edit_first_name');
			$middle_name = $this->input->post('edit_middle_name');
			$sites_id = $this->input->post('edit_sites_id');
			$role_id = $this->input->post('edit_role_id');
			$status = $this->input->post('edit_status');
			
			if($password == NULL):
				$this->user_model->update_no_pass_user($username,
														$last_name,
														$first_name,
														$middle_name, 
														$sites_id, 
														$role_id,
														$user_id,
														$edited_by_id,
														$date_edited,
														$status);
			else:
				$this->user_model->update_w_pass_user($username,$password,$last_name,$first_name,$middle_name, $sites_id,$role_id,$user_id,$edited_by_id,$date_edited,$status);
			endif;

		endif;

		$this->load->view('users',$data);
		
		}
    }

	public function password_users(){
		if($this->input->post('task') == 'change_password'):
		
		$this->load->model('user_model');
		$id = $this->session->userdata('id');
		$new_password = $this->input->post('new_password');
		$retype_password = $this->input->post('retype_password');
		
	

			if($new_password == $retype_password):
				if($this->user_model->checked_profile($new_password, $id)):
					redirect(base_url().'users/my_profile/'.$id.'/?edit=success#tab_3-3');
				endif;
			else:
				redirect(base_url().'users/my_profile/'.$id.'/?retype=error#tab_3-3');
			endif;
		
		endif;
	}

	public function save_users(){
		if($this->session->userdata('id')=="")
		{
			redirect(base_url()."main/logout");
		}
		else
		{
		$this->load->model('user_model');
		if($this->input->post('task')=="new_user")
		{
		$username =$this->input->post('username');
		$first_name =$this->input->post('first_name');
		$last_name =$this->input->post('last_name');
		$email =$this->input->post('email');
		$password =$this->input->post('password');
		$sites =$this->input->post('sites');
		$role = 6;
		$date = date("Y-m-d H:i:s");

		$this->user_model->save_new_user($username,$first_name,$last_name,$email,$password,$sites,$role,$date);
		redirect(base_url().'users/');
		}
		}
	}
	public function my_profile(){
		if($this->session->userdata('id')=="")
		{
			redirect(base_url()."main/logout");
		}
		else
		{
		$this->load->database();
		$user_id = $this->uri->segment(3); 
		$this->load->model('user_model');
		$this->load->model('my_update_profile');
		$data['user']= $this->user_model->users_info($user_id);
		$data['sites']= $this->my_update_profile->siteses();
		$data['role']= $this->my_update_profile->roles();
		$this->load->view('edit_profile',$data);
		}	
	}
	public function edit_user(){
		if($this->session->userdata('id')=="")
		{
			redirect(base_url()."main/logout");
		}
		else
		{
		if($this->input->post('task') == TRUE)
			{
			$this->load->model('user_model');
			$id = $this->input->post('user_id');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$phone_no = $this->input->post('phone_number');
			$sites = $this->input->post('sites');
			$role = $this->input->post('role');
			$data = array(
			'first_name'=>$first_name,
			'last_name'=>$last_name,
			'email'=>$email,
			'phone_no'=>$phone_no,
			'sites'=>$sites,
			'role'=>$role,
			);

			if($this->user_model->edit_user($data, $id)):
				redirect(base_url().'users/my_profile/'.$id.'/?edit_user=succes');
			else:
				redirect(base_url().'users/my_profile/'.$id.'/?edit_error=error');
			endif;
			}

		}

	}
}