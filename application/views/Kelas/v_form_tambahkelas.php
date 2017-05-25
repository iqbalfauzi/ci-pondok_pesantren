<?php 
$info=$this->session->flashdata('info');
if(!empty($info))
{
	echo($info);
}
;?>

<form class="form-horizontal" method="post" onsubmit="return cekform();" action="<?php echo base_url(); ?>Kelas/simpan">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Kelas</label>

		<div class="col-sm-6">
			<input type="text" id="kode_kelas" placeholder="Kode Ustadz" name="kode_kelas" class="col-xs-10 col-sm-5"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Grade</label>

		<div class="col-sm-4">
			<?php
			$grade = $this->db->pil_enum('tb_kelas','grade');
			echo form_dropdown('grade',$grade,'','class="form-control" id="grade"');
			?>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tahun Pelajaran </label>

		<div class="col-sm-4">
			<?php
			$th_pel = $this->db->pil_enum('tb_kelas','th_pel');
			echo form_dropdown('th_pel',$th_pel,'','class="form-control" id="th_pel"');
			?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Wali Kelas </label>

		<div class="col-sm-5">
			<select name="wali_kelas" id="wali_kelas">
				<option value="">--Pilih--</option>
				<?php
				$ustadz=$this->db->get('tb_ustadz');
				foreach ($ustadz->result() as $row) {
					
					;?>
					<option value="<?php echo $row->kode_ustadz;?>"><?php echo $row->nama_ustadz;?></option>
					<?php }?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kelas</label>

		<div class="col-sm-4">
			<?php
			$kelas = $this->db->pil_enum('tb_kelas','kelas');
			echo form_dropdown('kelas',$kelas,'','class="form-control" id="kelas"');
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
			<a href="<?php echo base_url(); ?>kelas" class="btn btn-inverse glyphicon glyphicon-file"> Kembali</a>

		</div>
	</div>
</form>
<script type="text/javascript">
	function cekform() {
		if(!$("#kode_kelas").val())
		{
			alert('kode Kelas tidak boleh kosong');
			$("#kode_kelas").focus()
			return false;
		}
		if(!$("#grade").val())
		{
			alert('Grade tidak boleh kosong');
			$("#grade").focus()
			return false;
		}
		if(!$("#th_pel").val())
		{
			alert('Tahun Pelajaran tidak boleh kosong');
			$("#th_pel").focus()
			return false;
		}
		if(!$("#wali_kelas").val())
		{
			alert('Wali kelas tidak boleh kosong');
			$("#wali_kelas").focus()
			return false;
		}
		if(!$("#kelas").val())
		{
			alert('kelas boleh kosong');
			$("#kelas").focus()
			return false;
		}
	}
</script>
