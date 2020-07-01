<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
    public function index()
	{
        if($this->session->userdata('id')=="")
		{
			redirect(base_url()."main/logout");
		}
		else
		{

        $this->load->model('employee_model');
        if($this->input->post('is_nh_save')=='yes'):
            $date_created = date('Y-m-d');
            $created_by_id = $this->session->userdata('id');
            $last_name = $this->input->post('last_name');
            $first_name = $this->input->post('first_name');
            $middle_name = $this->input->post('middle_name');
            $alias = $this->input->post('alias');
            $designation = $this->input->post('designation');
            $status = $this->input->post('status');

            
            $this->employee_model->add_employee($date_created, 
                                                   $created_by_id,
                                                   $last_name,
                                                   $first_name,
                                                   $middle_name,$alias,
                                                   
                                                   $designation,$status
            );
            redirect(base_url()."employees/?mode=success");
            
        endif;

        if($this->input->post('is_nh_edit')=='yes'):
            $date_edited = date('Y-m-d');
            $edited_by_id = $this->session->userdata('id');
            $emp_id = $this->input->post('emp_id');
            $last_name = $this->input->post('edit_last_name');
            $first_name = $this->input->post('edit_first_name');
            $middle_name = $this->input->post('edit_middle_name');
            $alias = $this->input->post('edit_alias');
            $designation = $this->input->post('edit_designation');
            $status = $this->input->post('edit_status');

            $this->employee_model->edit_employees_info($date_edited, 
                                                   $edited_by_id,
                                                   $emp_id,
                                                   $last_name,
                                                   $first_name,
                                                   $middle_name,
                                                   $alias,
                                                   $designation,
                                                   $status
                                                   );
            redirect(base_url()."employees/?mode=edit_success");
            
        endif;

        
        
        $data['employee_list'] = $this->employee_model->employee_list();
		$this->load->view('employees',$data);
	}

}
}
