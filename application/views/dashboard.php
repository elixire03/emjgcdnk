<?php 
include("include/header_users.inc.php");
include("include/header.inc.php");

?>
<!--Paste the content below-->
<!--CONTENT START HERE-->

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Dashboard <!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-home"></i>
						<a href="/dashboard/">dashboard</a>
						<!--
						<i class="fa fa-angle-right"></i>
						-->
					</li>
					
				</ul>
                
			</div>
			<!-- END PAGE HEADER-->
			
			<div class="message">
			<?php 
			$mode = isset($_GET['mode'])?($_GET['mode']):"";
			
			 if($mode=='success'):?>
			<div class="alert alert-success">
					<button class="close" data-close="alert"></button>
					<strong>Success!!!</strong> a new Employee has been Saved.
			</div>
			<?php elseif($mode=='edit_success'):?>
			<div class="alert alert-success">
					<button class="close" data-close="alert"></button>
					<strong>Updated!!!</strong> a new Employee has been Edited.
			</div>
			
			<?php elseif($mode=='failed'):?>
			<div class="alert alert-danger display-show">
					<button class="close" data-close="alert"></button>
					You have some form errors. Please Contact your administrator.
			</div>
			<?php endif;?>
			</div>
            <!-- content here -->
			<div class="row">
				<div class="col-md-12">
				
				
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet">
					
						<div class="portlet-title">
					
							<div class="caption">
								<i class="fa fa-globe"></i>EMJGC PROJECT SUMMARY
							</div>
							
							<div class="tools">
								
								
								
							</div>
							
						</div>
						<div class="portlet-body">
						<hr color = "blue">
						<a href = "/download_pdf/download_summary/" class="btn btn-xs btn-success">Export to Excel</a>
						<hr color = "blue">
						<div class  = "table-responsive">
							<table class="table table-striped table-bordered table-hover" id = "sample_6" >
							<thead>
							<tr>
							
								<th align = "center">
									 <?php echo  date('F d,Y',strtotime(date('Y-m-d')))?>
								</th>
								
								<th colspan = "3" align = "center">
									 Contract Price
								</th>
                                <th colspan = "2" align = "center">
									 Collection
								</th>
								
								<th colspan = "3" align = "center">
									 Expenses
								</th>
								
								<th colspan = "3" align = "center">
									 Balance
								</th>
								
							</tr>
							</thead>
							<tbody>
								<th>
									PROJECT
								</th>
								<th>
									TCP
								</th>
								<th>
									RETENTION
								</th>
								<th>
									NET TCP
								</th>
								<th>
									COLLECTED
								</th>
								<th>
									RECEIVABLE
								</th>
								<th>
									PURCHASES
								</th>
								<th>
									MAN POWER
								</th>
								
								<th>
									TOTAL
								</th>
								<th>
									BASED ON NET
								</th>
								<th>
									CASH ON HAND
								</th>
								<th>
									BASED ON TCP
								</th>

								</tr>

								<!-- LOOP SITE WITH COST -->
							<?php 
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

							foreach($site_info as $row):?>
							
							<tr>
								<td>
									<?php echo $row->site_code." - ".$row->site_name?>
								</td>
								<td>
									<?php $i = 1;
									$site_code = $row->site_code;
									$tcp = $this->user_model->tcp($site_code);
									$tcp = $tcp->result();
									$tcp = $tcp[0]->amount;

									echo "P ".number_format($tcp,2);
								
									?>
								</td>
								<td>
									<?php 
									$retention = $this->user_model->retention($site_code);
									$retention = $retention->result();
									$retention = $retention[0]->percentage;
									$retention = $retention * 0.01;
									$tcp_w_ret = $tcp * $retention;
									echo "P ".number_format($tcp_w_ret,2);
									?>
								</td>
								<td>
									<?php 
									$net_tcp = $tcp - $tcp_w_ret;
									echo "P ".number_format($net_tcp,2);
									
									?>
								</td>
								<td>
									<?php
									$collection = $this->user_model->collection($site_code);
									$collection = $collection->result();
									$collection = $collection[0]->amount;
									echo "P ".number_format($collection,2);
									?>
								</td>
								<td>
									<?php 
									$receivable = $tcp - $collection;
									echo "P ".number_format($receivable,2);
									?>
								</td>
								<td>
									<?php
									$other_expences = $this->user_model->other_expences($site_code);
									$other_expences = $other_expences->result();
									$other_expences = $other_expences[0]->amount;
									echo "P ".number_format($other_expences,2);
									?>
								</td>
								<td>
									<?php
									$mp_expences = $this->user_model->mp_expences($site_code);
									$mp_expences = $mp_expences->result();
									$mp_expences = $mp_expences[0]->amount;
									echo "P ".number_format($mp_expences,2);
									?>
								</td>
								
								<td>
									<?php
									$total_expences = $other_expences + $mp_expences;
									echo "P ".number_format($total_expences,2);
									?>
								</td>
								<td>
									<?php 
									$based_on_net = $net_tcp - $total_expences;
									if($based_on_net < 0):
									?>
										<font color = "red">
									<?php
									echo "P ".number_format($based_on_net,2);
									else:
									echo "P ".number_format($based_on_net,2);
									endif;
									?>
								</td>
								<td>
									<?php 
									$cash_on_hand = $collection - $total_expences;
									if($cash_on_hand < 0):
									?>
										<font color = "red">
									<?php
									echo "P ".number_format($cash_on_hand,2);
									else:
									echo "P ".number_format($cash_on_hand,2);
									endif;
									?>
								</td>
								<td>
									<?php 
									$based_on_tcp = $receivable - $total_expences;
									if($based_on_tcp < 0):
									?>
										<font color = "red">
									<?php
									echo "P ".number_format($based_on_tcp,2);
									else:
									echo "P ".number_format($based_on_tcp,2);
									endif;
									?>
								</td>

								</tr>
								
							<?php
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
							endforeach;?>

							<tr style = "color:blue;font-weight:bold">
								<td>
									Sum Total
								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_tcp,2);

									?>

								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_retention,2);

									?>
								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_net_tcp,2);

									?>
								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_collection,2);

									?>
								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_receivable,2);

									?>
								</td>
								<td>
								<?php 
									
									echo "P ".number_format($total_purchase,2);

									?>
								</td>
								<td>
								<?php 
									
									echo "P ".number_format($total_man_power_expences,2);

									?>
								</td>
								
								<td>
									<?php 
									
									echo "P ".number_format($total_expences_cost,2);

									?>
								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_based_net,2);

									?>
								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_cash_on_hand,2);

									?>
								</td>
								<td>
									<?php 
									
									echo "P ".number_format($total_based_net,2);

									?>
								</td>

								</tr>
								
								
								
							</tbody>
							</table>
							</div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

            <!-- end of content here -->
        </div>
		</div>
	</div>
<script>
$(document).ready(function(){
$("#button").click(function(){
	write_headers_to_excel();
});
});

function write_headers_to_excel() 
{
  str="";

  var myTableHead = document.getElementById('sample_6');
  var rowCount = myTableHead.rows.length;
  var colCount = myTableHead.getElementsByTagName("tr")[0].getElementsByTagName("th").length; 

var ExcelApp = new ActiveXObject("Excel.Application");
var ExcelSheet = new ActiveXObject("Excel.Sheet");
ExcelSheet.Application.Visible = true;

for(var i=0; i<rowCount; i++) 
{   
    for(var j=0; j<colCount; j++) 
    {           
        str= myTableHead.getElementsByTagName("tr")[i].getElementsByTagName("th")[j].innerHTML;
        ExcelSheet.ActiveSheet.Cells(i+1,j+1).Value = str;
    }
}

}
</script>
<!-- END CONTAINER -->
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");

include("include/script_users.inc.php");
?>

