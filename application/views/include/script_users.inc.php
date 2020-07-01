
<script>


function logout(){
	$('#portlet-logout').modal('show');
	$('#btn-out').focus();
}

function po_lookup()
{
	
	$('#po_lookup').modal('show');
	
}

function delete_expences(exp_id,
						ph_id,
						date_created,
						supplier_name,
						address,
						tin,
						details,
						qty,
						unit_cost,
						total_amount,pc){
		$("#delete_expences").modal("show");
		$("#btn_delete").attr("disabled", false);
		$("#del_id").val(exp_id);
		$("#del_project_code").val(pc);
		
		$("#del_date_created").val(date_created);
		$("#del_supplier_name").val(supplier_name);
		$("#del_address").val(address);
		$("#del_tin").val(tin);
		$("#del_details").val(details);
		$("#del_qty").val(qty);
		$("#del_unit_cost").val(unit_cost);
		
		$("#del_total_amount").val(total_amount);

	}

	function edit_collection(id,dc,ac,rd){
		$('#edit_collection').modal('show');
		$('#edit_id').val(id);
		$('#edit_date_created').val(dc);
		$('#edit_amount').val(ac);
		$('#edit_ref_doc').val(rd);
		$('#btn_edit').attr('disabled',false);
	}

	function edit_phase(id,pc,pd,bc){
		$('#edit_phase').modal('show');
		$('#edit_id').val(id);
		$('#edit_phase_code').val(pc);
		$('#edit_phase_desc').val(pd);
		$('#edit_budget_cost').val(bc);
		$('#btn_edit').attr('disabled',false);


	}

function select_expences(exp_id,
						ph_id,
						date_created,
						supplier_name,
						address,
						tin,
						details,
						qty,
						unit_cost,
						total_amount,pc){
		$("#selected_expences").modal("show");
		$("#btn_edit").attr("disabled", false);
		$("#exp_id").val(exp_id);
		$("#edit_project_code").val(pc);
		$("#edit_phase").val(ph_id);
		$("#old_phase").val(ph_id);
		$("#edit_date_created").val(date_created);
		$("#edit_supplier_name").val(supplier_name);
		$("#edit_address").val(address);
		$("#edit_tin").val(tin);
		$("#edit_details").val(details);
		$("#edit_qty").val(qty);
		$("#edit_unit_cost").val(unit_cost);
		$("#old_total_amount").val(total_amount);
		$("#edit_total_amount").val(total_amount);

	}

																	

function date_range(proj_code)
{
	$('#project_code').val(proj_code);
	$('#project_code2').val(proj_code);
	$('#date_range').modal('show');
	
}

function date_range_mp(proj_code)
{
	$('#project_code_mp').val(proj_code);
	$('#project_code2_mp').val(proj_code);
	$('#date_range_mp').modal('show');
	
}

function select_rr_po(po_num,sup_id){
	$('#po_number').val(po_num);
	$('#po_num').val(po_num);
	$('#supplier_id').val(sup_id);
	$('#btn_search').attr('disabled', true);
	$('#btn_lookup').attr('disabled', false);
	$('#po_lookup').modal('hide');
	
	
	
	
}


function lookup_pr()
{
	$('#total_cost').val('');
	$('#portlet-config').modal('show');
	$('#search_text').focus();
	$('#search_text').val('');
}

function select_item(id,ic,idesc,ispecs,ispecs2,ib,umes){
	

	$('#selected_item').modal('show');
	$('#item_id').val(id);
	$('#item_code').val(ic);
	$('#item_description').val(idesc);
	$('#item_specification').val(ispecs);
	$('#item_specification2').val(ispecs2);
	$('#brand').val(ib);
	$('#umes').val(umes);
	$('#pr_qty').val('');
	$('#remarks').val('');
	
	
}

function select_pr(pr_number,id,item_id,ic,idesc,ispecs,ispecs2,ib,umes,pr_qty,rec_qty,remarks){
	

	$('#select_pr').modal('show');
	$('#pr_number').val(pr_number);
	$('#item_id').val(item_id);
	$('#pr_id').val(id);
	$('#item_code').val(ic);
	$('#item_description').val(idesc);
	$('#item_specification').val(ispecs);
	$('#item_specification2').val(ispecs2);
	$('#brand').val(ib);
	$('#umes').val(umes);
	$('#pr_qty').val(pr_qty);
	$('#po_qty').val(rec_qty);
	$('#rec_qty').val(rec_qty);
	$('#remarks').val(remarks);
	
	
}

function select_po(po_number,
				   id,
				   item_id,
				   ic,
				   idesc,
				   ispecs,
				   ispecs2,
				   umes,
				   remarks,
				   po_qty,
				   po_bal,
				   vat,
				   dc,
				   item_cost){
	

	$('#select_po').modal('show');
	$('#my_po_number').val(po_number);
	$('#item_id').val(item_id);
	$('#po_id').val(id);
	$('#item_code').val(ic);
	$('#item_description').val(idesc);
	$('#item_specification').val(ispecs);
	$('#item_specification2').val(ispecs2);
	$('#umes').val(umes);
	$('#remarks').val(remarks);
	$('#po_qty').val(po_qty);
	$('#po_bal').val(po_bal);
	$('#vat').val(vat);
	$('#discount').val(dc);
	$('#item_cost').val(item_cost);
	$('#rec_qty').val('');
	$('#total_cost').val('');
	
	
	
}

function edit_employee_info(id,emp_id,lname,fname,mname,alias,desig,status){
	$('#edit_employee_info').modal('show');
	$('#emp_id').val(id);
	$('#edit_employee_id').val(emp_id);
	$('#edit_last_name').val(lname);
	$('#edit_first_name').val(fname);
	$('#edit_middle_name').val(mname);
	$('#edit_alias').val(alias);
	$('#edit_designation').val(desig);
	$('#edit_status').val(status);
}

function edit_retention_info(id,proj_code,percent){
	$('#edit_retention_info').modal('show');
	$('#ret_id').val(id);
	$('#edit_project_code').val(proj_code);
	$('#edit_retention_percentage').val(percent);
	
}

function search_employee(){
	$('#search_employee').modal('show');
}


function add_employee()
{
	$('#portlet-config').modal('show');
	
}

function select_emp_expences(emp_id, lname,fname,mname,alias,desig){
	$('#search_employee').modal('hide');
	$('#employee_id').val(emp_id);
	$('#name').val(lname+", "+fname+" "+mname);
	$('#alias').val(alias);
	$('#designation').val(desig);
	$('#search_emp').val('');
	$('#emp_result').html('');
	$('#amount').focus();

}


function add_user()
{
	$('#portlet-config').modal('show');
	$('#username').focus();
}

function edit_user(id, username, last_name,first_name,middle_name, site_id, role_id,status)
{

	$('#portlet-config-edit').modal('show');
	$('#user_id').val(id);
	$('#edit_username').val(username);
	$('#edit_last_name').val(last_name);
	$('#edit_first_name').val(first_name);
	$('#edit_middle_name').val(middle_name);
	$('#edit_sites_id').val(site_id);
	$('#edit_role_id').val(role_id);
	$('#edit_status').val(status);
	
}



function edit_item(id,
							item_code, 
							item_description, 
							item_specification, 
							item_specification2,
							brand, 
							umes,
							product_type_id
							){
	$('#edit_item').modal('show');
	$('#item_id').val(id);
	$('#edit_item_code').val(item_code);
	$('#edit_item_description').val(item_description);
	$('#edit_item_specification').val(item_specification);
	$('#edit_item_specification2').val(item_specification2);
	$('#edit_brand').val(brand);
	$('#edit_umes').val(umes);
	$('#edit_product_type_id').val(product_type_id);
	
}

function select_mp_expences(id,dc,name,desig,alias,amount){
	$('#select_mp_expences').modal('show');
	$('#edit_id').val(id);
	$('#edit_date_created').val(dc);
	$('#edit_name').val(name);
	$('#edit_designation').val(desig);
	$('#edit_alias').val(alias);
	$('#edit_alias').attr('disabled',true);
	$('#edit_amount').val(amount);
	$('#btn_edit').attr('disabled',false);
}

function delete_mp_expences(id,dc,name,desig,alias,amount){
	$('#delete_mp_expences').modal('show');
	$('#del_id').val(id);
	$('#del_date_created').val(dc);
	$('#del_name').val(name);
	$('#del_designation').val(desig);
	$('#del_alias').val(alias);
	$('#del_alias').attr('disabled',true);
	$('#del_amount').val(amount);
	$('#btn_delete').attr('disabled',false);
}

function edit_supplier(id,
							supplier_code, 
							supplier_name, 
							product_type_id,
							supplier_email,
							supplier_address,
							supplier_contact_number,
							contact_person
							){
	$('#edit_supplier').modal('show');
	$('#supplier_id').val(id);
	$('#edit_supplier_code').val(supplier_code);
	$('#edit_supplier_name').val(supplier_name);
	$('#edit_product_type_id').val(product_type_id);
	$('#edit_supplier_email').val(supplier_email);
	$('#edit_supplier_address').val(supplier_address);
	$('#edit_supplier_contact_number').val(supplier_contact_number);
	$('#edit_contact_person').val(contact_person);
	
	
}


function add_site(){
	$('#add_site').modal('show');
	
}

function edit_site(id, branch_code, branch_name){
	$('#edit_site').modal('show');
	$('#branch_id').val(id);
	$('#edit_branch_code').val(branch_code);
	$('#edit_branch_name').val(branch_name);
	
}

function add_position(){
	$('#add_position').modal('show');
	
}

function edit_position(id, position_code, position_name){
	$('#edit_position').modal('show');
	$('#position_id').val(id);
	$('#edit_position_code').val(position_code);
	$('#edit_position_name').val(position_name);
	
}

</script>

<script>
	jQuery(document).ready(function() {

		$('#add_user_form').validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				rules: {
					username: {
						required: true
					},
					password: {
						required: true
					}
				},

				messages: {
					username: {
						required: "Username is a required field."
					},
					password: {
						required: "Password is a required field."
					}
				},

				invalidHandler: function (event, validator) {  
					$($('#add_user_form')).show();
				},

				highlight: function (element) {
					/*
					$(element)
						.closest('.form-group').addClass('has-error');
						*/
				},

				success: function (label) {
					/*
					label.closest('.form-group').removeClass('has-error');
					label.remove();
					*/
				},

				errorPlacement: function (error, element) {
					$(error).css('color','#a94442');
					error.insertAfter(element.closest('.form-control'));
					//return true;
				},

				submitHandler: function (form) {
					form.submit();
				}
			});

		$('#add_user_form input').keypress(function (e) {
			if (e.which == 13) {
				if ($('#add_user_form').validate().form()) {
					$('#add_user_form').submit();
				}
				return false;
			}
		});

	});
</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>