<h3>Laporan Perperiode</h3>
<?php echo form_open('con_laporan/laporan_periode')?>
<table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Tanggal Awal:</td>
            <td><input class="form-control" type="date" id="min" name="tanggal1"></td>
        </tr>
        <tr>
            <td>Tanggal Akhir:</td>
            <td><input class="form-control" type="date" id="max" name="tanggal2"></td>
        </tr>
        <tr>
            <td colspan=2><button class="btn btn-primary" type="submit" name="submit">Cari Data</button></td>
        </tr>
        </tbody>
</table>
</form>

<br>

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
    $total=0;
    foreach ($record->result() as $r){
        echo"
        <tr>
        <td class width=10>$no</td>
        <td>$r->tanggal_transaksi</td>
        <td>$r->nama_lengkap</td>
        <td>Rp.$r->total</td>
        </tr>";
        $no++;
        $total=$total+$r->total;
    }
    ?>
</tbody>

<span class="badge badge-primary">
    <?php echo "Total Rp.". $total;?>
</span>

</table>

<div class="row mt-2">
    <div class="col-4">
    <?php echo anchor('dashboard', 'Kembali',array('class'=>'btn btn-outline-primary waves-effect waves-light')); ?>
    </div>



    <div class="col-8">
        <div class="d-flex justify-content-end">
        <button class="btn btn-primary">
            <?php echo "Total Rp.". $total;?>
        </button>
    </div>
    </div>

</div>


