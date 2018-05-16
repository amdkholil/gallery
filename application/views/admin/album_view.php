<div class="col-sm-12 mt">
    <div class="showback">
        <h4><i class="fa fa-eye"> </i> Manajemen Album</h4>
        <br>
        <?= $this->session->flashdata('pesan'); ?>
        <br>
        <table class="table">
            <tr>
                <th>Nama album</th>
                <th>Deskripsi</th>
                <th>Opsional</th>
            </tr>
            <?php
            foreach($album->result() as $row)
            {
             ?>
             <tr>
                 <td><?= $row->nama_album; ?></td>
                 <td><?= $row->deskripsi; ?></td>
                 <td>
                     <a href="<?= base_url().'admin/edit_album/'.$row->id_album; ?>" class="btn btn-sm btn-info">
                         <i class="fa fa-edit"> </i> Ubah
                     </a>
                     <a href="<?= base_url().'admin/del_album/'.$row->id_album; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                        <i class="fa fa-minus-square"> </i> Hapus
                     </a>
                 </td>
             </tr>
            <?php } ?>
            <tr>
                <td colspan="3" rowspan="2">
                    <a href="<?= base_url().'admin/add_album'; ?>" class="btn btn-primary btn-md">
                        <i class="fa fa-plus-square">&nbsp;</i> Tambah Album baru</a>
                </td>
            </tr>
        </table>

            <?= $paging ?>

    </div>
</div>