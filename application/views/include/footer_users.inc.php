<div class="modal fade" id="portlet-logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">LOGOUT</h4>
						</div>
						<div class="modal-body">
						
							<form action="/main/logout" id="form_sample_1" class="form-horizontal" method = "post">
							
								<div class="form-body">
									
									
									
                                    <h4><strong>Are you sure you want to Leave?</strong></h4>
									</div>
								</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-warning" id = "btn-out"><i class = "icon-logout"></i>Yes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
						</form>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			

			

<div class="footer">
	<div class="footer-inner">
		 2018 &copy; EMJGC - Budget Monitoring System
	</div>
	<div class="footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<script src="<?php echo base_url('/assets/plugins/jquery-1.11.0.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('/assets/plugins/jquery-migrate-1.2.1.min.js')?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url('/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('/assets/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('/assets/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('/assets/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url('/assets/plugins/select2/select2.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/plugins/datatables/media/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('/assets/plugins/bootstrap-toastr/toastr.min.js')?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('/assets/scripts/ui-toastr.js')?>"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->


<script src="<?php echo base_url('/assets/scripts/app.js')?>"></script>
<script src="<?php echo base_url('/assets/scripts/form-samples.js')?>"></script>

<script src="<?php echo base_url('/assets/scripts/table-advanced.js')?>"></script>
<script>
jQuery(document).ready(function() {       
   App.init();
   TableAdvanced.init();
   FormSamples.init();

   

});
</script>





