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
			Employee Module <!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-paper-plane"></i>
						<a href="/employees/">Employees</a>
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
								<i class="fa fa-users"></i>List of Employees
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a onclick= "add_employee()" data-toggle="modal" class="config">
								</a>
								
							</div>
							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_4">
							<thead>
							<tr>
							
								<th>
									 Employee ID
								</th>
								
								<th>
									 Full Name
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
							<tbody>
							<?php foreach($employee_list as $users_row):?>
							<tr>
							
								<td>
									 <?php echo $users_row->employee_id?>
								</td>
								<td>
									 <?php echo $users_row->last_name,", ".$users_row->first_name." ".$users_row->middle_name  ?>
								</td>
								<td>
									 <?php echo $users_row->designation?>
								</td>
								<td>
									 <?php echo $users_row->status?>
								</td>
								<td>
									 
									 	<a class = "btn btn-xs btn-success" onclick="edit_employee_info(
											 															'<?php echo $this->db->escape_like_str($users_row->id)?>',
																										'<?php echo $this->db->escape_like_str($users_row->employee_id)?>',
																										'<?php echo $this->db->escape_str($users_row->last_name)?>',
																										'<?php echo $this->db->escape_str($users_row->first_name)?>',
																										'<?php echo $this->db->escape_str($users_row->middle_name)?>',
																										'<?php echo $this->db->escape_str($users_row->nic_name)?>',
																										'<?php echo $this->db->escape_str($users_row->designation)?>',
																										'<?php echo $this->db->escape_str($users_row->status)?>')" ><i class="icon-note"></i>Edit</a>
									 
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
		<div class="modal fade" id="edit_employee_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Edit Employees Information</h4>
						</div>
						<div class="modal-body">
						
							<form action="/employees/" id="form_sample_1" class="form-horizontal" method = "post">
								<input type = "hidden" name = "is_nh_edit" id = "is_nh_edit" value = "yes">
								<input type = "hidden" name = "emp_id" id = "emp_id" value = "yes">
								<div class="form-group">
										<label class="control-label col-md-3">Employee ID<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_employee_id" id = "edit_employee_id" required readonly>
											
			
										</div>
									</div>
                                

								<div class="form-group">
										<label class="control-label col-md-3">Last Name<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_last_name" id = "edit_last_name" required >
											
			
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">First Name<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_first_name" id = "edit_first_name" required >
											
			
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Middle Name<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_middle_name" id = "edit_middle_name" required >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Alias<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_alias" id = "edit_alias" required >
											
			
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="control-label col-md-3">Designation<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "edit_designation" id = "edit_designation" required >
											
			
										</div>
									</div>                
                                    <div class="form-group">
										<label class="control-label col-md-3">Status<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<select name = "edit_status" id = "edit_status" class = "form-control" required>
													
													<option value = "Active" >Active</option>
													<option value = "In-Active" >In-Active</option>
											
											</select>
											
											
			
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
		

		
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add Employee</h4>
						</div>
						<div class="modal-body">
						
							<form action="/employees/" id="form_sample_1" class="form-horizontal" method = "post">
								<input type = "hidden" name = "is_nh_save" id = "is_nh_save" value = "yes">
								
								
								<div class="form-group">
										<label class="control-label col-md-3">Last Name<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "last_name" id = "last_name" required >
											
			
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">First Name<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "first_name" id = "first_name" required >
											
			
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Middle Name<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "middle_name" id = "middle_name" required >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Alias<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "alias" id = "alias" required >
											
			
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Designation<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type = "text" class = "form-control" name = "designation" id = "designation" required >
											
			
										</div>
									</div>                
                                    <div class="form-group">
										<label class="control-label col-md-3">Status<span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<select name = "status" id = "status" class = "form-control" required>
													<option value = "" >Select...</option>
													<option value = "Active" >Active</option>
													<option value = "In-Active" >In-Active</option>
											
											</select>
											
			
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
		
			

	<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");

include("include/script_users.inc.php");
?>

