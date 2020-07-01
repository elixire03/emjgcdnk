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
			Collection Module<!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-user"></i>
						<a href="/collection/">Collection Module</a>
						
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
															<label class="control-label col-md-3">Date Created</label>
															<div class="col-md-9">
																<input type="date" class="form-control" name = "date_created" id = "date_created" value ="<?php echo date('Y-m-d')?>" disabled>
																
															</div>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Collected Amount:</label>
															<div class="col-md-9">
															<input type = "text" id = "collected_amount" name = "collected_amount" class = "form-control" disabled>
															</div>
														</div>
													</div>
													
													<!--/span-->
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Reference Document:</label>
															<div class="col-md-9">
																<input type="text" name = "refe_doc" id = "ref_doc" value = "" class="form-control" disabled>
															</div>
														</div>
													</div>
													
													<!--/span-->
													<!--/span-->
												</div>
												<div class="row">
													
													<!--/span-->
													<!--/span-->
												</div>
												
												<!--/row-->
												<div class="row">
												    <div class="col-md-12">
														<div class="form-group">
													        <div class="modal-footer">
                                                               
						                            	        <button type= "button" class="btn btn-default" id = "btn_save" disabled><div id = "show_loading" style="display:none">Adding<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label">Collect</div></button>
							                                    
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
								<i class="fa fa-pencil"></i>List of Collection
							</div>
							
							
						</div>
						
						<div class="portlet-body">
							<div class="form-group">
							<div class="input-group">
								
								<span class="input-group-addon">SEARCH</span>
								
									<input type="text" class="form-control" name = "search_text" id = "search_text" disabled placeholder="Search by Collection Details">
								
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
					

			
<div class="modal fade" id="edit_collection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">EDIT COLLECTION</h4>
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
											<input type = "date" class = "form-control" name = "edit_date_created" id = "edit_date_created">
											
			
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
									
									<div class="form-group">
										<label class="control-label col-md-4">Reference Document<span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											
											<input type = "text" class = "form-control" name = "edit_ref_doc" id = "edit_ref_doc" >
											
			
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

function load_data(){
	var query = $('#site_code').val();
	   $.ajax({
		   url:"<?php echo base_url();?>collection/collection_list",
		   method:"post",
		   data:'query='+query,
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   }, beforeSend:function() {
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   })
   }

function load_data2(){
	var query = $('#site_code').val();
	var search = $('#search_text').val();
	   $.ajax({
		   url:"<?php echo base_url();?>collection/collection_list_filter",
		   method:"post",
		   data:{query:query,search:search},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   }, beforeSend:function() {
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
		   }
	   })
   }

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search !=''){
			load_data2(search);
		}
		else{
			load_data();
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



   $('#site_code').on('change',function(){
		if($(this).val()==''){
			$('#search_text').attr('disabled',true);
			$('#date_created').attr('disabled',true);
			$('#collected_amount').attr('disabled',true);
			$('#ref_doc').attr('disabled',true);
			$('#btn_save').attr('disabled',true);
			$('#result2').html('Please Select a Project...');
		}
		else{
			$('#search_text').attr('disabled',false);
			$('#date_created').attr('disabled',false);
			$('#collected_amount').attr('disabled',false);
			$('#ref_doc').attr('disabled',false);
			$('#btn_save').attr('disabled',false);
		load_data();
		
		}
   });

$('#total_amount').keyup(function(){
		
		var total= $('#collected_amount').val() * $('#unit_cost').val();
		$('#total_amount').val(total);
		
   });
$('#edit_total_amount').keyup(function(){
		
		var total= $('#edit_collected_amount').val() * $('#edit_unit_cost').val();
		$('#edit_total_amount').val(total);
		
   });
$('#del_total_amount').keyup(function(){
		
		var total= $('#del_collected_amount').val() * $('#del_unit_cost').val();
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

	
    
	

});



function Save() {
	
	cMode = "add";
  	var formData = new FormData();
	
	formData.append('site_code',$('#site_code').val());
	
	formData.append('date_created',$('#date_created').val());
	formData.append('collected_amount',$('#collected_amount').val());
	formData.append('ref_doc',$('#ref_doc').val());
	if($('#site_code').val()==''){
		toastr.warning('Please Select a Project ','Warning!!!');
		$('#site_code').focus();
		
		
	}
    
    
	
	else if(!$.isNumeric($('#collected_amount').val())){
		toastr.warning('Amount is Null','Warning!!!');
		$('#collected_amount').focus();
		if($('#collected_amount').val()==0){
		toastr.warning('Amount is Zero','Warning!!!');
		$('#collected_amount').focus();	
		}
		
		
	}
	else if($('#ref_doc').val()==''){
		toastr.warning('Please Type the Reference Document','Warning!!!');
		$('#ref_doc').focus();
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>collection/save_expences",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('Collection had been Added', 'Saved');
				$('#btn_save').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
	            
	            $('#collected_amount').val('');
				$('#ref_doc').val('');
				$('#site_code').focus();
	
				load_data();

				
			}
			else if(text =="error"){
				toastr.error('Total Amount Exceeds to Remaining Budget', 'Error');
				$('#btn_save').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
				$('#collected_amount').focus();
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
	formData.append('collected_amount',$('#edit_amount').val());
	formData.append('ref_doc',$('#edit_ref_doc').val());
	if($('#site_code').val()==''){
		toastr.warning('Please Select a Project ','Warning!!!');
		$('#site_code').focus();
		
		
	}
    
    
	
	else if(!$.isNumeric($('#edit_amount').val())){
		toastr.warning('Amount is Null','Warning!!!');
		$('#edit_collected_amount').focus();
		if($('#edit_collected_amount').val()==0){
		toastr.warning('Amount is Zero','Warning!!!');
		$('#edit_collected_amount').focus();	
		}
		
		
	}
	else if($('#edit_ref_doc').val()==''){
		toastr.warning('Please Type the Reference Document','Warning!!!');
		$('#edit_ref_doc').focus();
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>collection/update_collection",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				toastr.success('Collection had been edited', 'Updated');
				$('#edit_collection').modal('hide');
				$('#btn_edit').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
	            
	            $('#edit_amount').val('');
				$('#edit_ref_doc').val('');
				$('#site_code').focus();
	
				load_data();

				
			}
			else if(text =="error"){
				toastr.error('Total Amount Exceeds to Remaining Budget', 'Error');
				$('#btn_save').attr('disabled',false);
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
				$('#collected_amount').focus();
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
	//return "";
//}

</script>
<!-- END CONTAINER -->
<!--CONTENT END HERE-->
<?php 
include("include/footer_users.inc.php");
include("include/script_users.inc.php");
?>

