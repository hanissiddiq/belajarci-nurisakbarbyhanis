<h3> Data Operator</h3>
<?php
echo anchor('con_operator/post', 'Tambah Data',array('class'=>'btn btn-primary mb-4')) ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
<tr>
<th class="font-weight-bold" width=5>No</th>
<th class="font-weight-bold">Nama Lengkap</th>
<th class="font-weight-bold">Username</th>
<th class="font-weight-bold">Last Login</th>
<th  class="font-weight-bold" width="15%">Operasi</th>

</tr>

</thead>
<tbody>
    <?php
    $no = 1;
    foreach ($record as $r) {
        echo
            "<tr>
            <td>$no</td>
            <td>$r->nama_lengkap</td>
            <td>$r->username</td>
            <td>$r->last_login</td>
            <td style='text-align:center;'>" . anchor('con_operator/edit/' . $r->id_operator, 'Edit',array('class'=>'btn btn-outline-warning waves-effect waves-light')) 
            . anchor('con_operator/delete/' . $r->id_operator, 'Delete',array('class'=>'btn ml-2 btn-outline-danger waves-effect waves-light')) . "</td>
            </tr>";
        $no++;
    }

    ?>
</tbody>
</table>
<?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>
