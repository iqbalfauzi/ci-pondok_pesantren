<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-1">Kode Pelajaran</th>
			<th>Nama Pelajaran</th>
			<th>Kitab</th>
			<th>Grade</th>
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
			</tr>
			<?php }?>		
		</tbody>
	</table>