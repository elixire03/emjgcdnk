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
			Other Expenses<!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-folder"></i>
						<a href="/other_expences/">Other Expenses</a>
						
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
														<form>
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
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Supplier Name:</label>
															<div class="col-md-9">
																<input type="text" name = "supplier_name" id = "supplier_name" value = "" class="form-control" >
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">address</label>
															<div class="col-md-9">
																<input type="text" name = "address" id = "address" value = "" class="form-control" >
																
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">TIN No.:</label>
															<div class="col-md-9">
																<input type="text" name = "tin" id = "tin" value = "" class="form-control" >
																
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<hr>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Details:</label>
															<div class="col-md-9">
																<input type="text" name = "details" id = "details" value = "" class="form-control" >
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Quantity</label>
															<div class="col-md-9">
																<input type="text" name = "qty" id = "qty" value = "" class="form-control" >
																
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Unit Cost:</label>
															<div class="col-md-9">
																<input type="text" name = "unit_cost" id = "unit_cost" value = "" class="form-control" >
															</div>
														</div>
													</div>
													<!--/span-->
                                                    <div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Total Amount:</label>
															<div class="col-md-9">
																<input type="text" name = "total_amount" id = "total_amount" value = "" class="form-control" readonly>
															</div>
														</div>
													</div>
                                                    <div class="col-md-12">
														<div class="form-group">
													        <div class="modal-footer">
                                                               
						                            	        <button type= "button" class="btn btn-default" id = "btn_save"><div id = "show_loading" style="display:none">Adding<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label">Add to Expenses</div></button>
							                                    
						                                </div>
                                                       </div>
                                                    </div>
													<!--/span-->
												</div>
												</form>
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
								
								
								
									<input type="text" class="form-control" name = "search_text" id = "search_text" disabled placeholder="Search by Expenses Details">
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
					

			
<div class="modal fade" id="selected_expences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">EDIT EXPENSES</h4>
						</div>
						<div class="modal-body">
							<div id = "message">

							</div>
							<form action="" role = "form" id="form_sample_1" enctype="multipart/form-data" class="form-horizontal" method = "post">
								
								<input type = "hidden" name = "exp_id" id = "exp_id" value = "yes">
								<input type = "hidden" name = "old_phase" id = "old_phase" value = "yes">
								<div class="form-group">
										<label class="control-label col-md-4">Project Code<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_project_code" id = "edit_project_code" readonly>
											
			
										</div>
									</div>
								<div class="form-group">
										<label class="control-label col-md-4">Phase<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div id = "reload2">
															<select class= "form-control" name = "p1" id = "p1" required>
                                                               <option value = "">Select...</option>
                                                            </select>
															</div>
															<div id = "loading2" style="display:none">
															<select class= "form-control" name ="p2" id = "p2" required>
																<option>Loading...</option>
															</select>
															</div>
															<div id = "loaded2">
															</div>
															
											
			
										</div>
									</div>									
                                    <div class="form-group">
										<label class="control-label col-md-4">Date Created<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "date" class = "form-control" name = "edit_date_create" id = "edit_date_created" >
											
			
										</div>
									</div>
								
                                    <div class="form-group">
										<label class="control-label col-md-4">Supplier Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_supplier_name" id = "edit_supplier_name" >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Address
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_address" id = "edit_address">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Tin No.<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_tin" id = "edit_tin">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Details<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_details" id = "edit_details">
											
			
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-4">Quantity<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type = "text" class = "form-control" name = "edit_qty" id = "edit_qty">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Unit Cost<span class="required">
										* </span>
										</label>
										<div class="col-md-3">
											<input type = "text" class = "form-control" name = "edit_unit_cost" id = "edit_unit_cost"  >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Total Amount<span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											<input type = "hidden" class = "form-control" name = "old_total_amount" id = "old_total_amount">
											<input type = "text" class = "form-control" name = "edit_total_amount" id = "edit_total_amount" readonly >
											
			
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
					
<div class="modal fade" id="delete_expences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">DELETE EXPENSES</h4>
						</div>
						<div class="modal-body">
							<div id = "message">

							</div>
							<form action="" role = "form" id="form_sample_1" enctype="multipart/form-data" class="form-horizontal" method = "post">
								
								<input type = "hidden" name = "del_id" id = "del_id" value = "yes">
								
								<div class="form-group">
										<label class="control-label col-md-4">Project Code<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_project_code" id = "del_project_code" readonly>
											
			
										</div>
									</div>
										
                                    <div class="form-group">
										<label class="control-label col-md-4">Date Created<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "date" class = "form-control" name = "del_date_create" id = "del_date_created" >
											
			
										</div>
									</div>
								
                                    <div class="form-group">
										<label class="control-label col-md-4">Supplier Name<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_supplier_name" id = "del_supplier_name" >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Address
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_address" id = "del_address">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Tin No.<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_tin" id = "del_tin">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Details<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "del_details" id = "del_details">
											
			
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-4">Quantity<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type = "text" class = "form-control" name = "del_qty" id = "del_qty">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Unit Cost<span class="required">
										* </span>
										</label>
										<div class="col-md-3">
											<input type = "text" class = "form-control" name = "del_unit_cost" id = "del_unit_cost"  >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Total Amount<span class="required">
										* </span>
										</label>
										<div class="col-md-8">
											
											<input type = "text" class = "form-control" name = "del_total_amount" id = "del_total_amount" readonly >
											
			
										</div>
									</div>
									                
                                                
									
								
								</div>
						<div class="modal-footer">
							<button type= "button" class="btn btn-danger" id = "btn_delete" disabled><div id = "show_loading2" style="display:none">Updating<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label2"><i class="fa fa-trash-o"></i>Delete Expenses</div></button>
							<button type="button" class="btn btn-default" id= "btn_close" data-dismiss="modal">Close</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			</div>
					






<script>

//list of items on database 

$(document).ready(function(){

function load_data(){
	var query = $('#site_code').val();
	var date_from = $('#date_from').val();
	var date_to = $('#date_to').val();
	   $.ajax({
		   url:"<?php echo base_url();?>other_expences/expences_list",
		   method:"post",
		   data:{query:query,date_from:date_from,date_to:date_to},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   }, beforeSend:function() {
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   });
   }

$('#btn_find').click(function(){
	var query = $('#site_code').val();
	var search = $('#search_text').val();
	var date_from = $('#date_from').val();
	var date_to = $('#date_to').val();
	   $.ajax({
		   url:"<?php echo base_url();?>other_expences/expences_list_filter",
		   method:"post",
		   data:{query:query,search:search,date_from:date_from,date_to:date_to},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   }, beforeSend:function() {
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   })
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
	}
	var query = $('#site_code').val();
	   $.ajax({
		   url:"<?php echo base_url();?>other_expences/phase_list",
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

function load_phase2(){
	if($('#site_code').val()==''){
		$('#reload2').show();
		$('#loaded2').hide();
	}
	else{
	showloading2();
	}
	var query = $('#site_code').val();
	   $.ajax({
		   url:"<?php echo base_url();?>other_expences/phase_list2",
		   method:"post",
		   data:{query:query},
		   dataType : "text",
		   success:function(data){
			   
			   $('#loading2').hide();
			   $('#loaded2').show();
			   $('#loaded2').html(data);
		   }, beforeSend:function() {
			//$( "#message" ).html("<font color = blue><b>Adding...</b></font>");
            
		}
	   })
   }





   $('#site_code').on('change',function(){
		if($(this).val()==''){
			$('#search_text').attr('disabled',true);
			$('#btn_find').attr('disabled',true);
			$('#result2').html('Please Select a Project...');
		}
		else{
			$('#search_text').attr('disabled',false);
			$('#btn_find').attr('disabled',false);
		load_data();
		load_phase();
		load_phase2();
		
		
		}
   });

$('#total_amount').click(function(){
		
		var total= $('#qty').val() * $('#unit_cost').val();
		$('#total_amount').val(total);
		
   });
$('#edit_total_amount').click(function(){
		
		var total= $('#edit_qty').val() * $('#edit_unit_cost').val();
		$('#edit_total_amount').val(total);
		
   });
$('#del_total_amount').click(function(){
		
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
				Update();
				load_data();
		
	});

		$("#btn_delete").click(function() {
				Delete();
				load_data();		
	});

	
    
	

});



function Save() {
	
	cMode = "add";
  	var formData = new FormData();
	
	formData.append('site_code',$('#site_code').val());
	formData.append('phase',$('#phase').val());
	formData.append('supplier_name',$('#supplier_name').val());
	formData.append('tin',$('#tin').val());
	formData.append('date_created',$('#date_created').val());
	formData.append('address',$('#address').val());
	formData.append('details',$('#details').val());
	formData.append('qty',$('#qty').val());
	formData.append('unit_cost',$('#unit_cost').val());
	formData.append('total_amount',$('#total_amount').val());
	if($('#site_code').val()==''){
		toastr.warning('Please Select a Project ','Warning!!!');
		$('#site_code').focus();
		
		
	}
    
    else if($('#phase').val()==''){
		toastr.warning('Please Select on Phase ','Warning!!!');
		$('#phase').focus();
		
		
	}
	else if($('#supplier_name').val()==''){
		toastr.warning('Please input a Supplier ','Warning!!!');
		$('#supplier_name').focus();
		
		
	}
	else if($('#address').val()==''){
		toastr.warning('Please input a Address','Warning!!!');
		$('#address').focus();
		
		
	}
	else if($('#tin').val()==''){
		toastr.warning('Please input a TIN No. ','Warning!!!');
		$('#tin').focus();
		
		
	}
    else if($('#details').val()==''){
		toastr.warning('Please Insert a Detail','Warning!!!');
		$('#details').focus();
    }
	else if(!$.isNumeric($('#qty').val())){
		toastr.warning('Quantity is Null','Warning!!!');
		$('#qty').focus();
		if($('#qty').val()==0){
		toastr.warning('Quantity is Zero','Warning!!!');
		$('#qty').focus();	
		}
		
		
	}
	else if(!$.isNumeric($('#unit_cost').val())){
		toastr.warning('Unit Cost is Null','Warning!!!');
		$('#unit_cost').focus();
		if($('#unit_cost').val()==0){
		toastr.warning('Quantity is Zero','Warning!!!');
		$('#unit_cost').focus();	
		}
		
	}
    else if(!$.isNumeric($('#total_amount').val())){
		toastr.warning('Budget Cost is Null','Warning!!!');
		$('#total_amount').focus();
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>other_expences/save_expences",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('new Other Expenses had been Added', 'Saved');
				$('#btn_save').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
	            $('#supplier_name').val('');
	            $('#address').val('');
				$('#tin').val('');
	            $('#details').val('');
				$('#unit_cost').val('');
				$('#qty').val('');
	            $('#total_amount').val('');
				$('#supplier_name').focus();
	
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
	
	formData.append('site_code',$('#edit_project_code').val());
	formData.append('exp_id',$('#exp_id').val());
	formData.append('phase',$('#edit_phase').val());
	formData.append('old_phase',$('#old_phase').val());
	formData.append('supplier_name',$('#edit_supplier_name').val());
	formData.append('tin',$('#edit_tin').val());
	formData.append('date_created',$('#edit_date_created').val());
	formData.append('address',$('#edit_address').val());
	formData.append('details',$('#edit_details').val());
	formData.append('qty',$('#edit_qty').val());
	formData.append('unit_cost',$('#edit_unit_cost').val());
	formData.append('old_total_amount',$('#old_total_amount').val());
	formData.append('total_amount',$('#edit_total_amount').val());
	if($('#edit_phase').val()==''){
		toastr.warning('Please Select on Phase ','Warning!!!');
		$('#edit_phase').focus();
		
		
	}
	else if($('#edit_supplier_name').val()==''){
		toastr.warning('Please input a Supplier ','Warning!!!');
		$('#edit_supplier_name').focus();
		
		
	}
	else if($('#edit_address').val()==''){
		toastr.warning('Please input a Address','Warning!!!');
		$('#edit_address').focus();
		
		
	}
	else if($('#edit_tin').val()==''){
		toastr.warning('Please input a TIN No. ','Warning!!!');
		$('#edit_tin').focus();
		
		
	}
    else if($('#edit_details').val()==''){
		toastr.warning('Please Insert a Detail','Warning!!!');
		$('#edit_details').focus();
    }
	else if(!$.isNumeric($('#edit_qty').val())){
		toastr.warning('Quantity is Null','Warning!!!');
		$('#edit_qty').focus();
		if($('#edit_qty').val()==0){
		toastr.warning('Quantity is Zero','Warning!!!');
		$('#edit_qty').focus();	
		}
		
		
	}
	else if(!$.isNumeric($('#edit_unit_cost').val())){
		toastr.warning('Unit Cost is Null','Warning!!!');
		$('#edit_unit_cost').focus();
		if($('#edit_unit_cost').val()==0){
		toastr.warning('Quantity is Zero','Warning!!!');
		$('#edit_unit_cost').focus();	
		}
		
	}
    else if(!$.isNumeric($('#edit_total_amount').val())){
		toastr.warning('Budget Cost is Null','Warning!!!');
		$('#edit_total_amount').focus();
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>other_expences/update_expences",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('Other Expenses had been Edited', 'Updated');
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
        url:"<?php echo base_url();?>other_expences/delete_expences",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.info('RECORD DELETED', 'DELETED');
				$('#btn_delete').attr('disabled',true);
				$('#delete_expences').modal("hide");
				$('#show_loading2').hide();
				$('#btn_close').show();
				$('#add_label2').show();
				$('#del_id').val('');
	            $('#del_name').val('');
	            $('#del_designation').val('');
				$('#del_alias').val('');
	            $('#del_amount').val('');
				
				

				
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

