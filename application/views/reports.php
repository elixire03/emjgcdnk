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
			Reports <!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-paper-plane"></i>
						<a href="/reports/">Reports</a>
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
					<strong>Success!!!</strong> a new Item has been Saved.
			</div>
			<?php elseif($mode=='edit_success'):?>
			<div class="alert alert-success">
					<button class="close" data-close="alert"></button>
					<strong>Updated!!!</strong> an Item has been Edited.
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
								<i class="fa fa-paper-plane"></i>List of Projects
							</div>
							
							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_6">
							<thead>
							<tr>
								<th>
									 Status
								</th>
								<th>
									 Project Code
								</th>
								
								<th>
									 Project Name
								</th>
															
								<th>
									 MAN POWER REPORT
								</th>
								<th>
									 OTHER EXPENSES / PURCHASES
								</th>

							</tr>
							</thead>
							<tbody>
							<?php foreach($project_info as $proj_row):?>
							<tr>
								<td>
									<?php echo $proj_row->status;?>
								</td>
								<td>
									<?php echo $proj_row->site_code;?>	
								</td>
								<td>
									<?php echo $proj_row->site_name;?>	
								</td>
                                
								<td>
									<!--<a style="cursor:pointer;" href = "/download_pdf/?project_code=<?php echo $proj_row->site_code;?>" class = "btn btn-xs btn-warning"><i class = 'fa fa-edit'></i>SUMMARY REPORT</a>&nbsp;&nbsp;&nbsp; -->
									<a style="cursor:pointer;" onclick = "date_range_mp('<?php echo $this->db->escape_str($proj_row->site_code)?>')" class = "btn btn-xs btn-danger"><i class = 'fa fa-edit'></i>MAN POWER REPORT</a>&nbsp;&nbsp;&nbsp;		
									
								</td>
								<td>
									<!--<a style="cursor:pointer;" href = "/download_pdf/?project_code=<?php echo $proj_row->site_code;?>" class = "btn btn-xs btn-warning"><i class = 'fa fa-edit'></i>SUMMARY REPORT</a>&nbsp;&nbsp;&nbsp; -->
									<a style="cursor:pointer;" onclick = "date_range('<?php echo $this->db->escape_str($proj_row->site_code)?>')" class = "btn btn-xs btn-info"><i class = 'fa fa-edit'></i>OTHER EXPENSES REPORT</a>&nbsp;&nbsp;&nbsp;		
									
								</td>
								
							</tr>
							<?php endforeach?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

            <!-- end of content here -->
        </div>
		</div>
		
	

	<!-- END CONTENT -->

</div>
<div class="modal fade" id="date_range" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Date Range</h4>
						</div>
						<form action="/download_pdf/pdf_monthly/" id="form_sample_1" class="form-horizontal" method = "get">
						<div class="modal-body">
									<div class="form-group">
													<label class="col-md-3 control-label">PROJECT:</label>
													<div class="col-md-6">
														<input type = "text" id = "project_code2" name = "project_code2" class = "form-control" readonly>
									
													</div>
												</div>		
									
									<div class="form-group">
													<label class="col-md-3 control-label">Date From:</label>
													<div class="col-md-6">
														<input type = "hidden" id = "project_code" name = "project_code" class = "form-control" required>
														<input type = "date" id = "date_from" name = "date_from" class = "form-control" value ="<?php echo date('Y-m-d')?>" required>
													</div>
												</div>		
									<div class="form-group">
													<label class="col-md-3 control-label">Date To:</label>
													<div class="col-md-6">
														<input type = "date" id = "date_to" name = "date_to" class = "form-control" value ="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 30 days'));?>" required>
													</div>
												</div>		
									<div class="form-group">
													<label class="col-md-3 control-label">Details Like:</label>
													<div class="col-md-6">
														<input type = "text" id = "details_like" name = "details_like" class = "form-control"  placeholder = "Download by Expenses Details" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Export to:</label>
													<div class="col-md-6">
														<select name = "format" class = "form-control" id = "format" required>
															<!--<option value = "pdf">Convert to PDF</option>-->
															<!-- <option value = "word">Convert to Microsoft Word</option>-->
															<option value = "excel">Convert to Microsoft Excel</option>
														</select>
													</div>
												</div>		
								
									
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" ><i class= "fa fa-print"></i>Download</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
		
			

	<!-- END CONTENT -->

</div>
<div class="modal fade" id="date_range_mp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Date Range</h4>
						</div>
						<form action="/download_pdf/pdf_monthly_mp/" id="form_sample_1" class="form-horizontal" method = "get">
						<div class="modal-body">
									<div class="form-group">
													<label class="col-md-3 control-label">PROJECT:</label>
													<div class="col-md-6">
														<input type = "text" id = "project_code2_mp" name = "project_code2_mp" class = "form-control" readonly>
									
													</div>
												</div>		
									
									<div class="form-group">
													<label class="col-md-3 control-label">Date From:</label>
													<div class="col-md-6">
														<input type = "hidden" id = "project_code_mp" name = "project_code_mp" class = "form-control" required>
														<input type = "date" id = "date_from_mp" name = "date_from_mp" class = "form-control" value ="<?php echo date('Y-m-d')?>" required>
													</div>
												</div>		
									<div class="form-group">
													<label class="col-md-3 control-label">Date To:</label>
													<div class="col-md-6">
														<input type = "date" id = "date_to_mp" name = "date_to_mp" class = "form-control" value ="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 30 days'));?>" required>
													</div>
												</div>		
									<div class="form-group">
													<label class="col-md-3 control-label">Details Like:</label>
													<div class="col-md-6">
														<input type = "text" id = "details_like_mp" name = "details_like" class = "form-control"  placeholder = "Download by Expenses Details" >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Export to:</label>
													<div class="col-md-6">
														<select name = "format_mp" class = "form-control" id = "format_mp" required>
															<!--<option value = "pdf">Convert to PDF</option>-->
															<!-- <option value = "word">Convert to Microsoft Word</option>-->
															<option value = "excel">Convert to Microsoft Excel</option>
														</select>
													</div>
												</div>		
								
									
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger" ><i class= "fa fa-print"></i>Download</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
		
			

	<!-- END CONTENT -->

</div>


<!-- END CONTAINER -->
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");

include("include/script_users.inc.php");
?>

