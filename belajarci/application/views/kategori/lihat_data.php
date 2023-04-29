<h3> Kategori Barang</h3>
<?php
echo anchor('con_kategori/post', 'Tambah Data',array('class'=>'btn btn-primary mb-4')) ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
<tr>
<th class="font-weight-bold">No</th>
<th class="font-weight-bold">Nama Kategori</th>
<th  class="font-weight-bold" width="15%">Operasi</th>

</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    foreach ($record->result() as $r) {
        echo
            "<tr>
            <td width='10' style='text-align:center;'>$no</td>
            <td>$r->nama_kategori</td>
            <td width='20'>" . anchor('con_kategori/edit/' . $r->id_kategori, 'Edit',array('class'=>'btn btn-outline-warning waves-effect waves-light')) 
            . anchor('con_kategori/delete/' . $r->id_kategori, 'Delete',array('class'=>'btn btn-outline-danger ml-2 waves-effect waves-light')) . "</td>
            </tr>";
        $no++;
    }

    ?>
    </tbody>
</table>
<?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>
