<h3> Kategori Barang</h3>
<?php
echo anchor('con_kategori/post', 'Tambah Data') ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th colspan="2">Operasi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($record->result() as $r) {
        echo
            "<tr>
            <td>$no</td>
            <td>$r->nama_kategori</td>
            <td>" . anchor('con_kategori/edit/' . $r->id_kategori, 'Edit') . "</td>
            <td>" . anchor('con_kategori/delete/' . $r->id_kategori, 'Delete') . "</td>
            </tr>";
        $no++;
    }

    ?>
</table>
<?php echo anchor('dashboard', 'Kembali'); ?>
