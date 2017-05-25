<p><a href="<?php echo base_url(); ?>Kitab/tambah" class="btn btn-xs btn-primary "><span class="glyphicon glyphicon-plus">Tambah</a></p>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-1">Kode Pelajaran</th>
			<th>Nama Pelajaran</th>
			<th>Kitab</th>
			<th>Grade</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no=1;
			foreach ($data->result()
				as $key) 
			{
				?>
				<td><?php echo $no++;?></td>
				<td><?php echo $key->kode_pelajaran ;?></td>
				<td><?php echo $key->nama_pelajaran ;?></td>
				<td><?php echo $key->kitab;?></td>
				<td><?php echo $key->grade;?></td>
				<td>
					<a href="<?php echo base_url();?>Kitab/edit/<?php echo $key->kode_pelajaran;?>" title="Edit Data" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a>

					<a href="<?php echo base_url();?>Kitab/delete/<?php echo $key->kode_pelajaran;?>" onclick="return confirm('Anda Yakin ingin menghapus data ini bro???');" title="Hapus Data" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</a>
				</td>
			</tr>
			<?php }?>		
		</tbody>
	</table>