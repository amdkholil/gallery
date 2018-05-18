<!-- Slider atas -->
<header>
	<div id="myslider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php
			$x=0;
			foreach($slider->result() as $slide){
			$x++;
			if($x!=1) { $a=""; }else { $a='class="active"'; }
			?>
			<li data-target="#myslider" data-slide-to="0" <?= $a; ?> ></li>
			<?php } ?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<!-- Slide One - Set the background image for this slide in the line below -->
			<?php
			$x=0;
			foreach($slider->result() as $slide){
			$x++;
			if($x!=1) { $a=""; }else { $a="active"; }
			?>
			<div class="carousel-item <?= $a; ?>"  style="background-image: url('<?= base_url().'assets/gallery/'.$slide->link; ?>')">
				<div class="img-slider"></div>
				<div class="carousel-caption d-none d-md-block">
					<h3><?= $slide->nama_foto ?></h3>
					<p><?= $slide->deskripsi ?></p>
				</div>
			</div>
			<?php } ?>
		</div>
		<a class="carousel-control-prev" href="#myslider" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myslider" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</header>

<section class="py-5">
  <div class="container-fluid">
	<h4 style="text-align:center;"><i class="fa fa-image"></i> Gallery Album</h4>
		<div class="tz-gallery">
			<div class="row">
			<?php
			$this->load->model('home_model');
			foreach($album->result() as $album){
				$foto = $this->home_model->get_randphoto($album->id_album);
				if ($foto->num_rows() > 0) {
					$foto = $foto->row();
				?>
			    <div class="col-12 col-sm-6 col-md-4 col-lg-3" >
			        <div class="thumbnail" style="background-image: url('<?= base_url().'assets/gallery/'.$foto->link; ?>'); ">
			            <a  href="<?= base_url().'home/photo/album/'.$album->id_album ?>">
			                <h3 align="center"><?= $album->nama_album ?></h3>
			            <div class="caption">
			                <p><?= $album->deskripsi ?></p>
			            </div>
			            </a>
			        </div>
			    </div>
			    <?php } } ?>
			</div>
		</div>
		<?= $paging ?>
	</div>
</div>
