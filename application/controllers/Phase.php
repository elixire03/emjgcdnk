<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phase extends CI_Controller {
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
			
			$this->load->view('phase',$data);
			
		}
    }

    public function save_phase(){
        $this->load->model('user_model');

        $site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
        $phase_code = isset($_POST['phase_code'])?($_POST['phase_code']):"";
        $phase_description = isset($_POST['phase_description'])?($_POST['phase_description']):"";
        $date_created = date('Y-m-d');
        $budget_cost = isset($_POST['budget_cost'])?($_POST['budget_cost']):"";
        $created_by_id = $this->session->userdata('id');

                            $data_phase = array(
                            'phase_code'=>$this->db->escape_str($phase_code),
                            'phase_description'=>$this->db->escape_str($phase_description),
                            'budget_cost'=>$this->db->escape_str($budget_cost),
                            'remaining_budget'=>$this->db->escape_str($budget_cost),
                            'date_created'=>$date_created,
                            'created_by_id'=>$created_by_id,
                            );
                    $this->user_model->add_phase($data_phase, $site_code);
                    echo 'success';
                

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
		$data = $this->user_model->mphase_list($site_code,$query);
		
		
		$output .="
		<div class  =\"table-responsive\">
		<table id =\"po_table\" class=\"table table-striped table-bordered table-hover\" >
			
							<thead>
							<tr>
								<th>
									 PHASE CODE
								</th>
								<th>
									 PHASE DESCRIPTION
								</th>
								<th>
									 BUDGET COST
								</th>
								<th>
									 EXPENCES
								</th>
								<th>
									 REMAINING BUDGET
								</th>
                                <th>
									 ACTION
								</th>

							</tr>
							</thead>
							";
		if($data->num_rows() > 0):
			
			foreach($data->result() as $row):
			$sum_mp = $this->user_model->sum_mp($query);
			$sum_mp = $sum_mp->result();
			$sum_mp = $sum_mp[0]->amount;
			
				$output .="<tbody>
							
							<tr>
								<td>
							".$row->phase_code."
								</td>
								<td>
							".$row->phase_description."
								</td>
                                <td>
							P".number_format($row->budget_cost,2)."
								</td>
                                
								";
								$id = $row->id;
						$total_expences= $this->user_model->total_exp_amount($query,$id);
							if($total_expences->num_rows()>0):
								$total_expences = $total_expences->result();
								$this_expences = $total_expences[0]->total_amount;
								
							$remaining = $row->budget_cost - $this_expences;
							$ph_desc = $row->phase_description;
							$rem_mp =  $row->budget_cost - $sum_mp;
							if($ph_desc=="LABOR"):
								$output .= "
								<td>
							P ".number_format($sum_mp,2)."
								</td>
								<td>
							P ".number_format($rem_mp,2)."
								</td>
								
								";
							
							else:
							$output .= "
								<td>
							P ".number_format($this_expences,2)."
								</td>
								<td>
							P ".number_format($remaining,2)."
								</td>
								
								";
							

							endif;
							
							
							endif;
							$output .= "
								<td>
							<a style=\"cursor:pointer;\" onclick =\"edit_phase(
									".$this->db->escape($row->id).",
									".$this->db->escape($row->phase_code).",
									".$this->db->escape($row->phase_description).",
									".$this->db->escape($row->budget_cost).")\" class =\"btn btn-xs btn-success\" >Edit</a>
								</td>
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '6'>
								Nothing Found...
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

	public function update_phase(){
		$this->load->model('user_model');
		$site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
		$id = isset($_POST['id'])?($_POST['id']):"";
		$ph = isset($_POST['phase_code'])?($_POST['phase_code']):"";
		$pd = isset($_POST['phase_desc'])?($_POST['phase_desc']):"";
		$bc = isset($_POST['budget_cost'])?($_POST['budget_cost']):"";

			$data_ph = array('phase_code'=>$this->db->escape_str($ph),
							 'phase_description'=>$this->db->escape_str($pd),
							 'budget_cost'=>$this->db->escape_str($bc)
							 );
			if($bc == 0):
				echo 'error_amount';
			else:
				$this->user_model->edit_phase($id,$site_code,$data_ph);
			echo 'success';
			endif;

	}


}