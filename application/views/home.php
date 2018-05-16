<div class="tz-gallery">
	<div class="row">
	<?php
	$this->load->model('home_model');
	foreach($album->result() as $album){
		$foto = $this->home_model->get_randphoto($album->id_album);
		if ($foto->num_rows() > 0) {
			$foto = $foto->row();
		?>
	    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
	        <div class="thumbnail" style="background-image: url('<?= base_url().'assets/gallery/'.$foto->link; ?>'); ">
	            <a  href="<?= base_url().'home/'.$album->id_album ?>">
	                <h3 align="center"><?= $album->nama_album ?></h3>
	            <div class="caption">
	                <p><?= $album->deskripsi ?></p>
	            </div>
	            </a>
	        </div>
	    </div>
	    <?php } } ?>

	    <?= $paging ?>
	</div>
</div>