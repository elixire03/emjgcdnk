<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retention extends CI_Controller {
    public function index()
	{
        if(($this->session->userdata('role_id')==3)||($this->session->userdata('id')==""))
		{
			redirect(base_url()."main/logout");
		}
		else
		{

        $this->load->model('user_model');
        
        if($this->input->post('is_ret_edit')=='yes'):
            $ret_id = $this->input->post('ret_id');
            $project_code = $this->input->post('edit_project_code');
            $retention_percentage = $this->input->post('edit_retention_percentage');

            $this->user_model->edit_retention_info($ret_id,
                                                   $project_code,
                                                   $retention_percentage
                                                   );
            redirect(base_url()."retention/?mode=edit_success");
            
        endif;

        
        
        $data['retention_list'] = $this->user_model->retention_list();
		$this->load->view('retention',$data);
	}

}
}
