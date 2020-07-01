<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {
    public function index()
	{
		//load model
		if(($this->session->userdata('role_id')==3)||($this->session->userdata('id')==""))
		{
			redirect(base_url()."main/logout");
		}
		
		else
		{
			$this->load->model("user_model");
			if($this->input->post("is_site_save")=="yes"):
				$branch_code = $this->input->post("branch_code");
				$branch_name = $this->input->post("branch_name");
				$status = $this->input->post("status");
				$data_array = array("site_code"=>$this->db->escape_str($branch_code),
									"site_name"=>$this->db->escape_str($branch_name),
									"status"=>$this->db->escape_str($status),
									);
				if(!$this->user_model->add_site($data_array,$branch_code)):
				redirect(base_url()."sites/?mode=success");
				else:
				redirect(base_url()."sites/?mode=failed");
				endif;
			endif;

			if($this->input->post("is_site_update")=="yes"):
				$branch_id = $this->input->post("branch_id");
				$branch_code = $this->input->post("edit_branch_code");
				$branch_name = $this->input->post("edit_branch_name");
				$status = $this->input->post("edit_status");
				$data_array = array("site_code"=>$this->db->escape_str($branch_code),
									"site_name"=>$this->db->escape_str($branch_name),
									"status"=>$this->db->escape_str($status),
									);
				$this->user_model->edit_site($data_array,$branch_id);
				redirect(base_url()."sites/?mode=edit_success");

			endif;

			$data['site_list'] = $this->user_model->site_list();
			$this->load->view('sites',$data);
		}
    }

	
}