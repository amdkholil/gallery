<div class="col-sm-8 mt">
    <div class="showback">
        <h4><i class="fa fa-edit"></i> Ubah Album</h4>
        <br>
        <form action="<?= base_url(); ?>admin/edit_album" method="post">
            <?php $row = $album->row(); ?>
            <input type="hidden" name="id" value="<?= $this->uri->segment(3); ?>">
            <table class="table">
                <tr>
                    <td style="width:100px">Nama Album</td>
                    <td>
                        <input type="text" name="album" class="form-control" placeholder="Nama Album" value="<?= $row->nama_album ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Album</td>
                    <td>
                        <textarea name="deskripsi" rows="3" cols="80" placeholder="Deskripsi album" class="form-control"><?= $row->deskripsi ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        <button type="button" class="btn btn-sm btn-default" onclick="history.back();"><i class="fa fa-chevron-left"></i> Batal</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
