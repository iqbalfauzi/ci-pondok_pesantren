<?php 
$info=$this->session->flashdata('info');
if(!empty($info))
{
	echo($info);
}
;?>

<form class="form-horizontal" method="post" onsubmit="return cekform();" action="<?php echo base_url(); ?>Santri/simpan">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> NIS</label>

		<div class="col-sm-9">
			<input type="text" id="nis" placeholder="NIS" name="nis" class="col-xs-10 col-sm-5"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Santri</label>

		<div class="col-sm-9">
			<input type="text" id="nama" placeholder="Nama Santri" name="nama" class="col-xs-10 col-sm-5" />
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
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nama Wali</label>

		<div class="col-sm-9">
			<input type="text" id="nama_wali" placeholder="Nama Wali" name="nama_wali" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat</label>

		<div class="col-sm-9">
			<input type="text" id="alamat" placeholder="Alamat" name="alamat" class="col-xs-10 col-sm-5" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tanggal Masuk </label>
		<!-- <div class="col-sm-9">
			<input type="text" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" class="col-xs-10 col-sm-5" />
		</div> -->

		<div class="col-sm-4">
			<div class="input-group input-group-sm">
				<input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" />
				<span class="input-group-addon">
					<i class="ace-icon fa fa-calendar"></i>
				</span>
			</div>
		</div>

	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kamar</label>

		<div class="col-sm-9">
			<input type="text" id="kamar" placeholder="Kamar" name="kamar" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tempat Lahir</label>

		<div class="col-sm-9">
			<input type="text" id="tmp_lahir" placeholder="Tempat Lahir" name="tmp_lahir" class="col-xs-10 col-sm-5" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tanggal Lahir </label>
		<!-- <div class="col-sm-9">
			<input type="text" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" class="col-xs-10 col-sm-5" />
		</div> -->

		<div class="col-sm-4">
			<div class="input-group input-group-sm">
				<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" />
				<span class="input-group-addon">
					<i class="ace-icon fa fa-calendar"></i>
				</span>
			</div>
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
			<a href="<?php echo base_url(); ?>santri" class="btn btn-inverse glyphicon glyphicon-file"> Kembali</a>

		</div>
	</div>
</form>
<script type="text/javascript">
	function cekform() {
		if(!$("#nis").val())
		{
			alert('nis tidak boleh kosong');
			$("#nis").focus()
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
		if(!$("#nama_wali").val())
		{
			alert('nama wali tidak boleh kosong');
			$("#nama_wali").focus()
			return false;
		}
		if(!$("#alamat").val())
		{
			alert('alamat tidak boleh kosong');
			$("#alamat").focus()
			return false;
		}
		if(!$("#tgl_masuk").val())
		{
			alert('tgl masuk tidak boleh kosong');
			$("#tgl_masuk").focus()
			return false;
		}
		if(!$("#kamar").val())
		{
			alert('kamar tidak boleh kosong');
			$("#kamar").focus()
			return false;
		}
		if(!$("#tmp_lahir").val())
		{
			alert('tmp_lahir tidak boleh kosong');
			$("#tmp_lahir").focus()
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
