<div class="col-sm-12 mt">
	<h4><i class="fa fa-image"></i> Gallery</h4>
	<hr>
	<?= $this->session->flashdata('pesan') ?>
	<div class="row mt">
		<div class="photos" id="photos">
			<?php foreach ($foto->result() as $row) { ?>
		    	<a data-fancybox href="#foto-<?= $row->id_foto ?>">
		    		<img src="<?= base_url(); ?>assets/gallery/<?= $row->link ?>" alt="">
		    	</a>
			<?php } ?>
		</div>
	</div>
	<?php foreach ($foto->result() as $row) { ?>
	<div class="inline" style="display: none; max-height: 80%" id="foto-<?= $row->id_foto ?>" >
		<a data-fancybox="images" href="<?= base_url(); ?>assets/gallery/<?= $row->link ?>"   data-caption="<?= $row->nama_foto.' | '.$row->deskripsi;?>">
			<img  src="<?= base_url(); ?>assets/gallery/<?= $row->link ?>" alt="gadfgafg">
		</a>
		<div class="act">
		    	<a href="<?= base_url(); ?>admin/edit_photo/<?= $row->id_foto ?>" class="btn btn-md btn-info t1">
		    		<i class="fa fa-edit"> Edit</i></a>
		    	<a href="<?= base_url(); ?>admin/del_photo/<?= $row->id_foto ?>" class="btn btn-md btn-danger t2" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-minus-square"> Hapus</i></a>
	    </div>
	</div>
	<?php } ?>
	<?= $paging ?>
</div>