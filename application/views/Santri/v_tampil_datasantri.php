<p><a href="<?php echo base_url(); ?>Santri/tambah" class="btn btn-xs btn-primary "><span class="glyphicon glyphicon-plus">Tambah</a></p>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-1">NIS</th>
			<th class="col-md-1">Nama</th>
			<th class="col-md-1">Jenik Kelamin</th>
			<th class="col-md-1">Status</th>
			<th class="col-md-1">Nama Wali</th>
			<th class="col-md-1">Alamat</th>
			<th class="col-md-1">Tanggal Masuk</th>
			<th class="col-md-1">Kamar</th>
			<th class="col-md-1">Tempat Lahir</th>
			<th class="col-md-1">Tgl Lahir</th>
			<th class="col-md-1">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no=1;
			foreach ($data->result()
				as $key) 
			{?>
			<td><?php echo $no++;?></td>
			<td><?php echo $key->NIS ;?></td>
			<td><?php echo $key->nama_santri ;?></td>
			<td><?php echo $key->gender == 1? "Laki-laki":"Perempuan";?></td>
			<td><?php echo $key->status_aktif == 1? "Aktif":"Tidak Aktif" ;?></td>
			<td><?php echo $key->nama_wali ;?></td>
			<td><?php echo $key->alamat ;?></td>
			<td><?php echo date('d M Y',strtotime($key->tgl_masuk)) ;?></td>
			<td><?php echo $key->kamar ;?></td>
			<td><?php echo $key->tmp_lahir ;?></td>
			<td><?php echo date('d M Y',strtotime($key->tgl_lahir)) ;?></td>
			<td>
				<a href="<?php echo base_url();?>Santri/edit/<?php echo $key->NIS;?>" title="Edit Data" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

				<a href="<?php echo base_url();?>Santri/delete/<?php echo $key->NIS;?>" onclick="return confirm('Anda Yakin ingin menghapus data ini bro???');" title="Hapus Data" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			</td>
		</tr>
		<?php }?>		
	</tbody>
</table>