
$(document).ready(function(){



// SEARCH AND SELECT PO
po_list();
function po_list(){
    $.ajax({
		   url:"<?php echo base_url();?>rr/po_list",
		   method:"post",
		   data:'query=',
		   dataType : "text",
		   success:function(data){
			   $('#po_result').html(data);
			   
		   }
	   });
}
// load if you select a PO
load_data();
function load_data(query){
	var po_num = $('#po_number').val();
	   $.ajax({
		   url:"<?php echo base_url();?>rr/my_po_list2",
		   method:"post",
		   data:'query='+po_num,
		   dataType : "text",
		   success:function(data){
			   $('#result').html(data);
		   }
	   });
   }


   $('#po_number').keyup(function(){
		var search = $(this).val();

		if(search !=''){
			load_data(search);
		}
		else{
			load_data();
		}
		
   });



load_po_list();
function load_po_list(){
	var query = $('#rr_number').val();
	   $.ajax({
		   url:"<?php echo base_url();?>po/po_item_list",
		   method:"post",
		   data:'query='+query,
		   dataType : "text",
		   success:function(data){
			   $('#result2').html(data);
			   
		   }
	   });
   }

   $('#rr_number').keyup(function(){
		var this_pr = $(this).val();

		if(this_pr !=''){
			load_po_list(this_pr);
		}
		else{
			load_po_list();
		}
   });

   $('#total_cost').keyup(function(){
		var total_cost = $(this).val('');
		var po_qty = $('#po_qty').val();
		var unit_cost = $('#unit_cost').val();
		var discount = $('#discount').val();
		var disc = 1-(discount *0.01);
		var vat = $('#vat').val();
		var tvat = (vat*0.01)+1;
		var total_unit_cost = po_qty * unit_cost;
		var total =(total_unit_cost*disc)*tvat;
		$(this).val(total);
		
   });

// load list of request per PR number


   $("#btn_save").click(function() {
		
	//	if ( confirm("Add to Request?") )
	//		if ( Checked() )
				Save();
				Update();
				load_po_list();
		
	});
	

});


function Checked()
{
	if ( $("#pr_qty").val().trim() == "" ) {
		alert("Please Input a numeric Value for PR QTY!");
		$("#pr_qty").focus();
		return false;
	}
}

$("#btn_update_info").click(function() {
		
	//	if ( confirm("Add to Request?") )
	//		if ( Checked() )
				Update();
				load_po_list();
		
	});

function Save() {
	
	cMode = "add";
  	var formData = new FormData();
	formData.append('pr_id', $("#pr_id").val());
	formData.append('site_code',$('#site_code').val());
	formData.append('item_id',$('#item_id').val());
	formData.append('rr_number',$('#rr_number').val());
	formData.append('pr_number',$('#pr_number').val());
	formData.append('mode',$('#mode').val());
	formData.append('pr_qty',$('#pr_qty').val());
	formData.append('rec_qty',$('#rec_qty').val());
	formData.append('po_qty',$('#po_qty').val());
	formData.append('unit_cost',$('#unit_cost').val());
	formData.append('discount',$('#discount').val());
	formData.append('vat',$('#vat').val());
	formData.append('total_cost',$('#total_cost').val());
	formData.append('remarks',$('#remarks').val());
	formData.append('status',$('#status').val());
	formData.append('date_created',$('#date_created').val());
	

    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>po/save_po",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				$( "#message" ).html("<font color =green><b>SAVED SUCCESSFULLY...</b></font>");
				$('#result').html('');
				$('#select_pr').modal('hide');
				$('#portlet-config').modal('hide');
				
				load_po_list();
				load_data();
			}
			else {
				alert(text);
			}
        },
        beforeSend:function() {
			$( "#message" ).html("<font color = blue><b>Adding...</b></font>");
            
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			//alert(thrownError);
		}
    });

}

function Update() {
	
	cMode = "add";
  	var formData = new FormData();
	formData.append('site_code',$('#site_code').val());
	formData.append('rr_number',$('#rr_number').val());
	formData.append('date_created',$('#date_created').val());
	formData.append('supplier_id',$('#supplier_id').val());
	formData.append('ref_number',$('#ref_number').val());
	formData.append('prepared_by',$('#prepared_by').val());
	formData.append('approved_by',$('#approved_by').val());
	formData.append('mode',$('#mode').val());
	formData.append('status',$('#status').val());
	
    $.ajax({
        type: "POST",
        url:"<?php echo base_url();?>po/update_po",
		processData: false,
		contentType: false,
        data: formData,

        success : function(text) {
			
			if ( text == "success" ) {
				
				$( "#message" ).html("<font color =green><b>ALL INFORMATION HAD BEEN SAVED...</b></font>");
				
				load_po_list();
			}
			else {
				alert(text);
			}
        },
        beforeSend:function() {
			$( "#message" ).html("<font color = blue><b>Updating...</b></font>");
            
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			//alert(thrownError);
		}
    });

}



window.onbeforeunload=function(){
	return "";
}

