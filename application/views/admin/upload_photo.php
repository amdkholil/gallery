<div class="col-sm-8 mt">
    <div class="showback">
        <h4><i class="fa fa-upload"></i> Upload Foto</h4>
        <br>
        <?= form_open_multipart('admin/upload_photo');?>
        <!-- <form method="post" action="<?=base_url(); ?>admin/upload_photo" enctype="multipart/form-data"> -->
            <table class="table">
                <tr>
                    <td style="width:100px;">Pilih Foto</td>
                    <td>
                        <input type="file" name="filefoto" class="btn btn-sm btn-default"><span style="font-size:12px;"> * | jpg / jpeg / bmp / png / gif | Max 2mb | Max resolution 1288X1288</span>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Album</td>
                    <td>
                        <select name="id_album" class="form-control" required>
                            <option value="0">----------- Pilih Album -----------</option>
                            <?php foreach ($album->result() as $row) { ?>
                            <option value="<?= $row->id_album; ?>"><?= $row->nama_album; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Foto</td>
                    <td>
                        <input type="text" name="nama_foto" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>
                        <textarea class="form-control" name="deskripsi"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-upload"></i> Upload
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