<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads2 extends CI_Controller {

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
			

			$this->load->view('uploads2',$data);
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
     
     $date_created = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
	 $name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
     $designation = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
     $alias = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
     $amount = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
     $data[]=array(
							'date_created'=>$date_created,
                            'name'=>$this->db->escape_str($name),
							'designation'=>$this->db->escape_str($designation),
							'alias'=>$this->db->escape_str($alias),
							'amount'=>$this->db->escape_str($amount),
							
			);
    }
   }
  			
		
		$search_alias = $this->user_model->alias_found($alias,$site_code);
		if($search_alias->num_rows() > 0):

			$this->user_model->import_csv2($data,$site_code);
			echo 'success';
		else:
			echo 'check_alias';
		endif;
			
		
	}

	}
}