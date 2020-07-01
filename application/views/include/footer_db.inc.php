
			


<div class="footer">
	<div class="footer-inner">
		 2018 &copy; Bernard C. Geron
	</div>
	<div class="footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url('assets/plugins/jquery-1.11.0.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery-migrate-1.2.1.min.js')?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('assets/plugins/jqvmap/jqvmap/jquery.vmap.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery-knob/js/jquery.knob.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/flot/jquery.flot.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/flot/jquery.flot.resize.js')?>" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo base_url('assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/jquery.sparkline.min.js')?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->


<script src="<?php echo base_url('assets/plugins/bootstrap-sessiontimeout/jquery.sessionTimeout.min.js')?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/scripts/app.js')?>"></script>
<script src="<?php echo base_url('assets/scripts/index.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/scripts/tasks.js')?>" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
    
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initPeityElements();
   Index.initKnowElements();
   Index.initDashboardDaterange();
   Tasks.initDashboardWidget();
  
});
</script>
<script>
jQuery(document).ready(function() {    
   App.init();
   // initialize session timeout settings
   $.sessionTimeout({
    title: 'Session Timeout Notification',
    message: 'Your session is about to expire in 20 secs.',
    keepAliveUrl: 'demo/timeout-keep-alive.php',
    redirUrl: '/main/logout',
    logoutUrl: '/main/logout',
    warnAfter: 180000, //warn after 5 seconds
    redirAfter: 20000, //redirect after 10 secons
   });
});
</script>

<!-- END PAGE LEVEL SCRIPTS -->


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>