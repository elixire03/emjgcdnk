
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
            <a href="/dashboard">
                <img src="<?php echo base_url('/assets/img/new_logo.jpg')?>" height = "40" width = "50" alt="logo"/>
            </a><font color = "white" size = "5"><i><strong>EMJGC</strong></i></font>
        </div>
		<!--
        <form class="search-form search-form-header" role="form" action="index.html">
            <div class="input-icon right">
                <i class="icon-magnifier"></i>
                <input type="text" class="form-control input-sm" name="query" placeholder="Search...">
            </div>
        </form>
		-->
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="<?php echo base_url('/assets/img/menu-toggler.png')?>" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">

			<li class="devider">
				 &nbsp;
			</li>
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="<?php echo base_url('/assets/img/avatar_small.png')?>"/>
				<span class="username username-hide-on-mobile"><?php echo $this->session->userdata('username');?></span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					</li>
					<li>
						<a style="cursor:pointer;" onclick = "logout()" ><i class="fa fa-key"></i> Log Out</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">

	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<!--
				<li class="sidebar-search-wrapper">
					<form class="search-form" role="form" action="index.html" method="get">
						<div class="input-icon right">
							<i class="icon-magnifier"></i>
							<input type="text" class="form-control" name="query" placeholder="Search...">
						</div>
					</form>
				</li>
				-->
				<?php if($this->uri->segment(1)=='dashboard'):?>
				<li class="active">
				<?php else:?>
				<li class="">
				<?php endif;?>
					<a href="/dashboard/">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
				<?php if($this->uri->segment(1)=='dashboard'):?>
					<span class = "selected"></span>
				<?php else:?>

				<?php endif;?>
					</a>
				</li>
				


				<?php if($this->uri->segment(1)=='man_power'):?>
				<li class="active">
				<?php else:?>
				<li class="">
				<?php endif;?>
					<a href="/man_power/">
					<i class="icon-user"></i>
					<span class="title">Man Power Expenses</span>
				<?php if($this->uri->segment(1)=='man_power'):?>
					<span class = "selected"></span>
				<?php else:?>

				<?php endif;?>
					</a>
				</li>
				
				<?php if($this->uri->segment(1)=='other_expences'):?>
				<li class="active">
				<?php else:?>
				<li class="">
				<?php endif;?>
					<a href="/other_expences/">
					<i class="fa fa-folder-open-o"></i>
					<span class="title">Other Expenses</span>
				<?php if($this->uri->segment(1)=='other_expences'):?>
					<span class = "selected"></span>
				<?php else:?>

				<?php endif;?>
					</a>
				</li>
				
				


				<?php if($this->uri->segment(1)=='reports'):?>
				<li class="active">
				<?php else:?>
				<li class="">
				<?php endif;?>
					<a href="/reports/">
					<i class="fa fa-paper-plane"></i>
					<span class="title">Reports</span>
				<?php if($this->uri->segment(1)=='reports'):?>
					<span class = "selected"></span>
				<?php else:?>

				<?php endif;?>
					</a>
				</li>
				
				<?php if($this->session->userdata('role_id')!=1):?>

				<?php else:?>
				<?php if($this->uri->segment(1)=='users'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/users/">
					<i class="icon-users"></i>
					<span class="title">Users</span>
				<?php if($this->uri->segment(1)=='users'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				<?php endif;?>	
					</a>
				</li>

				<?php if($this->session->userdata('role_id')==3):?>

				<?php else:?>
				<?php if($this->uri->segment(1)=='sites'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/sites/">
					<i class="fa fa-university"></i>
					<span class="title">Projects</span>
				<?php if($this->uri->segment(1)=='sites'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				<?php endif;?>	
					</a>
				</li>
				
				<?php if($this->session->userdata('role_id')==3):?>

				<?php else:?>
				<?php if($this->uri->segment(1)=='phase'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/phase/">
					<i class="icon-briefcase"></i>
					<span class="title">Phase of Work</span>
				<?php if($this->uri->segment(1)=='phase'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				<?php endif;?>	
					</a>
				</li>
				

				
				<?php if($this->uri->segment(1)=='employees'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/employees/">
					<i class="fa fa-user"></i>
					<span class="title">Employees</span>
				<?php if($this->uri->segment(1)=='employees'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				
					</a>
				</li>

				<?php if($this->session->userdata('role_id')==3):?>

				<?php else:?>
				<?php if($this->uri->segment(1)=='retention'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/retention/">
					<i class="fa fa-info"></i>
					<span class="title">Retention</span>
				<?php if($this->uri->segment(1)=='retention'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				<?php endif;?>	
					</a>
				</li>


				<?php if($this->session->userdata('role_id')==3):?>

				<?php else:?>
				<?php if($this->uri->segment(1)=='collection'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/collection/">
					<i class="fa fa-dollar"></i>
					<span class="title">Collection</span>
				<?php if($this->uri->segment(1)=='collection'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				<?php endif;?>	
					</a>
				</li>
				


				<?php if($this->session->userdata('role_id')==3):?>

				<?php else:?>
				<?php if($this->uri->segment(1)=='uploads'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/uploads/">
					<i class="fa fa-file-excel-o"></i>
					<span class="title">Import OE</span>
				<?php if($this->uri->segment(1)=='uploads'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				<?php endif;?>	
					</a>
				</li>

				<?php if($this->session->userdata('role_id')==3):?>

				<?php else:?>
				<?php if($this->uri->segment(1)=='uploads2'):?>
					<li class="active">
				<?php else:?>
					<li class="">
				<?php endif;?>
					<a href="/uploads2/">
					<i class="fa fa-file-excel-o"></i>
					<span class="title">Import MPE</span>
				<?php if($this->uri->segment(1)=='uploads2'):?>
				<span class="selected"></span>
				<?php else:?>
				
				<?php endif;?>	
				<?php endif;?>	
					</a>
				</li>





				<li class="last ">
					<a style="cursor:pointer;" onclick = "logout()" >
					<i class="icon-logout"></i>
					<span class="title">Logout</span>
					</a>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
