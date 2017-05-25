<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-1">Kode Kelas</th>
			<th>Grade (Tingkatan)</th>
			<th>Tahun Pelajaran</th>
			<th>Nama Ustadz</th>
			<th class="col-md-1">Kelas</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no=1;
			foreach ($data->result()
				as $key) 
			{
				$nama_ustadz =$this->M_model_kelas->tampildatakelas($key->kode_ustadz);
				?>
				<td><?php echo $no++;?></td>
				<td><?php echo $key->kode_kelas ;?></td>
				<td><?php echo $key->grade ;?></td>
				<td><?php echo $key->th_pel;?></td>
				<!-- <td><?php echo $key->kode_ustadz;?></td> -->
				<td><?php echo $nama_ustadz;?></td>
				<td><?php echo $key->kelas ;?></td>
			</tr>
			<?php }?>		
		</tbody>
	</table>