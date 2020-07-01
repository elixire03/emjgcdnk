<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		

	}

    public function index()
	{
		//load model
		if(($this->session->userdata('role_id')==3)||($this->session->userdata('id')==""))
		{
			redirect(base_url()."main/logout");
		}
		else
		{
			$this->load->model('user_model');
			$data['site_info'] = $this->user_model->site_info();
			foreach($data['site_info'] as $row ):
				$site_code = $row->site_code;
			endforeach;
			

			$this->load->view('upload',$data);
		}

	}

	 function import()
 	{
		
		$site_code = $this->input->post('site_code');
		$this->load->library('PHPExcel');
		$this->load->library('PHPExcel/IOFactory');
		$this->load->library('excel');
		if(isset($_FILES["my_file"]["name"]))
		{
		$path = $_FILES["my_file"]["tmp_name"];
		$object = PHPExcel_IOFactory::load($path);
		foreach($object->getWorksheetIterator() as $worksheet)
		{
			$highestRow = $worksheet->getHighestRow();
			$highestColumn = $worksheet->getHighestColumn();
			for($row=2; $row<=$highestRow; $row++)
			{
			$pc_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
			$details = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
			$qty = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
			$unit_cost = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
			$date_created = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
			$created_by_id = $this->session->userdata('id');
			$project_code = $site_code;
			$total_amount = $qty * $unit_cost;
			$supplier_name = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
			$tin = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
			$address = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
			$data[]=array(
									'pc_id'=>$this->db->escape_str($pc_id),
									'details'=>$this->db->escape_str($details),
									'qty'=>$this->db->escape_str($qty),
									'unit_cost'=>$this->db->escape_str($unit_cost),
									'date_created'=>$date_created,
									'createdby_id'=>$this->db->escape_str($created_by_id),
									'project_code'=>$this->db->escape_str($project_code),
									'total_amount'=>$this->db->escape_str($total_amount),
									'supplier_name'=>$this->db->escape_str($supplier_name),
									'tin'=>$this->db->escape_str($tin),
									'address'=>$this->db->escape_str($address),
					);
			}
		}
					
				
				$search_pc_id = $this->user_model->pc_id_found($pc_id,$site_code);
				if($search_pc_id->num_rows() > 0):

					$this->user_model->import_csv($data,$site_code);
					echo 'success';
				else:
					echo 'check_pc_id';
				endif;
					
				
			}

	}
}