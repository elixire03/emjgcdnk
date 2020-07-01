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

function showLoading(el) {
	var selectLoader = ' \
<select class="form-control" class="select2me" name="' + el + '" id="' + el + '"> \
    <option value="">Loading...</option> \
</select>';

	$('#dynamic_' + el).html(selectLoader);

}

function createNewVariant() {
	$.post('/quotation/new_variant/', {
		year: $('#year').val(),
		make: $('#make').val(),
		model: $('#model').val(),
		new_variant: $('#new_variant').val(),
		new_variant_fmv: $('#new_variant_fmv').val()
	}, function (res) {
	
		showLoading('variant');
		$.post('/quotation_variant/', {
			make: $('#make').val(),
			year: $('#year').val(),
			model: $('#model').val()
		}, function (res) {
			$('#dynamic_variant').html(res);

			$('#variant').on('change', function(){
				if($(this).val() == "NEW VARIANT") {
					$('#create_variant').on('hidden.bs.modal', function () {
						if($('#variant').val() == "NEW VARIANT") {
							$('#variant').val("");
						}
						$('#new_variant').val("");
					})

					$('#create_variant').modal('show');
				}
			});

			$('#variant').val($('#new_variant').val());
			$('#create_variant').modal('hide');

		});
	});
}

jQuery(document).ready(function() {

	$('#form_quotation').validate({
			errorElement: 'span',
			errorClass: 'help-block',
			focusInvalid: false,
			rules: {
				year: {
					required: true
				},
				make: {
					required: true
				},
				model: {
					required: true
				},
				variant: {
					required: true
				},
				vehicle_type: {
					required: true
				}
			},

			messages: {
				year: {
					required: "Year is required."
				},
				make: {
					required: "Make is required."
				},
				model: {
					required: "Model is required."
				},
				variant: {
					required: "Variant is required."
				},
				vehicle_type: {
					required: "Type is required."
				}
			},

			invalidHandler: function (event, validator) {  
				$('.alert-danger', $('#form_quotation')).show();
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

		$('#form_quotation input').keypress(function (e) {
			if (e.which == 13) {
				if ($('#form_quotation').validate().form()) {
					$('#form_quotation').submit();
				}
				return false;
			}
		});

    $('#year').on('change', function(){
		showLoading('make');
        $.post('/quotation_make/', {
            year: $(this).val()	
        }, function (res) {
            $('#dynamic_make').html(res);

            $('#make').on('change', function(){
                
				showLoading('model');
                $.post('/quotation_mymodel/', {
                    make: $(this).val(),
					year: $('#year').val()
                }, function (res) {
                    $('#dynamic_model').html(res);

					$("#model").on('change', function(){
	
						showLoading('variant');
						$.post('/quotation_variant/', {
							make: $('#make').val(),
							year: $('#year').val(),
							model: $(this).val()
						}, function (res) {
							$('#dynamic_variant').html(res);

							$('#variant').on('change', function(){
								if($(this).val() == "NEW VARIANT") {
									//alert('new variant');
									//CREATE NEW VARIANT

									$('#create_variant').on('hidden.bs.modal', function () {
										if($('#variant').val() == "NEW VARIANT") {
											$('#variant').val("");
										}
										$('#new_variant').val("");
									})

									$('#create_variant').modal('show');
								}
							});

						});

					});
                });

				//reset variant
				showLoading('variant');
				$.post('/quotation_variant/', {
					model: ""
				}, function (res) {
					$('#dynamic_variant').html(res);
				});

            });

        });

		//reset model and variant
		showLoading('model');
		$.post('/quotation_mymodel/', {
			make: ""
		}, function (res) {
			$('#dynamic_model').html(res);
		});

		showLoading('variant');
		$.post('/quotation_variant/', {
			model: ""
		}, function (res) {
			$('#dynamic_variant').html(res);
		});

    });


	$('#create_variant_form').validate({
			errorElement: 'span',
			errorClass: 'help-block',
			focusInvalid: false,
			rules: {
				new_variant: {
					required: true
				},
				new_variant_fmv: {
					required: true,
					number: true
				}
			},

			messages: {
				new_variant: {
					required: "This is a required field."
				},
				new_variant_fmv: {
					required: "This is a required field.",
					number: "Please input a valid number."
				}
			},

			invalidHandler: function (event, validator) {  
				$($('#create_variant_form')).show();
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
				//SUBMIT FORM
				createNewVariant();
			}
	});

	$('#create_variant_form input').keypress(function (e) {
		if (e.which == 13) {
			if ($('#create_variant_form').validate().form()) {
				//SUBMIT FORM
				createNewVariant();
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