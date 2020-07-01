<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins

   $('.derusni_logout').click(function(e){
    
    var isLogout = confirm("Are you sure you want to logout?");

    if(isLogout) {
        window.location.href = "/logout/";
    }
   });

});
</script>

<script>
jQuery(document).ready(function() {

	$('#form_change_password').validate({
			errorElement: 'span',
			errorClass: 'help-block',
			focusInvalid: false,
			rules: {
				current_password: {
					required: true
				},
				new_password: {
					required: true
				},
				retype_password: {
					required: true
				}
			},

			messages: {
				current_password: {
					required: "Current password is required."
				},
				new_password: {
					required: "New password is required."
				},
				retype_password: {
					required: "Re-type password is required."
				}
			},

			invalidHandler: function (event, validator) {  
				$('.alert-danger', $('#form_change_password')).show();
			},

			highlight: function (element) {
				$(element)
					.closest('.form-group').addClass('has-error');
			},

			success: function (label) {
				label.closest('.form-group').removeClass('has-error');
				label.remove();
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.closest('.form-control'));
				//return true;
			},

			submitHandler: function (form) {
				form.submit();
			}
		});

	$('#form_change_password input').keypress(function (e) {
		if (e.which == 13) {
			if ($('#form_change_password').validate().form()) {
				$('#form_change_password').submit();
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