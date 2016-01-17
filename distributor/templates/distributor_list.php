<!-- <div class="wrap"> 
	<h2>Daftar Distributor</h2>-->
<a class="distributor-tambah-link" href='<?php echo admin_url('admin.php?page=onex-distributor-tambah'); ?>' >Tambah</a>
<!-- <a href="#" class="ajax-link">TEST AJAX</a>
<p class="test-message"></p> -->
<table class="table table-responsive table-hover">
	<tr><th>NO</th>
		<th>DISTRIBUTOR</th>
		<!-- <th>Gambar</th> -->
		<th>JENIS DELIVERY</th>
		<th></th>
		<th>MANAGE</th>
	</tr>
	<?php 
		//$nmr = 0;
	//var_dump($attributes['distributor']);
		if( sizeof($attributes['distributor']) > 0 ): ?>
		<?php for($i = 0; $i < sizeof($attributes['distributor']); $i++ ): ?>
			<?php 
				$distributor = $attributes['distributor'][$i];
				$katdel = $attributes['katdel'][$i];
			?>
			<tr>
				<td><?php echo ($i + 1); ?></td>
				<td><?php echo $distributor->GetNama(); ?></td>
				<!-- <td><img src="<?php //if( $distributor->gambar == 'NOIMAGE'){ echo bloginfo('template_url').'/images/no-image.jpg';} else{ echo $distributor->gambar;} ?>" /></td> -->
				<td><?php echo $katdel->GetNama(); ?></td>
				<td><a id="dist-id_<?php echo $distributor->GetId(); ?>" class="distributor-detail-link" href="#">Detail</a></td>
				<td>
					<a href='<?php echo admin_url('admin.php?page=onex-distributor-hapus&id='. $distributor->GetId()); ?>'>Hapus</a> | 
					<a href='<?php echo admin_url('admin.php?page=onex-distributor-update&id='. $distributor->GetId()); ?>'>Update</a>
				</td>
			</tr>
			<?php //$nmr += 1; ?>
		<?php endfor; ?>
	<?php endif; ?>
</table>
<a class="distributor-tambah-link" href='<?php echo admin_url('admin.php?page=onex-distributor-tambah'); ?>' >Tambah</a>
<script type="text/javascript">
	jQuery(document).ready( function($) {

		$(".distributor-detail-link").click(function(){
			var id_dist = (this.id).split("_").pop();
			//alert(id_dist);

			var data = {
				action: 'AjaxRetrieveDistributorDetail',
				distributor: id_dist
			};

			$.get(ajax_one_express.ajaxurl, data, function(response){
				$("div#distributor-detail-area").html(response);
			});

		});

	});
</script>
<!-- </div> -->