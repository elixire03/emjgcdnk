<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_pdf extends CI_Controller {
    public function index()
	{
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_code = $_GET['project_code'];
		$data['site_info'] = $this->user_model->my_site_info($site_code);
		$data['project_details'] = $this->user_model->total_exp_cost($site_code);
			foreach($data['site_info'] as $row ):
				$site_code = $row->site_code;
				
				
			endforeach;
			if($site_code == ""){
			redirect(base_url()."/dashboard/");
		}
		else
			{
		$this->load->helper(array('dompdf', 'file'));   
    	$html = $this->load->view('pdf_summary',$data, true);
		$random =rand();	
     	$data = pdf_create($html, $site_code."-Summary", true);
      	write_file('name', $po_number);
			}
		
	}

	public function pdf_monthly()
	{
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_code = $_GET['project_code'];
		$date_from = date('Y-m-d', strtotime(date($_GET['date_from'])));
		$date_to = date('Y-m-d', strtotime(date($_GET['date_to'])));
		$format = $_GET['format'];
		$data['date_from'] = $_GET['date_from'];
		$data['date_to'] = $_GET['date_to'];
		$details_like = $_GET['details_like'];
		$data['site_info'] = $this->user_model->my_site_info($site_code);
		$data['project_details'] = $this->user_model->all_expences($site_code,$date_from,$date_to,$details_like);
			foreach($data['site_info'] as $row ):
				$site_code = $row->site_code;
				$site_name = $row->site_name;
			endforeach;
			if($site_code == ""){
			redirect(base_url()."/dashboard/");
		}
		else
			{
	//CONVERT FILE TO PDF
	$html = $this->load->view('pdf_monthly',$data, true);
	if($format == "pdf"):
		$this->load->helper(array('dompdf', 'file'));   
    	
		$random =rand();	
     	$data = pdf_create($html, "MONTHLY-".$site_code."-".date('m'), true);
      	write_file('name', $site_code);
	// CONVERT FILE TO WORD
	elseif($format=="word"):
		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=MONTHLY-".$site_code."-word.doc");
		header("Progra: no-cache");
		header("Expires: 0");
		echo $html;
	//CONVERT FILE TO EXCEL
	elseif($format=="excel"):
		$this->load->library('PHPExcel');
		$this->load->library('PHPExcel/IOFactory');

		$spreadsheet = new PHPExcel();
		$spreadsheet->getProperties()->setTitle("title")
                 ->setDescription("description");
 		$style = array(
        	'alignment' => array(
        	    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        	)
    	);

		$info_output=$this->user_model->all_expences($site_code,$date_from,$date_to,$details_like);
		$spreadsheet->setActiveSheetIndex(0);
		//HEADER 
		$spreadsheet->getActiveSheet()->mergeCells('A1:H1')->setCellValue('A1', 'EMJGC')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('A2:G2')->setCellValue('A2', 'DISENO AND KONSTRUCT')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('A3:G3')->setCellValue('A3','Expences of '.$site_name)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('H2','DATE FROM: ')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('H3','DATE TO: ')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('I2',date('F d, Y',strtotime(date($date_from))))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('I3',date('F d, Y',strtotime(date($date_to))))->getColumnDimension()->setAutoSize(true);
		
		$spreadsheet->getActiveSheet()->setCellValue('A5', 'DATE CREATED')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('B5', 'SUPPLIER NAME')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('C5', 'ADDRESS')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('D5', 'TIN NUMBER')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('E5', 'DESCRIPTION')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('F5', 'DETAILS')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('G5', 'QUANTITY')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('H5', 'UNIT COST')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('I5', 'TOTAL AMOUNT')->getColumnDimension()->setAutoSize(true);
		$i = 6;
		foreach($info_output as $proj_row):
		$spreadsheet->getActiveSheet()->setCellValue('A'.$i, date('F d, Y', strtotime($proj_row->date_created)))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('B'.$i, $proj_row->supplier_name)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('C'.$i, $proj_row->address)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('D'.$i, $proj_row->tin)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('E'.$i, $proj_row->phase_description)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('F'.$i, $proj_row->details)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('G'.$i, sprintf("%0.02f",$proj_row->qty))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('G'.$i)->getNumberFormat()->setFormatCode('0.00');
		$spreadsheet->getActiveSheet()->setCellValue('H'.$i, sprintf("%0.04f",$proj_row->unit_cost))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('H'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->setCellValue('I'.$i, sprintf("%0.04f",$proj_row->total_amount))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('I'.$i)->getNumberFormat()->setFormatCode('0.0000');

		$i++;
		endforeach;
// Save it as an excel 2003 file
	
		$objWriter = IOFactory::createWriter($spreadsheet, 'Excel5');

		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment;Filename=MONTHLY-".$site_code."-excel.xls");
		
		$objWriter->save("php://output");		
		endif;
		
			}
		
	}

	public function pdf_monthly_mp()
	{
		$this->load->model('pr_model');
		$this->load->model('user_model');
		$site_code = $_GET['project_code_mp'];
		$date_from = date('Y-m-d', strtotime(date($_GET['date_from_mp'])));
		$date_to = date('Y-m-d', strtotime(date($_GET['date_to_mp'])));
		$format = $_GET['format_mp'];
		$data['date_from_mp'] = $_GET['date_from_mp'];
		$data['date_to_mp'] = $_GET['date_to_mp'];
		$details_like = $_GET['details_like'];
		$data['site_info'] = $this->user_model->my_site_info($site_code);
		$data['project_details'] = $this->user_model->all_expences($site_code,$date_from,$date_to,$details_like);
			foreach($data['site_info'] as $row ):
				$site_code = $row->site_code;
				$site_name = $row->site_name;
			endforeach;
			if($site_code == ""){
			redirect(base_url()."/dashboard/");
		}
		else
			{
	//CONVERT FILE TO PDF
	$html = $this->load->view('pdf_monthly',$data, true);
	if($format == "pdf"):
		$this->load->helper(array('dompdf', 'file'));   
    	
		$random =rand();	
     	$data = pdf_create($html, "MONTHLY-".$site_code."-".date('m'), true);
      	write_file('name', $site_code);
	// CONVERT FILE TO WORD
	elseif($format=="word"):
		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=MP-MONTHLY-".$site_code."-word.doc");
		header("Progra: no-cache");
		header("Expires: 0");
		echo $html;
	//CONVERT FILE TO EXCEL
	elseif($format=="excel"):
		$this->load->library('PHPExcel');
		$this->load->library('PHPExcel/IOFactory');

		$spreadsheet = new PHPExcel();
		$spreadsheet->getProperties()->setTitle("title")
                 ->setDescription("description");
 		$style = array(
        	'alignment' => array(
        	    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        	)
    	);

		$info_output=$this->user_model->mp_all_expences($site_code,$date_from,$date_to,$details_like);
		$spreadsheet->setActiveSheetIndex(0);
		//HEADER 
		$spreadsheet->getActiveSheet()->mergeCells('A1:H1')->setCellValue('A1', 'EMJGC')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('A2:G2')->setCellValue('A2', 'DISENO AND KONSTRUCT')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('A3:G3')->setCellValue('A3','Man Power Expences of '.$site_name)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('H2','DATE FROM: ')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('H3','DATE TO: ')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('I2',date('F d, Y',strtotime(date($date_from))))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('I3',date('F d, Y',strtotime(date($date_to))))->getColumnDimension()->setAutoSize(true);
		
		$spreadsheet->getActiveSheet()->setCellValue('A5', 'DATE CREATED')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('B5', 'NAME')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('C5', 'ALIAS')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('D5', 'DESIGNATION')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('E5', 'AMOUNT')->getColumnDimension()->setAutoSize(true);
		
		$i = 6;
		foreach($info_output as $proj_row):
		$spreadsheet->getActiveSheet()->setCellValue('A'.$i, date('F d, Y', strtotime($proj_row->date_created)))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('B'.$i, $proj_row->name)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('C'.$i, $proj_row->alias)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('D'.$i, $proj_row->designation)->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('E'.$i, sprintf("%0.04f",$proj_row->amount))->getColumnDimension()->setAutoSize(true);
		
		$spreadsheet->getActiveSheet()->getStyle('E'.$i)->getNumberFormat()->setFormatCode('0.0000');
		
		$i++;
		endforeach;
// Save it as an excel 2003 file
	
	$objWriter = IOFactory::createWriter($spreadsheet, 'Excel5');

		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment;Filename=MP-MONTHLY-".$site_code."-excel.xls");
		
	$objWriter->save("php://output");		
		endif;
		
			}
		
	}

	function download_summary(){
		$this->load->model('user_model');
		$data['site_info'] = $this->user_model->db_site_info();
		$site_info = $this->user_model->db_site_info();
			foreach($data['site_info'] as $row ):
				$data['site_code'] = $row->site_code;
				$data['site_name'] = $row->site_name;
		    endforeach;
		$this->load->library('PHPExcel');
		$this->load->library('PHPExcel/IOFactory');

		$spreadsheet = new PHPExcel();
		$spreadsheet->getProperties()->setTitle("title")
                 ->setDescription("description");
 		$style = array(
        	'alignment' => array(
        	    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        	)
    	);

		//$info_output=$this->user_model->mp_all_expences($site_code,$date_from,$date_to,$details_like);
		$spreadsheet->setActiveSheetIndex(0);
		//HEADER 
		$spreadsheet->getActiveSheet()->mergeCells('A1:A1')->setCellValue('A1', date('F d, Y',strtotime(date('Y-m-d'))))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('B1:D1')->setCellValue('B1', 'Contract Price')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('E1:F1')->setCellValue('E1', 'Collection')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('G1:I1')->setCellValue('G1', 'Expences')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->mergeCells('J1:L1')->setCellValue('J1', 'Balance')->getColumnDimension()->setAutoSize(true);
		
		$spreadsheet->getActiveSheet()->setCellValue('A2', 'PROJECT')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('B2', 'TCP')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('C2', 'RETENTION')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('D2', 'NET TCP')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('E2', 'COLLECTED')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('F2', 'RECEIVABLE')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('G2', 'PURCHASES')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('H2', 'MAN POWER')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('I2', 'TOTAL')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('J2', 'BASED ON NET')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('K2', 'CASH ON HAND')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('L2', 'BASED ON TCP')->getColumnDimension()->setAutoSize(true);
							$total_tcp = 0;
							$total_retention = 0;
							$total_net_tcp = 0;
							$total_collection = 0;
							$total_receivable = 0;
							$total_purchase = 0;
							$total_man_power_expences = 0;
							$total_expences_cost = 0;
							$total_based_net = 0;
							$total_cash_on_hand = 0;
							$total_base_tcp = 0;
		$i = 3;
		foreach($site_info as $row):
		$spreadsheet->getActiveSheet()->setCellValue('A'.$i, $row->site_code." - ".$row->site_name)->getColumnDimension()->setAutoSize(true);
		$site_code = $row->site_code;
		$tcp = $this->user_model->tcp($site_code);
		$tcp = $tcp->result();
		$tcp = $tcp[0]->amount;
		$spreadsheet->getActiveSheet()->setCellValue('B'.$i, sprintf("%0.04f",$tcp))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('B'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$retention = $this->user_model->retention($site_code);
		$retention = $retention->result();
		$retention = $retention[0]->percentage;
		$retention = $retention * 0.01;
		$tcp_w_ret = $tcp * $retention;
		$spreadsheet->getActiveSheet()->setCellValue('C'.$i, sprintf("%0.04f",$tcp_w_ret))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('C'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$net_tcp = $tcp - $tcp_w_ret;
		$spreadsheet->getActiveSheet()->setCellValue('D'.$i, sprintf("%0.04f",$net_tcp))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('D'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$collection = $this->user_model->collection($site_code);
		$collection = $collection->result();
		$collection = $collection[0]->amount;							
		$spreadsheet->getActiveSheet()->setCellValue('E'.$i, sprintf("%0.04f",$collection))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('E'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$receivable = $tcp - $collection;
		$spreadsheet->getActiveSheet()->setCellValue('F'.$i, sprintf("%0.04f",$receivable))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('F'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$other_expences = $this->user_model->other_expences($site_code);
		$other_expences = $other_expences->result();
		$other_expences = $other_expences[0]->amount;							
		$spreadsheet->getActiveSheet()->setCellValue('G'.$i, sprintf("%0.04f",$other_expences))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('G'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$mp_expences = $this->user_model->mp_expences($site_code);
		$mp_expences = $mp_expences->result();
		$mp_expences = $mp_expences[0]->amount;
									
		$spreadsheet->getActiveSheet()->setCellValue('H'.$i, sprintf("%0.04f",$mp_expences))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('H'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$total_expences = $other_expences + $mp_expences;
		$spreadsheet->getActiveSheet()->setCellValue('I'.$i, sprintf("%0.04f",$total_expences))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('I'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$based_on_net = $net_tcp - $total_expences;
		$spreadsheet->getActiveSheet()->setCellValue('J'.$i, sprintf("%0.04f",$based_on_net))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('J'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$cash_on_hand = $collection - $total_expences;
		$spreadsheet->getActiveSheet()->setCellValue('K'.$i, sprintf("%0.04f",$cash_on_hand))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('K'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$based_on_tcp = $receivable - $total_expences;
		$spreadsheet->getActiveSheet()->setCellValue('L'.$i, sprintf("%0.04f",$based_on_tcp))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('L'.$i)->getNumberFormat()->setFormatCode('0.0000');
		$total_tcp = $total_tcp + $tcp;
		$total_retention =$total_retention + $tcp_w_ret;
		$total_net_tcp = $total_net_tcp+$net_tcp;
		$total_collection = $total_collection +$collection;
		$total_receivable = $total_receivable+$receivable;
		$total_purchase = $total_purchase + $other_expences;
		$total_man_power_expences = $total_man_power_expences + $mp_expences;
		$total_expences_cost = $total_expences_cost + $total_expences;
		$total_based_net = $total_based_net + $based_on_net;
		$total_cash_on_hand = $total_cash_on_hand + $cash_on_hand;
		$total_base_tcp = $total_base_tcp + $based_on_tcp;
		
		
		
		$i++;
		
		endforeach;

		$sum_i = $i;
								
		$spreadsheet->getActiveSheet()->setCellValue('A'.$sum_i, 'SUB TOTAL')->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('B'.$sum_i, sprintf("%0.04f",$total_tcp))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('C'.$sum_i, sprintf("%0.04f",$total_retention))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('D'.$sum_i, sprintf("%0.04f",$total_net_tcp))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('E'.$sum_i, sprintf("%0.04f",$total_collection))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('F'.$sum_i, sprintf("%0.04f",$total_receivable))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('G'.$sum_i, sprintf("%0.04f",$total_purchase))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('H'.$sum_i, sprintf("%0.04f",$total_man_power_expences))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('I'.$sum_i, sprintf("%0.04f",$total_expences_cost))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('J'.$sum_i, sprintf("%0.04f",$total_based_net))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('K'.$sum_i, sprintf("%0.04f",$total_cash_on_hand))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->setCellValue('L'.$sum_i, sprintf("%0.04f",$total_base_tcp))->getColumnDimension()->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getStyle('B'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('C'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('D'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('E'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('F'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('G'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('H'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('I'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('J'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('K'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');
		$spreadsheet->getActiveSheet()->getStyle('L'.$sum_i)->getNumberFormat()->setFormatCode('0.0000');


// Save it as an excel 2003 file
	
	$objWriter = IOFactory::createWriter($spreadsheet, 'Excel5');

		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment;Filename=EMJGC-FULL-SUMMARY-excel.xls");
		
	$objWriter->save("php://output");		
		
		

	}



}
/*
A PHP ERROR WAS ENCOUNTERED
SEVERITY: NOTICE
MESSAGE: UNDEFINED VARIABLE: DATE_TO
FILENAME: VIEWS/PDF_MONTHLY.PHP
LINE NUMBER: 175
BACKTRACE:
FILE:
/HOME/BGERON/WORKSPACE/EMJGC/APPLICATION/VIEWS/PDF_MONTHLY.PHP
LINE: 175
FUNCTION: _ERROR_HANDLER
FILE:
/HOME/BGERON/WORKSPACE/EMJGC/APPLICATION/CONTROLLERS/DOWNLOAD_PDF.PHP
LINE: 52
FUNCTION: VIEW
FILE: /HOME/BGERON/WORKSPACE/EMJGC/INDEX.PHP
LINE: 319
FUNCTION: REQUIRE_ONCE
JANUARY */