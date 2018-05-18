<section class="py-5">
  <div class="container-fluid">
	  <div class="row">
			<div class="col-sm-12 mt">
				<div class="photos" id="photos">
					<?php foreach ($photo->result() as $row) { ?>
				    	<a data-fancybox="images" href="<?= base_url(); ?>assets/gallery/<?= $row->link ?>">
				    		<img src="<?= base_url(); ?>assets/gallery/<?= $row->link ?>" alt="">
				    	</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 mt">
				<?= $paging ?>
			</div>
		</div>
	</div>
</div>
