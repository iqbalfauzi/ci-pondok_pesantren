<?php 
$info=$this->session->flashdata('info');
if(!empty($info))
{
	echo($info);
}
;?>

<form class="form-horizontal" method="post" onsubmit="return cekform();" action="<?php echo base_url(); ?>Ustadz/simpan">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Ustadz</label>

		<div class="col-sm-9">
			<input type="text" id="kode" placeholder="Kode Ustadz" name="kode" class="col-xs-10 col-sm-5"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Ustadz</label>

		<div class="col-sm-9">
			<input type="text" id="nama" placeholder="Nama" name="nama" class="col-xs-10 col-sm-5" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Jenis Kelamin </label>

		<div class="col-sm-5">
			<select name="gender" id="gender">
				<option value="1">Laki - Laki</option>
				<option value="2">Perempuan</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Status Aktif </label>

		<div class="col-sm-5">
			<select name="status_aktif" id="status_aktif">
				<option value="1">AKTIF</option>
				<option value="2">TIDAK AKTIF</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat</label>

		<div class="col-sm-9">
			<input type="text" id="alamat" placeholder="Alamat" name="alamat" class="col-xs-10 col-sm-5" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tanggal Lahir </label>
		<div class="col-sm-4">
			<div class="input-group input-group-sm">
				<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" />
				<span class="input-group-addon">
					<i class="ace-icon fa fa-calendar"></i>
				</span>
			</div>
		</div>

	</div> 

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nomor Telp </label>

		<div class="col-sm-9">
			<input type="text" id="no_telp" placeholder="No Telp" name="no_telp" class="col-xs-10 col-sm-5" />
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
			<a href="<?php echo base_url(); ?>ustadz" class="btn btn-inverse glyphicon glyphicon-file"> Kembali</a>

		</div>
	</div>
</form>
<script type="text/javascript">
	function cekform() {
		if(!$("#kode").val())
		{
			alert('kode tidak boleh kosong');
			$("#kode").focus()
			return false;
		}
		if(!$("#nama").val())
		{
			alert('nama tidak boleh kosong');
			$("#nama").focus()
			return false;
		}
		if(!$("#gender").val())
		{
			alert('gender tidak boleh kosong');
			$("#gender").focus()
			return false;
		}
		if(!$("#status_aktif").val())
		{
			alert('status aktif tidak boleh kosong');
			$("#status aktif").focus()
			return false;
		}
		if(!$("#alamat").val())
		{
			alert('alamat tidak boleh kosong');
			$("#alamat").focus()
			return false;
		}
		if(!$("#tgl_lahir").val())
		{
			alert('tgl lahir tidak boleh kosong');
			$("#tgl_lahir").focus()
			return false;
		}
	}
</script>


<script type="text/javascript">
	$(document).ready(function () {
		$('.tgl_lahir').datepicker({
			format: "dd-mm-yyyy",
			autoclose:true
		});
	});
</script>
