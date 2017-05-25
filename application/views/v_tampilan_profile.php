<?php 
$info=$this->session->flashdata('info');
if(!empty($info))
{
	echo($info);
}
;?>

<form class="form-horizontal" method="post" onsubmit="return cekform();" action="<?php echo base_url(); ?>Ustadz/simpan">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Id User</label>

		<div class="col-sm-9">
			<input type="text" id="id_user" placeholder="id user" name="id_user" class="col-xs-10 col-sm-5" value="<?php echo $this->session->userdata('id_user'); ?>" readonly/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Username</label>

		<div class="col-sm-9">
			<input type="text" id="username" placeholder="Username" name="username" class="col-xs-10 col-sm-5" value="<?php echo $this->session->userdata('username'); ?>" readonly/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Password</label>

		<div class="col-sm-9">
			<input type="password" id="password" placeholder="password" name="password" class="col-xs-10 col-sm-5" value="<?php echo $this->session->userdata('pass'); ?>" readonly/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Status</label>

		<div class="col-sm-9">
			<input type="text" id="status" placeholder="status" name="status" class="col-xs-10 col-sm-5" value="<?php echo $this->session->userdata('status'); ?>" readonly/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Gambar</label>

		<div class="col-sm-9">
			<a href="<?php echo base_url();?>assets/avatars/avatar.png" title=" Gambar : <?php echo $this->session->userdata('username'); ?>" data-rel="colorbox">
				<img width="100" height="50" alt="150x150" src="<?php echo base_url();?>assets/avatars/avatar.png" />
			</a>
		</div>
	</div>


	<div class="clearfix form-actions">
		<div class="col-md-offset-1 col-md-9">
			&nbsp; &nbsp; &nbsp;
			<button type="reset" class="btn" value="Reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>

			&nbsp; &nbsp; &nbsp;
			<a href="<?php echo base_url(); ?>home" class="btn btn-inverse glyphicon glyphicon-file"> Kembali</a>

		</div>
	</div>
</form>