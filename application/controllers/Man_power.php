<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Man_power extends CI_Controller {
    public function index()
	{
        if($this->session->userdata('id')=="")
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
			
        
		$this->load->view('man_power',$data);
	}
	}

	function phase_list2(){
		$output = '';
		$query = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_id = $this->session->userdata('site_id');
		$data['site_info'] = $this->user_model->site_info($site_id);
		foreach($data['site_info'] as $s_row ):
				$site_code = $s_row->site_code;
		endforeach;
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		$data = $this->user_model->labor_phase_list($site_code,$query);
		
		$output .="<select class= \"form-control\" name = \"edit_phase\" id = \"edit_phase\" >
					
					";
		if($data->num_rows() > 0):
			foreach($data->result() as $row):
				$output .="
							
							<option value = ".$row->id.">".$row->phase_code." - ".$row->phase_description."</option>
							";
			endforeach;
		else:
					$output .="
							
							<option value = ''>Please set the Phase of Work</option>
							";


		
		
		endif;

		$output .='
				</select>
				
				';
		echo $output;

	}


	function phase_list(){
		$output = '';
		$query = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_id = $this->session->userdata('site_id');
		$data['site_info'] = $this->user_model->site_info($site_id);
		foreach($data['site_info'] as $s_row ):
				$site_code = $s_row->site_code;
		endforeach;
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		$data = $this->user_model->labor_phase_list($site_code,$query);
		
		$output .="<select class= \"form-control\" name = \"phase\" id = \"phase\" required>
					<option value = ''>Select...</option>
					";
		if($data->num_rows() > 0):
			foreach($data->result() as $row):
				$output .="
							
							<option value = ".$row->id.">".$row->phase_code." - ".$row->phase_description."</option>
							";
			endforeach;
		else:
					$output .="
							
							<option value = ''>Please set the Phase of Work</option>
							";


		
		
		endif;

		$output .='
				</select>
				
				';
		echo $output;

	}

	function expences_list(){
		$output = '';
		$query = '';
		$date_from = '';
		$date_to = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_id = $this->session->userdata('site_id');
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		if($this->input->post('date_from')):
			$date_from = $this->input->post('date_from');
		endif;
		if($this->input->post('date_to')):
			$date_to = $this->input->post('date_to');
		endif;
		
		$data = $this->user_model->labor_expences_list($query,$date_from,$date_to);
		
		$output .="
			<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								
								<th>
									 Date Created
								</th>
								
								<th>
									 Name
								</th>
								<th>
									 Alias
								</th>
								<th>
									 Designation
								</th>
								<th>
									Amount
								</th>
								
								<th>
									 ACTION
								</th>

							</tr>
							</thead>
							";
		if($data->num_rows() > 0):
			foreach($data->result() as $row):
				$output .="<tbody>
							
							<tr>
								
								<td>
							".date('F d,Y',strtotime($row->date_created))."
								</td>
								<td>
							".$row->name."
								</td>
								<td>
							".$row->alias."
								</td>
                                <td>
							".$row->designation."
								</td>
                                <td>
							P ".number_format($row->amount,2)."
								</td>
                                <td>
							<a style=\"cursor:pointer;\" onclick =\"select_mp_expences('".$this->db->escape_str($row->id)."',
																					'".date('Y-m-d',strtotime($row->date_created))."',	
																					'".$this->db->escape_str($row->name)."',
																					'".$this->db->escape_str($row->designation)."',
																					'".$this->db->escape_str($row->alias)."',
																					'".$this->db->escape_str($row->amount)."'
																					)\" class =\"btn btn-xs btn-success\" >
																					Edit
																					</a>
							
							<a style=\"cursor:pointer;\" onclick =\"delete_mp_expences('".$this->db->escape_str($row->id)."',
																					'".date('Y-m-d',strtotime($row->date_created))."',	
																					'".$this->db->escape_str($row->name)."',
																					'".$this->db->escape_str($row->designation)."',
																					'".$this->db->escape_str($row->alias)."',
																					'".$this->db->escape_str($row->amount)."')\" class =\"btn btn-xs btn-danger\" >
																					DELETE
																					</a>
							
							
							
								</td>
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '6'>
								No Data Found...
							</td>
						</tr>
						</tbody>	


						";

		endif;

		$output .='
				</table>
				</div>
				';
		echo $output;
	}

	function expences_list2(){
		$output = '';
		$query = '';
		$date_from = '';
		$date_to = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_id = $this->session->userdata('site_id');
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		if($this->input->post('date_from')):
			$date_from = $this->input->post('date_from');
		endif;
		if($this->input->post('date_to')):
			$date_to = $this->input->post('date_to');
		endif;
		
		$data = $this->user_model->labor_expences_list($query,$date_from,$date_to);
		
		$output .="
			<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								
								<th>
									 Date Created
								</th>
								
								<th>
									 Name
								</th>
								<th>
									 Alias
								</th>
								<th>
									 Designation
								</th>
								<th>
									Amount
								</th>
								
								

							</tr>
							</thead>
							";
		if($data->num_rows() > 0):
			foreach($data->result() as $row):
				$output .="<tbody>
							
							<tr>
								
								<td>
							".date('F d,Y',strtotime($row->date_created))."
								</td>
								<td>
							".$row->name."
								</td>
								<td>
							".$row->alias."
								</td>
                                <td>
							".$row->designation."
								</td>
                                <td>
							P ".number_format($row->amount,2)."
								</td>
                                
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '5'>
								No Data Found...
							</td>
						</tr>
						</tbody>	


						";

		endif;

		$output .='
				</table>
				</div>
				';
		echo $output;
	}


	function expences_list_filter(){
		$output = '';
		$query = '';
		$search = '';
		$date_from = '';
		$date_to = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_id = $this->session->userdata('site_id');
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		if($this->input->post('date_from')):
			$date_from = $this->input->post('date_from');
		endif;
		
		if($this->input->post('date_to')):
			$date_to = $this->input->post('date_to');
		endif;
		
		if($this->input->post('search')):
			$search = $this->input->post('search');
		endif;
		
		$data = $this->user_model->labor_expences_list_filter($query,$search,$date_from,$date_to);
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								
								<th>
									 Date Created
								</th>
								
								<th>
									 Name
								</th>
								<th>
									 Alias
								</th>
								<th>
									 Designation
								</th>
								<th>
									Amount
								</th>
								
								<th>
									 ACTION
								</th>

							</tr>
							</thead>
							";
		if($data->num_rows() > 0):
			foreach($data->result() as $row):
				$output .="<tbody>
							
							<tr>
								
								<td>
							".date('F d,Y',strtotime($row->date_created))."
								</td>
								<td>
							".$row->name."
								</td>
								<td>
							".$row->alias."
								</td>
                                <td>
							".$row->designation."
								</td>
                                <td>
							P ".number_format($row->amount,2)."
								</td>
                                <td>
							<a style=\"cursor:pointer;\" onclick =\"select_mp_expences('".$this->db->escape_str($row->id)."',
																					'".date('Y-m-d',strtotime($row->date_created))."',	
																					'".$this->db->escape_str($row->name)."',
																					'".$this->db->escape_str($row->designation)."',
																					'".$this->db->escape_str($row->alias)."',
																					'".$this->db->escape_str($row->amount)."'
																					)\" class =\"btn btn-xs btn-success\" >
																					Edit
																					</a>
							
							<a style=\"cursor:pointer;\" onclick =\"delete_mp_expences('".$this->db->escape_str($row->id)."',
																					'".date('Y-m-d',strtotime($row->date_created))."',	
																					'".$this->db->escape_str($row->name)."',
																					'".$this->db->escape_str($row->designation)."',
																					'".$this->db->escape_str($row->alias)."',
																					'".$this->db->escape_str($row->amount)."')\" class =\"btn btn-xs btn-danger\" >
																					DELETE
																					</a>
							
							
							
								</td>
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '6'>
								No Data Found...
							</td>
						</tr>
						</tbody>	


						";

		endif;

		$output .='
				</table>
				</div>
				';
				//$output = $this->db->last_query();
		echo $output;
	}

		function expences_list_filter2(){
		$output = '';
		$query = '';
		$search = '';
		$date_from = '';
		$date_to = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_id = $this->session->userdata('site_id');
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		if($this->input->post('date_from')):
			$date_from = $this->input->post('date_from');
		endif;
		
		if($this->input->post('date_to')):
			$date_to = $this->input->post('date_to');
		endif;
		
		if($this->input->post('search')):
			$search = $this->input->post('search');
		endif;
		
		$data = $this->user_model->labor_expences_list_filter($query,$search,$date_from,$date_to);
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								
								<th>
									 Date Created
								</th>
								
								<th>
									 Name
								</th>
								<th>
									 Alias
								</th>
								<th>
									 Designation
								</th>
								<th>
									Amount
								</th>
								
								

							</tr>
							</thead>
							";
		if($data->num_rows() > 0):
			foreach($data->result() as $row):
				$output .="<tbody>
							
							<tr>
								
								<td>
							".date('F d,Y',strtotime($row->date_created))."
								</td>
								<td>
							".$row->name."
								</td>
								<td>
							".$row->alias."
								</td>
                                <td>
							".$row->designation."
								</td>
                                <td>
							P ".number_format($row->amount,2)."
								</td>
                               
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '5'>
								No Data Found...
							</td>
						</tr>
						</tbody>	


						";

		endif;

		$output .='
				</table>
				</div>
				';
		echo $output;
	}


	function search_emp(){
		$output = '';
		$query = '';
		$search = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_id = $this->session->userdata('site_id');
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		if($this->input->post('search')):
			$search = $this->input->post('search');
		endif;
		
		$data = $this->user_model->employee_filter($query,$search);
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								
								<th>
									 Employee ID
								</th>
								
								<th>
									 Last Name
								</th>
								<th>
									 First Name
								</th>
								<th>
									 Middle Name
								</th>
								<th>
									 Alias
								</th>
								<th>
									Designation
								</th>
								<th>
									Status
								</th>
								<th>
									 ACTION
								</th>

							</tr>
							</thead>
							";
		if($data->num_rows() > 0):
			foreach($data->result() as $row):
				$output .="<tbody>
							
							<tr>
								
								<td>
							".$row->employee_id."
								</td>
								<td>
							".$row->last_name."
								</td>
                                <td>
							".$row->first_name."
								</td>
                                <td>
							".$row->middle_name."
								</td>
								<td>
							".$row->nic_name."
								</td>
								<td>
							".$row->designation."
								</td>
								<td>
							".$row->status."
								</td>
                                <td>
							<a style=\"cursor:pointer;\" onclick =\"select_emp_expences('".$this->db->escape_str($row->employee_id)."',
																					'".$this->db->escape_str($row->last_name)."',
																					'".$this->db->escape_str($row->first_name)."',
																					'".$this->db->escape_str($row->middle_name)."',
																					'".$this->db->escape_str($row->nic_name)."',
																					'".$this->db->escape_str($row->designation)."'
																					
																					)\" class =\"btn btn-xs btn-success\" >
																					Select
																					</a>
							

							
								</td>
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '8'>
								No Data Found...
							</td>
						</tr>
						</tbody>	


						";

		endif;

		$output .='
				</table>
				</div>
				';
		echo $output;
	}

	public function save_expences(){
        $this->load->model('user_model');

               
		$site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
        $date_created = isset($_POST['date_created'])?($_POST['date_created']):"";;
		$name = isset($_POST['name'])?($_POST['name']):"";
		$alias = isset($_POST['alias'])?($_POST['alias']):"";
		$designation = isset($_POST['designation'])?($_POST['designation']):"";
		$amount = isset($_POST['amount'])?($_POST['amount']):"";

        
		

                            $data_expences = array(
                            'date_created'=>$date_created,
                            
							'name'=>$this->db->escape_str($name),
							'alias'=>$this->db->escape_str($alias),
							'designation'=>$this->db->escape_str($designation),
							'amount'=>$this->db->escape_str($amount)
							
                            );
					
                    $this->user_model->add_emp_expences($data_expences,$site_code);

                    echo 'success';
					
    }
	
	public function update_expences(){
        $this->load->model('user_model');

               
		$site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
        $id = isset($_POST['id'])?($_POST['id']):"";
		$date_created = isset($_POST['date_created'])?($_POST['date_created']):"";;
        $name = isset($_POST['name'])?($_POST['name']):"";
		$designation = isset($_POST['designation'])?($_POST['designation']):"";
		$amount = isset($_POST['amount'])?($_POST['amount']):"";
		
                            $data_expences = array(
                            'name'=>$this->db->escape_str($name),
                            'designation'=>$this->db->escape_str($designation),
                            'amount'=>$this->db->escape_str($amount),
                            'date_created'=>$date_created
							);

					if($amount == 0):
						echo "error_amount";
					else:
						$this->user_model->edit_mp_expences($id,$site_code,$data_expences);
                    	echo 'success';
					endif;
    }


	function delete_expences(){
		$this->load->model('user_model');

		$site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
        $id = isset($_POST['id'])?($_POST['id']):"";
		
		$this->user_model->delete_mp_expences($site_code,$id);
		echo 'success';

	}


}
	


