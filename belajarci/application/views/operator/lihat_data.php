<h3> Data Operator</h3>
<?php
echo anchor('con_operator/post', 'Tambah Data') ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Last Login</th>
        <th colspan="2">Operasi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($record as $r) {
        echo
            "<tr>
            <td>$no</td>
            <td>$r->nama_lengkap</td>
            <td>$r->username</td>
            <td>$r->last_login</td>
            <td>" . anchor('con_operator/edit/' . $r->id_operator, 'Edit') . "</td>
            <td>" . anchor('con_operator/delete/' . $r->id_operator, 'Delete') . "</td>
            </tr>";
        $no++;
    }

    ?>
</table>
<?php echo anchor('dashboard', 'Kembali'); ?>
