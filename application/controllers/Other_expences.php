<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Other_expences extends CI_Controller {
    public function index()
	{
		//load model
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
			

			$this->load->view('other_expences',$data);
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
		$data = $this->user_model->phase_list($site_code,$query);
		
		$output .="<select class= \"form-control\" name = \"edit_phase\" id = \"edit_phase\" >
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
		$data = $this->user_model->phase_list($site_code,$query);
		
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
		
		$data = $this->user_model->expences_list($query,$date_from,$date_to);
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								
								<th>
									 Date Created
								</th>
								
								<th>
									 Supplier Name
								</th>
								<th>
									 Address
								</th>
								<th>
									Tin No.
								</th>
								
								<th>
									 Description
								</th>
								<th>
									 Details
								</th>
								<th>
									 Quantity
								</th>
								<th>
									 Unit Cost
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
							".$row->supplier_name."
								</td>
                                <td>
							".$row->address."
								</td>
                                <td>
							".$row->tin."
								</td>
                                <td>
							".$row->phase_description."
								</td>
                                
								<td>
							".$row->details."
								</td>
								<td>
							".number_format($row->qty,2)."
								</td>
								
								<td>
							".number_format($row->unit_cost,2)."
								</td>
								
								<td>
							".number_format($row->total_amount,2)."
								</td>
								<td>
							<a style=\"cursor:pointer;\" onclick =\"select_expences('".$row->exp_id."',
																					'".$row->ph_id."',
																					'".date('Y-m-d',strtotime(date($row->date_created)))."',
																					'".$this->db->escape_str($row->supplier_name)."',
																					'".$this->db->escape_str($row->address)."',
																					'".$this->db->escape_str($row->tin)."',
																					'".$this->db->escape_str($row->details)."',
																					'".$row->qty."',
																					'".$row->unit_cost."',
																					'".$row->total_amount."',
																					'".$row->site_code."')\" class =\"btn btn-xs btn-success\" >
																					Edit
																					</a>
							
							<a style=\"cursor:pointer;\" onclick =\"delete_expences('".$row->exp_id."',
																					'".$row->ph_id."',
																					'".date('Y-m-d',strtotime(date($row->date_created)))."',
																					'".$this->db->escape_str($row->supplier_name)."',
																					'".$this->db->escape_str($row->address)."',
																					'".$this->db->escape_str($row->tin)."',
																					'".$this->db->escape_str($row->details)."',
																					'".$row->qty."',
																					'".$row->unit_cost."',
																					'".$row->total_amount."',
																					'".$row->site_code."')\" class =\"btn btn-xs btn-danger\" >
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
							<td colspan = '10'>
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
		$data = $this->user_model->expences_list($query,$date_from,$date_to);
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								<th>
									 Date Created
								</th>
								<th>
									 Supplier Name
								</th>
								<th>
									 Address
								</th>
								<th>
									Tin No.
								</th>
								
								<th>
									 Description
								</th>
								<th>
									 Details
								</th>
								<th>
									 Quantity
								</th>
								<th>
									 Unit Cost
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
							".date('F d, Y', strtotime($row->date_created))."
								</td>
								<td>
							".$row->supplier_name."
								</td>
                                <td>
							".$row->address."
								</td>
                                <td>
							".$row->tin."
								</td>
                                <td>
							".$row->phase_description."
								</td>
                                
								<td>
							".$row->details."
								</td>
								<td>
							".number_format($row->qty,2)."
								</td>
								
								<td>
							".number_format($row->unit_cost,2)."
								</td>
								
								<td>
							".number_format($row->total_amount,2)."
								</td>
								
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '10'>
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
		
		$data = $this->user_model->expences_list_filter($query,$search,$date_from,$date_to);
		
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								<th>
									 Date Created
								</th>
								<th>
									 Supplier Name
								</th>
								<th>
									 Address
								</th>
								<th>
									Tin No.
								</th>
								
								<th>
									 Description
								</th>
								<th>
									 Details
								</th>
								<th>
									 Quantity
								</th>
								<th>
									 Unit Cost
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
							".date('F d, Y', strtotime($row->date_created))."
								</td>
								<td>
							".$row->supplier_name."
								</td>
                                <td>
							".$row->address."
								</td>
                                <td>
							".$row->tin."
								</td>
                                <td>
							".$row->phase_description."
								</td>
                                
								<td>
							".$row->details."
								</td>
								<td>
							".number_format($row->qty,2)."
								</td>
								
								<td>
							".number_format($row->unit_cost,2)."
								</td>
								
								<td>
							".number_format($row->total_amount,2)."
								</td>
								<td>
							<a style=\"cursor:pointer;\" onclick =\"select_expences('".$row->exp_id."',
																					'".$row->ph_id."',
																					'".date('Y-m-d',strtotime(date($row->date_created)))."',
																					'".$this->db->escape_str($row->supplier_name)."',
																					'".$this->db->escape_str($row->address)."',
																					'".$this->db->escape_str($row->tin)."',
																					'".$this->db->escape_str($row->details)."',
																					'".$row->qty."',
																					'".$row->unit_cost."',
																					'".$row->total_amount."',
																					'".$row->site_code."')\" class =\"btn btn-xs btn-success\" >Edit</a>
							<a style=\"cursor:pointer;\" onclick =\"delete_expences('".$row->exp_id."',
																					'".$row->ph_id."',
																					'".date('Y-m-d',strtotime(date($row->date_created)))."',
																					'".$this->db->escape_str($row->supplier_name)."',
																					'".$this->db->escape_str($row->address)."',
																					'".$this->db->escape_str($row->tin)."',
																					'".$this->db->escape_str($row->details)."',
																					'".$row->qty."',
																					'".$row->unit_cost."',
																					'".$row->total_amount."',
																					'".$this->db->escape_str($row->site_code)."')\" class =\"btn btn-xs btn-danger\" >
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
							<td colspan = '10'>
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
		
		$data = $this->user_model->expences_list_filter($query,$search,$date_from,$date_to);
		
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\" >
							<thead>
							<tr>
								<th>
									 Date Created
								</th>
								<th>
									 Supplier Name
								</th>
								<th>
									 Address
								</th>
								<th>
									Tin No.
								</th>
								
								<th>
									 Description
								</th>
								<th>
									 Details
								</th>
								<th>
									 Quantity
								</th>
								<th>
									 Unit Cost
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
							".date('F d, Y', strtotime($row->date_created))."
								</td>
								<td>
							".$row->supplier_name."
								</td>
                                <td>
							".$row->address."
								</td>
                                <td>
							".$row->tin."
								</td>
                                <td>
							".$row->phase_description."
								</td>
                                
								<td>
							".$row->details."
								</td>
								<td>
							".number_format($row->qty,2)."
								</td>
								
								<td>
							".number_format($row->unit_cost,2)."
								</td>
								
								<td>
							".number_format($row->total_amount,2)."
								</td>
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '10'>
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
        $phase = isset($_POST['phase'])?($_POST['phase']):"";
        $details = isset($_POST['details'])?($_POST['details']):"";
        $date_created = isset($_POST['date_created'])?($_POST['date_created']):"";;
        $qty = isset($_POST['qty'])?($_POST['qty']):"";
		$unit_cost = isset($_POST['unit_cost'])?($_POST['unit_cost']):"";
		$supplier_name = isset($_POST['supplier_name'])?($_POST['supplier_name']):"";
		$tin = isset($_POST['tin'])?($_POST['tin']):"";
		$address = isset($_POST['address'])?($_POST['address']):"";
        $created_by_id = $this->session->userdata('id');
		$total_amount =$qty*$unit_cost;

                            $data_expences = array(
                            'pc_id'=>$this->db->escape_str($phase),
                            'details'=>$this->db->escape_str($details),
                            'qty'=>$this->db->escape_str($qty),
                            'unit_cost'=>$this->db->escape_str($unit_cost),
                            'date_created'=>$date_created,
                            'createdby_id'=>$this->db->escape_str($created_by_id),
							'project_code'=>$this->db->escape_str($site_code),
							'total_amount'=>$this->db->escape_str($total_amount),
							'supplier_name'=>$this->db->escape_str($supplier_name),
							'tin'=>$this->db->escape_str($tin),
							'address'=>$this->db->escape_str($address),
                            );
					$select_phase = $this->user_model->find_phase($data_expences,$site_code,$total_amount,$phase);
						foreach($select_phase as $row):
							$remaining_budget = $row->remaining_budget;
						endforeach;
						$new_remaining_budget=$remaining_budget-$total_amount;
					
                    $this->user_model->add_expences($data_expences,$site_code,$new_remaining_budget,$phase);

                    echo 'success';
					
    }

	public function update_expences(){
        $this->load->model('user_model');

               
		$site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
        $exp_id = isset($_POST['exp_id'])?($_POST['exp_id']):"";
		$phase = isset($_POST['phase'])?($_POST['phase']):"";
		$old_phase = isset($_POST['old_phase'])?($_POST['old_phase']):"";
        $details = isset($_POST['details'])?($_POST['details']):"";
        $date_created = isset($_POST['date_created'])?($_POST['date_created']):"";;
        $qty = isset($_POST['qty'])?($_POST['qty']):"";
		$unit_cost = isset($_POST['unit_cost'])?($_POST['unit_cost']):"";
		$supplier_name = isset($_POST['supplier_name'])?($_POST['supplier_name']):"";
		$tin = isset($_POST['tin'])?($_POST['tin']):"";
		$address = isset($_POST['address'])?($_POST['address']):"";
		$old_ta = isset($_POST['old_total_amount'])?($_POST['old_total_amount']):"";
        $edited_by_id = $this->session->userdata('id');
		$date_edited = date('Y-m-d');
		$total_amount =$qty*$unit_cost;

                            $data_expences = array(
                            'pc_id'=>$this->db->escape_str($phase),
                            'details'=>$this->db->escape_str($details),
                            'qty'=>$this->db->escape_str($qty),
                            'unit_cost'=>$this->db->escape_str($unit_cost),
                            'date_created'=>$date_created,
							'date_edited'=>$date_edited,
                            'edited_by_id'=>$edited_by_id,
							'project_code'=>$site_code,
							'total_amount'=>$total_amount,
							'supplier_name'=>$this->db->escape_str($supplier_name),
							'tin'=>$this->db->escape_str($tin),
							'address'=>$this->db->escape_str($address),
                            );

					if($phase != $old_phase):
						if(($phase != $old_phase)&&($total_amount != $old_ta)):
							echo 'error_trans';
						else:
						$select_phase = $this->user_model->find_phase($data_expences,$site_code,$total_amount,$phase);
						$old_select_phase = $this->user_model->find_phase2($data_expences,$site_code,$total_amount,$old_phase);
						foreach($select_phase as $row):
							$new_remaining_budget = $row->remaining_budget;
						endforeach;
						foreach($old_select_phase as $row):
							$old_remaining_budget = $row->remaining_budget;
						endforeach;
						(float)$old_remaining_budget = $old_remaining_budget + $old_ta;

						(float)$new_remaining_budget = $new_remaining_budget - $old_ta;


						$this->user_model->Update_expences2($data_expences,$site_code,$new_remaining_budget,$old_remaining_budget,$phase,$exp_id,$old_phase);
						echo 'transferred';
						endif;	
					else:
					$select_phase = $this->user_model->find_phase($data_expences,$site_code,$total_amount,$phase);
						foreach($select_phase as $row):
							$remaining_budget = $row->remaining_budget;
						endforeach;
						$old_remaining_budget=$remaining_budget+(float)$old_ta;
						$new_remaining_budget = $old_remaining_budget - $total_amount;
					
                    $this->user_model->Update_expences($data_expences,$site_code,$new_remaining_budget,$phase,$exp_id);

                    echo 'success';
					endif;
    }

	function delete_expences(){
		$this->load->model('user_model');

		$site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
        $id = isset($_POST['id'])?($_POST['id']):"";
		
		$this->user_model->delete_oe_expences($site_code,$id);
		echo 'success';

	}



}
