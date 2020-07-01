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
			Phase of Work<!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-user"></i>
						<a href="/phase/">Phase of Work</a>
						
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
															<label class="control-label col-md-3">New Phase Code:</label>
															<div class="col-md-9">
																<input type="text" name = "phase_code" id = "phase_code" value = "" class="form-control" >
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date Created</label>
															<div class="col-md-9">
																<input type="date" class="form-control" name = "date_created" id = "date_created" value ="<?php echo date('Y-m-d')?>"  readonly >
																
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">New Phase Description:</label>
															<div class="col-md-9">
																<input type="text" name = "phase_description" id = "phase_description" value = "" class="form-control" >
															</div>
														</div>
													</div>
													<!--/span-->
                                                    <div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Budget Cost:</label>
															<div class="col-md-9">
																<input type="text" name = "budget_cost" id = "budget_cost" value = "" class="form-control">
															</div>
														</div>
													</div>
                                                    <div class="col-md-12">
														<div class="form-group">
													        <div class="modal-footer">
                                                                
						                            	        <button type= "button" class="btn btn-default" id = "btn_save"><div id = "show_loading" style="display:none">Adding<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label">Add Phase</div></button>
							                                    
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
								<i class="fa fa-pencil"></i>Phase of Work
							</div>
							
							
						</div>
						
						<div class="portlet-body">
							<div id = "result2">

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
					

<div class="modal fade" id="edit_phase" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">EDIT PHASE CODE</h4>
						</div>
						<div class="modal-body">
							<div id = "message">

							</div>
							<form action="" role = "form" id="form_sample_1" enctype="multipart/form-data" class="form-horizontal" method = "post">
								
								<input type = "hidden" name = "edit_id" id = "edit_id" value = "yes">
								
								    <div class="form-group">
										<label class="control-label col-md-4">Phase Code<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_phase_code" id = "edit_phase_code" >
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Phase Description
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_phase_desc" id = "edit_phase_desc">
											
			
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Budget Cost<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<input type = "text" class = "form-control" name = "edit_budget_cost" id = "edit_budget_cost">
											
			
										</div>
									</div>
									
									                
                                                
									
								
								</div>
						<div class="modal-footer">
							<button type= "button" class="btn btn-success" id = "btn_edit" disabled><div id = "show_loading2" style="display:none">Updating<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label2"><i class="fa fa-edit">Edit Expenses</i></div></button>
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
load_data();
function load_data(){
	var query = $('#site_code').val();
	if(query == '')
	{
		$('#result2').html('Please Select a Project...');
	}
	else{
		$.ajax({
		   url:"<?php echo base_url();?>phase/phase_list",
		   method:"post",
		   data:{query:query},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   },
		   beforeSend:function() {
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   });
	}
	   
   }


   $('#site_code').on('change',function(){
		var search = $(this).val();
		if($(this).val()==''){
			$('#result2').html('Please Select a Project...');
		}
		else{
			load_data(search);
		}
		
		
		
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

	
    
	

});


function Save() {
	
	cMode = "add";
  	var formData = new FormData();
	formData.append('pr_id', $("#pr_id").val());
	formData.append('site_code',$('#site_code').val());
	formData.append('phase_code',$('#phase_code').val());
	formData.append('phase_description',$('#phase_description').val());
	formData.append('budget_cost',$('#budget_cost').val());
	
    if($('#site_code').val()==''){
		toastr.warning('Please Select Project','Warning!!!');
		$('#site_code').focus();
		
		
	}
    else if($('#phase_code').val()==''){
		toastr.warning('Please Insert on Phase Code','Warning!!!');
		$('#phase_code').focus();
		
		
	}
    else if($('#phase_description').val()==''){
		toastr.warning('Please Insert on Phase Description','Warning!!!');
		$('#phase_description').focus();
    }
	
    else if(!$.isNumeric($('#budget_cost').val())){
		toastr.warning('Budget Cost is Null','Warning!!!');
		$('#budget_cost').focus();
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>phase/save_phase",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('Request had been Saved', 'Saved');
				$('#btn_save').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
	            
	            $('#phase_code').val('');
	            $('#phase_description').val('');
	            $('#budget_cost').val('');
	
				load_data();
				
			}
			else if(text =="input_error"){
				toastr.error('Qty error', 'Error');
				$('#po_qty').focus();
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
	formData.append('id', $("#edit_id").val());
	formData.append('site_code',$('#site_code').val());
	formData.append('phase_code',$('#edit_phase_code').val());
	formData.append('phase_desc',$('#edit_phase_desc').val());
	formData.append('budget_cost',$('#edit_budget_cost').val());
	
    if($('#site_code').val()==''){
		toastr.warning('Please Select Project','Warning!!!');
		$('#site_code').focus();
		
		
	}
    else if($('#edit_phase_code').val()==''){
		toastr.warning('Please Insert on Phase Code','Warning!!!');
		$('#edit_phase_code').focus();
		
		
	}
    else if($('#edit_phase_description').val()==''){
		toastr.warning('Please Insert on Phase Description','Warning!!!');
		$('#edit_phase_description').focus();
    }
	else if($('#edit_budget_cost').val()==0){
		toastr.warning('Budget Cost is Zero','Warning!!!');
		$('#edit_budget_cost').focus();
		}
    else if(!$.isNumeric($('#edit_budget_cost').val())){
		toastr.warning('Budget Cost is Null','Warning!!!');
		$('#edit_budget_cost').focus();
		
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>phase/update_phase",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('Budget had been Edited', 'Updated');
				$('#btn_edit').attr('disabled',false);
				$('#edit_phase').modal("hide");
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
	            $('#edit_id').val('');
	            $('#edit_phase_code').val('');
	            $('#edit_phase_desc').val('');
	            $('#edit_budget_cost').val('');
	
				load_data();
				
			}
			else if(text =="input_error"){
				toastr.error('Qty error', 'Error');
				$('#po_qty').focus();
			}

			else {
				alert(text);
			}
        },
        beforeSend:function() {
			$('#show_loading').show();
			$('#add_label').hide();
			$('#btn_close').hide();
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




//window.onbeforeunload=function(){
//	return "";
//}

</script>
<!-- END CONTAINER -->
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");
include("include/script_users.inc.php");
?>

