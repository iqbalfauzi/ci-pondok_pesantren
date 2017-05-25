<?php 
$info=$this->session->flashdata('info');
if(!empty($info))
{
	echo($info);
}
;?>

<form class="form-horizontal" method="post" onsubmit="return cekform();" action="<?php echo base_url(); ?>Kitab/simpan">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Pelajaran</label>

		<div class="col-sm-7">
			<input type="text" id="kode_pelajaran" placeholder="kode pelajaran" name="kode_pelajaran" class="col-xs-10 col-sm-5"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nama Pelajaran</label>

		<div class="col-sm-7">
			<input type="text" id="nama_pelajaran" placeholder="nama pelajaran" name="nama pelajaran" class="col-xs-10 col-sm-5"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kitab</label>

		<div class="col-sm-7">
			<input type="text" id="kitab" placeholder="kitab" name="kitab" class="col-xs-10 col-sm-5"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Grade</label>

		<div class="col-sm-3">
			<?php
			$grade = $this->db->pil_enum('tb_kitab','grade');
			echo form_dropdown('grade',$grade,'','class="form-control" id="grade"');
			?>
		</div>
	</div>

		<div class="clearfix form-actions">
			<div class="col-md-offset-1 col-md-9">
				<button type="Submit" class="btn btn-info">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>

				&nbsp; &nbsp; &nbsp;
				<button type="reset" class="btn" value="Reset">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>

				&nbsp; &nbsp; &nbsp;
				<a href="<?php echo base_url(); ?>kitab" class="btn btn-inverse glyphicon glyphicon-file"> Kembali</a>

			</div>
		</div>
	</form>
	<script type="text/javascript">
		function cekform() {
			if(!$("#kode_pelajaran").val())
			{
				alert('kode pelajaran tidak boleh kosong');
				$("#kode_pelajaran").focus()
				return false;
			}
			if(!$("#nama_pelajaran").val())
			{
				alert('nama pelajaran tidak boleh kosong');
				$("#nama_pelajaran").focus()
				return false;
			}
			if(!$("#kitab").val())
			{
				alert('kitab tidak boleh kosong');
				$("#kitab").focus()
				return false;
			}
			if(!$("#grade").val())
			{
				alert('Grade tidak boleh kosong');
				$("#grade").focus()
				return false;
			}
		}
	</script>
