<p><a href="<?php echo base_url(); ?>Ustadz/tambah" class="btn btn-xs btn-primary "><span class="glyphicon glyphicon-plus">Tambah</a></p>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-1">Kode Ustadz</th>
			<th>Nama</th>
			<th>Jenik Kelamin</th>
			<th>Status</th>
			<th class="col-md-1">Alamat</th>
			<th>Tgl Lahir</th>
			<th>No Telp</th>
			<th>Aksi</th>
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
			<td><?php echo $key->kode_ustadz ;?></td>
			<td><?php echo $key->nama_ustadz ;?></td>
			<td><?php echo $key->gender == 1? "Laki-laki":"Perempuan";?></td>
			<td><?php echo $key->status_aktif == 1? "Aktif":"Tidak Aktif" ;?></td>
			<td><?php echo $key->alamat ;?></td>
			<td><?php echo date('d M Y',strtotime($key->tgl_lahir)) ;?></td>
			<td><?php echo $key->no_telp ;?></td>
			<td>
				<a href="<?php echo base_url();?>Ustadz/edit/<?php echo $key->kode_ustadz;?>" title="Edit Data" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a>

				<a href="<?php echo base_url();?>Ustadz/delete/<?php echo $key->kode_ustadz;?>" onclick="return confirm('Anda Yakin ingin menghapus data ini bro???');" title="Hapus Data" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</a>
			</td>
		</tr>
		<?php }?>		
	</tbody>
</table>