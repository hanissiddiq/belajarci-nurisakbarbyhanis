<h3> Data Operator</h3>
<?php
echo anchor('con_operator/post', 'Tambah Data',array('class'=>'btn btn-primary')) ?>
<table class="table table-bordered mt-2">
    <tr>
        <th width=10>No</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Last Login</th>
        <th colspan="2" style="text-align:center;">Operasi</th>
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
            <td style='text-align:center;'>" . anchor('con_operator/edit/' . $r->id_operator, 'Edit',array('class'=>'btn btn-outline-warning waves-effect waves-light')) . "</td>
            <td style='text-align:center;'>" . anchor('con_operator/delete/' . $r->id_operator, 'Delete',array('class'=>'btn btn-outline-danger waves-effect waves-light')) . "</td>
            </tr>";
        $no++;
    }

    ?>
</table>
<?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>
