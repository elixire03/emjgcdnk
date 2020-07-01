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
			Users <!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-user"></i>
						<a href="/users/">Users</a>
						<!--
						<i class="fa fa-angle-right"></i>
						-->
					</li>
					
				</ul>
                
			</div>
			<div class="message">
			<?php 
			$mode = isset($_GET['mode'])?($_GET['mode']):"";
			
			 if($mode=='success'):?>
			<div class="alert alert-success">
					<button class="close" data-close="alert"></button>
					<strong>Success!!!</strong> New User has been Saved.
			</div>
			<?php elseif($mode=='edit_ex_user_success'):?>
			<div class="alert alert-success">
					<button class="close" data-close="alert"></button>
					<strong>Updated!!!</strong> User's information has been Edited.
			</div>
			<?php elseif($mode=='duplicate_entry'):?>
			<div class="alert alert-warning display-show">
					<button class="close" data-close="alert"></button>
					Warning!!! Duplicate Entry Please enter a new Username.
			</div>
			
			
			<?php elseif($mode=='failed'):?>
			<div class="alert alert-danger display-show">
					<button class="close" data-close="alert"></button>
					You have some form errors. Please Contact your administrator.
			</div>
			<?php endif;?>
			</div>
            
			<!-- END PAGE HEADER-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add User</h4>
						</div>
						<div class="modal-body">
							<form action="/users/" id="form_sample_1" class="form-horizontal" method = "post">
								<div class="form-body">
									<input type = "hidden" name = "is_user_save" id = "is_user_save" value = "yes">
									<div class="form-group">
										<label class="control-label col-md-3">Username <span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="username" id ="username" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Password <span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input name="password" id ="password" type="password" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Last Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input name="last_name" id ="last_name" type="text" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">First Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input name="first_name" id ="first_name" type="text" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Middle Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input name="middle_name" id ="middle_name" type="text" class="form-control" required/>
										</div>
									</div>
									

									<div class="form-group">
										<label class="control-label col-md-3">Site <span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<select name = "sites_id" id = "sites_id" class="form-control" required/>
												<option value = "">Select...</option>
												<?php foreach($sites_list as $b_row):?>
													<option value = "<?php echo $b_row->id?>"><?php echo $b_row->site_name?></option>
												<?php endforeach;?>

											</select>

										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">User Type <span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<select name = "role_id" id = "role_id" class="form-control" required/>
												<option value = "">Select...</option>
												<?php foreach($role_id_list as $u_row):?>
													<option value = "<?php echo $u_row->id?>"><?php echo $u_row->role_description?></option>
												<?php endforeach;?>
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
		<div class="modal fade" id="portlet-config-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Edit User</h4>
						</div>
						<div class="modal-body">
							<form action="/users/" id="form_sample_1" class="form-horizontal" method = "post">
								<div class="form-body">
									<input type = "hidden" name = "is_user_edit" id = "is_user_edit" value = "yes">
									<input type = "hidden" name = "user_id" id = "user_id" value = "yes">
									<div class="form-group">
										<label class="control-label col-md-3">Username <span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="edit_username" id ="edit_username" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Password <span class="required">
										* </span>
										</label>
										<div class="col-md-5">
											<input name="edit_password" id ="edit_password" type="password" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Last Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input name="edit_last_name" id ="edit_last_name" type="text" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">First Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input name="edit_first_name" id ="edit_first_name" type="text" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Middle Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input name="edit_middle_name" id ="edit_middle_name" type="text" class="form-control" required/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">Site <span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<select name = "edit_sites_id" id = "edit_sites_id" class="form-control" required/>
												<option value = "">Select...</option>
												<?php foreach($sites_list as $b_row):?>
													<option value = "<?php echo $b_row->id?>"><?php echo $b_row->site_name?></option>
												<?php endforeach;?>

											</select>

										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Role <span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<select name = "edit_role_id" id = "edit_role_id" class="form-control" required/>
												<option value = "">Select...</option>
												<?php foreach($role_id_list as $u_row):?>
													<option value = "<?php echo $u_row->id?>"><?php echo $u_row->role_description?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Status <span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<select name = "edit_status" id = "edit_status" class="form-control" required/>
												<option value = "">Select...</option>
										
													<option value = "active">Active</option>
													<option value = "in-active">In-Active</option>
										
											</select>
										</div>
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




            <!-- content here -->
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
								<a onclick= "add_user()" data-toggle="modal" class="config">
								</a>
								
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_6">
							<thead>
							<tr>
								<th>
									 STATUS
								</th>
								<th>
									 ID
								</th>
								<th>
									 USERNAME
								</th>
								<th>
									 FULL NAME
								</th>
								<th>
									 SITE CODE
								</th>
								<th>
									 SITE NAME
								</th>
								<th>
									 ROLE
								</th>
								
								<th>
									 ACTION
								</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach($users_list as $users_row):?>
							<tr>
								<td>
									 <?php if($users_row->status=="active"):?>
										<div class = "fa fa-check-square-o"></div>
									<?php else:?>
										<div class = "fa fa-square-o"></div>
									<?php endif;?>
								</td>
								<td>
									 <?php echo $users_row->id?>
								</td>
								<td>
									 <?php echo $users_row->username?>
								</td>
								<td>
									 <?php echo $users_row->last_name.", ".$users_row->first_name."  ".$users_row->middle_name?>
								</td>
								<td>
									 <?php echo $users_row->site_code?>
								</td>
								<td>
									 <?php echo $users_row->site_name?>
								</td>
								<td>
									 <?php echo $users_row->role_name?>
								</td>
								
								<td>
									 <a class = "btn btn-xs btn-success" onclick="edit_user('<?php echo $this->db->escape_like_str($users_row->id)?>','<?php echo $this->db->escape_str($users_row->username)?>','<?php echo $this->db->escape_str($users_row->last_name)?>','<?php echo $this->db->escape_str($users_row->first_name)?>','<?php echo $this->db->escape_str($users_row->middle_name)?>','<?php echo $this->db->escape_str($users_row->site_id)?>','<?php echo $this->db->escape_str($users_row->role_id)?>','<?php echo $users_row->status?>')" ><i class="icon-note"></i>Edit</a>
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
		
			


	<!-- END CONTENT -->

</div>

<!-- END CONTAINER -->
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");

include("include/script_users.inc.php");
?>

