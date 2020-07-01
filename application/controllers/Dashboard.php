<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
	{
        if($this->session->userdata('id')=="")
		{
			redirect(base_url()."main/logout");
		}
		else
		{
		$this->load->model('user_model');
		$data['site_info'] = $this->user_model->db_site_info();
			foreach($data['site_info'] as $row ):
				$data['site_code'] = $row->site_code;
				$data['site_name'] = $row->site_name;
		    endforeach;
        
		$this->load->view('dashboard',$data);
	}

}
}
