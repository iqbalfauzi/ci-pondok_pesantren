<?php
$status = $this->session->userdata('status');
?>
<ul class="nav nav-list">
	<li class="active">
		<a href="<?php echo base_url();?>home">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Dashboard </span>
		</a>
		<b class="arrow"></b>
	</li>


	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon glyphicon glyphicon-list-alt"></i>
			<span class="menu-text"> Ustadz </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url();?>Ustadz">
					<i class="menu-icon fa fa-caret-right"></i>
					Data ustadz
				</a>
				<b class="arrow"></b>
			</li>
			<?php	
			if(($status == 'admin')){?>
			<li class="">
				<a href="<?php echo base_url();?>ustadz/tambah">
					<i class="menu-icon fa fa-caret-right"></i>
					Tambah Ustadz
				</a>
				<b class="arrow"></b>
			</li>
			<?php }?>
		</ul>
	</li>


	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon glyphicon glyphicon-user "></i>
			<span class="menu-text"> Santri </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url();?>Santri">
					<i class="menu-icon fa fa-caret-right"></i>
					Data Santri
				</a>
				<b class="arrow"></b>
			</li>
			<?php	
			if(($status == 'admin')or ($status == 'ustadz')){?>
			<li class="">
				<a href="<?php echo base_url();?>Santri/tambah">
					<i class="menu-icon fa fa-caret-right"></i>
					Tambah Santri
				</a>
				<b class="arrow"></b>
			</li>
			<?php }?>
		</ul>
	</li>


	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon glyphicon glyphicon-book"></i>
			<span class="menu-text"> Kitab </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url();?>Kitab">
					<i class="menu-icon fa fa-caret-right"></i>
					Data Kitab
				</a>
				<b class="arrow"></b>
			</li>
			<?php	
			if(($status == 'admin')or ($status == 'ustadz')){?>
			<li class="">
				<a href="<?php echo base_url();?>Kitab/tambah">
					<i class="menu-icon fa fa-caret-right"></i>
					Tambah Kitab
				</a>
				<b class="arrow"></b>
			</li>
			<?php }?>
		</ul>
	</li>


	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-home"></i>
			<span class="menu-text"> Kelas </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url();?>Kelas">
					<i class="menu-icon fa fa-caret-right"></i>
					Data Kelas
				</a>
				<b class="arrow"></b>
			</li>
			<?php	
			if(($status == 'admin')){?>
			<li class="">
				<a href="<?php echo base_url();?>Kelas/tambah">
					<i class="menu-icon fa fa-caret-right"></i>
					Tambah Kelas
				</a>
				<b class="arrow"></b>
			</li>
			<?php }?>
		</ul>
	</li>


	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-list"></i>
			<span class="menu-text"> Nilai </span>
		</a>
		<b class="arrow"></b>
	</li>


	<?php	
	if(($status == 'admin')){?>
	<li class="">
		<a href="<?php echo base_url();?>Profile">
			<i class="menu-icon fa fa-lock"></i>
			<span class="menu-text"> Admin </span>
		</a>
		<b class="arrow"></b>
	</li>
	<?php }?>
</ul>