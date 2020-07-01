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
			Import Other Expenses <!--<small>statistics and more</small> -->
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa icon-user"></i>
						<a href="/uploads/">Import Other Expenses</a>
						
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
										<form method = "post" enctype = "multipart/fom-data" >
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
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-1">CSV File:</label>
															<div class="col-md-8">
																
                                                                <input type = "file" class = "form-control" name = "my_file" id = "my_file" disabled>
															
																<button type= "button" class="btn btn-default" id = "btn_save" disabled><div id = "show_loading" style="display:none">Loading&nbsp;<i class="fa fa-spinner fa-spin"></i></div><div id = "add_label">Import</div></button>
							                                    
															</div>
														</div>
													</div>
													
                                                </div>

												<hr>
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
											
											</form>
												<!--/row-->
												
												<!--/row-->
											</div>
											
										
										<!-- END FORM-->
									</div>
								</div>
							</div>
			<div id = "message2"></div>
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
								
								<span class="input-group-addon">SEARCH</span>
								
									<input type="text" class="form-control" name = "search_text" id = "search_text" disabled placeholder="Search by Expenses Details">
								
							</div>
                        </div>
                                                						
						

						<div class="form-group">
							<div id = "result2">
								
							</div>
                            <div id = "csv_data">              						

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
					
<script>
//list of items on database 



$(document).ready(function(){

function load_data(){
	var query = $('#site_code').val();
	var date_from = $('#date_from').val();
	var date_to = $('#date_to').val();
	
	   $.ajax({
		   url:"<?php echo base_url();?>other_expences/expences_list2",
		   method:"post",
		   data:{query:query,date_from:date_from,date_to:date_to},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
		   }
	   })
   }

function load_data2(){
	var query = $('#site_code').val();
	var search = $('#search_text').val();
	var date_from = $('#date_from').val();
	var date_to = $('#date_to').val();
	
	   $.ajax({
		   url:"<?php echo base_url();?>other_expences/expences_list_filter2",
		   method:"post",
		   data:{query:query,search:search,date_from:date_from,date_to:date_to},
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
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
			//$( "#message" ).html("<font color = blue><b>Adding...</b></font>");
            
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
			$( "#result2" ).html('<center><font color = blue><b>Loading...<i class="fa fa-spinner fa-spin"></i></b></font>');
            
		}
	   })
   }





   $('#site_code').on('change',function(){
		if($(this).val()==''){
			$('#search_text').attr('disabled',true);
            $('#btn_save').attr('disabled',true);
			$('#my_file').attr('disabled',true);
			$('#result2').html('Please Select a Project...');
		}
		else{
			$('#search_text').attr('disabled',false);
            $('#btn_save').attr('disabled',false);
            $('#my_file').attr('disabled',false);
		load_data();
		load_phase();
		load_phase2();
		
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




// load list of request per PR number


   $("#btn_save").click(function() {
		
	//	if ( confirm("Add to Request?") )
	//		if ( Checked() )
			
				
				Upload();
				load_data();
		
	});

	$("#btn_edit").click(function() {
		
	//	if ( confirm("Add to Request?") )
	//		if ( Checked() )
			
				
				Update();
				load_data();
		
	});

	
    
	

});



function Upload() {
	
	cMode = "add";
  	var formData = new FormData();
	
	formData.append('site_code',$('#site_code').val());
    formData.append('my_file',$('#my_file').val());
    formData.append('my_file',document.getElementById('my_file').files[0]);
	if($('#site_code').val()==''){
		toastr.warning('Please Select a Project ','Warning!!!');
		$('#site_code').focus();
		
		
	}
    
    else if($('#my_file').val()==''){
		$('#show_loading').show();
		$('#add_label').hide();
		$('#btn_close').hide();
		$('#btn_save').attr('disabled',true);
        $('#btn_save').attr('disabled',false);
		$('#show_loading').hide();
		$('#btn_close').show();
		$('#add_label').show();
		
        toastr.warning('Please Select a File','No File Selected!!!');
        $('#my_file').focus();
		
		
	}
	else{


    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>uploads/import",
		processData: false,
		contentType: false,
		cached:false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				//$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				
				toastr.success('File had been Uploaded', 'Data Added');
				$('#btn_save').attr('disabled',false);
                $('#my_file').attr('disabled',false);
                $('#site_code').attr('disabled',false);
                $('#show_loading').hide();
				$('#add_label').show();
				
				
	            
				

				
			}
			else if(text =="check_pc_id"){
				toastr.error('IMPORT ERROR PLEASE CHECK PC_ID ON YOUR XLS OR CSV FILE', 'Error');
				$('#btn_save').attr('disabled',false);
                $('#my_file').attr('disabled',false);
                $('#site_code').attr('disabled',false);
                
				$('#show_loading').hide();
				$('#btn_close').show();
				$('#add_label').show();
				$('#my_file').focus();
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
            $('#my_file').attr('disabled',true);
            $('#site_code').attr('disabled',true);
			//$( "#message" ).html("<font color = blue><b>Adding...</b></font>");
            
		},
// 		error: function (xhr, ajaxOptions, thrownError) {
// 			toastr.error(xhr.status,'FILE PATH NOT FOUND');
// 			toastr.error(thrownError,'UPLOAD PATH');
// 			toastr.error(ajaxOptions,'Ajax Options Error');
//             $('#btn_save').attr('disabled',false);
//             $('#my_file').attr('disabled',false);
//             $('#site_code').attr('disabled',false);
//             $('#show_loading').hide();
// 			$('#btn_close').show();
// 			$('#add_label').show();
// 		}
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

