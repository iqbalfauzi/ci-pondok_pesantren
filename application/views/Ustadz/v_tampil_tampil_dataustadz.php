<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-1">Kode Ustadz</th>
			<th class="col-md-2">Nama</th>
			<th class="col-md-1">Jenik Kelamin</th>
			<th class="col-md-1">Status</th>
			<th class="col-md-3">Alamat</th>
			<th class="col-md-1">Tgl Lahir</th>
			<th class="col-md-1">No Telp</th>
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
		</tr>
		<?php }?>		
	</tbody>
</table>