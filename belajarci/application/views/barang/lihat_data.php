<h3> Data Barang</h3>
<?php
echo anchor('con_barang/post', 'Tambah Data') ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga</th>
        <th colspan="2">Operasi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($record as $r) {
        echo
            "<tr>
            <td>$no</td>
            <td>$r->nama_barang</td>
            <td>$r->nama_kategori</td>
            <td>$r->harga</td>
            <td>" . anchor('con_barang/edit/' . $r->id_barang, 'Edit') . "</td>
            <td>" . anchor('con_barang/delete/' . $r->id_barang, 'Delete') . "</td>
            </tr>";
        $no++;
    }

    ?>
</table>
<?php echo anchor('dashboard', 'Kembali'); ?>
