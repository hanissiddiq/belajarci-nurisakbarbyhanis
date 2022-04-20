<h3> Data Barang</h3>
<?php
echo anchor('con_barang/post', 'Tambah Data',array('class'=>'btn btn-primary')) ?>
<table class="table table-bordered mt-2">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga</th>
        <th colspan="2" style="text-align:center;">Operasi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($record as $r) {
        echo
            "<tr>
            <td class width=10>$no</td>
            <td>$r->nama_barang</td>
            <td>$r->nama_kategori</td>
            <td>$r->harga</td>
            <td style='text-align:center;'>" . anchor('con_barang/edit/' . $r->id_barang, 'Edit',array('class'=>'btn btn-outline-warning waves-effect waves-light')) . "</td>
            <td style='text-align:center;'>" . anchor('con_barang/delete/' . $r->id_barang, 'Delete',array('class'=>'btn btn-outline-danger waves-effect waves-light')) . "</td>
            </tr>";
        $no++;
    }

    ?>
</table>
<?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>
