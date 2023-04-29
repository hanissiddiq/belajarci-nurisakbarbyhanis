<h3> Kategori Barang</h3>
<?php
echo anchor('con_kategori/post', 'Tambah Data',array('class'=>'btn btn-primary')) ?>
<table class="table table-bordered mt-2">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th colspan="2" style="text-align:center;">Operasi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($record->result() as $r) {
        echo
            "<tr>
            <td width='10' style='text-align:center;'>$no</td>
            <td>$r->nama_kategori</td>
            <td width='20'>" . anchor('con_kategori/edit/' . $r->id_kategori, 'Edit',array('class'=>'btn btn-outline-warning waves-effect waves-light')) . "</td>
            <td width='20'>" . anchor('con_kategori/delete/' . $r->id_kategori, 'Delete',array('class'=>'btn btn-outline-danger waves-effect waves-light')) . "</td>
            </tr>";
        $no++;
    }

    ?>
</table>
<?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>
