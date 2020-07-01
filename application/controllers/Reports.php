<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    public function index()
	{
		//load model
		if(($this->session->userdata('role_id')==""))
		{
			redirect(base_url()."main/logout");
		}
		else
		{
			$this->load->model('user_model');
			
			$data['project_info'] = $this->user_model->project_info();
            foreach($data['project_info'] as $row):
                $site_code = $row->site_code;
            endforeach;
            
			$this->load->view('reports',$data);
			
		}
    }

	
}