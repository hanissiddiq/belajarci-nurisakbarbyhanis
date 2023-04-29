<h3> Data Barang</h3>
<?php
echo anchor('con_barang/post', 'Tambah Data',array('class'=>'btn btn-primary mb-4')) ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
<tr>
<th class="font-weight-bold">No</th>
<th class="font-weight-bold">Nama Barang</th>
<th class="font-weight-bold">Kategori Barang</th>
<th class="font-weight-bold">Harga</th>
<th  class="font-weight-bold" width="15%">Operasi</th>

</tr>

</thead>
<tbody>
    <?php
    $no = 1;
    foreach ($record as $r) {
        echo
            "<tr>
            <td class width=10>$no</td>
            <td>$r->nama_barang</td>
            <td>$r->nama_kategori</td>
            <td>$r->harga</td>
            <td style='text-align:center;'>" . anchor('con_barang/edit/' . $r->id_barang, 'Edit',array('class'=>'btn btn-outline-warning waves-effect waves-light'))
            . anchor('con_barang/delete/' . $r->id_barang, 'Delete',array('class'=>'btn btn-outline-danger ml-2 waves-effect waves-light')) . "</td>
            </tr>";
        $no++;
    }

    ?>
</tbody>
</table>
<?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>
