<h3>Laporan Transaksi</h3>

<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
<tr>
<th class="font-weight-bold">No</th>
<th class="font-weight-bold">Tanggal Transaksi</th>
<th class="font-weight-bold">Operator</th>
<th class="font-weight-bold">Total Transaksi</th>
</tr>
</thead>

<tbody>
    <?php
    $no=1;
    foreach ($record->result() as $r){
        echo"
        <tr>
        <td class width=10>$no</td>
        <td>$r->tanggal_transaksi</td>
        <td>$r->nama_lengkap</td>
        <td>Rp.$r->total</td>
        </tr>";
        $no++;
    }
    ?>
</tbody>
</table>
<?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>