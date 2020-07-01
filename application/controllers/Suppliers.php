<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {
    public function index()
	{
        if($this->session->userdata('id')=="")
		{
			redirect(base_url()."main/logout");
		}
		else
		{

        $this->load->model('supplier_model');
        $this->load->model('item_model');
        if($this->input->post('is_supplier_save')=='yes'):
            $date_created = date('Y-m-d');
            $created_by_id = $this->session->userdata('id');
            $supplier_code = $this->input->post('supplier_code');
            $supplier_name = $this->input->post('supplier_name');
            $product_type_id = $this->input->post('product_type_id');
            $supplier_email = $this->input->post('supplier_email');
            $supplier_address = $this->input->post('supplier_address');
            $supplier_contact_number = $this->input->post('supplier_contact_number');
            $contact_person = $this->input->post('contact_person');
            $status = $this->input->post('status');
            
            

            $this->supplier_model->add_supplier($date_created, 
                                                   $created_by_id,
                                                   $supplier_code,
                                                   $supplier_name,
                                                   $product_type_id,
                                                   $supplier_email,
                                                   $supplier_address,
                                                   $supplier_contact_number,
                                                   $contact_person
                                                   
                                                  );
            redirect(base_url()."suppliers/?mode=success");
            
        endif;

        if($this->input->post('is_supplier_edit')=='yes'):
            $date_edited = date('Y-m-d');
            $edited_by_id = $this->session->userdata('id');
            $supplier_id = $this->input->post('supplier_id');
            $supplier_code = $this->input->post('edit_supplier_code');
            $supplier_name = $this->input->post('edit_supplier_name');
            $product_type_id = $this->input->post('edit_product_type_id');
            $supplier_email = $this->input->post('edit_supplier_email');
            $supplier_address = $this->input->post('edit_supplier_address');
            $supplier_contact_number = $this->input->post('edit_supplier_contact_number');
            $contact_person = $this->input->post('edit_contact_person');
            


            $this->supplier_model->edit_supplier($date_edited, 
                                                   $edited_by_id,
                                                   $supplier_id,
                                                   $supplier_code,
                                                   $supplier_name,
                                                   $product_type_id,
                                                   $supplier_email,
                                                   $supplier_address,
                                                   $supplier_contact_number,
                                                   $contact_person
                                                   );
            redirect(base_url()."suppliers/?mode=edit_success");
            
        endif;

        $user_branch_id = $this->session->userdata('branch');
        //$data['branch_list'] = $this->employee_model->branch_list($user_branch_id);
        $data['product_type_list'] = $this->item_model->product_type_list();
        $data['suppliers_list'] = $this->supplier_model->suppliers_list();
		$this->load->view('suppliers',$data);
	}

}
}
