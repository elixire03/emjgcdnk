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
			Projects <!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-university"></i>
						<a href="/sites/">Projects</a>
						<!--
						<i class="fa fa-angle-right"></i>
						-->
					</li>
					<!--
					<li>
						<a href="/">Branches</a>
					</li>
					-->
				</ul>
                <!--
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
                -->
			</div>
			<!-- END PAGE HEADER-->

            <!-- content here -->
			<div class="message">
			<?php 
			$mode = isset($_GET['mode'])?($_GET['mode']):"";
			
			 if($mode=='success'):?>
			<div class="alert alert-success">
					<button class="close" data-close="alert"></button>
					<strong>Success!!!</strong> New Project has been Saved.
			</div>
			<?php elseif($mode=='edit_success'):?>
			<div class="alert alert-success">
					<button class="close" data-close="alert"></button>
					<strong>Updated!!!</strong> Project information has been Edited.
			</div>
			
			<?php elseif($mode=='failed'):?>
			<div class="alert alert-danger display-show">
					<button class="close" data-close="alert"></button>
					You have some form errors. Please Contact your administrator.
			</div>
			<?php endif;?>
			</div>
            

					
			<div class="modal fade" id="add_site" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add Site</h4>
						</div>
						<div class="modal-body">
						
							<form action="/sites/" id="form_sample_1" class="form-horizontal" method = "post">
								<div class="form-body">
									<input type = "hidden" name = "is_site_save" id = "is_site_save" value = "yes">
									            <div class="form-group">
													<label class="col-md-3 control-label">Project Code:</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name = "branch_code" id = "branch_code" placeholder="None" required>
														
													</div>
                                                </div>
                                                <div class="form-group">
													<label class="col-md-3 control-label">Project Name:</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name = "branch_name" id = "branch_name" placeholder="None" required>
														
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Status</label>
													<div class="col-md-6">
														<select class= "form-control" name = "status" required>
															<option value = "on-going">On-Going</option>
															<option value = "Finished">Finished</option>
														</select>
														
													</div>
												</div>
									
								</div>
								</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-info">Save changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="modal fade" id="edit_site" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Edit Site</h4>
						</div>
						<div class="modal-body">
						
							<form action="/sites/" id="form_sample_1" class="form-horizontal" method = "post">
								<div class="form-body">
									<input type = "hidden" name = "is_site_update" id = "is_site_update" value = "yes">
									<input type = "hidden" name = "branch_id" id = "branch_id" value = "yes">
									            <div class="form-group">
													<label class="col-md-3 control-label">Project Code:</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name = "edit_branch_code" id = "edit_branch_code" placeholder="None" readonly required>
														
													</div>
                                                </div>
                                                <div class="form-group">
													<label class="col-md-3 control-label">Project Name:</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name = "edit_branch_name" id = "edit_branch_name" placeholder="None" required>
														
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Status</label>
													<div class="col-md-6">
														<select class= "form-control" name = "edit_status" id = "edit_status" required>
															<option value = "on-going">On-Going</option>
															<option value = "Finished">Finished</option>
														</select>
														
													</div>
												</div>
									
								</div>
								</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Update changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="row">
				<div class="col-md-12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-users"></i>List of Users
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a onclick= "add_site()" data-toggle="modal" class="config"></a>
								</a>
								
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_6">
							<thead>
							<tr>
								<th>
									 ID
								</th>
								<th>
									 Project Code
								</th>
								<th>
									 Project Name
								</th>
								<th>
									 Status
								</th>
								<th>
									 ACTION
								</th>
								
							</tr>
							</thead>
							<tbody>
							<?php foreach($site_list as $s_row):?>
							<tr>
								<td>
									<?php echo $s_row->id?>
								</td>
								<td>
									<?php echo $s_row->site_code?>
								</td>
								<td>
									<?php echo $s_row->site_name?>
								</td>
								<td>
									<?php echo $s_row->status?>
								</td>
								<td>
									 <a class = "btn btn-xs btn-success" onclick = "edit_site('<?php echo $this->db->escape_like_str($s_row->id)?>','<?php echo $this->db->escape_str($s_row->site_code)?>','<?php echo $this->db->escape_str($s_row->site_name)?>')" ><i class="icon-note"></i>Edit</a>
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
					<!-- END SAMPLE TABLE PORTLET-->
			
	<!-- END CONTENT -->

</div>
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");
include("include/script_users.inc.php");

?>