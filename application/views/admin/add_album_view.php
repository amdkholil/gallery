<div class="col-sm-8 mt">
    <div class="showback">
        <h4><i class="fa fa-plus-square"></i> Tambah Album</h4>
        <br>
        <form action="<?= base_url(); ?>admin/add_album" method="post">
            <table class="table">
                <tr>
                    <td style="width:100px">Nama Album</td>
                    <td>
                        <input type="text" name="album" class="form-control" placeholder="Nama Album" required>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Album</td>
                    <td>
                        <textarea name="deskripsi" rows="3" cols="80" placeholder="Deskripsi album" class="form-control"></textarea>
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
