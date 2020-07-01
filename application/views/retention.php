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
			Retention Module <!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-user"></i>
						<a href="/retention/">Retention</a>
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
					<strong>Updated!!!</strong> Retention had been Updated.
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
								<i class="fa fa-users"></i>List of Retention
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
							</div>
							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_6">
							<thead>
							<tr>
							
								<th>
									 Retention ID
								</th>
								
								<th>
									 Project Code
								</th>
                                <th>
									 Percentage
								</th>
								
								
								
								<th>
									 ACTION
								</th>
								
							</tr>
							</thead>
							<tbody>
							<?php foreach($retention_list as $row):?>
							<tr>
							
								<td>
									 <?php echo $row->id?>
								</td>
								<td>
									 <?php echo $row->project_code?>
								</td>
								<td>
									 <?php echo $row->retention_percentage?>%
								</td>
								
								<td>
									 
									 	<a class = "btn btn-xs btn-success" onclick="edit_retention_info(
											 															'<?php echo $this->db->escape_like_str($row->id)?>',
																										'<?php echo $this->db->escape_like_str($row->project_code)?>',
																										'<?php echo $this->db->escape_str($row->retention_percentage)?>',
																									)" ><i class="icon-note"></i>Edit</a>
									 
								</td>
								
							</tr>
							<?php endforeach;?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

            <!-- end of content here -->
        </div>
		</div>
		<div class="modal fade" id="edit_retention_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Edit Retention Percentage</h4>
						</div>
						<div class="modal-body">
						
							<form action="/retention/" id="form_sample_1" class="form-horizontal" method = "post">
								<input type = "hidden" name = "is_ret_edit" id = "is_ret_edit" value = "yes">
								<input type = "hidden" name = "ret_id" id = "ret_id" value = "yes">
								<div class="form-group">
										<label class="control-label col-md-3">Project Code<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_project_code" id = "edit_project_code" required readonly>
											
			
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Retention Percentage<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_retention_percentage" id = "edit_retention_percentage" required >
											
			
										</div>
									</div>                
                                    
								
								</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Save changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

