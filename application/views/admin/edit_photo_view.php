<div class="col-sm-8 mt">
    <div class="showback">
        <h4><i class="fa fa-upload"></i> Upload Foto</h4>
        <br>
        <?php 
        echo form_open_multipart('admin/edit_photo');
        $row = $foto->row();
        ?>
            <input type="hidden" name="id_foto" value="<?= $this->uri->segment(3); ?>">
            <table class="table">
                <tr>
                    <td style="width:100px;">Pilih Foto</td>
                    <td>
                        <a data-fancybox data-caption="<?= $row->nama_foto.' | '.$row->deskripsi ?>" href="<?= base_url().'assets/gallery/'.$row->link ?>">
                            <img src="<?= base_url().'assets/gallery/'.$row->link ?>" width="200px;">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Album</td>
                    <td>
                        <select name="id_album" class="form-control">
                            <option>----------- Pilih Album -----------</option>
                            <?php foreach ($album->result() as $row1) { ?>
                            <?php if($row->id_album == $row1->id_album) { $x="selected"; }else{$x="";} ?>
                            <option value="<?= $row1->id_album; ?>" <?= $x; ?> > <?= $row1->nama_album; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Foto</td>
                    <td>
                        <input type="text" name="nama_foto" class="form-control" value="<?= $row->nama_foto ?>">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>
                        <textarea class="form-control" name="deskripsi"><?= $row->deskripsi ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <button class="btn btn-default btn-sm" onclick="history.back()">
                            <i class="fa fa-chevron-left"></i> Kembali
                        </button>
                    </td>
                </tr>
            </table>
        </form>
        <?= $this->session->flashdata('pesan') ?>
    </div>
</div>