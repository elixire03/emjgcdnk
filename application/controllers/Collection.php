<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {
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
			
		$this->load->view('collection',$data);
	    }
    }

    function collection_list(){
		$output = '';
		$query = '';
		$this->load->model('pr_model');
		$this->load->model('user_model');
		
		if($this->input->post('query')):
			$query = $this->input->post('query');
		endif;
		
		$data = $this->user_model->collection_list($query);
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
							<thead>
							<tr>
								
								<th>
									 Date Created
								</th>
								
								<th>
									 Amount Collected
								</th>
								<th>
									 Reference Document
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
							P ".number_format($row->amount,2)."
								</td>
                                <td>
							".$row->ref_doc."
								</td>
                                <td>
							<a style=\"cursor:pointer;\" onclick =\"edit_collection('".$row->id."',
																					'".date('Y-m-d',strtotime(date($row->date_created)))."',
																					'".$this->db->escape_str($row->amount)."',
																					'".$this->db->escape_str($row->ref_doc)."'
																					)\" class =\"btn btn-xs btn-success\" >
																					Edit
																					</a>
							
							
							
							
								</td>
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '4'>
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

    function collection_list_filter(){
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
		
		$data = $this->user_model->collection_list_filter($query,$search);
		
		
		$output .="
		<div class  =\"table-responsive\">
		<table class=\"table table-striped table-bordered table-hover\">
								<thead>
							<tr>
								
								<th>
									 Date Created
								</th>
								
								<th>
									 Amount Collected
								</th>
								<th>
									 Reference Document
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
							".$row->amount."
								</td>
                                <td>
							".$row->ref_doc."
								</td>
                                <td>
							<a style=\"cursor:pointer;\" onclick =\"edit_collection('".$row->id."',
																					'".date('Y-m-d',strtotime(date($row->date_created)))."',
																					'".$this->db->escape_str($row->amount)."',
																					'".$this->db->escape_str($row->ref_doc)."'
																					)\" class =\"btn btn-xs btn-success\" >
																					Edit
																					</a>
							
							
							
							
								</td>
							</tr>
							</tbody>		
							";
			endforeach;
		else:
			$output .="<tbody>
							<tr>
							<td colspan = '4'>
								No Data Found...
							</td>
						</tr>
						</tbody>	


						";

		endif;

		$output .='
				</table>
				</div>';
		echo $output;
	}

    public function save_expences(){
        $this->load->model('user_model');
        $site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
        $date_created = isset($_POST['date_created'])?($_POST['date_created']):"";;
        $collected_amount = isset($_POST['collected_amount'])?($_POST['collected_amount']):"";
		$ref_doc = isset($_POST['ref_doc'])?($_POST['ref_doc']):"";
		
                            $data_collected = array(
                            'date_created'=>$date_created,
                            'amount'=>$this->db->escape_str($collected_amount),
							'ref_doc'=>$this->db->escape_str($ref_doc),
							);
					
						
                    $this->user_model->add_collection($data_collected,$site_code);

                    echo 'success';
					
    }

	function update_collection(){
		$this->load->model('user_model');
        $site_code = isset($_POST['site_code'])?($_POST['site_code']):"";
		$id = isset($_POST['id'])?($_POST['id']):"";
        $date_created = isset($_POST['date_created'])?($_POST['date_created']):"";;
        $collected_amount = isset($_POST['collected_amount'])?($_POST['collected_amount']):"";
		$ref_doc = isset($_POST['ref_doc'])?($_POST['ref_doc']):"";
		
                            $data_collected = array(
                            'date_created'=>$date_created,
                            'amount'=>$this->db->escape_str($collected_amount),
							'ref_doc'=>$this->db->escape_str($ref_doc),
							);

			$this->user_model->update_collection($data_collected,$site_code,$id);

                    echo 'success';
		
	}




}

