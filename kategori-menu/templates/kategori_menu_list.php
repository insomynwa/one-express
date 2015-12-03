<div class="wrap">
	<h2>Daftar Kategori Menu</h2>
	<a href='<?php echo admin_url('admin.php?page=onex-kategori-menu-tambah'); ?>' >Tambah</a>

	<?php 
	$nmr = 1;
	if( count($attributes['katmenu']) > 0 ): ?>
	<table>
		<tr><th>No</th>
			<th>Kategori</th>
			<th>Keterangan</th>
			<th></th>
		</tr>
				<?php foreach($attributes['katmenu'] as $katmenu ): ?>
					<tr>
						<td><?php echo $nmr; ?></td>
						<td><?php echo $katmenu->nama_katmenu; ?></td>
						<td><?php echo $katmenu->keterangan_katmenu; ?></td>
						<td>
							<a href='<?php echo admin_url('admin.php?page=onex-distributor-hapus&id='. $distributor->id_dist); ?>'>Hapus</a> | 
							<a href='<?php echo admin_url('admin.php?page=onex-distributor-update&id='. $distributor->id_dist); ?>'>Update</a>
						</td>
					</tr>
					<?php $nmr += 1; ?>
				<?php endforeach; ?>
	</table>
	<?php else: ?>
	<p>Belum ada data.</p>
	<?php endif; ?>
	<a href='<?php echo admin_url('admin.php?page=onex-kategori-menu-tambah'); ?>' >Tambah</a>
</div>