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
			Man Power Expenses<!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-user"></i>
						<a href="/man_power/">Man Power Expenses </a>
						
					</li>
					
				</ul>
                
			</div>
			<!-- END PAGE HEADER-->
			
			<!-- content here -->
            <div class="tab-pane " id="tab_2">
								<div class="portlet">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Module
										</div>
										<div class="tools">
											
											
											
											
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										
											<div class="form-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-1">Project:</label>
															<div class="col-md-11">
																<select class= "form-control" name = "site_code" id = "site_code" required>
                                                                    <option value = "">Select...</option>
                                                                    <?php foreach($site_info as $site_row):?>
                                                                        <option value = "<?php echo  $site_row->site_code?>"><?php echo $site_row->site_code." - ".$site_row->site_name?></option>
                                                                    <?php endforeach?>
                                                                </select>
															</div>
														</div>
													</div>
													
                                                </div>
												<hr>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Phase:</label>
															<div class="col-md-9">
															<div id = "reload">
																<select class= "form-control" name = "p1" id = "p1" required>
                                                                    <option value = "">Select...</option>
                                                                </select>
															</div>
															<div id = "loading" style="display:none">
															<select class= "form-control" name ="p2" id = "p2" required><option>Loading...</option></select>
															</div>
															<div id = "loaded">
															</div>
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date Created</label>
															<div class="col-md-9">
																<input type="date" class="form-control" name = "date_created" id = "date_created" value ="<?php echo date('Y-m-d')?>" >
																
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<hr>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															
																<label class="control-label col-md-2">Employee Name:</label>
																<div class="col-md-9">
																<div class="input-group">
																<span class="input-group-addon"><button class= "btn btn-xs btn-default" id = "btn_search" disabled onclick = "search_employee()"><i class= "fa fa-search"></i></button></span>
																	<input type = "hidden" name = "employee_id" id = "employee_id" value ="">
																	<input type="text" class="form-control" name = "name" id = "name" disabled>
																</div>
															</div>
														</div>
													</div>
													
													<!--/span-->
													<!--/span-->
												</div>
												<hr>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Designation</label>
															<div class="col-md-9">
																<input type="text" name = "designation" id = "designation" value = "" class="form-control" readonly >
																
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Alias:</label>
															<div class="col-md-9">
																<input type="text" name = "alias" id = "alias" value = "" class="form-control" disabled>
																
															</div>
														</div>
													</div>
													<!--/span-->
													
												</div>
												<hr>
												
												
												<!--/row-->
												<div class="row">
												<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Amount:</label>
															<div class="col-md-9">
																<input type="text" name = "amount" id = "amount" value = "" class="form-control" disabled>
																
															</div>
														</div>
													</div>
													
												<div class="col-md-6">
														<div class="form-group">
													        
                                                               
						                            	        <button type= "button" class="btn btn-default" id = "btn_save" disabled><div id = "show_loading" style="display:none">Adding<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label">Add to Expenses</div></button>
																	
							                                    
						                                
                                                       </div>
                                                    </div>
													<!--/span-->
												</div>
											<div class="row">
												<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">From :</label>
															<div class="col-md-9">
																<input type = "date" class = "form-control" id = "date_from" name = "date_from" value = "<?php echo date('Y-m-')?>01">
																
															</div>
														</div>
													</div>
													
												<div class="col-md-6">
														<div class="form-group">
													        <label class="control-label col-md-3">To :</label>
															<div class="col-md-9">
																<input type = "date" class = "form-control" id = "date_to" name = "date_to" value = "<?php echo date('Y-m-d', strtotime(date('Y-m-01'). ' + 30 days'));?>">
																
															</div>
                                                       </div>
                                                    </div>
													<!--/span-->
												</div>
												
												<!--/row-->
												
												<!--/row-->
											</div>
											
										
										<!-- END FORM-->
									</div>
								</div>
							</div>
			<div id = "message"></div>
			<div class="row">
				<div class="col-md-12">
				
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-pencil"></i>List of Expenses
							</div>
							
							
						</div>
						
						<div class="portlet-body">
							<div class="form-group">
							<div class="input-group">
								
								
								
									<input type="text" class="form-control" name = "search_text" id = "search_text" disabled placeholder="Search by Mam Power Expenses Details">
								<span class="input-group-addon"><button type = "button" class = "btn btn-xs btn-default" disabled id = "btn_find"><i class = "fa fa-search"></i></button></span>
							</div>
                        </div>
                                                						
						

						<div class="form-group">
							<div id = "result2">
								
							</div>              						
						</div>
													
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

            <!-- end of content here -->
        </div>
		</div>
		
				</div>
				<!-- /.modal-dialog -->
			</div>
<div class="modal fade" id="search_employee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-wide">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">SEARCH EMPLOYEE</h4>
						</div>
						<div class="modal-body">
							<div id = "message">

							</div>
							
								
								<input type = "hidden" name = "exp_id" id = "exp_id" value = "yes">
								
								<div class="form-group">
									<div class="col-md-12">
									<div class="input-group">
									
										<span class="input-group-addon"><i class= "fa fa-search"></i></span>
											<input type="text" class="form-control" name = "search_emp" id = "search_emp" placeholder="Search by Employees details">
									</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-12">
										<div id = "emp_result">
									                
                                        </div>
									</div>
								
								</div>
						</div>
					
						<div class="modal-footer">
							
							<button type="button" class="btn btn-default" id= "btn_close" data-dismiss="modal">Close</button>
						</div>
						
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>


			
<div class="modal fade" id="select_mp_expences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">EDIT MP EXPENSES</h4>
						</div>
						<div class="modal-body">
							<div id = "message">

							</div>
							<form action="" role = "form" id="form_sample_1" enctype="multipart/form-data" class="form-horizontal" method = "post">
								
								<input type = "hidden" name = "edit_id" id = "edit_id" value = "yes">
								
								<div class="form-group">
										<label class="control-label col-md-4">Date Created<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "date" class = "form-control" name = "edit_date_create" id = "edit_date_created" >
											
			
										</div>
									</div>
								
                                    <div class="form-group">
										<label class="control-label col-md-4">Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_name" id = "edit_name" >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Designation
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_designation" id = "edit_designation">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Alias<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_alias" id = "edit_alias">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Amount<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_amount" id = "edit_amount">
											
			
										</div>
									</div>
									
									                
                                                
									
								
								</div>
						<div class="modal-footer">
							<button type= "button" class="btn btn-success" id = "btn_edit" disabled><div id = "show_loading2" style="display:none">Updating<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label2"><i class="fa fa-edit"></i>Edit Expenses</div></button>
							<button type="button" class="btn btn-default" id= "btn_close" data-dismiss="modal">Close</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
					
<div class="modal fade" id="delete_mp_expences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">DELETE MP EXPENSES</h4>
						</div>
						<div class="modal-body">
							<div id = "message">

							</div>
							<form action="" role = "form" id="form_sample_1" enctype="multipart/form-data" class="form-horizontal" method = "post">
								
								<input type = "hidden" name = "del_id" id = "del_id" value = "yes">
								
								<div class="form-group">
										<label class="control-label col-md-4">Date Created<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "date" class = "form-control" name = "del_date_created" id = "del_date_created" >
											
			
										</div>
									</div>
								
                                    <div class="form-group">
										<label class="control-label col-md-4">Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_name" id = "del_name" >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Designation
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_designation" id = "del_designation">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Alias<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_alias" id = "del_alias">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Amount<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_amount" id = "del_amount">
											
			
										</div>
									</div>
									
									                
                                                
									
								
								</div>
						<div class="modal-footer">
							<button type= "button" class="btn btn-danger" id = "btn_delete" disabled><div id = "show_loading2" style="display:none">Updating<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label2"><i class="fa fa-trash-o"></i>Delete Record</div></button>
							<button type="button" class="btn btn-default" id= "btn_close" data-dismiss="modal">Close</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>

<script>

//list of items on database 

$(document).ready(function(){

function load_data(){
	var query = $('#site_code').val();
	var date_from = $('#date_from').val();
	var date_to = $('#date_to').val();
	   $.ajax({
		   url:"<?php echo base_url();?>man_power/expences_list",
		   method:"post",
		   data:{query:query,date_from:date_from,date_to:date_to},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   }, beforeSend:function() {
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   })
   }

$('#btn_find').click(function(){
	var query = $('#site_code').val();
	var search = $('#search_text').val();
	var date_from = $('#date_from').val();
	var date_to = $('#date_to').val();
	   $.ajax({
		   url:"<?php echo base_url();?>man_power/expences_list_filter",
		   method:"post",
		   data:{query:query,search:search,date_from:date_from,date_to:date_to},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   }, beforeSend:function() {
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   });
   });

function load_emp(){
	var query = $('#site_code').val();
	var search = $('#search_emp').val();
	if(search==''){
		$( "#emp_result" ).html('');
	}
	else{
	   $.ajax({
		   url:"<?php echo base_url();?>man_power/search_emp",
		   method:"post",
		   data:{query:query,search:search},
		   dataType : "text",
		   success:function(data){
			   $('#emp_result').html(data);
		   }, beforeSend:function() {
			$( "#emp_result" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   })
   }
}


	
		

	$('#search_emp').keyup(function(){
		var search = $(this).val();
		if(search !=''){
			load_emp(search);
		}
		else{
			$( "#emp_result" ).html('');
		}
	});


function showloading(){
	$('#reload').hide();
	$('#loading').show();
}

function showloading2(){
	$('#reload2').hide();
	$('#loading2').show();
}

function load_phase(){
	if($('#site_code').val()==''){
		$('#reload').show();
		$('#loaded').hide();
	}
	else{
	showloading();
	
	var query = $('#site_code').val();
	   $.ajax({
		   url:"<?php echo base_url();?>man_power/phase_list",
		   method:"post",
		   data:{query:query},
		   dataType : "text",
		   success:function(data){
			   
			   $('#loading').hide();
			   $('#loaded').show();
			   $('#loaded').html(data);
		   }, beforeSend:function() {
			//$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
            
		}
	   })
   }
  } 





   $('#site_code').on('change',function(){
		if($(this).val()==''){
			$('#search_text').attr('disabled',true);
			$('#btn_save').attr('disabled',true);
			$('#btn_search').attr('disabled',true);
			$('#btn_find').attr('disabled',true);
			$('#amount').attr('disabled',true);
			
			$('#result2').html('Please Select a Project...');
		}
		else{
			$('#search_text').attr('disabled',false);
			$('#amount').attr('disabled',false);
			$('#btn_save').attr('disabled',false);
			$('#btn_search').attr('disabled',false);
			$('#btn_find').attr('disabled',false);

		load_data();
		load_phase();
		
		
		}
   });

$('#total_amount').keyup(function(){
		
		var total= $('#qty').val() * $('#unit_cost').val();
		$('#total_amount').val(total);
		
   });
$('#edit_total_amount').keyup(function(){
		
		var total= $('#edit_qty').val() * $('#edit_unit_cost').val();
		$('#edit_total_amount').val(total);
		
   });
$('#del_total_amount').keyup(function(){
		
		var total= $('#del_qty').val() * $('#del_unit_cost').val();
		$('#del_total_amount').val(total);
		
   });




// load list of request per PR number


   $("#btn_save").click(function() {
		
	//	if ( confirm("Add to Request?") )
	//		if ( Checked() )
			
				
				Save();
				load_data();
		
	});

	$("#btn_edit").click(function() {
		
	//	if ( confirm("Add to Request?") )
	//		if ( Checked() )
			
				
				Update();
				load_data();
		
	});

		$("#btn_delete").click(function() {
		
	//	if ( confirm("Add to Request?") )
	//		if ( Checked() )
			
				
				Delete();
				load_data();
		
	});

	
    
	

});



function Save() {
	
	cMode = "add";
  	var formData = new FormData();
	
	formData.append('site_code',$('#site_code').val());
	formData.append('date_created',$('#date_created').val());
	formData.append('name',$('#name').val());
	formData.append('alias',$('#alias').val());
	formData.append('designation',$('#designation').val());
	formData.append('amount',$('#amount').val());
	
	if($('#site_code').val()==''){
		toastr.warning('Please Select a Project ','Warning!!!');
		$('#site_code').focus();
		
		
	}
    else if($('#phase').val()==''){
		toastr.warning('Please Select Phase Code ','Warning!!!');
		$('#phase').focus();
		
		
	}
    else if($('#name').val()==''){
		toastr.warning('Please Click the Magnifying Icon ','Warning!!!');
		$('#btn_search').focus();
		
		
	}
	else if(!$.isNumeric($('#amount').val())){
		toastr.warning('Amount is Null','Warning!!!');
		$('#amount').focus();
		if($('#amount').val()==0){
		toastr.warning('Amount is Zero','Warning!!!');
		$('#amount').focus();	
		}
		
	}
    else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>man_power/save_expences",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('Man Power Expenses had been Saved', 'Saved');
				$('#btn_save').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
	            $('#name').val('');
	            $('#amount').val('');
				$('#alias').val('');
	            $('#designation').val('');
				
				load_data();

				
			}
			else if(text =="error"){
				toastr.error('Total Amount Exceeds to Remaining Budget', 'Error');
				$('#btn_save').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
				$('#qty').focus();
			}

			else {
				alert(text);
			}
        },
        beforeSend:function() {
			$('#show_loading').show();
			$('#add_label').hide();
			$('#btn_close').hide();
			$('#btn_save').attr('disabled',true);
			//$( "#message" ).html("<font color = blue><b>Adding...</b></font>");
            
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		}
    });
	}
	

}

function Update() {
	
	cMode = "add";
  	var formData = new FormData();
	
	formData.append('site_code',$('#site_code').val());
	formData.append('id',$('#edit_id').val());
	formData.append('date_created',$('#edit_date_created').val());
	formData.append('name',$('#edit_name').val());
	formData.append('designation',$('#edit_designation').val());
	formData.append('amount',$('#edit_amount').val());
	if($('#edit_name').val()==''){
		toastr.warning('Please type the full name of the employee','Warning!!!');
		$('#edit_name').focus();
		
		
	}
	else if($('#edit_designation').val()==''){
		toastr.warning('Please input a designation / position ','Warning!!!');
		$('#edit_designation').focus();
		
		
	}
	else if(!$.isNumeric($('#edit_amount').val())){
		toastr.warning('Amount is Null','Warning!!!');
		$('#edit_amount').focus();
		if($('#edit_amount').val()==0){
		toastr.warning('Amount is Zero','Warning!!!');
		$('#edit_amount').focus();	
		}
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>man_power/update_expences",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('Man Power Expense had been Edited', 'Updated');
				$('#btn_edit').attr('disabled',true);
				$('#select_mp_expences').modal("hide");
				$('#show_loading2').hide();
				$('#btn_close').show();
				$('#add_label2').show();
				$('#edit_id').val('');
	            $('#edit_name').val('');
	            $('#edit_designation').val('');
				$('#edit_alias').val('');
	            $('#edit_amount').val('');
				
				load_data();

				
			}
			else if(text =="transferred"){
				toastr.info('This item had been Transferred to another Phase Code', 'Notification');
				$('#btn_edit').attr('disabled',true);
				$('#selected_expences').modal("hide");
				$('#show_loading2').hide();
				$('#btn_close').show();
				$('#add_label2').show();
	            $('#edit_supplier_name').val('');
	            $('#edit_address').val('');
				$('#edit_tin').val('');
	            $('#edit_details').val('');
				$('#edit_unit_cost').val('');
				$('#edit_qty').val('');
	            $('#edit_total_amount').val('');
				$('#edit_supplier_name').focus();
	
				load_data();

			}
			else if(text =="error_trans"){
				toastr.error('YOU ARE NOT ALLOW TO CHANGE PHASE CODE AND  TOTAL AMOUNT SIMULTANEOUSLY ', 'ERROR');
				$('#btn_edit').attr('disabled',false);
				$('#show_loading2').hide();
				$('#btn_close').show();
				$('#add_label2').show();
				
				$('#edit_phase').focus();
	
				load_data();

			}

			else {
				alert(text);
			}
        },
        beforeSend:function() {
			$('#show_loading2').show();
			$('#add_label2').hide();
			$('#btn_close2').hide();
			$('#btn_edit').attr('disabled',true);
			//$( "#message" ).html("<font color = blue><b>Adding...</b></font>");
            
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		}
    });
	}
	

}

function Delete() {
	
	cMode = "add";
  	var formData = new FormData();
	
	formData.append('site_code',$('#site_code').val());
	formData.append('id',$('#del_id').val());
	$.ajax({
        type: "POST",
        url:"<?php echo base_url();?>man_power/delete_expences",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.info('RECORD DELETED', 'DELETED');
				$('#btn_delete').attr('disabled',true);
				$('#delete_mp_expences').modal("hide");
				$('#show_loading2').hide();
				$('#btn_close').show();
				$('#add_label2').show();
				$('#del_id').val('');
	            $('#del_name').val('');
	            $('#del_designation').val('');
				$('#del_alias').val('');
	            $('#del_amount').val('');
				
				load_data();

				
			}
			else if(text =="transferred"){
				toastr.info('This item had been Transferred to another Phase Code', 'Notification');
				$('#btn_edit').attr('disabled',true);
				$('#selected_expences').modal("hide");
				$('#show_loading2').hide();
				$('#btn_close').show();
				$('#add_label2').show();
	            $('#edit_supplier_name').val('');
	            $('#edit_address').val('');
				$('#edit_tin').val('');
	            $('#edit_details').val('');
				$('#edit_unit_cost').val('');
				$('#edit_qty').val('');
	            $('#edit_total_amount').val('');
				$('#edit_supplier_name').focus();
	
				load_data();

			}
			else if(text =="error_trans"){
				toastr.error('YOU ARE NOT ALLOW TO CHANGE PHASE CODE AND  TOTAL AMOUNT SIMULTANEOUSLY ', 'ERROR');
				$('#btn_edit').attr('disabled',false);
				$('#show_loading2').hide();
				$('#btn_close').show();
				$('#add_label2').show();
				
				$('#edit_phase').focus();
	
				load_data();

			}

			else {
				alert(text);
			}
        },
        beforeSend:function() {
			$('#show_loading2').show();
			$('#add_label2').hide();
			$('#btn_close2').hide();
			$('#btn_delete').attr('disabled',true);
			//$( "#message" ).html("<font color = blue><b>Adding...</b></font>");
            
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		}
    });
	
	

}





//window.onbeforeunload=function(){
	//return "";
//}

</script>
<!-- END CONTAINER -->
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");
include("include/script_users.inc.php");
?>

